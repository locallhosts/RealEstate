<?php

use App\Http\Controllers\ProductController;
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
    return view('index');
});



Route::get('/abouts', 'PagesController@abouts')->name('about');


Route::get('/agents', 'PagesController@agent')->name('agent');

Route::get('/contact', 'PagesController@contact')->name('contact');


Route::get('/buysalerents', 'PagesController@buysalerent')->name('buysalerent');

Route::get('/properties', 'PagesController@property')->name('properties');


// product route lists
//index route
Route::get('/products', 'ProductController@index')->name('product.list');


//show route
Route::get('/products/detail/{id}', 'ProductController@show')->name('product.show');

// add route or create
Route::get('/products/create/', 'ProductController@create')->name('create');
//Route::get('/products/create', [ProductController::class,  'create']);


// save route
Route::post('/products/save', 'ProductController@store')->name('product.save');

// edit route
Route::get('/products/edit/{id}', 'ProductController@edit')->name('product.edit');

//update route
Route::post('/products/update', 'ProductController@update')->name('product.update');

// delete route
Route::get('/products/delete{id}', 'ProductController@delete')->name('product.delete');

Route::resource('Product','ProductController');
