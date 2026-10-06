# Social App

Application web basée sur Laravel, développée autour d’une plateforme sociale avec une architecture backend structurée, une base de données et des outils frontend modernes.

## Présentation

Ce projet est développé avec Laravel et suit l’architecture MVC du framework. Il comprend la logique applicative, les migrations de base de données, les routes, les ressources et les outils nécessaires à la gestion des assets frontend.

## Fonctionnalités

- Structure d’application web orientée utilisateurs
- Architecture MVC avec Laravel
- Migrations et modèles de données
- Gestion des routes
- Gestion des assets frontend avec Vite
- Structure dédiée aux tests

## Technologies utilisées

- PHP
- Laravel
- JavaScript
- Vite
- HTML5 / CSS3
- MySQL
- PHPUnit

## Installation

```bash
composer install
npm install
```

Configurer l’environnement :

```bash
cp .env.example .env
php artisan key:generate
```

Configurer ensuite la base de données dans le fichier `.env`, puis lancer :

```bash
php artisan migrate
php artisan serve
npm run dev
```

## Structure du projet

- `app/` — logique applicative
- `database/` — migrations et seeders
- `resources/` — ressources frontend
- `routes/` — routes de l’application
- `tests/` — tests automatisés
- `public/` — ressources publiques

## Auteur

**Marouane El Khayati**  
Développeur Web Full Stack

[GitHub](https://github.com/marouanex06)
