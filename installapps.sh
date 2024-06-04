#!/bin/bash
apt update -y
apt upgrade -y
apt install npm -y
npm install -g yarn 
npm install -g @angular/cli@17
yarn
composer install
yarn run build:dev \
n