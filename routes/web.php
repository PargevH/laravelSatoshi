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

Route::view('index', 'index')->name('index');

Route::view('pricing', 'pricing')->name('pricing');

Route::view('resources', 'resources')->name('resources');

Route::view('news', 'news')->name('news');

Route::view('policy', 'policy')->name('policy');

Route::view('contact', 'contact')->name('contact');

Route::view('payment', 'payment')->name('payment');

Route::view('referral', 'referral')->name('referral');

Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

Auth::routes(['verify' => true]);

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('home', 'HomeController@index')->name('home');

