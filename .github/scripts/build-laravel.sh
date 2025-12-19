#!/bin/bash
set -e

echo "Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --ignore-platform-reqs

echo "Copying .env.production to .env..."
cp .env.production .env

echo "Building frontend assets..."
npm install
npm run prod

echo "Laravel is ready for deployment!"
