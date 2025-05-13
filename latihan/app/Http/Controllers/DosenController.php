<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return view('dosen.index');
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function show($id)
    {
        return view('dosen.detail', compact('id'));
    }

    public function destroy($id)
    {
        return view('dosen.delete', compact('id'));
    }
}
