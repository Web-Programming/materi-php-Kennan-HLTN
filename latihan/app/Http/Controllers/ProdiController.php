<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $listprodi = Prodi::get();
        return view("prodi.index", 
        ['listprodi' => $listprodi]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("prodi.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'nama' => 'required|min:5|max:20',
                'kode_prodi' => 'required|min:2|max:2',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // validasi file
                ]
        );

        $prodi = new Prodi();
        $prodi->nama = $validateData['nama']; //$request->nama
        $prodi->kode_prodi = $validateData['kode_prodi'];
        if ($request->hasFile('logo')) {
        $path = $request->file('logo')->store('logo_prodi', 'public');
        $prodi->logo = $path;
        }

        $prodi->save();

        //Prodi::create([
        //    'nama' =>  $validateData['nama'],
        //    'kode_prodi' => $validateData['kode_prodi']
        //]);

        return redirect("prodi")->with("status", "Data Program Studi berhasil disimpan!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //select prodi by id
        $prodi = Prodi::find($id);

        //buat view detail di folder view/prodi
        return view("prodi.detail", ['detailprodi' => $prodi]);
    }

    /**
     * Show the form for editing the specified resource.
     */public function edit(string $id)
{
    $prodi = Prodi::find($id);
    return view("prodi.edit", ['prodi' => $prodi]);
}

    /**
     * Update the specified resource in storage.
     */public function update(Request $request, string $id)
{
    // Validasi input
    $validateData = $request->validate([
        'nama' => 'required|min:5|max:20',
        'kode_prodi' => 'required|min:2|max:2'
    ]);

    // Cari data prodi berdasarkan ID
    $prodi = Prodi::find($id);

    // Jika data tidak ditemukan
    if (!$prodi) {
        return redirect('prodi')->with('status', 'Data tidak ditemukan!');
    }

    // Update data
    $prodi->nama = $validateData['nama'];
    $prodi->kode_prodi = $validateData['kode_prodi'];
    $prodi->save();

    return redirect('prodi')->with('status', 'Data Program Studi berhasil diupdate!');
}

    /**
     * Remove the specified resource from storage.
     */public function destroy(string $id)
{
    $prodi = Prodi::find($id);

    if (!$prodi) {
        return redirect('prodi')->with('status', 'Data tidak ditemukan!');
    }

    $prodi->delete();

    return redirect('prodi')->with('status', 'Data Program Studi berhasil dihapus!');
}
}
