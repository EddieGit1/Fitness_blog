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


Auth::routes();

Route::get('/home', 'BlogItemController@index')->name('home');
Route::post('/home', 'BlogItemController@store');
Route::get('/create', 'BlogItemController@create')->name('create');
//Route::get('/home/{blog}', 'BlogItemController@show')->name('blog.show');

