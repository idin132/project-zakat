<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\LoginController;
use App\Http\Controllers\BackEnd\MustahiqController;
use App\Http\Controllers\BackEnd\MuzakkiController;
use App\Http\Controllers\BackEnd\DashboardController;
use App\Http\Controllers\BackEnd\ZakatController;
use App\Http\Controllers\BackEnd\PembayaranController;
use App\Http\Controllers\BackEnd\PenerimaanController;
use App\Http\Controllers\BackEnd\UserController;
use App\Http\Controllers\BackEnd\VerifController;
use App\Http\Controllers\BackEnd\HomeController;
use App\Http\Controllers\CpwController;
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

/* Login */

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/admin/login', [LoginController::class, 'login'])->name('login');
Route::post('/admin/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('/admin/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

Route::group(['middleware' => ['auth', 'role:admin']], function () {
        Route::get('admin/update', [MuzakkiController::class, 'update'])->name('muzakki.');
        Route::resource('admin/muzakki', MuzakkiController::class);
        Route::resource('admin/mustahiq', MustahiqController::class);
        Route::get('admin/update', [MustahiqController::class, 'update'])->name('mustahiq.');
        Route::resource('admin/mustahiq', MustahiqController::class);
        Route::get('admin/update', [ZakatController::class], 'update')->name('zakat.');
        Route::resource('admin/zakat', ZakatController::class);
        Route::resource('admin/pembayaran', PembayaranController::class);
        Route::resource('admin/penerimaan', PenerimaanController::class);
        Route::resource('admin/verif', VerifController::class);
        Route::get('admin/update', [VerifController::class], 'update')->name('verif.');
        Route::resource('admin/user', UserController::class);
        Route::get('admin/update', [UserController::class], 'update')->name('user.');
        Route::get('admin/status/{id}', [PembayaranController::class, 'status']);

});

Route::group(['middleware' => ['auth', 'role:admin']], function () {
        Route::get('/admin', [DashboardController::class, 'dashboard'])->name('dashboard');
});