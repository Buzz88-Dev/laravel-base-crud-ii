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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');


// Route::get('/houses', 'HousesController@index')->name('houses.index');
// Route::post('/houses', 'HousesController@store')->name('houses.store');



// Route resource crea 7 risorse (Route) per noi
// sostituisce le righe 21 e 22
// gli passiamo il nome della risorsa (la base)
// e il nome del Controller perche i metodi li conosce gia
Route::resource('/houses','HousesController');
