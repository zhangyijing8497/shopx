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

Route::get('/user/reg','User\UserController@reg');
Route::post('/user/reg','User\UserController@regDo');
Route::get('/user/login','User\UserController@login');
Route::post('/user/login','User\UserController@loginDo');
Route::get('/user/center','User\UserController@center');
