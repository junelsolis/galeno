#!/bin/bash


# Only execute this script on a new deployment


# create environment file
cp galeno-app/.env.example galeno-app/.env

# build the containers
docker-compose build

# run composer install
./composer-install.sh

# create docker secret
# and place db password in env file
mkdir secrets
openssl rand -base64 48 | tee secrets/db_root_password
sed -i -e 's|/||g' 'secrets/db_root_password'
rm secrets/db_root_password-e

DBPASSWORDLINE="DB_PASSWORD=$(cat secrets/db_root_password)"

echo $DBPASSWORDLINE
sed -i -e "s/DB_PASSWORD=/$DBPASSWORDLINE/g" 'galeno-app/.env'
rm galeno-app/.env-e


# bring up containers
docker-compose up -d


# generate application key
docker-compose exec php php artisan key:generate


# chown the web files
docker-compose exec php chown -R www-data:www-data /var/www/html

#install npm modules
cd galeno-app
npm install
npm run production

# migrate db
docker-compose exec php php artisan migrate:refresh --seed
