<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\Admin\ResetPassword;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MitraController;
use App\Http\Controllers\Layout\PageController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Customer\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PemesananController;
use App\Http\Controllers\SuperAdmin\SuperAdminMenu;
use App\Http\Controllers\Admin\PembatalanController;
use App\Http\Controllers\Admin\VerifikasiController;
use App\Http\Controllers\Customer\BookingController;
use App\Http\Controllers\Customer\ProfileController;
use App\Http\Controllers\Admin\EditProfileController;
use App\Http\Controllers\Customer\RegisterController;
use App\Http\Controllers\Customer\PembayaranController;
use App\Http\Controllers\SuperAdmin\EditDataController;
use App\Http\Controllers\Customer\Forgot_PasswordController;

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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::middleware(['guest:web'])->group(function () {
    Route::get('Login_Admin', [AdminController::class, 'index'])->name('login_admin');
    Route::post('verify_Admin', [AdminController::class, 'authenticate'])->name('admin.verify');
    Route::get('Login', [LoginController::class, 'index'])->name('login');
    Route::post('verify', [LoginController::class, 'authenticate'])->name('verify');
    Route::get('Register', [RegisterController::class, 'create'])->name('register-page');
    Route::post('create', [RegisterController::class, 'store'])->name('create');

    Route::get('Forgot_Password', [Forgot_PasswordController::class, 'showForgotForm'])->name('forgot.password.form');
    Route::post('Forgot_Password', [Forgot_PasswordController::class, 'sendResetLink'])->name('forgot.password.link');
    Route::get('Forgot_Password/{token}', [Forgot_PasswordController::class, 'showResetForm'])->name('reset.password.form');
    Route::post('Reset_Password', [Forgot_PasswordController::class, 'resetPassword'])->name('reset.password');

    Route::get('Forgot_Password_account', [ResetPassword::class, 'showForgotForm'])->name('forgot.password.account.form');
    Route::post('Forgot_Password_account', [ResetPassword::class, 'sendResetLink'])->name('forgot.password.account.link');
    Route::get('Forgot_Password-account/{token}', [ResetPassword::class, 'showResetForm'])->name('reset.password.account.form');
    Route::post('Reset_Password_account', [ResetPassword::class, 'resetPassword'])->name('reset.password.account');

});

Route::middleware(['auth:web'])->group(function () {
    Route::post('Logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('profile', [ProfileController::class, 'show'])->name('customer_profile');

    Route::get('Booking', [BookingController::class, 'create'])->name('booking');
    Route::post('test', [BookingController::class, 'store'])->name('create.booking');
    //  Route::post('test', [PembayaranController::class, 'store'])->name('create.booking');

});

Route::middleware(['admin:web'])->group(function () {
    Route::get('Logout', [AdminController::class, 'logout'])->name('logout_admin');
    Route::get('Dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('/profile')->group(function () {
        Route::get('admin', [EditProfileController::class, 'show'])->name('profile');
        Route::get('editProfile', [EditProfileController::class, 'edit'])->name('edit_profile');
        Route::put('updateProfile', [EditProfileController::class, 'update'])->name('update_profile');
    });

    Route::get('Review', [ReviewController::class, 'index'])->name('review');

    Route::prefix('Pemesanan')->group(function () {
        Route::get('/berhasil', [PemesananController::class, 'berhasil'])->name('tampil_pemesanan_berhasil');
        Route::get('/menunggu', [PemesananController::class, 'menunggu'])->name('tampil_pemesanan_menunggu');
        Route::get('/ditolak', [PemesananController::class, 'ditolak'])->name('tampil_pemesanan_ditolak');
        Route::get('/sukses/{id}', [PemesananController::class, 'pemesanan_Berhasil'])->name('pemesanan_berhasil');
        Route::get('/failed/{id}', [PemesananController::class, 'pemesanan_Ditolak'])->name('pemesanan_Ditolak');
        Route::post('/riwayat_transaksi', [PemesananController::class, 'riwayat_transaksi'])->name('riwayat_transaksi');

    });

    Route::prefix('/Verifikasi')->group(function () {
        Route::get('/diterima', [VerifikasiController::class, 'diterima'])->name('verifikasi.diterima');
        Route::get('/menunggu/diterima/{id}', [VerifikasiController::class, 'data_diterima'])->name('verifikasi.data.diterima');
        Route::get('/menunggu/ditolak/{id}', [VerifikasiController::class, 'data_ditolak'])->name('verifikasi.data.ditolak');
        Route::get('/menunggu', [VerifikasiController::class, 'menunggu'])->name('verifikasi.menunggu');
        Route::get('/ditolak', [VerifikasiController::class, 'ditolak'])->name('verifikasi.ditolak');
    });

    Route::get('Pembatalan', [PembatalanController::class, 'index'])->name('pembatalan');
    Route::get('Pembatalan/detail', [PembatalanController::class, 'detail'])->name('detail_pembatalan');

    Route::get('Pengguna', [PenggunaController::class, 'index'])->name('pengguna');
    Route::get('mitra', [PenggunaController::class, 'index'])->name('mitra');

    Route::get('Pelanggan', [PenggunaController::class, 'index'])->name('pelanggan');
    Route::get('mitramitrafinance', [PenggunaController::class, 'index'])->name('mitrafinance');

    Route::get('finance', [FinanceController::class, 'index'])->name('finance');

    Route::get('SuperAdmin',[SuperAdminMenu::class,'admin'])->name('superadmin');
    Route::get('SuperFinance',[SuperAdminMenu::class,'finance'])->name('superfinance');

    Route::post('SuperAdmin/CreateAccount',[SuperAdminMenu::class,'store'])->name('createAccount');
    Route::put('SuperAdmin/EditData',[EditDataController::class,'edit'])->name('editData');
    Route::get('SuperAdmin/{id}',[EditDataController::class,'destroy'])->name('deleteData');
});
