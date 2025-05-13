<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        return view('materi.index');
    }

    public function create()
    {
        return view('materi.create');
    }

    public function store(Request $request)
    {
        // Logika menyimpan data
    }

    public function show($id)
    {
        return view('materi.detail', compact('id'));
    }

    public function edit($id)
    {
        // Bisa digunakan jika kamu menambahkan view edit
    }

    public function update(Request $request, $id)
    {
        // Logika update data
    }

    public function destroy($id)
    {
        return view('materi.delete', compact('id'));
    }
}
