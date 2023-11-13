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

Route::get('/pegawai/{nama}', 'App\Http\Controllers\DosenController@showNama');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);