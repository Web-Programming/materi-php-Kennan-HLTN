<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.index');
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function show($id)
    {
        return view('mahasiswa.detail', compact('id'));
    }

    public function destroy($id)
    {
        return view('mahasiswa.delete', compact('id'));
    }
}
