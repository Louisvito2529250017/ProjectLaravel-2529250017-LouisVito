<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis=Prodi::with('fakultas')->get();
        return view('Prodi.index',compact('prodis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas=Fakultas::all();
        return view('Prodi.create',compact('fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->validate([
            'nama_prodi'=>'required|unique:prodis',
            'singkatan'=>'required',
            'kaprodi'=>'required',
            'fakultas_id'=>'required'
        ]);
        // Simpan data ke tabel fakultas
        prodi::create($input);
        // redirect ke route fakultas.index
        return redirect()->route('prodi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, prodi $prodi)
    {
        $input = $request->validate([
            'nama_prodi'=>'required|unique:prodi,nama_prodi,'.$prodi,
            'singkatan'=>'required',
            'kaprodi'=>'required',
            'fakultas_id'=>'required'
        ]);
        prodi::where('id',$prodi)->update($input);
        return redirect()->route('Prodi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prodi $prodi)
    {
        $prodi=Prodi::find($prodi,'id');
        $prodi->delete();
        return redirect()->route('Prodi.index');
    }
}
