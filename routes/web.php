<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@home');
Route::get('/admin/register', 'AdminController@showRegistration');
Route::post('/admin/register', 'AdminController@adminRegistration');
Route::get('/admin/login', 'AdminController@showLogin');
Route::post('/admin/login', 'AdminController@login');

Route::group(['middleware'=>'admin'],function(){

	Route::get('/admin/home', 'HomeController@dashboard');
	Route::get('/admin/menu/add', 'HomeController@showAddMenu');

});

Route::get('/admin', function() {
    return view('admin.register');
});
