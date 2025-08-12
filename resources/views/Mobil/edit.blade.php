@extends('layout.main')
@section('title', 'Edit Mobil - Baherindo Mobil')
@section('content')

<section class="pt-32 pb-24 bg-black min-h-screen">
    <div class="max-w-5xl mx-auto px-6">
        <!-- Header -->
        <div class="text-center mb-16 hero-fade">
            <h1 class="text-5xl md:text-6xl font-light mb-6 tracking-tight">
                Edit Model
            </h1>
            <p class="text-xl font-light text-gray-400">
                Update car information
            </p>
        </div>

        <!-- Back Button -->
        <div class="mb-12 hero-fade">
            <a href="/home" class="inline-flex items-center space-x-2 text-gray-400 hover:text-white smooth-transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="text-sm font-medium tracking-wide uppercase">Back to Models</span>
            </a>
        </div>

        <!-- Form -->
        <div class="bg-white text-black hero-fade p-12">
            <form class="space-y-8" method="POST" action="{{ route('mobil.update', $mobil->id) }}">
                @csrf
                @method('PUT')

                <!-- Mobil Name -->
                <div>
                    <label for="nama_mobil" class="block text-sm font-medium tracking-wide uppercase text-gray-700 mb-3">
                        Car Name
                    </label>
                    <input type="text"
                           name="nama_mobil"
                           id="nama_mobil"
                           value="{{ $mobil->nama_mobil }}"
                           placeholder="Enter car name"
                           class="w-full border-b-2 border-gray-300 bg-transparent pb-4 text-2xl font-light focus:outline-none focus:border-black smooth-transition"
                           required />
                </div>

                <!-- Year -->
                <div>
                    <label for="tahun_mobil" class="block text-sm font-medium tracking-wide uppercase text-gray-700 mb-3">
                        Year
                    </label>
                    <input type="number"
                           name="tahun_mobil"
                           id="tahun_mobil"
                           value="{{ $mobil->tahun_mobil }}"
                           placeholder="Enter year"
                           min="1990"
                           max="{{ date('Y') + 1 }}"
                           class="w-full border-b-2 border-gray-300 bg-transparent pb-4 text-2xl font-light focus:outline-none focus:border-black smooth-transition"
                           required />
                </div>

                <!-- Mileage -->
                <div>
                    <label for="km_mobil" class="block text-sm font-medium tracking-wide uppercase text-gray-700 mb-3">
                        Mileage (KM)
                    </label>
                    <input type="number"
                           name="km_mobil"
                           id="km_mobil"
                           value="{{ $mobil->km_mobil }}"
                           placeholder="Enter mileage"
                           min="0"
                           class="w-full border-b-2 border-gray-300 bg-transparent pb-4 text-2xl font-light focus:outline-none focus:border-black smooth-transition"
                           required />
                </div>

                <!-- Price -->
                <div>
                    <label for="harga_mobil" class="block text-sm font-medium tracking-wide uppercase text-gray-700 mb-3">
                        Price (Rp)
                    </label>
                    <input type="number"
                           name="harga_mobil"
                           id="harga_mobil"
                           value="{{ $mobil->harga_mobil }}"
                           placeholder="Enter price"
                           min="0"
                           class="w-full border-b-2 border-gray-300 bg-transparent pb-4 text-2xl font-light focus:outline-none focus:border-black smooth-transition"
                           required />
                </div>

                <!-- Action Buttons -->
                <div class="pt-8 space-y-4">
                    <button type="submit"
                            class="w-full bg-black text-white py-6 text-sm font-medium tracking-wider uppercase hover:bg-gray-800 smooth-transition">
                        Update Mobil
                    </button>

                    <a href="/home"
                       class="block text-center border-2 border-gray-300 text-gray-700 py-4 text-sm font-medium tracking-wider uppercase hover:border-black hover:text-black smooth-transition">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
