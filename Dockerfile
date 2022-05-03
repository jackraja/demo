FROM php:7.3-apache

#Install git and MySQL extensions for PHP

RUN apt-get update && apt-get install -y git
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
RUN apt-get install -y vim
RUN apt-get install iputils-ping
COPY ./caisms /var/www/html/
EXPOSE 80/tcp


