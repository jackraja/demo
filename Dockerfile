FROM php:7.4-apache

#Install git and MySQL extensions for PHP

RUN apt-get update && apt-get install -y git
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
RUN apt-get install -y vim
RUN useradd -ms /bin/bash admn
COPY --chown=admn:admn . /var/www/html/caisms
WORKDIR /var/www/html/caisms
USER admn
EXPOSE 80/tcp








