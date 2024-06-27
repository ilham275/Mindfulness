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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/saran', [App\Http\Controllers\HomeController::class, 'tosaran'])->name('tosaran');
Route::get('/listmusic', [App\Http\Controllers\HomeController::class, 'tolistmus'])->name('tolis');
Route::get('/playmusic', [App\Http\Controllers\HomeController::class, 'toplaymuc'])->name('playmus');
Route::get('/timer', [App\Http\Controllers\HomeController::class, 'totimer'])->name('totimer');
Route::get('/jurnal', [App\Http\Controllers\HomeController::class, 'tojurnal'])->name('tojurnal');
Route::get('/createjurnal', [App\Http\Controllers\HomeController::class, 'createjurnal'])->name('bikinjurnal');
Route::get('/tidurcukup', [App\Http\Controllers\HomeController::class, 'tidurcukup'])->name('tidurcukup');
Route::get('/isiform', [App\Http\Controllers\HomeController::class, 'isiform'])->name('isiform');
Route::get('/menukesehatan', [App\Http\Controllers\HomeController::class, 'menukesehatan'])->name('menukesehatan');
Route::get('/scoreview', [App\Http\Controllers\HomeController::class, 'scoreview'])->name('scoreview');
Route::get('/bajur', [App\Http\Controllers\HomeController::class, 'bajur'])->name('bajur');

