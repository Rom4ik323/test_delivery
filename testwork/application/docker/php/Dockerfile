FROM php:8.1-fpm

RUN apt-get update && apt-get upgrade -yq && \
    apt-get install -yq apt-utils libmcrypt-dev libxslt-dev libxml2-dev libicu-dev \
    zlib1g-dev libssl-dev git && \
    apt update && apt install -yq libpq-dev libpng-dev libjpeg62-turbo-dev libyaml-dev && \
    apt-get install -y libzip-dev zip && \
    docker-php-ext-install bcmath gettext opcache pdo pdo_mysql xsl intl exif pcntl zip gd && \
    docker-php-ext-configure opcache --enable-opcache && \
    docker-php-ext-configure gd --enable-gd --with-jpeg && \
    pecl install xmlrpc-1.0.0RC3 && \
    pecl install redis && \
    pecl install yaml && \
    docker-php-ext-enable exif pcntl redis xmlrpc yaml && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install pgsql pdo pdo_pgsql

RUN printf "post_max_size=20M\nupload_max_filesize=20M\nmemory_limit=1024M" > /usr/local/etc/php/conf.d/file-uploads.ini

RUN composer global require tightenco/tlint
ENV PATH "$PATH:/root/.composer/vendor/bin"

WORKDIR /application

CMD php-fpm -R

EXPOSE 9000