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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'HotelController@index');
Route::get('/create', 'HotelController@create');
Route::post('/store', 'HotelController@store');
Route::get('/edit/{id}', 'HotelController@edit');
Route::put('update/{id}', 'HotelController@update');
Route::get('/show/{id}', 'HotelController@show');
Route::delete('destroy/{id}', 'HotelController@destroy');

Route::resource('/book', 'BookController');
Auth::routes([
    'register'=> false
]);

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
