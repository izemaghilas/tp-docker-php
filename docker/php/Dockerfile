FROM php:8.1.2-apache

RUN apt-get update

# libpq library
# for pdo_pgsql driver 
RUN apt-get install -y libpq-dev

# postgresql driver for php
RUN docker-php-ext-install pdo_pgsql
