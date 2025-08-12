@extends('layout.main')
@section('title', 'Baherindo Motor - Premium Motorcycles')
@section('content')

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">

    <div class="absolute inset-0 z-0">
           <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
        <source src="{{ asset('img/bike-riding-at-night.1920x1080.mp4') }}" type="video/mp4" />
        Your browser does not support the video tag.
    </video>
        <div class="absolute inset-0 bg-black/40"></div>
    </div>

    <div class="relative z-20 text-center max-w-6xl mx-auto px-6 hero-fade">
        <h1 class="hero-font text-7xl md:text-9xl font-black mb-8 tracking-wider pulse-glow">
            Baherindo Bike
        </h1>
        <p class="text-2xl md:text-3xl font-light mb-16 text-gray-300 max-w-4xl mx-auto leading-relaxed">
            Accelerating the world's transition to sustainable urban mobility
        </p>
        <div class="flex flex-col sm:flex-row gap-8 justify-center">
            <button class="tesla-btn-primary px-16 py-5 text-sm font-medium tracking-wider">
                Explore Models
            </button>

            <a href="/about">
            <button class="tesla-btn px-16 py-5 text-sm font-medium tracking-wider cursor-pointer">
                Our Story
            </button>
            </a>

        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <div class="w-6 h-10 border border-white/50 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-white/70 rounded-full mt-2 animate-bounce"></div>
        </div>
    </div>
</section>


<!-- Featured Models -->
<section class="py-24 bg-black">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-6xl font-light mb-6 tracking-tight">
                Our Models
            </h2>
            <p class="text-xl font-light text-gray-400 max-w-2xl mx-auto">
                Engineered for performance, designed for the future
            </p>
        </div>

        <div class="space-y-24">
            @foreach ($motor as $index => $m)
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center {{ $index % 2 == 1 ? 'lg:grid-flow-col-dense' : '' }}">

                <!-- Image -->
                <div class="{{ $index % 2 == 1 ? 'lg:col-start-2' : '' }}">
                    <img class="w-full h-fit object-cover" 
                         src="{{ $m ['gambar_motor'] }}" 
                         alt="{{ $m['name'] }}" />
                </div>
                
                <!-- Content -->
                <div class="{{ $index % 2 == 1 ? 'lg:col-start-1' : '' }} space-y-8">
                    <div>
                        <h3 class="text-4xl md:text-5xl font-light mb-4 tracking-tight">
                            {{ $m['nama_motor'] }}
                        </h3>
                        <p class="text-xl font-light text-gray-400 mb-8">
                            Starting at Rp{{ number_format($m['harga_motor'], 0, ',', '.') }}
                        </p>
                    </div>
                    
                    <!-- Specs -->
                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <div class="text-2xl font-light">{{ $m['tahun_motor'] }}</div>
                            <div class="text-sm font-medium tracking-wide uppercase text-gray-500">Year</div>
                        </div>
                        <div>
                            <div class="text-2xl font-light">{{ number_format($m['km_motor'], 0, ',', '.') }} km</div>
                            <div class="text-sm font-medium tracking-wide uppercase text-gray-500">km</div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="tesla-btn-primary px-8 py-3 text-sm font-medium tracking-wider cursor-pointer">
                            Order Now
                        </button>
                        <a href="{{ route('motor.show', $m->id) }}"><button class="tesla-btn px-8 py-3 text-sm font-medium tracking-wider cursor-pointer">
                            Learn More
                        </button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</section>

<!-- Experience Section -->
<section class="relative h-screen flex items-center justify-center">
    <div class="absolute inset-0 z-0">
        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/yes.jpg-pAxikDuxPxxWCRSU3bSbqBEHN5vtYl.jpeg" 
             alt="Experience the Thrill - NMAX Turbo" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/50"></div>
    </div>
    
    <div class="relative z-10 text-center max-w-4xl mx-auto px-6">
        <h2 class="text-5xl md:text-7xl font-light mb-8 tracking-tight">
            Experience
        </h2>
        <p class="text-xl md:text-2xl font-light mb-12 text-gray-300">
            Feel the power of advanced engineering and superior performance
        </p>
        <button class="tesla-btn-primary px-12 py-4 text-sm font-medium tracking-wider">
            Schedule Test Ride
        </button>
    </div>
</section>

@endsection
