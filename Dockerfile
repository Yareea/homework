# Use the official PHP image as base
FROM php:7.4-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy your PHP files into the container
COPY ./src/ /var/www/html/