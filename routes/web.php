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

//Auth
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/absen','AbsenController@index');
    Route::get('/guru', 'GuruController@index');
    Route::post('/guru/create','GuruController@create');
    Route::post('/guru/update','GuruController@update');
    Route::get('/guru/hapus/{id}','GuruController@hapus');
    Route::get('/surat', 'SuratController@index');
    Route::post('/surat/create', 'SuratController@createSurat');
    Route::get('/approvel', 'SuratController@approvel');
    Route::get('/approvel/{id}/setuju', 'SuratController@setuju');
    Route::get('/approvel/{id}/tolak', 'SuratController@tolak');
});


