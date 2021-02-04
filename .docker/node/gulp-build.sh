#!/bin/bash

cd /var/www/html/web/app/themes/$PROJECT_NAME
npm install -g browser-sync
browser-sync start --proxy "web" --files "**/*.css" "**/*.js" "**/*.php" --reload-debounce "2000" --no-open