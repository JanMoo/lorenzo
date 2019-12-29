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

        //show all users
        Route::get('','UserController@index')->name('users.index');

        //show form to create a new user
        Route::get('new','UserController@create')->name('users.create');

        //store the form post request for new user POST
        Route::get('/create','UserController@update')->name('users.update');

        //show info of a single user and show form to edit
        Route::get('{user}','UserController@index')->name('users.index');

        //store updated info PUT
        Route::get('{user}/edit','UserController@index')->name('users.index');

        //destroy a user DELETE
        Route::get('{user}/delete','UserController@delete')->name('users.delete');
    });


});
