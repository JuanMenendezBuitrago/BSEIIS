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

Auth::routes();

// pages
Route::get('/terms-of-service', 'PagesController@termsOfService')->name('tos');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


// Social login routes ...
Route::group(
    ['prefix' => 'oauth', 'as' => 'oauth.', 'middleware' => ['guest', 'throttle']], function () {
    Route::get('/{provider}', 'Auth\SocialiteController@redirectToProvider')->name('login')->where('provider', 'facebook|twitter|github');
    Route::get('/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback')->where('provider', 'facebook|twitter|github');
});