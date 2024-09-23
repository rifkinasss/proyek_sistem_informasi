<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperAdmin\UserController;
use App\Http\Controllers\User\DashController as DashController;
use App\Http\Controllers\Admin\DashController as AdminDashController;
use App\Http\Controllers\SuperAdmin\DashController as SuperAdminDashController;

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

Route::get('/', [DashController::class, 'index']);
Route::get('/gambaran-umum', [DashController::class, 'gambaranUmum']);
Route::get('/visi-misi', [DashController::class, 'visimisi']);
Route::get('/struktur-organisasi', [DashController::class, 'struktur']);
Route::get('/tugas-pokok-dan-fungsi', [DashController::class, 'tupoksi']);
Route::get('/berita', [DashController::class, 'berita']);
Route::get('/layanan', [DashController::class, 'layanan']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('superadmin')->group(function () {
    Route::get('dashboard-superadmin', [SuperAdminDashController::class, 'index'])->name('superadmin');
    Route::get('dashboard-superadmin/user-management/admin', [UserController::class, 'admin'])->name('user-management.admin');
    Route::post('dashboard-superadmin/user-management/create', [UserController::class, 'createAdmin'])->name('user-management.createAdmin');
    Route::get('dashboard-superadmin/user-management/penduduk', [UserController::class, 'penduduk'])->name('user-management.penduduk');
});

Route::middleware('admin')->group(function () {
    Route::get('dashboard', [AdminDashController::class, 'index'])->name('admin');
});
