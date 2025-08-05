@extends('layout.main')
@section('title', 'Add Mobil - Baherindo Mobil')
@section('content')

<section class="pt-32 pb-24 bg-black min-h-screen">
    <div class="max-w-4xl mx-auto px-6">
        <!-- Header -->
        <div class="text-center mb-16 hero-fade">
            <h1 class="text-5xl md:text-6xl font-light mb-6 tracking-tight">
                Add New Car
            </h1>
            <p class="text-xl font-light text-gray-400">
                Add a new car to our inventory
            </p>
        </div>

        <!-- Form -->
        <div class="bg-white text-black p-12 hero-fade">
            <form action="{{ route('mobil.store') }}" method="POST" enctype="multipart/form-data" class="space-y-12">
                @csrf
                <!-- Car Name -->
                <div>
                    <input type="text" 
                           name="nama_mobil" 
                           id="nama_mobil" 
                           placeholder="Car Name"
                           class="w-full border-b-2 border-gray-300 bg-transparent pb-4 text-2xl font-light focus:outline-none focus:border-black smooth-transition" 
                           required />
                </div>

                <!-- Year -->
                <div>
                    <input type="number" 
                           name="tahun_mobil" 
                           id="tahun_mobil" 
                           placeholder="Year"
                           class="w-full border-b-2 border-gray-300 bg-transparent pb-4 text-2xl font-light focus:outline-none focus:border-black smooth-transition" 
                           required />
                </div>

                <!-- Mileage -->
                <div>
                    <input type="number" 
                           name="km_mobil" 
                           id="km_mobil" 
                           placeholder="Mileage (KM)"
                           class="w-full border-b-2 border-gray-300 bg-transparent pb-4 text-2xl font-light focus:outline-none focus:border-black smooth-transition" 
                           required />
                </div>

                <!-- Price -->
                <div>
                    <input type="number" 
                           name="harga_mobil" 
                           id="harga_mobil" 
                           placeholder="Price (Rp)"
                           class="w-full border-b-2 border-gray-300 bg-transparent pb-4 text-2xl font-light focus:outline-none focus:border-black smooth-transition" 
                           required />
                </div>

                <!-- Upload Photo -->
                <div>
                    <label for="gambar_mobil" class="block text-lg font-medium mb-2">Upload Photo</label>
                    <input type="file" 
                           name="gambar_mobil" 
                           id="gambar_mobil"
                           accept="image/*"
                           class="w-full text-sm text-gray-500
                                  file:mr-4 file:py-3 file:px-6
                                  file:rounded-md file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-black file:text-white
                                  hover:file:bg-gray-800 transition" 
                           required />
                </div>

                <!-- Submit Button -->
                <div class="pt-12">
                    <button type="submit" 
                            class="w-full bg-black text-white py-6 text-sm font-medium tracking-wider uppercase hover:bg-gray-800 smooth-transition">
                        Add to Inventory
                    </button>
                </div>

            </form>
        </div>
    </div>
</section>

@endsection
