<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as HC;
use App\Http\Controllers\YourJurnalController as YC;
use App\Http\Controllers\KesehatanController as KC;
use App\Http\Controllers\AdminController as AC;
use App\Http\Controllers\SongController as SC;
use App\Http\Controllers\JournalController as JC;


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
Route::resource('yourjurnal', YC::class);
Route::resource('kesehatan', KC::class);
Route::resource('admin', AC::class);
Route::resource('kesehatan', KC::class);
Route::resource('song', SC::class);
Route::resource('journal', JC::class);



Route::get('/score', [KC::class, 'read'])->name('readscore');
Route::get('/home', [HC::class, 'index'])->name('home');
Route::get('/saran', [HC::class, 'tosaran'])->name('tosaran');
Route::get('/listmusic', [HC::class, 'tolistmus'])->name('tolis');
Route::get('/playmusic/{id}', [HC::class, 'toplaymuc'])->name('playmusic');
Route::get('/timer', [HC::class, 'totimer'])->name('totimer');
Route::get('/jurnal', [HC::class, 'tojurnal'])->name('tojurnal');
Route::get('/createjurnal', [HC::class, 'createjurnal'])->name('bikinjurnal');
Route::get('/tidurcukup', [HC::class, 'tidurcukup'])->name('tidurcukup');
Route::get('/isiform', [HC::class, 'isiform'])->name('isiform');
// Route::get('/menukesehatan', [HC::class, 'menukesehatan'])->name('menukesehatan');
Route::get('/scoreview', [HC::class, 'scoreview'])->name('scoreview');
Route::get('/bajur', [HC::class, 'bajur'])->name('bajur');

