<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MustahiqController;
use App\Http\Controllers\MuzakkiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ZakatController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PenerimaanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifController;
use App\Http\Controllers\CpwController;
use App\Http\Controllers\LaporanController;
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

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

Route::group(['middleware' => ['auth', 'role:admin']], function () {
        Route::get('update', [MuzakkiController::class, 'update'])->name('muzakki.');
        Route::resource('muzakki', MuzakkiController::class);
        Route::resource('mustahiq', MustahiqController::class);
        Route::get('update', [MustahiqController::class, 'update'])->name('mustahiq.');
        Route::resource('mustahiq', MustahiqController::class);
        Route::get('update', [ZakatController::class], 'update')->name('zakat.');
        Route::resource('zakat', ZakatController::class);
        Route::resource('pembayaran', PembayaranController::class);
        Route::resource('penerimaan', PenerimaanController::class);
        Route::resource('verif', VerifController::class);
        Route::get('update', [VerifController::class], 'update')->name('verif.');
        Route::resource('user', UserController::class);
        Route::get('update', [UserController::class], 'update')->name('user.');
        Route::get('status/{id}', [PembayaranController::class, 'status']);
        Route::get('export',[PembayaranController::class, 'export'])->name('pembayaran.export');
        Route::resource('verif', VerifController::class);
        Route::resource('laporan', LaporanController::class);
        Route::get('print',[MustahiqController::class, 'export'])->name('mustahiq.export');
        Route::get('print/penerimaan',[PenerimaanController::class, 'export'])->name('penerimaan.export');




});

Route::group(['middleware' => ['auth', 'role:user,admin']], function () {
        Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
});