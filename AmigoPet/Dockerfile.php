FROM php:8.2-apache

COPY ./codigos /var/www/html

RUN docker-php-ext-install mysqli

EXPOSE 80