<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\SubKriteriaController;

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.login');
}); 

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard_admin');
});

Route::get('/user', function () {
    return view('user.dashboard_user');
});

Route::get('/user/kriteria', function () {
    return view('user.data_kriteria');
}); */

Route::get('/home', [HomeController::class,'home']);
Route::get('/login', [LoginController::class,'login']);

Route::get('/kriteria', [KriteriaController::class,'kriteria'])->name('kriteria');
Route::get('/tambahkriteria', [KriteriaController::class,'tambahkriteria']);
Route::post('/insertkriteria', [KriteriaController::class,'insertkriteria']);
Route::get('/tampilkriteria/{id}', [KriteriaController::class,'tampilkriteria'])->name('tampilkriteria');
Route::post('/editkriteria/{id}', [KriteriaController::class,'editkriteria']);
Route::get('/hapuskriteria/{id}', [KriteriaController::class,'hapuskriteria']);

Route::get('/subkriteria', [SubKriteriaController::class,'subkriteria'])->name('subkriteria');
Route::get('/tambahsubkriteria', [SubKriteriaController::class,'tambahsubkriteria']);
Route::post('/insertsubkriteria', [SubKriteriaController::class,'insertsubkriteria']);
Route::get('/tampilsubkriteria/{id}', [SubKriteriaController::class,'tampilsubkriteria'])->name('tampilsubkriteria');
Route::post('/editsubkriteria/{id}', [SubKriteriaController::class,'editsubkriteria']);
Route::get('/hapussubkriteria/{id}', [SubKriteriaController::class,'hapussubkriteria']);

Route::get('/makanan', [MakananController::class, 'makanan']);