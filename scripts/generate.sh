#!/bin/sh

npx @openapitools/openapi-generator-cli generate\
          -i sevdesk-api/openapi.yaml\
          -g php\
          -o ./\
          --package-name itsmind/sevdesk-php-sdk\
          --config config.yaml\
          --git-user-id j-mastr\
          --git-repo-id sevdesk-php-sdk

git apply --unidiff-zero --ignore-space-change --whitespace=nowarn patches/*.patch
