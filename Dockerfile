# Imagen base: PHP + Apache
FROM php:8.2-apache

# Instalar Git y extensiones PHP necesarias
RUN apt-get update && apt-get install -y git && \
    docker-php-ext-install mysqli pdo pdo_mysql && \
    a2enmod rewrite

# Directorio de trabajo
WORKDIR /var/www/html
