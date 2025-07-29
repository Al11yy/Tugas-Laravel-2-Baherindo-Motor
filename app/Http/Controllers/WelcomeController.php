<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $motor = [

            ['id' => 1 , 'name' => 'Yamaha Nmax', 'price' => 30000000, 'tahun' => '2023', 'km' => 2000,], 
            ['id' => 2 , 'name' => 'Honda Vario 160', 'price' => 28000000, 'tahun' => '2022', 'km' => 3500],
            ['id' => 3 , 'name' => 'Suzuki Satria F150', 'price' => 24500000, 'tahun' => '2021', 'km' => 5000],
            ['id' => 4 , 'name' => 'Yamaha Aerox', 'price' => 29000000, 'tahun' => '2023', 'km' => 1500],
            ['id' => 5 , 'name' => 'Honda Beat', 'price' => 17000000, 'tahun' => '2020', 'km' => 7800],
            ['id' => 6 , 'name' => 'Kawasaki Ninja 250', 'price' => 62000000, 'tahun' => '2022', 'km' => 4200],
            ['id' => 7 , 'name' => 'Yamaha XSR 155', 'price' => 36500000, 'tahun' => '2023', 'km' => 1000],
            ['id' => 8 , 'name' => 'Honda Scoopy', 'price' => 23000000, 'tahun' => '2021', 'km' => 6300],
            ['id' => 9 , 'name' => 'Suzuki Nex II', 'price' => 17500000, 'tahun' => '2020', 'km' => 9000],
            ['id' => 10, 'name' => 'Yamaha R15', 'price' => 39500000, 'tahun' => '2022', 'km' => 2700],
            ['id' => 11, 'name' => 'Honda PCX 160', 'price' => 32500000, 'tahun' => '2023', 'km' => 1300],
            ['id' => 12, 'name' => 'Honda Heri', 'price' => 50000000, 'tahun' => '1980', 'km' => 1300]

            
            

        ];

        return view('welcome', compact('motor')); //compact buat di bawa ke welcome.blade.php nya
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
        //
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
