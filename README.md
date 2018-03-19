# Boilerplate PHP Lite Framework

Lite PHP framework for build web application using best PHP league practice.

### Docker tools

* Docker version 1
* Docker compose

### PHP Dependency

* `league/container` - Dependency injection container. This package agreed with PSR-1, PSR-2, PSR-4.
* `league/route` - Fast routing/dispatche. This package agreed with PSR-1, PSR-2, PSR-4, PSR-7 and PSR-11.
* `vlucas/phpdotenv` - Loads enviroment variables from `.env` to `getenv()`.
* `zendframework/zend-diactoros` - PHP package containing implementations of the accepted PSR-7 HTTP message interfaces, as well a "server" implementation similar to node `http.Server`.
* `twig/twig` - Flexible, fast, and secure template language for PHP.
* `symfony/var-dumper` - Provides a better `dump()` function that you can use instead of `var_dump`.
* `doctrine/orm` - Object relational mapper.
* `vlucas/valitron` - Simple, elegant, stand-alone validation library.

### Front-end
* SCSS
* ES6

### Is require to used `.env` file, you can follow this "Example" below:

```
APP_NAME=NameApp
APP_DEBUG=true

CACHE_VIEWS=true

DB_TYPE=mysql
DB_DRIVER=pdo_mysql
DB_HOST=mysql
# DB_HOST=127.0.0.1
DB_DATABASE=name_db
DB_USERNAME=user
DB_PASSWORD=password
DB_PORT=3306
```