# **Сервер локальной разработки**
## **Docker, Traefik, Nginx, MySQL, PHP**

[![Build Status](https://travis-ci.com/mPolr/dev-server.svg?branch=master)](https://travis-ci.com/mPolr/dev-server)

Статья о [сервере для разработки](https://mpolr.ru/blog/post/31) на моем сайте где вы сможете задать вопросы и предложить новый функционал.

**Настройка и установка:**

* Создаем новую сеть в docker'е:
    - `docker network create web`

* Копируем файл `.env.example` в файл `.env`
    - `cp .env.example .env`

* Редактируем файл `.env` под свои нужды
    - При необходимости меняем переменную `NGINX_HOST`
    - Устанавливаем значения переменных `MYSQL_DATABASE`, `MYSQL_ROOT_PASSWORD`, `MYSQL_USER`, `MYSQL_PASSWORD`

* При необходимости редактируем файлы:
    - Конфигурация nginx: `./etc/nginx/default.template.conf`
    - Конфигурация php-fpm: `./etc/php/php.ini`
    - Конфигурация mysql: `./etc/mysql/my.cnf`

* Поднимаем контейнеры:
    - `docker-compose up -d`

* Размещаем файлы сайта в папке `./web/html/public`

* Сайт доступен по адресу из переменной `NGINX_HOST` в файле `.env`

* Composer доступен для использования в контейнере PHP и может быть вызван командой `docker-compose exec php composer install -d /var/www/html`