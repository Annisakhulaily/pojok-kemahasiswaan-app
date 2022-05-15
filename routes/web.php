<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('beranda.beranda');
});

Route::get('beranda', function () {
    return view('beranda.beranda');
});

Route::get('informasi', function () {
    return view('beranda.informasi');
});

Route::get('dokumen', function () {
    return view('beranda.dokumen');
});

Route::get('galeri', function () {
    return view('beranda.galeri');
});

Route::get('tentang', function () {
    return view('beranda.tentang');
});

Route::get('login', [LoginController::class, 'login']);

Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('login', [LoginController::class, 'authenticate']);

Route::get('registrasi', [RegistrasiController::class, 'index'])->name('registrasi');

Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('dashboard', function () {
    return view('admin.dashboard');
});

Route::get('dataadmin', function () {
    return view('admin.dataakun.dataadmin');
});

Route::get('datareviewer', function () {
    return view('admin.dataakun.datareviewer');
});

Route::get('datatim', function () {
    return view('admin.dataakun.datatim');
});

Route::get('datatimpkm', function () {
    return view('admin.datatimpkm.datatimpkm');
});

Route::get('reviewproposalpkm', function () {
    return view('admin.reviewproposalpkm.reviewproposalpkm');
});

Route::get('informasikegiatan', function () {
    return view('admin.informasikegiatan.informasikegiatan');
});

Route::get('beritakegiatan', function () {
    return view('admin.beritakegiatan.beritakegiatan');
});


Route::get('dashboard_reviewer', function () {
    return view('reviewer.dashboard_reviewer');
});

Route::get('datatim_reviewer', function () {
    return view('reviewer.datatim_reviewer.datatim_reviewer');
});

Route::get('reviewproposal_reviewer', function () {
    return view('reviewer.reviewproposal_reviewer.reviewproposal_reviewer');
});

Route::get('dashboard_tim', function () {
    return view('tim.dashboard_tim');
});

Route::get('daftartimpkm', function () {
    return view('tim.daftartimpkm.daftartimpkm');
});

Route::get('templateproposalpkm', function () {
    return view('tim.templateproposalpkm.templateproposalpkm');
});

Route::get('unggahproposal', function () {
    return view('tim.unggahproposal.unggahproposal');
});

Route::get('hasilreview', function () {
    return view('tim.hasilreview.hasilreview');
});
