@extends('layout.main')
@section('title', $mobil->nama_mobil . ' - Baherindo Mobil')
@section('content')

<section class="pt-32 pb-24 bg-black">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Back Button -->
        <div class="mb-12 hero-fade">
            <a href="/home" class="inline-flex items-center space-x-2 text-gray-400 hover:text-white smooth-transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="text-sm font-medium tracking-wide uppercase">Back</span>
            </a>
        </div>

        <!-- Mobil Detail -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
            <!-- Image Section -->
            <div class="hero-fade">
                <img class="w-full h-fit object-cover mb-8" 
                     src="{{ asset('storage/' . $mobil->gambar_mobil) }}" 
                     alt="{{ $mobil->nama_mobil }}" />
            </div>

            <!-- Details Section -->
            <div class="space-y-12 hero-fade">
                <div>
                    <h1 class="text-5xl md:text-6xl font-light mb-6 tracking-tight">
                        {{ $mobil->nama_mobil }}
                    </h1>
                    <div class="text-3xl font-light text-gray-300 mb-12">
                        Starting at Rp {{ number_format($mobil->harga_mobil, 0, ',', '.') }}
                    </div>
                </div>
                
                <!-- Specifications -->
                <div class="grid grid-cols-2 gap-12">
                    <div>
                        <div class="text-3xl font-light mb-2">{{ $mobil->tahun_mobil }}</div>
                        <div class="text-sm font-medium tracking-wide uppercase text-gray-500">Year</div>
                    </div>
                    <div>
                        <div class="text-3xl font-light mb-2">{{ number_format($mobil->km_mobil, 0, ',', '.') }} km</div>
                        <div class="text-sm font-medium tracking-wide uppercase text-gray-500">Mileage</div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mb-4">
                    <form action="">
                        <button class="w-full tesla-btn-primary py-4 text-sm font-medium tracking-wider cursor-pointer smooth-transition">
                            Order By WhatsApp
                        </button>
                    </form>
                </div>

                <div class="flex gap-4">
                    <form action="" class="flex-1">
                        <a href="{{ route('mobil.edit', $mobil->id) }}" 
                        class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white py-4 text-sm font-medium tracking-wider rounded-lg cursor-pointer smooth-transition">
                            Edit
                        </a>
                    </form>

                    <form action="{{ route('mobil.destroy', $mobil->id) }}" method="POST" class="flex-1">
                        @csrf
                        @method('DELETE')
                        <button class="w-full bg-red-600 hover:bg-red-700 text-white py-4 text-sm font-medium tracking-wider rounded-lg cursor-pointer smooth-transition">
                            Delete
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="border-t border-gray-800 pt-12">
                    <h3 class="text-xl font-light mb-6 tracking-tight">Contact</h3>
                    <div class="space-y-4 text-gray-400">
                        <div>{{ $mobil->kontak_mobil ?? '+62 812-3456-7890' }}</div>
                        <div>{{ $mobil->lokasi_mobil ?? 'Baherindo Mobil, Bekasi' }}</div>
                        <div>{{ $mobil->email_mobil ?? 'info@baherindomobil.com' }}</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Description -->
        <div class="mt-24 hero-fade">
            <div class="max-w-4xl">
                <h2 class="text-4xl font-light mb-8 tracking-tight">
                    About This Model
                </h2>
                <div class="text-xl font-light leading-relaxed text-gray-400 space-y-6">
                    {!! nl2br(e($mobil->deskripsi_mobil)) !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
