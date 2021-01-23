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

Route::get('/home', 'WorkoutItemController@index')->name('home');
Route::post('/home', 'WorkoutItemController@store');

Route::get('/create', 'WorkoutItemController@create')->name('create');
Route::get('{id}', 'WorkoutItemController@show')->name('show');

Route::get('{id}/edit', 'WorkoutItemController@edit')->name('edit');
Route::patch('{id}', 'WorkoutItemController@update')->name('update');

Route::get('{id}/delete', 'WorkoutItemController@destroy')->name('destroy');

//Route::view('/edit', 'edit');



