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

    /**
     * Edit account personal information
     */
    Route::get('/account/personal/{id}', 'HomeController@editPersonal')->name('account.personal.edit');
    Route::post('/account/personal/{id}', 'HomeController@updatePersonal')->name('account.personal.update');

    /**
     * Edit account password
     */
    Route::get('/account/password/{id}', 'HomeController@editPassword')->name('account.password.edit');
    Route::post('/account/password/{id}', 'HomeController@updatePassword')->name('account.password.update');

    /**
     * Upload photo
     */
    Route::post('/account/profile_photo/{id}', 'HomeController@uploadProfilePhoto')->name('account.profilephoto.upload');

    Route::post('/education','EducationController@store')->name('education.store');
    Route::get('/education','EducationController@show')->name('education.show');
    Route::post('/education/update', 'EducationController@update')->name('education.update');
    Route::delete('/education/{id}', 'EducationController@destroy')->name('education.destroy');

    Route::post('/employment', 'EmploymentController@store')->name('employment.store');
    Route::get('/employment', 'EmploymentController@show')->name('employment.show');
    Route::post('/employment/update', 'EmploymentController@update')->name('employment.update');
    Route::delete('/employment/{id}', 'EmploymentController@destroy')->name('employment.destroy');

    Route::post('/award', 'AwardController@store')->name('award.store');
    Route::get('/award', 'AwardController@show')->name('award.show');
    Route::post('/award/update', 'AwardController@update')->name('award.update');
    Route::delete('/award/{id}', 'AwardController@destroy')->name('award.destroy');
});

Route::get('/search', 'UserController@search')->name('user.search');



