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
    return view('index');
});

Route::view('/index', 'index')->name('index');

Route::view('/pricing', 'pricing')->name('pricing');

Route::view('/resources', 'resources')->name('resources');

Route::view('/news', 'news')->name('news');

Route::view('/contact', 'contact')->name('contact');

Route::view('/signIn', 'signIn')->name('signIn');

Route::view('/signUp', 'signUp')->name('signUp');

Auth::routes(['verify' => true]);


Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');


Route::view('/home', 'index')->name('index');


// Authentication Routes...
//Route::get('login', 'Auth\AuthController@showLoginForm');
//Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\LoginController@logout');

// Registration Routes...
//Route::get('register', 'Auth\AuthController@showRegistrationForm');
Route::post('register', 'Auth\RegisterController@register')->name('register');

// Password Reset Routes...
//Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
//Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
//Route::post('password/reset', 'Auth\PasswordController@reset');

