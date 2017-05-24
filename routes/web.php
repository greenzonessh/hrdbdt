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

Route::get('/','tampilanController@viewIndex');

Route::get('/master','tampilanController@viewMaster');
Route::get('/slave01','tampilanController@viewSlave01');
Route::get('/tambah','tampilanController@viewTambah');
Route::post('/tambah','tampilanController@tambah');
Route::get('/kontak','tampilanController@viewKontak');