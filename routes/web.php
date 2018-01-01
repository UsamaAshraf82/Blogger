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

Route::get('/','Pagination@index');



//admin
Route::get('/admin','admin\adminController@home');
Route::get('/admin/htc','admin\adminController@htc');
Route::get('/admin/htc/create','admin\adminController@htccreate');
Route::post('/admin/htc','Admin\adminController@store');
