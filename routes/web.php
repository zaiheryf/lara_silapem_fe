<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\front\Daftar;
use App\Http\Controllers\front\Login;
use App\Http\Controllers\front\Home;
use App\Http\Controllers\front\Wirausahamuda;
use App\Http\Controllers\front\Pemudapelopor;
use App\Http\Controllers\front\Pemudaokp;
use App\Http\Controllers\front\Event;
use App\Http\Controllers\front\Loker;
use App\Http\Controllers\front\Berita;


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

// Route::get('/', function () {
//     return view('auth_manual.login');
// });
Route::get('/', [Home::class, 'index']);

//FRONT WEBSITE
Route::resource('/daftar','Daftar')->except(['show']);
Route::get('/daftar', [Daftar::class, 'index'])->name('daftar');

Route::resource('/login','Login')->except(['show']);
Route::get('/login', [Login::class, 'index'])->name('login');

Route::resource('/home','Home')->except(['show']);
Route::get('/home', [Home::class, 'index'])->name('home');

Route::resource('/wirausaha_muda','Wirausahamuda')->except(['show']);
Route::get('/wirausaha_muda', [Wirausahamuda::class, 'index'])->name('wirausaha_muda');

Route::resource('/pemuda_pelopor','Pemudapelopor')->except(['show']);
Route::get('/pemuda_pelopor', [Pemudapelopor::class, 'index'])->name('pemuda_pelopor');

Route::resource('/pemuda_okp','Pemudaokp')->except(['show']);
Route::get('/pemuda_okp', [Pemudaokp::class, 'index'])->name('pemuda_okp');

Route::resource('/event','Event')->except(['show']);
Route::get('/event', [Event::class, 'index'])->name('event');
Route::get('/event/{slug}', [Event::class, 'index'])->name('event');

Route::resource('/loker','Loker')->except(['show']);
Route::get('/loker', [Loker::class, 'index'])->name('loker');
Route::get('/loker/{slug}', [Loker::class, 'index'])->name('loker');

Route::resource('/berita','Berita')->except(['show']);
Route::get('/berita', [Berita::class, 'index'])->name('berita');
Route::get('/berita/{slug}', [Berita::class, 'index'])->name('berita');

