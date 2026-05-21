<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Periode::all();
        return view('Periode.index',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('periode.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->validate([
            'tahun_akademik'=>'required',
            'semester'=>'required'
        ]);
        // Simpan data ke tabel fakultas
        Periode::create($input);
        // redirect ke route fakultas.index
        return redirect()->route('periode.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Periode $periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periode $periode)
    {
       $periode=Periode::find($periode);
        return view('Periode.edit',compact($periode));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periode $periode)
    {
        $input = $request->validate([
            'tahun_akademik'=>'required|unique:periodes,tahun_akademik,'.$periode,
            'semester'=>'required'
        ]);
        Periode::where('id',$periode)->update($input);
        return redirect()->route('Periode.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periode $periode)
    {
        $periode=Periode::find($periode,'id');
        $periode->delete();
        return redirect()->route('Periode.index');
    }
}
