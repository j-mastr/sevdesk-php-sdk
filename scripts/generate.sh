#!/bin/sh

openapi-generator generate\
    -i sevdesk-api/openapi.yaml\
    -g php\
    -o ./\
    --package-name itsmind/sevdesk-php-sdk\
    --additional-properties=disallowAdditionalPropertiesIfNotPresent=false,invokerPackage=Itsmind\\Sevdesk,packageName=itsmind/sevdesk-php-sdk\
    --git-user-id j-mastr\
    --git-repo-id sevdesk-php-sdk
