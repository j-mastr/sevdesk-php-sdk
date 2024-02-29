#! /usr/bin/env node

import { program } from "commander";
import yaml from "js-yaml";
import fs from "fs";
import sort, { sortToTemplate, sortAlphabetically } from "./sort.js";

// Taken from https://stackoverflow.com/a/32922084/9969672
function deepEqual(x, y) {
  const ok = Object.keys,
    tx = typeof x,
    ty = typeof y;
  return x && y && tx === "object" && tx === ty
    ? ok(x).length === ok(y).length &&
        ok(x).every((key) => deepEqual(x[key], y[key]))
    : x === y;
}

export default function sortYaml(
  inputFileContents,
  templateFileContents,
  sortOrder = sortToTemplate
) {
  const input = yaml.load(inputFileContents);
  const template = yaml.load(templateFileContents);

  console.error("Sorting input ...");
  const sorted = sort(input, template, sortOrder);

  console.error("Verifying sorted result ...");
  if (deepEqual(input, sorted)) {
    console.error("Input sorted and verified!");
    return yaml.dump(sorted);
  } else {
    throw new Error("Result does not match input!");
  }
}

program
  .argument("<template>", "path to template file")
  .argument("[input]", "path to input file", "stdin")
  .argument("[output]", "path to output file", "stdout")
  .option("-o, --override", "write output to input file")
  .option("-a, --alphabetically", "sort alphabetically")
  .showHelpAfterError()
  .action((templateFile, inputFileArg, outputFileArg, options) => {
    try {
      const inputFile = inputFileArg === "stdin" ? 0 : inputFileArg;
      const outputFile =
        outputFileArg !== "stdout"
          ? outputFileArg
          : options.override && inputFileArg !== "stdin"
          ? inputFileArg
          : 1;
      const sortOrder = options.alphabetically
        ? sortAlphabetically
        : sortToTemplate;

      const inputFileContents = fs.readFileSync(inputFile, "utf8");
      const templateFileContents = fs.readFileSync(templateFile, "utf8");

      fs.writeFileSync(
        outputFile,
        sortYaml(inputFileContents, templateFileContents, sortOrder)
      );
    } catch (e) {
      console.error(e);
    }
  });

program.parse();
