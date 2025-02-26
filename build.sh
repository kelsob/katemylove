#!/bin/bash

# Install dependencies
npm install

# Build assets
npm run build

# Ensure build directory exists in public
mkdir -p public/build

# Copy manifest if it exists in a different location
if [ -f "public/build/manifest.json" ]; then
    echo "manifest.json already in the correct location"
else
    echo "Looking for manifest.json in other locations..."
    find . -name "manifest.json" -exec cp {} public/build/manifest.json \;
fi

# List contents of public/build for debugging
echo "Contents of public/build:"
ls -la public/build/ 