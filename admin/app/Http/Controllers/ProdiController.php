<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listProdi = Prodi::get();
         return view('prodi.index',
        ['listprodi' => $listProdi]
    );}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $validateData = $request->validate([
        'nama' => 'required|min:5|max:200',
        'kode_prodi' => 'required|min:2|max:2',
        'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    $prodi = new Prodi();
    $prodi->nama = $validateData['nama'];
    $prodi->kode_prodi = $validateData['kode_prodi'];

    // upload logo
    if ($request->hasFile('logo')) {
        $file = $request->file('logo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $filename);
        $prodi->logo = $filename;
    }

    $prodi->save();


           return redirect("prodi")->with("status",
           "Data Program Studi Berhasil Disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $prodi = Prodi::findOrFail($id);
        return view('prodi.show', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $prodi = Prodi::findOrFail($id);
    return view('prodi.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $request->validate([
        'nama' => 'required|string|max:255',
        'kode_prodi' => 'required|string|max:20',
    ]);

    $prodi = Prodi::findOrFail($id);
    $prodi->update([
        'nama' => $request->nama,
        'kode_prodi' => $request->kode_prodi,
    ]);

    return redirect('/prodi')->with('status', 'Data Program Studi Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prodi = Prodi::findOrFail($id);
        $prodi->delete();

        return redirect('/prodi')->with('status', 'Data Program Studi berhasil dihapus');
    }
}
