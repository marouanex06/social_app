# Social App

A Laravel-based web application project focused on building a social platform with a structured backend, database layer and modern frontend tooling.

## Overview

This project is built with Laravel and follows the framework's MVC architecture. It includes application logic, database migrations, routes, resources and frontend assets.

## Features

- User-oriented web application structure
- Laravel MVC architecture
- Database migrations and models
- Application routing
- Frontend asset management with Vite
- Testing structure

## Tech Stack

- PHP
- Laravel
- JavaScript
- Vite
- HTML5 / CSS3
- MySQL
- PHPUnit

## Getting Started

```bash
composer install
npm install
```

Configure your environment:

```bash
cp .env.example .env
php artisan key:generate
```

Then configure the database in `.env` and run:

```bash
php artisan migrate
php artisan serve
npm run dev
```

## Project Structure

- `app/` — application logic
- `database/` — migrations and seeders
- `resources/` — frontend resources
- `routes/` — application routes
- `tests/` — automated tests
- `public/` — public assets

## Author

**Marouane El Khayati**  
Full Stack Web Developer

[GitHub](https://github.com/marouanex06)
