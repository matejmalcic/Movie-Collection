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
    Route::post('/movie', 'MovieController@add');
    Route::delete('/movie/{movie}', 'MovieController@destroy');
    Route::post('/genre', 'MovieController@addGenre');

    Route::get('/movies/new', 'MovieController@new');
    Route::get('/movies/userlist/{user_id}', 'MovieController@userlist');
    Route::get('/genre', 'MovieController@genre');
});

Route::get('/home', 'HomeController@index')->name('home');
