FROM php:7.4-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    netcat \
    vim

#RUN apt-get install -y libz-dev libmemcached-dev && \
#    pecl install memcached && \
#    docker-php-ext-enable memcached

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

## Install PHP extensions
ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/

RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions amqp apcu bcmath exif gd grpc imap intl ldap mcrypt opcache pgsql pdo_pgsql redis sockets uuid xdebug yaml zip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u 1000 -d /home/6thmen 6thmen
RUN mkdir -p /home/6thmen/.composer && \
    chown -R 6thmen:6thmen /home/6thmen

# Set working directory
WORKDIR /var/www

USER 6thmen
