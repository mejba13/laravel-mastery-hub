# Base image with PHP and FPM
FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql gd exif pcntl bcmath

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy the existing application directory contents
COPY . /var/www

# Copy the existing application directory permissions
COPY --chown=www-data:www-data . /var/www

# Change the current user to www
USER www-data

# Expose port 9000 and start PHP-FPM server
EXPOSE 9000
CMD ["php-fpm"]
