#!/usr/bin/env bash
cd bedrock/web/app/themes/$PROJECT_NAME

if [ -d "node_modules" ]; then
    npm run dev
else
    npm install
    npm run dev
fi