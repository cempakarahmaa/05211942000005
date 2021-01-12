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

use App\Http\Controllers\PageController;

Route::get('/', function () {return view('welcome');});
Route::get('/background','PageController@showBackground');
Route::get('/about','PageController@showAbout');
Route::get('/method','PageController@showMethod');
Route::get('/impact','PageController@showImpact');

Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/read/{id}','PegawaiController@read');


Route::get('/absen', 'AbsenController@index');
Route::get('/absen/tambah', 'AbsenController@tambah');
Route::post('/absen/store', 'AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update', 'AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');

Route::get('/mobil', 'MobilController@index');
Route::get('/mobil/tambah', 'MobilController@tambah');
Route::post('/mobil/store', 'MobilController@store');
Route::get('/mobil/edit/{id}','MobilController@edit');
Route::post('/mobil/update', 'MobilController@update');
Route::get('/mobil/hapus/{id}','MobilController@hapus');
Route::get('/mobil/cari','MobilController@cari');

Route::get('/nilaikuliah', 'NilaiController@index');
Route::get('/nilaikuliah/tambah', 'NilaiController@tambah');
Route::get('/nilaikuliah/cari', 'NilaiController@cari');
Route::post('/nilaikuliah/store', 'NilaiController@store');
Route::get('/nilaikuliah/hapus/{id}','NilaiController@hapus');
Route::get('/nilaikuliah/read/{id}','NilaiController@read');
