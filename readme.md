[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

---------------------------------
Laravel Demo
---------------------------------

## Installing

### Install the application

```
composer install

```

Migrate the database with an admin user (using default database):
```
php artisan migrate --seed
```

E-mail is using queue so we need to start it:
```
php artisan queue:work
```

To start the application:
```
php artisan serve
```