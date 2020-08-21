LARAVEL 
SOLID

https://laracasts.com/series/solid-principles-in-php/episodes/1
https://www.toptal.com/laravel/restful-laravel-api-tutorial

php artisan view:clear
php artisan serve
php artisan make:model Client --migration
php artisan make:model Client -m 
php artisan make:controller OrdersController --resource

// migrate specific table
php artisan migrate --path=database/migrations/2020_08_18_135140_create_companies_table.php
php artisan migrate --path=database/migrations/2020_08_18_091843_create_orders_table.php
php artisan migrate --path=database/migrations/2020_08_18_100942_create_suppliers_table.php
php artisan migrate --path=database/migrations/2020_08_19_121644_create_articles_table.php

php artisan migrate --path=database/migrations/2020_08_19_123711_create_users_table.php
php artisan migrate --path=database/migrations/2020_08_19_123745_create_password_resets_table.php


// to run database/seeds/ArticlesTableSeeder.php
php artisan db:seed --class=ArticlesTableSeeder
php artisan db:seed --class=UsersTableSeeder 	

// creat user table and password reset
php artisan make:migration create_users_table
php artisan make:migration create_password_resets_table

new ReflectionClass

https://youtu.be/rtmFCcjEgEw



app/
	Acme/
	Model.php
	Http/	
		Controllers/
			Controller.php
	Article.php 				-- Model		
Repositories/
	Repository.php
	RepositoryInterface.php
database/
	migrations/
		2020_08_19_121644_create_articles_table.php for creating tables		
	seeder/
		ArticleTableSeeder.php	
routes/
	web.php
resource/
	views/


env.php


// Custom Classes in Laravel 5, the Easy Way
	- like creatinmg helper class
	<?php // Code within app\Helpers\Helper.php

	step 1
	namespace App\Helpers;

	class Helper
	{
	    public static function shout(string $string)
	    {
	        return strtoupper($string);
	    }
	}

	Step 2: Create an alias:

	<?php // Code within config/app.php

	    'aliases' => [
	     ...
	        'Helper' => App\Helpers\Helper::class,
	     ...

	Step 3: Run composer dump-autoload in the project root
	Step 4: Use it in your Blade template:
		- 
		<!-- Code within resources/views/template.blade.php -->

		{!! Helper::shout('this is how to use autoloading correctly!!') !!}

	Extra Credit: Use this class anywhere in your Laravel app:
		-
		<?php // Code within app/Http/Controllers/SomeController.php

		namespace App\Http\Controllers;

		use Helper;

		class SomeController extends Controller
		{

		    public function __construct()
		    {
		        Helper::shout('now i\'m using my helper class in a controller!!');
		    }
		    ...
