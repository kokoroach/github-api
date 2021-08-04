# PHP Github API 


A simple Object Oriented wrapper for GitHub API written in PHP.

## Official Documentation

This project is based from [Developing RESTful APIs with Lumen (A PHP Micro-framework)](https://auth0.com/blog/developing-restful-apis-with-lumen/).

## Requirements

* PHP = 7.2.5

## Setup

### Install dependecies

```
composer install
```

### Setup Environment

Edit ```.env.example``` especially the DB configurations and rename as ```.env```

### DB Migration

```
php artisan migrate
```

### Serving the Project

```
php -S localhost:8080 -t public
```

