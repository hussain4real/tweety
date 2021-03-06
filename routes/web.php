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



Route::middleware('auth')->group( function() {

    Route::resource('/tweets', 'TweetController');
    Route::post('/profiles/{user:name}/follow', 'FollowController@store');
});

Route::get('/profiles/{user:name}', 'ProfileController@show')->name('profile');
Route::get('/profiles/{user:name}/edit', 'ProfileController@edit')->name('edit');
