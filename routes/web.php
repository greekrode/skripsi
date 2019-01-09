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



Route::get('/search', 'UserController@search')->name('user.search');

Auth::routes(['verify' => true]);

Route::post('/login','Auth\LoginController@loginUser')->name('login');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', function() {
    return view('pages.welcome');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/account/personal/{id}', 'HomeController@editPersonal')->name('account.personal.edit');
    Route::post('/account/personal/{id}', 'HomeController@updatePersonal')->name('account.personal.update');
});

