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
Route::post('/admin/logout','Auth\LogoutController@logout')->name('voyager.logout');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('/user_search', 'HomeController@userSearch')->name('user.search');
Route::get('/job_search', 'HomeController@jobSearch')->name('job.search');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/home', 'UserController@index')->name('home');

    /**
     * Edit account personal information
     */
    Route::get('/account/personal/{id}', 'UserController@editPersonal')->name('account.personal.edit');
    Route::post('/account/personal/{id}', 'UserController@updatePersonal')->name('account.personal.update');

    /**
     * Edit account password
     */
    Route::get('/account/password/{id}', 'UserController@editPassword')->name('account.password.edit');
    Route::post('/account/password/{id}', 'UserController@updatePassword')->name('account.password.update');

    /**
     * Upload photo
     */
    Route::post('/account/profile_photo/{id}', 'UserController@uploadProfilePhoto')->name('account.profilephoto.upload');

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

    Route::post('/certificate', 'CertificateController@store')->name('certificate.store');
    Route::get('/certificate', 'CertificateController@show')->name('certificate.show');
    Route::post('/certificate/update', 'CertificateController@update')->name('certificate.update');
    Route::delete('/certificate/{id}', 'CertificateController@destroy')->name('certificate.destroy');

    Route::get('/job', 'JobController@show')->name('job.show');
    Route::get('/job/create', 'JobController@create')->name('job.create');
    Route::post('/job', 'JobController@store')->name('job.store');
    Route::get('/job/{id}', 'JobController@edit')->name('job.edit');
    Route::post('/job/{id}', 'JobController@update')->name('job.update');
    Route::delete('/job/{id}', 'JobController@destroy')->name('job.destroy');

    Route::get('/search/job', 'SearchController@job')->name('search.job');
    Route::get('/search/user', 'SearchController@user')->name('search.user');
    Route::get('/search/filter', 'SearchController@filter')->name('search.filter');
    Route::get('/search/filter_user', 'SearchController@filterUser')->name('search.filter_user');

    Route::get('/job_application', 'JobApplicationController@index')->name('job_application.show');
    Route::post('/job_application', 'JobApplicationController@create')->name('job_application.create');
    Route::post('/job_application/accept', 'JobApplicationController@accept')->name('job_application.accept');
    Route::post('/job_application/reject', 'JobApplicationController@reject')->name('job_application.reject');

    Route::get('user/{id}','UserController@view')->name('user.view');

    Route::get('/stats', 'StatsController@index')->name('stats.index');
});



