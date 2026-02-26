FROM php:8.3-cli

RUN apt-get update && apt-get install -y curl make zip unzip git

WORKDIR /srv

COPY . .

RUN curl -sS https://getcomposer.org/installer | php && php composer.phar install

CMD ./vendor/bin/phpunit --testdox tests

