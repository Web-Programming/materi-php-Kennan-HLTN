<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('beranda', ['name' => 'Kennan Hamilton', 'email' => 'kennanh2710@gmail.com', 'address' => 'Kedamaian Permai 2']);
});

Route::get('/berita/{id}/{judul?}', function ($id, $judul = null) {
    return view('berita', ['id' => $id, 'judul' => $judul]);
});

//membuat route ke halaman prodi index melalui controller ProdiController
Route::get('/prodi/index', [ProdiController::class,'index']);
