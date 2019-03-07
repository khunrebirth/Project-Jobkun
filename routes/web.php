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

//    # Jobs
//    Route::get('jobs', 'JobController@index')->name('jobs');
//
//    # People
//    Route::get('people', 'PeopleController@index')->name('people');
//
//    # Services
//    Route::get('services', 'ServiceController@index')->name('services');
//
//    # Abouts
//    Route::get('abouts', 'AboutController@index')->name('abouts');
//
//    # Blogs
//    Route::get('blogs', 'BlogController@index')->name('blogs');
//
//    # Contacts
//    Route::get('contacts', 'ContactController@index')->name('contacts');
});
