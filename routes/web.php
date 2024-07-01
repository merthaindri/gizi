<?php

// web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\SubKriteriaController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\PerhitunganSAWController;
use App\Http\Controllers\UserKriteriaController;
use App\Http\Controllers\UserMakananController;
use App\Http\Controllers\UserRekomendasiController;
use Illuminate\Support\Facades\Auth;

// Rute untuk pengguna tidak terautentikasi
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    
    Route::get('/user', function () {
        return view('user.dashboard_user');
    })->name('user.dashboard');

    Route::get('/user/kriteria', [UserKriteriaController::class, 'userkriteria']);
    Route::get('/user/makanan', [UserMakananController::class, 'usermakanan']);
    Route::get('/user/rekomendasi', [UserRekomendasiController::class, 'rekomendasi']);

    Auth::routes();
});

// Rute untuk pengguna terautentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/kriteria', [KriteriaController::class, 'kriteria'])->name('kriteria');
    Route::get('/tambahkriteria', [KriteriaController::class, 'tambahkriteria']);
    Route::post('/insertkriteria', [KriteriaController::class, 'insertkriteria']);
    Route::get('/tampilkriteria/{id}', [KriteriaController::class, 'tampilkriteria'])->name('tampilkriteria');
    Route::post('/editkriteria/{id}', [KriteriaController::class, 'editkriteria']);
    Route::get('/hapuskriteria/{id}', [KriteriaController::class, 'hapuskriteria']);

    Route::get('/subkriteria', [SubKriteriaController::class, 'subkriteria'])->name('subkriteria');
    Route::get('/tambahsubkriteria', [SubKriteriaController::class, 'tambahsubkriteria']);
    Route::post('/insertsubkriteria', [SubKriteriaController::class, 'insertsubkriteria']);
    Route::get('/tampilsubkriteria/{id}', [SubKriteriaController::class, 'tampilsubkriteria'])->name('tampilsubkriteria');
    Route::post('/editsubkriteria/{id}', [SubKriteriaController::class, 'editsubkriteria']);
    Route::get('/hapussubkriteria/{id}', [SubKriteriaController::class, 'hapussubkriteria']);

    Route::get('/makanan', [MakananController::class, 'makanan'])->name('makanan');
    Route::get('/tambahmakanan', [MakananController::class, 'tambahmakanan']);
    Route::post('/insertmakanan', [MakananController::class, 'insertmakanan']);
    Route::get('/tampilmakanan/{nama_makanan}', [MakananController::class, 'tampilmakanan'])->name('tampilmakanan');
    Route::post('/editmakanan/{nama_makanan}', [MakananController::class, 'editmakanan']);
    Route::get('/hapusmakanan/{nama_makanan}', [MakananController::class, 'hapusmakanan']);

    Route::get('/perhitungansaw', [PerhitunganSAWController::class, 'perhitungansaw'])->name('perhitungansaw');

});
