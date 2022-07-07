<?php

use App\Http\Controllers\PostController;
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

Route::get('/insertpost', [PostController::class, 'insertpost']);

Route::get('/listpost', [PostController::class, 'listpost']);
Route::get('/editpost', [PostController::class, 'editpost']);
Route::get('/deletepost', [PostController::class, 'deletepost']);

Route::resource('posts', PostController::class);
