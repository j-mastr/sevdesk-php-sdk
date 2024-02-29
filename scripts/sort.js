function arrayIndex(needle, haystack) {
  const getLookupValue = (i) => {
    if (typeof i === "object" && i !== null)
      if ("name" in i) return (i = i.name);
      else if ("url" in i) return i.url;
      else return JSON.stringify(i);
    return i;
  };
  const needleValue = getLookupValue(needle);
  return (haystack || []).findIndex(
    (item) => getLookupValue(item) === needleValue
  );
}
function objectIndex(needle, haystack) {
  return Object.keys(haystack || {}).findIndex((key) => key === needle);
}
export function sortAlphabetically(a, aIndex, b, bIndex) {
  return ("" + a).localeCompare("" + b);
}
export function sortToTemplate(a, aIndex, b, bIndex) {
  if (aIndex === -1 && bIndex === -1) {
    return ("" + a).localeCompare("" + b);
  }
  if (aIndex === -1) {
    return 1;
  }
  if (bIndex === -1) {
    return -1;
  }
  return aIndex - bIndex;
}

function sortArray(input, template, sortOrder = sortToTemplate) {
  if (!Array.isArray(input)) {
    return input;
  }
  return input
    .sort((a, b) =>
      sortOrder(a, arrayIndex(a, template), b, arrayIndex(b, template))
    )
    .map((item, i) => sort(item, template?.[i], sortOrder));
}
function sortObject(input, template, sortOrder = sortToTemplate) {
  if (typeof input !== "object" || input === null) {
    return input;
  }

  return Object.entries(input)
    .sort(([keyA], [keyB]) =>
      sortOrder(
        keyA,
        objectIndex(keyA, template),
        keyB,
        objectIndex(keyB, template)
      )
    )
    .reduce(
      (actual, [key, value]) => ({
        ...actual,
        [key]: sort(value, template?.[key], sortOrder),
      }),
      {}
    );
}

export default function sort(input, template, sortOrder = sortToTemplate) {
  if (template === undefined || template === null) {
    return input;
  }

  if (Array.isArray(input)) {
    return sortArray(input, template, sortOrder);
  }
  if (typeof input === "object" && input !== null) {
    return sortObject(input, template, sortOrder);
  }
  return input;
}
