#!/bin/bash

# Clean up any existing build artifacts
rm -rf public/build
mkdir -p public/build

# Install dependencies
npm install

# Build assets
npm run build

# Debug information
echo "=== Debug Information ==="
echo "Current directory:"
pwd
echo
echo "Contents of public directory:"
ls -la public/
echo
echo "Contents of public/build directory:"
ls -la public/build/
echo
echo "Looking for manifest.json files:"
find . -name "manifest.json"
echo
echo "Contents of manifest.json (if exists):"
if [ -f "public/build/manifest.json" ]; then
    cat public/build/manifest.json
else
    echo "manifest.json not found in public/build/"
fi 