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

Route::get('/', function () {
    return view('welcome');
});

/*Admin Routes*/
Route::get('admin/location/create','Admin\LocationsController@create');
Route::post('admin/location/InsData','Admin\LocationsController@stores');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
