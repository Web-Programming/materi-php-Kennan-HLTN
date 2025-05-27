<?php

use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CekLogin;

Route::get('/', [AuthController::class, 'login']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function(){
//     return view('beranda', 
//     [
//             'name' => 'Kennan Hamilton',
//             'email' => 'kennanh2710@gmail.com',
//             'alamat' => 'Palembang'
//         ]
//     );
// });

// Route::get('/berita/{id}/{judul?}', function($id, $judul = null){
//     return view('berita', ['id' => $id, 'judul' => $judul]);
// });

//membuat route ke halam prodi index melalui controller ProdiController
//Route::get('/prodi/index', [ProdiController::class,'index']);
Route::get('/prodi/index', [ProdiController::class, 'index']);
Route::resource('prodi', ProdiController::class);
Route::resource('fakultas', FakultasController::class);
Route::resource('mhs', MahasiswaController::class); // ganti dari 'mahasiswa' ke 'mhs'
Route::resource('dosen', DosenController::class);

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