FROM php:7.4-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

# Set working directory
WORKDIR /var/www/html

# Copy existing application directory contents
COPY ./php/src/ /var/www/html/
