<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\LoginController;
use App\Http\Controllers\BackEnd\MustahiqController;
use App\Http\Controllers\BackEnd\MuzakkiController;
use App\Http\Controllers\BackEnd\DashboardController;
use App\Http\Controllers\BackEnd\PembayaranController;
use App\Http\Controllers\BackEnd\PenerimaanController;
use App\Http\Controllers\BackEnd\UserController;
use App\Http\Controllers\BackEnd\VerifController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\LoginFEController;
use App\Http\Controllers\FrontEnd\UserFEController;
use App\Http\Controllers\FrontEnd\KalkulatorController;
use App\Http\Controllers\FrontEnd\PenghasilanController;
use App\Http\Controllers\BackEnd\LaporanController;
use App\Http\Controllers\FrontEnd\HistoryController;
use App\Http\Controllers\FrontEnd\ChangePasswordController;
use App\Http\Controllers\FrontEnd\ProfileController;
use App\Http\Controllers\FrontEnd\NotificationController;
use App\Http\Controllers\BackEnd\LogController;


// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

Route::resource('kalkulator', KalkulatorController::class);
// Route::get('kalkulator/penghasilan', [KalkulatorController::class, 'penghasilan'])->name('kalkulator.penghasilan');

Route::resource('penghasilan', PenghasilanController::class);

Route::get('berita', function () {
        return view('FrontEnd.berita.index');
})->name('berita');

Route::get('register', function () {
        return view('FrontEnd.login.register');
});


Route::resource('registrasi', UserFEController::class);

Route::post('/user/actionlogin', [LoginFEController::class, 'actionlogin'])->name('actionloginFE');
Route::post('/user/actionlogout', [LoginFEController::class, 'actionlogout'])->name('actionlogoutFE');
Route::get('login', function () {
        return view('FrontEnd.login.index');
})->name('userlogin');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/admin/login', [LoginController::class, 'login'])->name('login');
Route::post('/admin/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('/admin/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

Route::group(['middleware' => ['auth', 'role:admin']], function () {
        Route::get('admin', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('update', [VerifController::class], 'update')->name('verif.');
        Route::get('update', [UserController::class], 'update')->name('user.');
        Route::get('print/mustahiq', [MustahiqController::class, 'export'])->name('mustahiq.export');
        Route::get('filter/mustahiq', [MustahiqController::class, 'mustahiq'])->name('filter.mustahiq');


        Route::get('print/muzakki', [MuzakkiController::class, 'export'])->name('muzakki.export');
        Route::get('filter/muzakki', [MuzakkiController::class, 'muzakki'])->name('filter.muzakki');

        Route::get('print/pembayaran', [PembayaranController::class, 'export'])->name('pembayaran.export');
        Route::get('print/penerimaan', [PenerimaanController::class, 'export'])->name('penerimaan.export');
        Route::get('admin/update', [MuzakkiController::class, 'update'])->name('muzakki.');
        Route::resource('admin/muzakki', MuzakkiController::class);
        Route::get('admin/update', [MustahiqController::class, 'update'])->name('mustahiq.');
        Route::resource('admin/mustahiq', MustahiqController::class);
        Route::get('admin/update', [ZakatController::class], 'update')->name('zakat.');
        Route::resource('admin/penerimaan', PenerimaanController::class);

        Route::resource('admin/pembayaran', PembayaranController::class);
        Route::resource('admin/verif', VerifController::class);

        Route::get('admin/update', [VerifController::class], 'update')->name('verif.');
        Route::resource('admin/user', UserController::class);
        Route::get('admin/update', [UserController::class], 'update')->name('user.');
        Route::get('admin/status/{id}', [PembayaranController::class, 'status']);
        Route::get('filter/pembayaran', [PembayaranController::class, 'pembayaran'])->name('filter.pembayaran');
        Route::get('admin/backup', [LaporanController::class, 'backup'])->name('backup');
        Route::get('admin/log', [LogController::class, 'index'])->name('log.index');
});

Route::group(['middleware' => ['auth', 'role:user']], function () {
        Route::get('/user/profile/{user}', [ProfileController::class, 'userProfile'])->name('user.profile');
        Route::resource('profile', ProfileController::class);
        Route::get('history', [HistoryController::class, 'index'])->name('history');
        
        Route::get('pembayaran/fitrah', function () {
                return view('FrontEnd.pembayaran.fitrah');
        });
        Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');

});


Route::controller(ChangePasswordController::class)->group(function () {
        Route::get('change-password', 'index')->name('change-password');
        Route::post('changepw', 'changePassword')->name('changepw.reset');
        
});
Route::get('selesai', function () {
        return view('FrontEnd.pembayaran.terimakasih');
})->name('selesai')->middleware('auth');



