#!/bin/bash





# bring up the containers
docker-compose up -d

# run composer install
./composer-install.sh

# generate application key
docker-compose exec php php artisan key:generate


# chown the web files
docker-compose exec php chown -R www-data:www-data /var/www/html

# install npm modules
cd medicoffice-app
npm install
npm run production

# migrate db
docker-compose exec php php artisan migrate
docker-compose exec php php artisan optimize
