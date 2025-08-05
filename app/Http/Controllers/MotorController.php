<?php

namespace App\Http\Controllers;

use App\Models\MotorBaherindo;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('motor.create');
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
        // dd($request -> all ());
        $validatedData = $request->validate([
        'nama_motor' => 'required|string',
        'harga_motor' => 'required|numeric',
        'tahun_motor' => 'required|integer',
        'km_motor' => 'required|integer',
        'gambar_motor' => 'nullable|image|mimes:jpg,jpeg,png',
             ]);

        if ($request->hasFile('gambar_motor')) {
            $path = $request->file('gambar_motor')->store('motorbaherindoImage', 'public');
            $validatedData['gambar_motor'] = $path;
        } else {
            $validatedData['gambar_motor'] = null;
        }

        MotorBaherindo::create($validatedData);

        return redirect('/home')->with('success', 'Data motor berhasil ditambahkan!');

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
