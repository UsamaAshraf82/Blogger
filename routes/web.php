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
Route::get('/','Pagination@oppo')->name('oppo');
Route::get('/htc','Pagination@htc')->name('htc');
Route::get('/lenovo','Pagination@lenovo')->name('lenovo');
Route::get('/vivo','Pagination@vivo')->name('vivo');
Route::get('/qmobile','Pagination@qmobile')->name('qmobile');
Route::get('/oppo','Pagination@oppo')->name('oppo');
Route::get('/range70-90','Pagination@index90')->name('range70-90');
Route::get('/range50-70','Pagination@index70')->name('range50-70');
Route::get('/range30-50','Pagination@index50')->name('range30-50');
Route::get('/range10-30','Pagination@index30')->name('range10-30');
Route::post('/search','pagination@search')->name('search');
Route::get('/mobile/{id}','pagination@getMobileInfo')->name('getInfo');




//admin
Route::get('/admin','admin\adminController@home');
