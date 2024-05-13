#! /bin/bash

"$( git diff --exit-code > /dev/null 2>&1)"
status=$?

if [ $status -eq 0 ]; then
    echo "No changes to the output on this run"
    exit 0
fi

echo "Changes detected"

git add .
git commit -m "feat: update generated code from OpenAPI"
git push
