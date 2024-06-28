# Użyj oficjalnie zalecanego obrazu PHP w wersji 8.1
FROM php:8.1-apache

# Instalacja zależności
RUN apt-get update -y && apt-get install -y \
    nodejs \
    npm \
    curl \
    zip \
    unzip \
    && docker-php-ext-install pdo pdo_mysql

# Ustawienie katalogu roboczego
WORKDIR /var/www

# Kopiowanie plików źródłowych do kontenera
COPY . .

COPY ./docker/vhost.conf /etc/apache2/sites-available/000-default.conf

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN npm install -g n
RUN n 16.20.2
RUN npm install
RUN composer install --no-interaction --no-progress

RUN cd public && ln -sf ../storage/app/public/ storage

RUN a2enmod rewrite

ENV PORT=80

COPY ./docker/entrypoint.sh /usr/local/bin/entrypoint.sh

RUN chmod +x /usr/local/bin/entrypoint.sh

ENTRYPOINT ["entrypoint.sh"]
