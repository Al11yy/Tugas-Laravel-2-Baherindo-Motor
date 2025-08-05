@extends('layout.main')
@section('title', 'Add Motor - Baherindo Motor')
@section('content')

<section class="pt-32 pb-24 bg-black min-h-screen">
    <div class="max-w-4xl mx-auto px-6">
        <!-- Header -->
        <div class="text-center mb-16 hero-fade">
            <h1 class="text-5xl md:text-6xl font-light mb-6 tracking-tight">
                Add New Model
            </h1>
            <p class="text-xl font-light text-gray-400">
                Add a new motorcycle to our inventory
            </p>
        </div>

        <!-- Form -->
        <div class="bg-white text-black p-12 hero-fade">
            <form action = "{{ route ('motor.store') }}" method="POST" enctype="multipart/form-data" class="space-y-12">
                @csrf
                <!-- Motor Name -->
                <div>
                    <input type="text" 
                           name="nama_motor" 
                           id="nama_motor" 
                           placeholder="Motor Name"
                           class="w-full border-b-2 border-gray-300 bg-transparent pb-4 text-2xl font-light focus:outline-none focus:border-black smooth-transition" 
                           required />
                </div>

                <!-- Year -->
                <div>
                    <input type="number" 
                           name="tahun_motor" 
                           id="tahun_motor" 
                           placeholder="Year"
                           class="w-full border-b-2 border-gray-300 bg-transparent pb-4 text-2xl font-light focus:outline-none focus:border-black smooth-transition" 
                           required />
                </div>

                <!-- Mileage -->
                <div>
                    <input type="number" 
                           name="km_motor" 
                           id="km_motor" 
                           placeholder="Mileage (KM)"
                           class="w-full border-b-2 border-gray-300 bg-transparent pb-4 text-2xl font-light focus:outline-none focus:border-black smooth-transition" 
                           required />
                </div>

                <!-- Price -->
                <div>
                    <input type="number" 
                           name="harga_motor" 
                           id="harga_motor" 
                           placeholder="Price (Rp)"
                           class="w-full border-b-2 border-gray-300 bg-transparent pb-4 text-2xl font-light focus:outline-none focus:border-black smooth-transition" 
                           required />
                </div>


                 <!-- Upload Photo -->
                <div>
                    <label for="gambar_motor" class="block text-lg font-medium mb-2">Upload Photo</label>
                    <input type="file" 
                        name="gambar_motor" 
                        id="gambar_motor"
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
