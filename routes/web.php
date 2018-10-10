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

Route::get('pricing', 'PricingController@index')->name('pricing');

Route::view('resources', 'resources')->name('resources');

Route::view('news', 'news')->name('news');

Route::view('policy', 'policy')->name('policy');

Route::get('contact', 'ContactUSController@contactUS')->name('contact');
Route::post('contact', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost'])->name('contact');

Route::view('subscriptions', 'subscriptions')->name('subscriptions');

Route::get('payment', 'PaymentController@index')->name('payment');

Route::get('referral', 'ReferralController@index')->name('referral');

Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

Auth::routes(['verify' => true]);

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('home', 'HomeController@index')->name('home');

Route::post('paypal', 'PaymentController@payWithpaypal')->name('paypal');

Route::get('status', 'PaymentController@getPaymentStatus')->name('status');
