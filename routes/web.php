<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
	return "<h1>Halo, Selamat datang</h1>";
});

Route::get('blog2', function () {
    return view('blog');
});

Route::get('hello', function () {
    return view('hello');
});

Route::get('link', function () {
    return view('link');
});

Route::get('news', function () {
    return view('news');
});

Route::get('style', function () {
    return view('style');
});

Route::get('badges', function () {
    return view('badges');
});

Route::get('responsive', function () {
    return view('responsive');
});

Route::get('pizza', function () {
    return view('pizza');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('form-validation', function () {
    return view('form-validation');
});

Route::get('linktree-hokben', function () {
    return view('linktree-hokben');
});

Route::get('burgerBites', function () {
    return view('burgerBites');
});

// Route controller

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show', 'App\Http\Controllers\DosenController@showBlog' );

// Route::get('/pegawai/{nama}', 'App\Http\Controllers\DosenController@showNama');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// route CRUD
Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');

// add
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');

Route::post('/pegawai/store', 'App\Http\Controllers\PegawaiController@store');

// update
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');

Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');

//delete
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

//cari
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

//view only
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');


// Route CRUD untuk Latihan tanggal 04/12/2023
Route::get('/nilaikuliah', 'App\Http\Controllers\NilaiKuliahController@index');

// add
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiKuliahController@tambah');

Route::post('/nilaikuliah/store', 'App\Http\Controllers\NilaiKuliahController@store');

// Route CRUD untuk harddisk
Route::get('/harddisk', 'App\Http\Controllers\HarddiskController@index');

Route::get('/harddisk/tambah','App\Http\Controllers\HarddiskController@tambah');

Route::post('/harddisk/store', 'App\Http\Controllers\HarddiskController@store');

Route::get('/harddisk/edit/{id}','App\Http\Controllers\HarddiskController@edit');

Route::post('/harddisk/update','App\Http\Controllers\HarddiskController@update');

Route::get('/harddisk/hapus/{id}','App\Http\Controllers\HarddiskController@hapus');

Route::get('/harddisk/cari','App\Http\Controllers\HarddiskController@cari');

Route::get('/harddisk/view/{id}','App\Http\Controllers\HarddiskController@view');

// Route CRUD untuk mahasiswa
Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index');

Route::get('/mahasiswa/edit/{id}','App\Http\Controllers\MahasiswaController@edit');

Route::post('/mahasiswa/update','App\Http\Controllers\MahasiswaController@update');

Route::get('/mahasiswa/view/{id}','App\Http\Controllers\MahasiswaController@view');
