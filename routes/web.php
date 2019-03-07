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

Route::prefix('/')->group(function () {

    # Home
    Route::get('/', 'HomeController@index')->name('home');

    # Job
    Route::get('/', 'JobController@index')->name('job');

    # People
    Route::get('/', 'PeopleController@index')->name('people');

    # Service
    Route::get('/', 'Serviceontroller@index')->name('service');

    # About
    Route::get('/', 'AboutController@index')->name('about');

    # Blog
    Route::get('/', 'BlogController@index')->name('blog');

    # Contact
    Route::get('/', 'Contactontroller@index')->name('contact');
});
