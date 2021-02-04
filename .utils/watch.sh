#!/usr/bin/env bash
cd bedrock/web/app/themes/$PROJECT_NAME

if [ -d "node_modules" ]; then
    npm run watch
else
    npm install
    npm run watch
fi