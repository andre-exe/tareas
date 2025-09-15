Requisitos
- PHP 8+
- Composer
- MySQL
- Laravel 12
- Postman

Instalar dependencias
- composer install
- cp .env.example .env
- php artisan key:generate
- composer require laravel/sanctum
- php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
- php artisan migrate


Configurar ".env"
Ajustar a su configuracion personal:
DB_CONNECTION=mysql, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD.

Ejecutar migraciones