# Purpose

To check how to use phpunit in laravel

# Version

- php: 5.6.28

# Procedure

```
cd LaravelTestTutorial
composer install
cp .env.example .env
php artisan key:generate
```

If you want to conduct tests through composer

```
composer phpunit
```

If you want to see web page with browser on localhost:8080

```
php artisan serve
```