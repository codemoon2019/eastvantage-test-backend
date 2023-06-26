To set up the backend, please follow these steps:

Clone the repository:

git clone <https://github.com/codemoon2019/eastvantage-test-backend.git>
Navigate to the backend directory:

cd backend

Install the dependencies:
composer install

Create a new .env file:
cp .env.example .env

Generate an application key:
php artisan key:generate

Update the .env file with your database credentials and other settings.

Run the database migrations:
php artisan migrate

Start the Laravel development server:
php artisan serve

The backend API will be available at http://localhost:8000.
