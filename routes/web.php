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

Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/movies', 'MovieController@index');
    Route::post('/movies', 'MovieController@store');
    Route::delete('/movies/{movie_id}', 'MovieController@destroy');

    Route::get('/movies/edit/{movie_id}', 'MovieController@edit');
    Route::get('/movies/{movie_id}', 'MovieController@update');
  
});

Route::get('/home', 'HomeController@index')->name('home');
