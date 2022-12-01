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
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\LoginFEController;
use App\Http\Controllers\FrontEnd\UserFEController;
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
Route::get('register', function () {
        return view('FrontEnd.login.register');
});
Route::resource('registrasi', UserFEController::class);


Route::post('/user/actionlogin', [LoginFEController::class, 'actionlogin'])->name('actionloginFE');
Route::post('/user/actionlogout', [LoginFEController::class, 'actionlogout'])->name('actionlogoutFE');
Route::get('login', function () {
        return view('FrontEnd.login.index');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/admin/login', [LoginController::class, 'login'])->name('login');
Route::post('/admin/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('/admin/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

Route::group(['middleware' => ['auth', 'role:admin']], function () {
        // Route::get('update', [MuzakkiController::class, 'update'])->name('muzakki.');
        // Route::resource('muzakki', MuzakkiController::class);
        // Route::resource('mustahiq', MustahiqController::class);
        // Route::get('update', [MustahiqController::class, 'update'])->name('mustahiq.');
        // Route::resource('mustahiq', MustahiqController::class);
        // Route::get('update', [ZakatController::class], 'update')->name('zakat.');
        // Route::resource('zakat', ZakatController::class);
        // Route::resource('pembayaran', PembayaranController::class);
        // Route::resource('penerimaan', PenerimaanController::class);
        // Route::resource('verif', VerifController::class);
        Route::get('update', [VerifController::class], 'update')->name('verif.');
        Route::resource('user', UserController::class);
        Route::get('update', [UserController::class], 'update')->name('user.');
        Route::get('status/{id}', [PembayaranController::class, 'status']);
        Route::get('print/mustahiq', [MustahiqController::class, 'export'])->name('mustahiq.export');
        Route::get('print/muzakki', [MuzakkiController::class, 'export'])->name('muzakki.export');
        Route::get('print/pembayaran', [PembayaranController::class, 'export'])->name('pembayaran.export');
        Route::get('print/penerimaan', [PenerimaanController::class, 'export'])->name('penerimaan.export');
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