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
Route::resource('Info','OmnieController');
Route::resource('Contact','KontaktController');
Route::resource('Rezerwacja','ItemController');
Route::resource('Widok','ViewController');
Route::post('Rezerwacja/store',['uses'=>'ItemController@store','as'=>'Rezerwacja.store']);
Route::resource('Confirm','ConfirmController');
Route::delete('Confirm/{id}',['uses'=>'ConfirmController@destroy','as'=>'Confirm.delete']);
Route::resource('Save','SaveController');
Route::delete('Save/{id}',['uses'=>'SaveController@destroy','as'=>'Save.delete']);