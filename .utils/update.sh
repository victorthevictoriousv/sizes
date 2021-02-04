#!/usr/bin/env bash

git clone git@github.com:Wilsoncreative/wlsn-docker.git ./temp

rm -rf ./.utils/
rm -rf ./.docker/
cp -r ./temp/.utils/ ./.utils/
cp -r ./temp/.docker/ ./.docker/
cp -r ./temp/.travis.yml ./.travis.yml
cp -r ./temp/docker-compose.yml ./docker-compose.yml
cp -r ./temp/logos.png ./logos.png
sed "8s/.*/export PROJECT_NAME=$PROJECT_NAME/" ./temp/Makefile > ./Makefile
cp -r ./temp/README.md ./README.md
echo -----------------------------------------------------------------------
cat ./temp/.gitignore
echo -----------------------------------------------------------------------
rm -rf ./temp/
