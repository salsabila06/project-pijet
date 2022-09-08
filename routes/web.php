<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\EditProfileController;
use App\Http\Controllers\Admin\PembatalanController;
use App\Http\Controllers\Admin\PemesananController;
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\VerifikasiController;
use App\Http\Controllers\Customer\BookingController;
use App\Http\Controllers\Customer\Forgot_PasswordController;
use App\Http\Controllers\Customer\LoginController;
use App\Http\Controllers\Customer\RegisterController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\Layout\PageController;
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
        
        Route::get('Booking',[BookingController::class,'create'])->name('booking');
        Route::post('test', [PembayaranController::class, 'store'])->name('create.booking');
    });

Route::middleware(['Admin:web'])->group(function(){
        Route::get('/Login_Admin', [AdminController::class, 'index'])->name('login_admin');
        Route::post('/Login_Admin', [AdminController::class, 'authenticate'])->name('login_admin.check');
        Route::get('/Logout',[AdminController::class,'destroy'])->name('logout_admin');
    
    
        Route::get('/Dashboard',[DashboardController::class,'index'])->name('dashboard');
    
        Route::get('Review', [ReviewController::class, 'index'])->name('review');
    
    Route::prefix('Pemesanan')->group(function () {
        Route::get('/berhasil', [PemesananController::class, 'berhasil'])->name('tampil_pemesanan_berhasil');
        Route::get('/menunggu', [PemesananController::class, 'menunggu'])->name('tampil_pemesanan_menunggu');
        Route::get('/ditolak', [PemesananController::class, 'ditolak'])->name('tampil_pemesanan_ditolak');
        Route::get('/sukses',[PemesananController::class,'pemesanan_Berhasil'])->name('pemesanan_berhasil');
        Route::get('/failed',[PemesananController::class,'pemesanan_Ditolak'])->name('pemesanan_Ditolak');
    });
        Route::get('/Pengguna',[PenggunaController::class,'index'])->name('pengguna');
    
        Route::get('/Verifikasi/diterima', [VerifikasiController::class, 'diterima'])->name('verifikasi.diterima');
        Route::get('/Verifikasi/menunggu/diterima/{id}', [VerifikasiController::class, 'data_diterima'])->name('verifikasi.data.diterima');
        Route::get('/Verifikasi/menunggu/ditolak/{id}', [VerifikasiController::class, 'data_ditolak'])->name('verifikasi.data.ditolak');
        Route::get('/Verifikasi/menunggu', [VerifikasiController::class, 'menunggu'])->name('verifikasi.menunggu');
        Route::get('/Verifikasi/ditolak', [VerifikasiController::class, 'ditolak'])->name('verifikasi.ditolak');

        Route::get('Pembatalan', [PembatalanController::class, 'index'])->name('pembatalan');
        Route::get('Pembatalan/detail', [PembatalanController::class, 'detail'])->name('detail_pembatalan');
    
        Route::get('/Profile', [AdminController::class, 'show'])->name('profile');

        Route::get('/Posts', [PostController::class, 'index'])->name('posts');
        Route::get('/Posts/{post}', [PostController::class, 'show']);
