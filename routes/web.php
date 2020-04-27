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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/eng', function () {
    return view('eng.welcome');
});
Route::post('/send', 'MainController@mail');

Route::get('/product/{book}', function () {
    return view('product.show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
