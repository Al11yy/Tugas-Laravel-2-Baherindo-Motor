@extends('layout.main')
@section('title', 'Tentang Baherindo Motor')
@section('content')

<!-- Hero Section -->
<section class="bg-gray-950 py-24 px-6">
    <div class="text-center">
        <h1 class="text-7xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-indigo-500 mb-5">
            Tentang Kami
        </h1>
        <p class="text-lg text-purple-300 font-medium">
            Mengenal Lebih Dekat Baherindo Motor
        </p>
    </div>
</section>

<!-- About Content -->
<section class="p-6 bg-gray-950 text-white min-h-screen">
    <div class="max-w-4xl mx-auto bg-gradient-to-b from-gray-800 to-gray-900 border border-gray-700 rounded-xl shadow-lg p-8">
        <h2 class="text-3xl font-bold text-purple-400 mb-4">Visi & Misi</h2>
        <p class="text-purple-200 mb-6 leading-relaxed">
            Baherindo Motor hadir sebagai solusi jual beli motor murah, berkualitas, dan terpercaya di Bekasi. Kami berkomitmen untuk menyediakan layanan terbaik dengan pilihan motor yang beragam dan harga yang bersahabat.
        </p>

        <h2 class="text-3xl font-bold text-purple-400 mb-4">Mengapa Memilih Kami?</h2>
        <ul class="list-disc list-inside text-purple-200 space-y-2">
            <li>Unit motor lengkap dan bergaransi</li>
            <li>Proses transaksi mudah dan cepat</li>
            <li>Pembayaran bisa cash atau kredit</li>
            <li>Customer service yang ramah dan profesional</li>
        </ul>
    </div>
</section>

@endsection
