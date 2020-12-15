[![CodeFactor](https://www.codefactor.io/repository/github/mpolr/dev-server/badge/master)](https://www.codefactor.io/repository/github/mpolr/dev-server/overview/master)
# **Local development server**
## **Docker, Traefik, Nginx, MySQL, PHP**


Article about [local development server](https://mpolr.ru/blog/post/31) on my site.

**Setup and install:**

* Create new network in docker:
    - `docker network create web`

* Copy file `.env.example` into `.env`
    - `cp .env.example .env`

* Edit file `.env` as you need
    - If necessary change variable `NGINX_HOST`
    - Set variables `MYSQL_DATABASE`, `MYSQL_ROOT_PASSWORD`, `MYSQL_USER`, `MYSQL_PASSWORD`

* If necessary edit files:
    - nginx config: `./etc/nginx/default.template.conf`
    - php-fpm config: `./etc/php/php.ini`
    - mysql config: `./etc/mysql/my.cnf`

* Run containers:
    - `docker-compose up -d`

* Place you site `index.php` in folder `./web/_default/public`

* Site will be available under URL from variable `NGINX_HOST` from file `.env`

* You can create you projects folders in "./web/", e.g. "./web/my-project/public" will be accessible via URL: `http://my-project.NGINX_HOST` variable from file `.env`

* Composer can be used from PHP-container with this command: `docker-compose exec php composer install -d /var/www/_default`

---

# **Сервер локальной разработки**
## **Docker, Traefik, Nginx, MySQL, PHP**

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

* Размещаем файлы сайта в папке `./web/_default/public`

* Сайт доступен по адресу из переменной `NGINX_HOST` в файле `.env`

* Вы можете создавать папки с вашими проектами в папке "./web/", например содержимое папки "./web/my-project/public" будет доступно по URL: `http://my-project.NGINX_HOST` из переменной в файле `.env`

* Composer доступен для использования в контейнере PHP и может быть вызван командой `docker-compose exec php composer install -d /var/www/html`
