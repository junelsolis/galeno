#!/bin/bash

# create environment file
cd app
cp .env.example .env
cd ..

# create secrets files
mkdir secrets
cd secrets

openssl rand -base64 35 | tee db_root_password
cd ..

# bring up the containers
docker-compose up -d

# run composer install
./composer-install.sh

# generate application key
docker-compose exec php php artisan key:generate

# chown the web files
docker-compose exec php chown -R www-data:www-data /var/www/html
