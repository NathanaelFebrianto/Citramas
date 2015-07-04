<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'SessionController@create');

Route::post('login' ,array('as' => 'login' , 'uses' => 'SessionController@login'));
Route::get('logout' ,'SessionController@logout');

Route::resource('user' , 'UserController');

Route::resource('item' , 'ItemController');

Route::resource('customer' , 'CustomerController');

Route::resource('supplier' , 'SupplierController');

Route::resource('area' , 'AreaController');

Route::resource('region' , 'RegionController');

Route::resource('warehouse' , 'WarehouseController');

Route::resource('itemset' , 'ItemsetController');

Route::resource('salesman' , 'SalesmanController');

Route::controller('autocomplete' , 'AutocompleteController');