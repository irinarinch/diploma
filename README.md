## Basic installation steps 
Before you start the installation process you need to have **installed composer**

1. Clone the project
2. Navigate to the project root directory using command line
3. Run `composer install`
4. Copy `.env.example` into `.env` file: `cp .env.example .env`
5. Create file `database/database.sqlite`
6. Run `php artisan key:generate`
7. Run `php artisan migrate`
8. Run `php artisan db:seed`

### Installing locally for development
Run `php artisan serve` which will start the server at http://localhost:8000 <br>