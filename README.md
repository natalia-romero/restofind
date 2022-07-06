## RestoFind
This project uses Laravel and PostgreSQL
## Install RestoFind


```
git clone https://github.com/natalia-romero/restofind.git
```
```
cd restofind
php artisan key:generate
```
Create .env file (edit)
```
mv .env.example .env
```
Install necessary packages
```
composer install
nmp install
npm run dev
```
To start the serve, run
```
php artisan serve
```

## Database
Create a database in postgres and run the migrations
```
php artisan migrate
```
To seed the database tables, run this commands
- ### Users
```
php artisan db:seed --class=UsersTableSeeder
```
- ### Restaurants
```
php artisan db:seed --class=RestaurantSeeder
```
- ### Foods
```
php artisan db:seed --class=FoodsSeeder
```
- ### Establishments
```
php artisan db:seed --class=EstablishmentSeeder
```
- ### Cities
```
php artisan db:seed --class=EvaluationSeeder
```
- ### Environments
```
php artisan db:seed --class=EnvironmentSeeder
```
- ### Prices
```
php artisan db:seed --class=PriceSeeder
```
- ### Evaluations
```
php artisan db:seed --class=EvaluationSeeder
```
