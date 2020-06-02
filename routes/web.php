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

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/tweet','TweetController@store');
Route::get('/show',['as'=>'tweetShow','uses'=>'homeController@index']);
Route::post('/profile/{user:name}/follow', 'FollowController@store');
Route::get('/profile/{user:name}', 'FollowController@getProfile');

