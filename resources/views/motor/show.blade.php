@extends('layout.main')
@section('title', 'Motor Details - Baherindo Motor')
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
                <img class="w-full h-96 object-cover mb-8" 
                     src="{{ asset('img/Nmax.png') }}" 
                     alt="Motor Image" />
                
                <!-- Thumbnail Gallery -->
                <div class="grid grid-cols-4 gap-4">
                    <img class="w-full h-20 object-cover border-2 border-white cursor-pointer" 
                         src="{{ asset('img/Nmax.png') }}" 
                         alt="Thumbnail" />
                    <img class="w-full h-20 object-cover border border-gray-700 hover:border-white smooth-transition cursor-pointer" 
                         src="{{ asset('img/Nmax.png') }}" 
                         alt="Thumbnail" />
                    <img class="w-full h-20 object-cover border border-gray-700 hover:border-white smooth-transition cursor-pointer" 
                         src="{{ asset('img/Nmax.png') }}" 
                         alt="Thumbnail" />
                    <img class="w-full h-20 object-cover border border-gray-700 hover:border-white smooth-transition cursor-pointer" 
                         src="{{ asset('img/Nmax.png') }}" 
                         alt="Thumbnail" />
                </div>
            </div>

            <!-- Details Section -->
            <div class="space-y-12 hero-fade">
                <div>
                    <h1 class="text-5xl md:text-6xl font-light mb-6 tracking-tight">
                        Yamaha NMAX 155
                    </h1>
                    <div class="text-3xl font-light text-gray-300 mb-12">
                        Starting at Rp 25,000,000
                    </div>
                </div>
                
                <!-- Specifications -->
                <div class="grid grid-cols-2 gap-12">
                    <div>
                        <div class="text-3xl font-light mb-2">2020</div>
                        <div class="text-sm font-medium tracking-wide uppercase text-gray-500">Year</div>
                    </div>
                    <div>
                        <div class="text-3xl font-light mb-2">15,000 km</div>
                        <div class="text-sm font-medium tracking-wide uppercase text-gray-500">Mileage</div>
                    </div>
                    <div>
                        <div class="text-3xl font-light mb-2">Excellent</div>
                        <div class="text-sm font-medium tracking-wide uppercase text-gray-500">Condition</div>
                    </div>
                    <div>
                        <div class="text-3xl font-light mb-2">Automatic</div>
                        <div class="text-sm font-medium tracking-wide uppercase text-gray-500">Transmission</div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="space-y-4">
                    <button class="w-full tesla-btn-primary py-4 text-sm font-medium tracking-wider">
                        Order Now
                    </button>
                    <button class="w-full tesla-btn py-4 text-sm font-medium tracking-wider">
                        Schedule Test Ride
                    </button>
                </div>

                <!-- Contact Info -->
                <div class="border-t border-gray-800 pt-12">
                    <h3 class="text-xl font-light mb-6 tracking-tight">Contact</h3>
                    <div class="space-y-4 text-gray-400">
                        <div>+62 812-3456-7890</div>
                        <div>Baherindo Motor, Bekasi</div>
                        <div>info@baherindomotor.com</div>
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
                    <p>
                        The 2020 Yamaha NMAX 155 represents the perfect fusion of urban mobility and cutting-edge technology. 
                        Engineered for the modern rider, this premium scooter delivers exceptional performance while maintaining 
                        the highest standards of reliability and efficiency.
                    </p>
                    <p>
                        Featuring advanced Smart Key System, LED lighting technology, and a comprehensive digital display, 
                        the NMAX 155 sets new benchmarks in the premium scooter segment. Every component has been meticulously 
                        maintained at authorized service centers, ensuring optimal performance and longevity.
                    </p>
                    <p>
                        Complete documentation included. Ready for immediate delivery with comprehensive warranty coverage.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
