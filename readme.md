[![Build Status](https://travis-ci.org/solt9029/LaravelTestTutorial.svg?branch=master)](https://travis-ci.org/solt9029/LaravelTestTutorial)

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

# References

- https://gist.github.com/gilbitron/5cac0ac5fa07e9b354ac (This page was really helpful for me to understand how to use travis ci in laravel. Thank you.)