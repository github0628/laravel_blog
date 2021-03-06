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
Route::get('hello', function () {
    return 'Hello, Welcome to LaravelAcademy.org';
});//http://blog.test/hello


Route::get('/user', 'UsersController@index');//http://blog.test/user

//get parameter
Route::get('user/{id}', function ($id) {
    return 'User ' . $id;
});//http://blog.test/user/1