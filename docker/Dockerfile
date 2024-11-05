# docker/Dockerfile

# Use PHP 8.2 FPM for ARM architecture (Apple Silicon)
FROM arm64v8/php:8.2-fpm

# The rest of your Dockerfile remains the same
WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    zip \
    unzip

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN mkdir -p /var/www/storage /var/www/bootstrap/cache \
    && chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage /var/www/bootstrap/cache

COPY . /var/www

EXPOSE 9000

CMD ["php-fpm"]
