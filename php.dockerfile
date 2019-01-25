FROM php:7.2-fpm
RUN apt-get update && apt-get install -y nano
RUN docker-php-ext-install pdo_mysql bcmath
