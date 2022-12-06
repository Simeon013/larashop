<?php

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

/* Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/', 'App\Http\Controllers\ClientController@home');
Route::get('/shop', 'App\Http\Controllers\ClientController@shop');
Route::get('/cart', 'App\Http\Controllers\ClientController@cart');
Route::get('/checkout', 'App\Http\Controllers\ClientController@checkout');
Route::get('/client_login', 'App\Http\Controllers\ClientController@client_login');
Route::get('/signup', 'App\Http\Controllers\ClientController@signup');

Route::get('/dashboard', 'App\Http\Controllers\AdminController@dashboard');
Route::get('/commandes' , 'App\Http\Controllers\AdminController@commandes');
Route::get('/datatables', 'App\Http\Controllers\AdminController@datatables');
Route::get('/validation', 'App\Http\Controllers\AdminController@validation');

Route::get('/editcategory/{id}' , 'App\Http\Controllers\CategoryController@editcategory');
Route::post('/updatecategory' , 'App\Http\Controllers\CategoryController@updatecategory');
Route::get('/addcategory' , 'App\Http\Controllers\CategoryController@addcategory');
Route::post('/savecategory' , 'App\Http\Controllers\CategoryController@savecategory');
Route::get('/categories' , 'App\Http\Controllers\CategoryController@categories');
Route::get('/deletecategory/{id}' , 'App\Http\Controllers\CategoryController@deletecategory');

Route::get('/addproduct' , 'App\Http\Controllers\ProductController@addproduct');
Route::post('/saveproduct' , 'App\Http\Controllers\ProductController@saveproduct');
Route::get('/produits' , 'App\Http\Controllers\ProductController@produits');


Route::get('/addslider' , 'App\Http\Controllers\SliderController@addslider');
Route::post('/saveslider' , 'App\Http\Controllers\SliderController@saveslider');
Route::get('/sliders' , 'App\Http\Controllers\SliderController@sliders');


?>
