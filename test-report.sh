#!/bin/sh
fail=0
find tests -type f -and -name "*.diff" -or -name "*.out" | sort | while read file; do
    echo "FILE: ${file}"
    cat "$file"
    echo "\n"
    fail=1
done

test $fail -gt 0 && exit 1
