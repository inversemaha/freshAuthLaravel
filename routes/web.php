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


use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/user/registration', 'LoginController@registration');
Route::post('/user/registration/save', 'LoginController@registrationSave');
Route::get('/user/confirm/{id}', 'LoginController@confirmMail');

Route::get('/user/forget-pass', 'LoginController@forgetPass');


Route::get('/', 'LoginController@login');
Route::get('/home', 'LoginController@index');
Route::get('/login', 'LoginController@login');
Route::post('/login-check', 'LoginController@doLogin');
Route::get('/logout', 'LoginController@doLogout');

Route::get('/admin-home', 'HomeController@adminHome');

//Manage Users

Route::get('/user/list', 'UserController@show');





