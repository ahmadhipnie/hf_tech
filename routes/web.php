<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProyekJadiController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.admin');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/pesan', [LandingController::class, 'storePesanan'])->name('pesanan.store');


Route::post('/pesan-proyek', [LandingController::class, 'storePesananJadi'])->name('pesan.proyek.store');

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');

        Route::get('/pesanan', [PesananController::class, 'index'])->name('admin.pesanan');
        Route::patch('/admin/pesanan/{id}/status', [PesananController::class, 'updateStatus'])->name('admin.pesanan.updateStatus');

        Route::get('/proyek_jadi', [ProyekJadiController::class, 'index'])->name('admin.proyek');

        Route::get('/testimoni', [TestimoniController::class, 'index'])->name('admin.testimoni');
        Route::get('/testimoni/create', [TestimoniController::class, 'create'])->name('admin.testimoni.create');
        Route::post('/testimoni', [TestimoniController::class, 'store'])->name('admin.testimoni.store');
        Route::get('/testimoni/{id}/edit', [TestimoniController::class, 'edit'])->name('admin.testimoni.edit');
        Route::put('/testimoni/{id}', [TestimoniController::class, 'update'])->name('admin.testimoni.update');
        Route::delete('/testimoni/{id}', [TestimoniController::class, 'destroy'])->name('admin.testimoni.destroy');


        Route::get('/proyek_jadi', [ProyekJadiController::class, 'index'])->name('admin.proyek');
        Route::get('/proyek_jadi/create', [ProyekJadiController::class, 'create'])->name('admin.proyek.create');
        Route::post('/proyek_jadi', [ProyekJadiController::class, 'store'])->name('admin.proyek.store');
        Route::get('/proyek_jadi/{id}/edit', [ProyekJadiController::class, 'edit'])->name('admin.proyek.edit');
        Route::put('/proyek_jadi/{id}', [ProyekJadiController::class, 'update'])->name('admin.proyek.update');
        Route::delete('/proyek_jadi/{id}', [ProyekJadiController::class, 'destroy'])->name('admin.proyek.destroy');


        Route::get('/user', [UserController::class, 'index'])->name('admin.user');
        Route::get('/user/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/user', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::put('/user/{id}', [UserController::class, 'update'])->name('admin.user.update');
        Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');


        Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    });
});
