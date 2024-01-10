<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

CONSEGNA:


Oggi create un nuovo progetto Laravel 9 per gestire un archivio di fumetti.

MILESTONE 1

Tramite gli appositi comandi artisan create un model con relativa migration e seeder e resource controller.
Editate la resource route

MILESTONE 2

Iniziate a definire le prime operazioni CRUD con le relative view dove necessarie:
- index()
- show()
- create()
- store() (solo dump dei dati)

BONUS:
Procedere con il salvataggio dei dati sul db

## Installazione Laravel

```bash
cd your parent_folder_path

composer create-project --prefer-dist laravel/laravel:^9.2 your_project_name_here

cd your_project_name_here

code . -r

php artisan serve

ctrl + c

```
## Configurazione Laravel
```bash
composer require pacificdev/laravel_9_preset

php artisan preset:ui bootstrap

npm install

npm install --save @fortawesome/fontawesome-free

#in vite config aggiungo agli alias
'~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),

#copio la cartella dei webfont e se voglio la rinomino

#installo dbal per migration e seeder
composer require doctrine/dbal


#comandi git

git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin your_git_url 
git push -u origin main


```
## Clono progetto da github 

```bash
# copio file .env.example e lo rinomino in .env

composer install

php artisan key:generate

npm install

#cancello il composer.lock e nel composer.json sotto la voce php inserisco

"doctrine/dbal": "^3.3",

# inserisco i dati per il collegamento al db in env

#creo migration
php artisan make:migration create_nome_tabella_table

#popolare il db
php artisan make:seeder UsersTableSeeder

# preparo le rotte file web.php es. 
Route::get('/books', [BookController::class,'index'])->name('books.index');

# creo controller
php artisan make:controller NomeController
php artisan make:migration update_users_table --table=users
php artisan make:migration add_phone_number_to_users_table

#creo model
php artisan make:model Nome 

#oppure una scorciatoia per creare Model,migrations,seeder e controller

php artisan make:model Nome -rcms

# creo le views relative

#creo il seeder

php artisan make:seeder UsersTableSeeder

#mando il seeder

php artisan db:seed --class=UsersSeeder

```

## Comandi utili

```bash

#vedere tutte le rotte create

php artisan route:list --except-vendor


#rileggere tutte le classi

composer dump-autoload

#creo form rewuest per validazione

php artisan make:request StoreNomeModelRequest

```