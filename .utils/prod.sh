#!/usr/bin/env bash
cd bedrock/web/app/themes/$PROJECT_NAME

if [ -d "node_modules" ]; then
    npm run prod
else
    npm install
    npm run prod
fi