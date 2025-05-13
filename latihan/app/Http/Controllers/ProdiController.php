<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        return view('prodi.index');
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function show($id)
    {
        return view('prodi.detail', compact('id'));
    }

    public function destroy($id)
    {
        return view('prodi.delete', compact('id'));
    }
}
