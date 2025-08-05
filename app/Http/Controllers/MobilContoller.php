<?php

namespace App\Http\Controllers;

use App\Models\MobilBaherindo;
use Illuminate\Http\Request;

class MobilContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mobil.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {   
    $validatedData = $request->validate([
        'nama_mobil' => 'required|string',
        'harga_mobil' => 'required|numeric',
        'tahun_mobil' => 'required|integer',
        'km_mobil' => 'required|integer',
        'gambar_mobil' => 'image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('gambar_mobil')) {
        $path = $request->file('gambar_mobil')->store('mobilbaherindoImage', 'public');
        $validatedData['gambar_mobil'] = $path;
    } else {
        $validatedData['gambar_mobil'] = null;
    }

    MobilBaherindo::create($validatedData);

    return redirect('/home2')->with('success', 'Data mobil berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
