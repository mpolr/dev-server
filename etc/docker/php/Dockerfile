ARG PHP_VERSION
FROM php:$PHP_VERSION

# Supported PHP extensions: https://github.com/mlocati/docker-php-extension-installer

RUN apk add --update \
		autoconf \
		g++ \
		libtool \
		make \
		freetype-dev \
        libjpeg-turbo-dev \
        libpng-dev \
        libzip-dev \
        curl

# Install extensions
RUN docker-php-ext-install pdo_mysql mbstring mysqli opcache zip exif pcntl
RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
RUN docker-php-ext-install gd

RUN rm -rf /tmp/* /var/cache/apk/*