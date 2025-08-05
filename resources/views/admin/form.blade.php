@extends('layout.main')
@section('title', 'Admin Panel - Baherindo Motor')
@section('content')

<section class="pt-32 pb-24 bg-black min-h-screen">
    <div class="max-w-4xl mx-auto px-6">
        <!-- Header -->
        <div class="text-center mb-16 hero-fade">
            <h1 class="text-5xl md:text-6xl font-light mb-6 tracking-tight">
                Admin Panel
            </h1>
            <p class="text-xl font-light text-gray-400">
                Manage motorcycle inventory
            </p>
        </div>

        <!-- Form -->
        <div class="bg-white text-black p-12 hero-fade">
            <form class="space-y-12">
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
                           name="jumlah_km" 
                           id="jumlah_km" 
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

                <!-- Submit Button -->
                <div class="pt-12">
                    <button type="submit" 
                            class="w-full bg-black text-white py-6 text-sm font-medium tracking-wider uppercase hover:bg-gray-800 smooth-transition">
                        Submit Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
