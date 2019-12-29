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

use Illuminate\Routing\RouteGroup;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/users', 'User');

//email must be verified && email must be a kdg emailadress
//verifeid email can be checked as followed


//all of the admin routes
Route::group(['prefix' => 'admin',  'middleware' => 'verified'], function () {

    //all routes admin/user/...
    Route::group(['prefix' => 'users'], function () {
        Route::get('index','UserController@index')->name('users.index');

        Route::get('create','UserController@create')->name('users.create');

        Route::get('update\{:id}','UserController@update')->name('users.update');

        Route::get('delete{:id}','UserController@delete')->name('users.delete');


    });


});
