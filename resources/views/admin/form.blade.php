@extends('layout.main')
@section('title', 'Welcome to Baherindo Motor')
@section('content')


<section class="mt-20 py-10 px-6">
    <div class="text-center mb-8">
        <h1 class="text-6xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-indigo-500 mb-2">
            Tambah Motor
        </h1>
        <p class="text-xl text-purple-300 font-medium">
            Baherindo Motor
        </p>
    </div>

    
<div class="pt-30">

    <form class="max-w-4xl mx-auto">

  <div class="relative z-0 w-full mb-5 group">
    <input type="text" name="nama_motor" id="nama_motor" class="block py-2.5 px-0 w-full text-base text-white bg-transparent border-0 border-b-2 border-purple-500 appearance-none focus:outline-none focus:ring-0 focus:border-purple-400 peer" placeholder=" " required />
    <label for="nama_motor" class="peer-focus:font-medium absolute text-sm text-purple-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-purple-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Motor</label>
  </div>

  <div class="relative z-0 w-full mb-5 group">
    <input type="number" name="tahun_motor" id="tahun_motor" class="block py-2.5 px-0 w-full text-base text-white bg-transparent border-0 border-b-2 border-purple-500 appearance-none focus:outline-none focus:ring-0 focus:border-purple-400 peer" placeholder=" " required />
    <label for="tahun_motor" class="peer-focus:font-medium absolute text-sm text-purple-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-purple-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"> Tahun Motor </label>
  </div>

  <div class="relative z-0 w-full mb-5 group">
    <input type="number" name="jumlah_km" id="jumlah_km" class="block py-2.5 px-0 w-full text-base text-white bg-transparent border-0 border-b-2 border-purple-500 appearance-none focus:outline-none focus:ring-0 focus:border-purple-400 peer" placeholder=" " required />
    <label for="jumlah_km"     class="peer-focus:font-medium absolute text-sm text-purple-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-purple-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">   Jumlah KM </label>
  </div>

  <div class="relative z-0 w-full mb-5 group">
    <input type="number" name="harga_motor" id="harga_motor" class="block py-2.5 px-0 w-full text-base text-white bg-transparent border-0 border-b-2 border-purple-500 appearance-none focus:outline-none focus:ring-0 focus:border-purple-400 peer" placeholder=" " required />
    <label for="harga_motor" class="peer-focus:font-medium absolute text-sm text-purple-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-purple-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"> Harga Motor </label>
  </div>

  <button type="submit"class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-base w-full sm:w-auto px-6 py-2.5 text-center">Submit</button>

</form>


</div>


</section>



@endsection
