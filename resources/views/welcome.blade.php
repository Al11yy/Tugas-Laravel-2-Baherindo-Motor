@extends('layout.main')
@section('title', 'Welcome to Baherindo Motor')
@section('content')

<!-- Hero Section -->
<section class="bg-gray-950 py-25 px-6">
    <div class="text-center">
        <h1 class="text-7xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-indigo-500 mb-2">
            Daftar Motor
        </h1>
        <p class="text-lg text-purple-300 font-medium">
            Jual Beli Motor Murah & Terpercaya di Bekasi
        </p>
    </div>
</section>

<!-- Produk Section -->
<section class="p-6 bg-gray-950 min-h-screen">
    {{-- Grid container --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($motor as $m)
        <div class="w-full max-w-sm bg-gradient-to-b from-gray-800 to-gray-900 border border-gray-700 rounded-xl shadow-lg overflow-hidden">
            <a href="#">
                <img class="p-4 rounded-t-lg object-cover w-auto h-atuo" src="{{ asset('img/Nmax.png') }}" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <h5 class="text-xl font-semibold tracking-tight text-white">{{ $m['name'] }}</h5>
                
                <div class="flex items-center gap-2 mt-2 mb-4">
                    <span class="bg-purple-800 text-purple-200 text-xs font-semibold px-2.5 py-0.5 rounded">{{ $m['tahun'] }}</span>
                    <span class="bg-purple-800 text-purple-200 text-xs font-semibold px-2.5 py-0.5 rounded">{{ number_format($m['km'], 0, ',', '.') }} km</span>
                </div>

                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold text-purple-400">Rp{{ number_format($m['price'], 0, ',', '.') }}</span>
                   
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection
