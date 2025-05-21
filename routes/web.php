<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
//import java.io;

//System.out.println();
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Link::class,'helloworld']);

Route::get('pertama', function () {
	return view('pertama');
});
Route::get('bootstrap1', function () {
	return view('bootstrap1');
});
Route::get('ets', function () {
	return view('ets');
});
Route::get('index', function () {
	return view('index');
});
Route::get('js1', function () {
	return view('js1');
});
Route::get('js2', function () {
	return view('js2');
});
Route::get('Kedua', function () {
	return view('Kedua');
});
Route::get('latihanlayout', function () {
	return view('latihanlayout');
});
Route::get('linktree', function () {
	return view('linktree');
});
Route::get('PercobaanKetiga', function () {
	return view('PercobaanKetiga');
});
Route::get('template1', function () {
	return view('template1');
});
Route::get('tes', function () {
	return view('tes');
});
Route::get('Tugas1', function () {
	return view('Tugas1');
});
Route::get('tugaslinktree', function () {
	return view('tugaslinktree');
});
Route::get('frontend', function () {
	return view('frontend');
});

Route::get('dosen', [Link::class,'index']);


Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);

Route::get('/formulir', [PegawaiController::class,'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

// route blog
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);
