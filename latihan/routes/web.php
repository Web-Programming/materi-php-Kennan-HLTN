<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('beranda',
    data : [
        'name'=>'Kennan',
        'Email' => 'kennanh2710@gmail.com',
        'alamat' => 'Kedamaian 2'
        ]
    );
});

Route::get('/berita/{id}/{judul?}', function ($id,$judul = null) {
    return view('berita', ['id' => $id,'judul' => $judul]); 
}); /*untuk judul = null */

/* Route::get('/berita/{id}/{judul}', function ($id,$judul) {
    return view('berita', ['id' => $id,'judul' => $judul]); : untuk judul input manual */
