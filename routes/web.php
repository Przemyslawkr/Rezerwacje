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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('Admin','AdminController');
Route::get('Admin/create',['uses'=>'AdminController@create','as'=>'Admin.create']);
Route::post('Admin/store',['uses'=>'AdminController@store','as'=>'Admin.store']);
Route::delete('Admin/{id}',['uses'=>'AdminController@destroy','as'=>'Admin.delete']);