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

Route::view('contact', 'contact')->name('contact');

Route::view('login', 'login')->name('login');



Route::view('register', 'register')->name('register');

Auth::routes(['verify' => true]);

//Route::post('/login', 'Auth\LoginController@login')->name('login');


Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');

Route::get('/redirectf', 'SocialAuthFacebookController@redirect');
Route::get('/callbackf', 'SocialAuthFacebookController@callback');

Route::get('home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


//Route::post('/login', 'Auth\LoginController@login')->name('login');

//Route::get('/clear-cache', function() {
//    $exitCode = Artisan::call('cache:clear');
    // return what you want
//});


