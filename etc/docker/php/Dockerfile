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
	&& docker-php-ext-install mbstring \
	&& docker-php-ext-install mysqli \
	&& docker-php-ext-install pdo_mysql \
	&& docker-php-ext-install opcache \
	&& docker-php-ext-configure gd \
            --with-freetype-dir=/usr \
            --with-png-dir=/usr \
            --with-jpeg-dir=/usr \
	&& docker-php-ext-install gd \
	&& docker-php-ext-install zip \
    && rm -rf /tmp/* /var/cache/apk/*