<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Forgot_PasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\PembatalanController;

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
/*
Route::get('/Login', function () {
    return view('login');
});

Route::get('/Register', function () {
    return view('Register');
});

Route::get('/Reset', function () {
    return view('ResetPass');
});
Route::get('/', function () {
    return view('LandingPage');
});*/

Route::get('/',[PageController::class,'index'])->name('home');


    Route::middleware(['guest:web'])->group(function (){

        Route::get('/Login',[LoginController::class,'index'])->name('login');
        Route::post('/Login',[LoginController::class,'authenticate'])->name('verify');
        Route::get('/Register',[RegisterController::class,'create'])->name('register-page');
        Route::post('/create',[RegisterController::class,'store'])->name('create');

        Route::get('/Forgot_Password',[Forgot_PasswordController::class,'showForgotForm'])->name('forgot.password.form');
        Route::post('/Forgot_Password',[Forgot_PasswordController::class,'sendResetLink'])->name('forgot.password.link');
        Route::get('/Forgot_Password/{token}', [Forgot_PasswordController::class,'showResetForm'])->name('reset.password.form');
        Route::post('/Reset_Password',[Forgot_PasswordController::class,'resetPassword'])->name('reset.password');

        Route::get('/Booking',[BookingController::class,'index'])->name('booking');
    });

    Route::middleware(['auth:web'])->group(function(){
        Route::post('/Logout',[LoginController::class,'logout'])->name('logout');
        Route::get('/Profile',[LoginController::class,'show'])->name('profile');
    });

Route::middleware(['Admin:web'])->group(function(){
        Route::get('/Login_Admin', [AdminController::class, 'index'])->name('login_admin');
        Route::post('/Login_Admin', [AdminController::class, 'authenticate'])->name('login_admin.check');
        Route::get('/Logout',[AdminController::class,'destroy'])->name('logout_admin');
    
    
        Route::get('/Dashboard',[DashboardController::class,'index'])->name('dashboard');
        Route::get('/Pemesanan/berhasil',[PemesananController::class,'berhasil'])->name('pemesanan.berhasil');
        Route::get('/Pemesanan/menunggu',[PemesananController::class,'menunggu'])->name('pemesanan.menunggu');
        Route::get('/Pemesanan/ditolak',[PemesananController::class,'ditolak'])->name('pemesanan.ditolak');
        Route::get('/Pengguna',[PenggunaController::class,'index'])->name('pengguna');
    
        Route::get('/Verifikasi/diterima', [VerifikasiController::class, 'diterima'])->name('verifikasi.diterima');
        Route::get('/Verifikasi/menunggu/diterima/{id}', [VerifikasiController::class, 'data_diterima'])->name('verifikasi.data.diterima');
        Route::get('/Verifikasi/menunggu/ditolak/{id}', [VerifikasiController::class, 'data_ditolak'])->name('verifikasi.data.ditolak');
        Route::get('/Verifikasi/menunggu', [VerifikasiController::class, 'menunggu'])->name('verifikasi.menunggu');
        Route::get('/Verifikasi/ditolak', [VerifikasiController::class, 'ditolak'])->name('verifikasi.ditolak');

        Route::get('Pembatalan', [PembatalanController::class, 'index'])->name('pembatalan');
    
        Route::get('/Profile', [AdminController::class, 'show'])->name('profile');

        Route::get('/Posts', [PostController::class, 'index'])->name('posts');
        Route::get('/Posts/{post}', [PostController::class, 'show']);

/*




});

});

});
*/

