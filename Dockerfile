# Use an official PHP image with Apache
FROM php:8.0-apache

# Install MySQLi extension for PHP
RUN docker-php-ext-install mysqli

# Copy the application files into the web server directory
COPY . /var/www/html/

# Expose port 80
EXPOSE 80