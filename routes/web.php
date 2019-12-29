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
//also should be protected by middleware which checks if user has role
Route::group(['prefix' => 'admin',  'middleware' => 'verified'], function () {

    //all routes admin/user/...
    Route::group(['prefix' => 'users'], function () {

        //show all users
        Route::get('','UserController@index')->name('users.index');

        //show form to create a new user
        Route::get('new','UserController@create')->name('users.create');

        //store the form post request for new user POST
        Route::post('/create','UserController@store')->name('users.store');

        //show info of a single user and show form to edit
        Route::get('{user}','UserController@show')->name('users.show');

        //store updated info PUT
        Route::get('{user}/edit','UserController@update')->name('users.update');

        //destroy a user DELETE
        Route::get('{user}/delete','UserController@delete')->name('users.delete');
    });

    Route::group(['prefix' => 'materials'], function () {

        //show all materials
        Route::get('','MaterialController@index')->name('materials.index');

        //show form to create a new material
        Route::get('new','MaterialController@create')->name('materials.create');

        //store the form post request for new material POST
        Route::post('create','MaterialController@store')->name('materials.store');

        //show info of a single material and show form to edit
        Route::get('{material}','MaterialController@show')->name('materials.show');

        //store updated info PUT
        Route::get('{material}/edit','MaterialController@update')->name('materials.update');

        //destroy a material DELETE
        Route::get('{material}/delete','MaterialController@delete')->name('materials.delete');
    });

    Route::group(['prefix' => 'categories'], function () {

        //show all categorys
        Route::get('','CategoryController@index')->name('categories.index');

        //show form to create a new category
        Route::get('new','CategoryController@create')->name('categories.create');

        //store the form post request for new category POST
        Route::post('create','CategoryController@store')->name('categories.store');

        //show info of a single category and show form to edit
        Route::get('{category}','CategoryController@show')->name('categories.show');

        //store updated info PUT
        Route::get('{category}/edit','CategoryController@update')->name('categories.update');

        //destroy a category DELETE
        Route::get('{category}/delete','CategoryController@delete')->name('categories.delete');
    });

    Route::group(['prefix' => 'standardsets'], function () {

        //show all standardsets
        Route::get('','StandardSetController@index')->name('standardsets.index');

        //show form to create a new standardset
        Route::get('new','StandardSetController@create')->name('standardsets.create');

        //store the form post request for new standardset POST
        Route::post('create','StandardSetController@store')->name('standardsets.store');

        //show info of a single standardset and show form to edit
        Route::get('{standardset}','StandardSetController@show')->name('standardsets.show');

        //store updated info PUT
        Route::get('{standardset}/edit','StandardSetController@update')->name('standardsets.update');

        //destroy a standardset DELETE
        Route::get('{standardset}/delete','StandardSetController@delete')->name('standardsets.delete');
    });

    Route::group(['prefix' => 'subcategories'], function () {

        //show all subcategorys
        Route::get('','SubcategoryController@index')->name('subcategories.index');

        //show form to create a new subcategory
        Route::get('new','SubcategoryController@create')->name('subcategories.create');

        //store the form post request for new subcategory POST
        Route::post('create','SubcategoryController@store')->name('subcategories.store');

        //show info of a single subcategory and show form to edit
        Route::get('{subcategory}','SubcategoryController@show')->name('subcategories.show');

        //store updated info PUT
        Route::get('{subcategory}/edit','SubcategoryController@update')->name('subcategories.update');

        //destroy a subcategory DELETE
        Route::get('{subcategory}/delete','SubcategoryController@delete')->name('subcategories.delete');
    });


});




//all routes specific to a user
//personal sets
//rental records
//incidents
//middleware auth must be logged in to acces
Route::group(['prefix' => 'user',  'middleware' => 'verified'], function () {

    Route::group(['prefix' => 'personalsets'], function () {

        //show all personalset(s) made by user
        Route::get('','PersonalSetController@index')->name('personalsets.index');

        //show form to create a newpersonalset(s) by user which is coupled to a rentalrecord
        Route::get('new','PersonalSetController@create')->name('personalsets.create');

        //store the form post request for newpersonalset(s) POST
        Route::post('create','PersonalSetController@store')->name('personalsets.store');

        //show info of a singlepersonalset(s) and show form to edit
        Route::get('{personalset}','PersonalSetController@show')->name('personalsets.show');

        //store updated info PUT
        Route::get('{personalset}/edit','PersonalSetController@update')->name('personalsets.update');

        //destroy a personalset(s) DELETE
        Route::get('{personalset}/delete','PersonalSetController@delete')->name('personalsets.delete');
    });

    Route::group(['prefix' => 'rentalrecords'], function () {

        //show all  rentalrecord(s)
        Route::get('','RentalRecordController@index')->name('rentalrecords.index');

        //show form to create a new rentalrecord(s)
        Route::get('new','RentalRecordController@create')->name('rentalrecords.create');

        //store the form post request for new rentalrecord(s) POST
        Route::post('create','RentalRecordController@store')->name('rentalrecords.store');

        //show info of a single rentalrecord(s) and show form to edit
        Route::get('{rentalrecord}','RentalRecordController@show')->name('rentalrecords.show');

        //store updated info PUT
        Route::get('{rentalrecord}/edit','RentalRecordController@update')->name('rentalrecords.update');

        //destroy a rentalrecord(s) DELETE
        Route::get('{rentalrecord}/delete','RentalRecordController@delete')->name('rentalrecords.delete');
    });

    Route::group(['prefix' => 'incidents'], function () {

        //show all  incident(s)
        Route::get('','IncidentController@index')->name('incidents.index');

        //show form to create a new incident(s)
        Route::get('new','IncidentController@create')->name('incidents.create');

        //store the form post request for new incident(s) POST
        Route::post('create','IncidentController@store')->name('incidents.store');

        //show info of a single incident(s) and show form to edit
        Route::get('{incident}','IncidentController@show')->name('incidents.show');

        //store updated info PUT
        Route::get('{incident}/edit','IncidentController@update')->name('incidents.update');

        //destroy a incident(s) DELETE
        Route::get('{incident}/delete','IncidentController@delete')->name('incidents.delete');
    });
});

