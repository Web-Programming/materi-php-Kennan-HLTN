<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
{
    $listprodi = Prodi::all();
    return view('home', compact('listprodi'));
}
}
