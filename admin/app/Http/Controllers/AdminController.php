<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class AdminController extends Controller
{
    public function index()
{
    $listprodi = Prodi::all(); // ambil semua data prodi
    return view('home', compact('listprodi')); // ✅ kirim ke view
}
}
