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

Route::get('/', array('as' => 'showWelcome', 'uses' => 'HomeController@showWelcome'));

Route::get('users', array('as' => 'users', 'uses' => 'UserController@getAll'));
Route::get('users/{id}', array('uses' => 'UserController@get', 'before' => 'auth'));
Route::get('users/{id}/edit', 'UserController@edit');
Route::get('users/create', 'UserController@create');
Route::post('users', 'UserController@save');
Route::post('users/{id}', array('as' => 'user.update', 'uses' => 'UserController@update'));
Route::delete('users/{id}','UserController@delete');

Route::resource('products', 'ProductController');
Route::resource('companies', 'CompanyController');
Route::resource('templates', 'TemplateController');
Route::get('companies/{id}/products','ProductController@indexByCompany');
Route::post('companies/{id}/products','ProductController@attachProduct');
Route::delete('companies/{id}/products/{productId}','ProductController@deleteProduct');


Route::get("login", 'HomeController@showLogin');
Route::post("auth", 'HomeController@login');