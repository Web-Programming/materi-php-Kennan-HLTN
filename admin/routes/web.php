<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CekLogin;


Route::resource('materi', MateriController::class);
Route::get('/prodi/index', [ProdiController::class, 'index']);
Route::resource('fakultas', FakultasController::class);
Route::resource('mhs', MahasiswaController::class);
Route::resource('dosen', DosenController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('layout/collapsed-sidebar', function () {
    return view('collapsed-sidebar');
});

// authentication
Route::get("/login", [AuthController::class, 'login'])->name('login');
Route::post("/login", [AuthController::class, 'do_login']);
Route::get("/register", [AuthController::class, 'register']);
Route::post("/register", [AuthController::class, 'do_register']);
Route::get("/logout", [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth']], function (): void {
    Route::group(['middleware' => [CekLogin::class . ':admin']], function (): void {
        Route::get('/admin', [AdminController::class, 'index']);
        Route::resource('prodi', ProdiController::class);
        Route::resource('fakultas', FakultasController::class);
    });

    Route::group(['middleware' => [CekLogin::class . ':user']], function (): void {
        Route::get('/user', [UserController::class, 'index']);
    });
});