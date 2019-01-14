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


Route::resource('/data', 'ControllerPegawai');
// Route::get('/data/create', 'ControllerPegawai@create');
// Route::POST('/data/create', 'ControllerPegawai@store');
// Route::get('/data/{id}/edit','ControllerDepartemen@edit');
// Route::POST('/data/{id}/edit','ControllerPegawai@update');
Route::resource('/datadepartemen','ControllerDepartemen');