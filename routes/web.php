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

Route::get('/', 'AccessController@home');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

//Works on the products model
Route::resource('/dashboard/products','ProductController');

//Works on the package model
Route::resource('/dashboard/packages','PackageController');

//Works on the sales model
Route::resource('/dashboard/sales','SaleController');

//Works on the subscription model
Route::resource('/dashboard/subscription','SubscriptionController');

//Works on the users model
Route::resource('/dashboard/users','UserController');



