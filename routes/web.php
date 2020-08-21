<?php
use App\Acme\Reporting\SalesReporter;
use App\Acme\Repositories\SalesRepository;
use App\Acme\Reporting\SalesOutputInterface;
use App\Acme\Reporting\HtmlOutput;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

	$report = new SalesReporter(new SalesRepository());
	// dd($report);

	$begin = Carbon\Carbon::now()->subDays(10);
	$end = Carbon\Carbon::now();
	return $report->between($begin, $end, new HtmlOutput);   		
});


Route::get('/order', 'OrderController@index');
// Route::get('/orderCreate', 'OrdersController@create');
// Route::get('/orderStore', 'OrdersController@store');
Route::get('/show/{company_id}', 'OrderController@show');
// Route::get('/orderEdit/{id}', 'OrdersController@edit');
// Route::get('/orderUpdate/{id}', 'OrdersController@update');
// Route::get('/orderDestroy/{id}', 'OrdersController@destroy');

Route::get('/client', 'ClientController@index');