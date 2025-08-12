@extends('layout.main')
@section('title', $motor->nama_motor . ' - Baherindo Motor')
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

        <!-- Motor Detail -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
            <!-- Image Section -->
            <div class="hero-fade">
                <img class="w-full h-fit object-cover mb-8" 
                     src="{{ asset('storage/' . $motor->gambar_motor) }}" 
                     alt="{{ $motor->nama_motor }}" />
                

            </div>

            <!-- Details Section -->
            <div class="space-y-12 hero-fade">
                <div>
                    <h1 class="text-5xl md:text-6xl font-light mb-6 tracking-tight">
                        {{ $motor->nama_motor }}
                    </h1>
                    <div class="text-3xl font-light text-gray-300 mb-12">
                        Starting at Rp {{ number_format($motor->harga_motor, 0, ',', '.') }}
                    </div>
                </div>
                
                <!-- Specifications -->
                <div class="grid grid-cols-2 gap-12">
                    <div>
                        <div class="text-3xl font-light mb-2">{{ $motor->tahun_motor }}</div>
                        <div class="text-sm font-medium tracking-wide uppercase text-gray-500">Year</div>
                    </div>
                    <div>
                        <div class="text-3xl font-light mb-2">{{ number_format($motor->km_motor, 0, ',', '.') }} km</div>
                        <div class="text-sm font-medium tracking-wide uppercase text-gray-500">Mileage</div>
                    </div>

                </div>

                <!-- Action Buttons -->
                <!-- tombol WhatsApp -->
                <div class="mb-4">
                    <form action="">
                        <button class="w-full tesla-btn-primary py-4 text-sm font-medium tracking-wider cursor-pointer smooth-transition">
                            Order By WhatsApp
                        </button>
                    </form>
                </div>


                <div class="flex gap-4">
                    <!-- tombol Edit -->

                    <form action="" class="flex-1">
                        <a href="{{ route('motor.edit', $motor->id) }}" 
                        class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white py-4 text-sm font-medium tracking-wider rounded-lg cursor-pointer smooth-transition">
                            Edit
                        </a>
                    </form>

                    <!-- tombol Delete -->
                    <form action="{{ route('motor.destroy', $motor->id) }}" method="POST" class="flex-1">
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
                        <div>{{ $motor->kontak_motor ?? '+62 812-3456-7890' }}</div>
                        <div>{{ $motor->lokasi_motor ?? 'Baherindo Motor, Bekasi' }}</div>
                        <div>{{ $motor->email_motor ?? 'info@baherindomotor.com' }}</div>
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
                    {!! nl2br(e($motor->deskripsi_motor)) !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
