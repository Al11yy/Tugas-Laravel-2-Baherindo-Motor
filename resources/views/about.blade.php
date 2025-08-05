@extends('layout.main')
@section('title', 'About - Baherindo Motor')
@section('content')

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('img/r15 jir.png') }}" 
             alt="About Hero" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
    </div>
    
    <div class="relative z-10 text-center max-w-4xl mx-auto px-6 hero-fade">
        <h1 class="text-6xl md:text-8xl font-light mb-8 tracking-tight">
            About Us
        </h1>
        <p class="text-xl md:text-2xl font-light text-gray-300">
            Pioneering the future of urban mobility
        </p>
    </div>
</section>

<!-- Vision & Mission -->
<section class="bg-white text-black py-24">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl md:text-5xl font-light mb-8 tracking-tight">
                    Our Mission
                </h2>
                <p class="text-xl font-light leading-relaxed mb-8 text-gray-700">
                    To accelerate the world's transition to sustainable urban transportation through innovative motorcycle solutions.
                </p>
                <p class="text-lg font-light leading-relaxed text-gray-600">
                    We believe that premium motorcycles should be accessible to everyone, combining cutting-edge technology with exceptional design and uncompromising quality.
                </p>
            </div>
            <div>
                <img src="/placeholder.svg?height=600&width=800" 
                     alt="Mission" 
                     class="w-full h-96 object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="bg-black py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-6xl font-light mb-6 tracking-tight">
                Our Values
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
            <div class="text-center">
                <div class="w-20 h-20 bg-white mx-auto mb-8 flex items-center justify-center">
                    <svg class="w-10 h-10 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-light mb-4 tracking-tight">Innovation</h3>
                <p class="text-gray-400 font-light leading-relaxed">
                    Continuously pushing the boundaries of motorcycle technology and design.
                </p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-white mx-auto mb-8 flex items-center justify-center">
                    <svg class="w-10 h-10 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-light mb-4 tracking-tight">Quality</h3>
                <p class="text-gray-400 font-light leading-relaxed">
                    Uncompromising commitment to excellence in every motorcycle we deliver.
                </p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-white mx-auto mb-8 flex items-center justify-center">
                    <svg class="w-10 h-10 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-light mb-4 tracking-tight">Service</h3>
                <p class="text-gray-400 font-light leading-relaxed">
                    Exceptional customer experience from purchase to long-term ownership.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="bg-white text-black py-24">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-6xl font-light mb-6 tracking-tight">
                Our Journey
            </h2>
        </div>

        <div class="space-y-16">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
                <div class="text-center lg:text-right">
                    <div class="text-6xl font-light text-gray-300 mb-4">2019</div>
                    <h3 class="text-2xl font-light mb-4">Founded</h3>
                    <p class="text-gray-600 font-light">
                        Baherindo Motor was established with a vision to revolutionize motorcycle retail in Bekasi.
                    </p>
                </div>
                <div class="flex justify-center">
                    <div class="w-4 h-4 bg-black rounded-full"></div>
                </div>
                <div></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
                <div></div>
                <div class="flex justify-center">
                    <div class="w-4 h-4 bg-black rounded-full"></div>
                </div>
                <div class="text-center lg:text-left">
                    <div class="text-6xl font-light text-gray-300 mb-4">2021</div>
                    <h3 class="text-2xl font-light mb-4">Expansion</h3>
                    <p class="text-gray-600 font-light">
                        Expanded our inventory to include premium motorcycle brands and enhanced customer service.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
                <div class="text-center lg:text-right">
                    <div class="text-6xl font-light text-gray-300 mb-4">2024</div>
                    <h3 class="text-2xl font-light mb-4">Innovation</h3>
                    <p class="text-gray-600 font-light">
                        Launched digital platform and introduced sustainable mobility solutions.
                    </p>
                </div>
                <div class="flex justify-center">
                    <div class="w-4 h-4 bg-red-500 rounded-full"></div>
                </div>
                <div></div>
            </div>
        </div>
    </div>
</section>

@endsection
