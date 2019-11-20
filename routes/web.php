<?php

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
    return view('welcome');
});


Route::get('/city', 'Front\CitiesController@index')->name('city');
Route::get('/cities', 'Front\CitiesController@getCity');
Route::get('/{city}/zones', 'Front\CitiesController@zone')->name('city.zones');
Route::get('/{city}', 'Front\CitiesController@show')->name('city.show');
Route::get('/{zone}/pharmacy', 'Front\CitiesController@pharmacy');

//Route::get('/{pharmacy}/{product}', 'Front\ProductsController@index');

Route::get('/{pharmacy}/products', 'Front\PharmaciesController@getStock');





