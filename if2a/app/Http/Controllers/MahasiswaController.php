<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa=Mahasiswa::with('prodi')->get();
        return view('mahasiswa.index',compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //input validation
        $request->validate([
            'npm'=>'required|unique:mahasiswa,npm',
            'nama'=>'required',
            'prodi_id'=>'required|exists:prodi,id',
            'foto'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        //upload
        if($request->hasFile('foto')){
            $foto=$request->file('foto');
            $nama_foto=time().'_'.$foto->getClientOriginalName();
            $foto->storeAs('fotos',$nama_foto,'public');//storage/app/public/fotos
        }else{
            $nama_foto=null;
        }
        $input['foto']=$nama_foto;
        //save
        Mahasiswa::create($input);
        //redirect
        return redirect()->route('mahasiswa.index')->with('success','Mahasiswa berhasil ditambahkan.');
        }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
