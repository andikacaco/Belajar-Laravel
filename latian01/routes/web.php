<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return '<h1>Andika Dharma Putra</h1>';
});

Route::get('/datapribadi/{andika}', function ($nama) {
    return "Nama Saya : $nama";
});

Route::get('/datasiswa', function () {
    return view('datasiswa', ['siswa' => ['Andika', 'Dharma', 'Putra']]);
});

Route::get('/siswa', function () {
    return view('siswa', ['siswa' => 'Andika', 'nilai' => 75]);
});

Route::get('/loopfor', function () {
    return view('loopfor');
});

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::get('/home', [PageController::class, 'index']);
Route::get('/tampil', [PageController::class, 'devfram']);
Route::get('/ujian', [PageController::class, 'hasilujian']);

use App\Http\Controllers\RegController;

route::get('/reg', [RegController::class, 'index']);
route::get('/proses-reg', [RegController::class, 'prosesReg']);

route::get('/insertpost', [PostController::class, 'insertpost']);
