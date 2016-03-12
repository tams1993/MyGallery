<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::auth();


    Route::get('/', 'PagesController@main');
//    Route::post('/', 'ImagesController@store');

    Route::get('login', 'AdminController@index');


});

Route::group(['prefix' => 'admin', 'middleware' => ['web','auth']], function () {



    Route::get('/', 'AdminController@create');
    Route::get('home', 'AdminController@create');
    Route::get('all', 'AdminController@all');
    Route::get('profile', 'AdminController@profile');
//    Route::get('profile/{id}', 'AdminController@profile');
    Route::post('profile', 'AdminController@update');


});

//
//Route::group(['middleware' => 'web'], function () {
//    Route::auth();
//
//    Route::get('/home', 'HomeController@index');
//});
