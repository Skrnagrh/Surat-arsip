<?php

use App\Models\User;
use App\Models\Masuk;
use App\Models\Keluar;

use App\Http\Controllers\ExcelMasuk;
use App\Http\Controllers\PrintMasuk;

use App\Http\Controllers\DataPetugas;
use App\Http\Controllers\PrintKeluar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrintMasukSemua;
use App\Http\Controllers\SemuaController;
use App\Http\Controllers\PrintKeluarSemua;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardMasukController;
use App\Http\Controllers\DashboardKeluarController;

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
//     return view('login.index',[
//         'title' => 'Login'
//     ]);
// });

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register
// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);

// Halaman Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => 'Dashboard',
        "active" => "dashboard",
        'masuk' => Masuk::all(),
        'keluar' => Keluar::all(),
        'user' => User::where('id', auth()->user()->id)->get('name'),
    ]);
})->middleware('auth');

// Dashboard Surat Masuk
Route::resource('/dashboard/masuk', DashboardMasukController::class)->middleware('auth');
// Print Di Surat Masuk
Route::resource('/surat/masuk/print', PrintMasuk::class)->except('create', 'destroy',  'edit')->middleware('auth');
// Dashboard Surat Keluar
Route::resource('/dashboard/keluar', DashboardKeluarController::class)->middleware('auth');
// Print di Surat Keluar 
Route::resource('/surat/keluar/print', PrintKeluar::class)->except('create', 'destroy', 'show', 'edit')->middleware('auth');
// dashboard Profile
Route::resource('/dashboard/profile', ProfileController::class)->middleware('auth');
// Dashboard Untuk Menambahkan Data Petugas oleh Admin
Route::resource('/dashboard/datapetugas', DataPetugas::class)->except('show')->middleware('admin');
// Dashboard Semua Arsip (Masuk dan Keluar)
Route::resource('/dashboard/semua', SemuaController::class)->except('create', 'destroy', 'show', 'edit')->middleware('admin');
// Dashboard Admin Surat Masuk Semua dan Satu
Route::resource('/admin/surat/masuk', PrintMasukSemua::class)->except('create', 'destroy')->middleware('admin');
// Dashboard Admin Surat Keluar Semua dan Satu
Route::resource('/admin/surat/keluar', PrintKeluarSemua::class)->except('create', 'destroy')->middleware('admin');


// Route::resource('/excel/masuk', ExcelMasuk::class)->except('create', 'destroy',  'edit')->middleware('auth');