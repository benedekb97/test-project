# Test Project

<i>A test project for a job application</i>

### Installation

Make copy of .env file and fill in data for DB connection
> cp .env.example .env

Generate application key
> php artisan key:generate

Install packages
> composer install

Migrate database
> php artisan migrate

Seed database
> php artisan db:seed
