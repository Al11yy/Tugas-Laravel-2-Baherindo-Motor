@extends('layout.main')
@section('title', 'Baherindo Motor - The Future of Urban Mobility')
@section('content')

<!-- Video Background Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Video -->
    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
        <source src="{{ asset('img/bmw-carros-driving.1920x1080.mp4') }}" type="video/mp4" />
        Your browser does not support the video tag.
    </video>
    
    <!-- Fallback animated background if video fails to load -->
    <div class="absolute inset-0 z-0 animated-bg" id="fallback-bg" style="display: none;">
        <div class="particles"></div>
        <div class="geometric-bg">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
    </div>
    
    <!-- Dark overlay for text readability -->
    <div class="absolute inset-0 bg-black/60 z-10"></div>
    
    <!-- Hero Content -->
    <div class="relative z-20 text-center max-w-6xl mx-auto px-6 hero-fade">
        <h1 class="hero-font text-7xl md:text-9xl font-black mb-8 tracking-wider pulse-glow">
            BAHERINDO
        </h1>
        <p class="text-2xl md:text-3xl font-light mb-16 text-gray-300 max-w-4xl mx-auto leading-relaxed">
            Accelerating the world's transition to sustainable urban mobility
        </p>
        <div class="flex flex-col sm:flex-row gap-8 justify-center">
            <button class="tesla-btn-primary px-16 py-5 text-sm font-medium tracking-wider">
                Explore Models
            </button>
            <button class="tesla-btn px-16 py-5 text-sm font-medium tracking-wider">
                Our Story
            </button>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20">
        <div class="w-6 h-10 border border-white/50 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-white/70 rounded-full mt-2 animate-bounce"></div>
        </div>
    </div>
</section>

<!-- Mission Statement -->
<section class="bg-white text-black py-32">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-5xl md:text-7xl font-light mb-12 tracking-tight">
            Our Mission
        </h2>
        <p class="text-2xl md:text-3xl font-light leading-relaxed text-gray-700 max-w-4xl mx-auto">
            To design and manufacture the world's most advanced motorcycles, 
            combining cutting-edge technology with uncompromising performance 
            and sustainable innovation.
        </p>
    </div>
</section>

<!-- Values Section -->
<section class="bg-black py-32">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-5xl md:text-7xl font-light mb-8 tracking-tight">
                Innovation
            </h2>
            <p class="text-xl font-light text-gray-400 max-w-3xl mx-auto">
                Every motorcycle we create pushes the boundaries of what's possible
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
            <div class="text-center">
                <div class="w-24 h-24 bg-white mx-auto mb-8 flex items-center justify-center">
                    <svg class="w-12 h-12 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-light mb-6 tracking-tight">Performance</h3>
                <p class="text-gray-400 font-light leading-relaxed text-lg">
                    Engineered for maximum efficiency and unparalleled riding experience in urban environments.
                </p>
            </div>

            <div class="text-center">
                <div class="w-24 h-24 bg-white mx-auto mb-8 flex items-center justify-center">
                    <svg class="w-12 h-12 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-light mb-6 tracking-tight">Quality</h3>
                <p class="text-gray-400 font-light leading-relaxed text-lg">
                    Every component meticulously crafted to meet the highest standards of reliability and durability.
                </p>
            </div>

            <div class="text-center">
                <div class="w-24 h-24 bg-white mx-auto mb-8 flex items-center justify-center">
                    <svg class="w-12 h-12 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-light mb-6 tracking-tight">Passion</h3>
                <p class="text-gray-400 font-light leading-relaxed text-lg">
                    Driven by our love for motorcycles and commitment to creating extraordinary riding experiences.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Experience Section with Video Background -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Video for Experience Section -->
    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
        <source src="{{ asset('img/motorcycle-experience.mp4') }}" type="video/mp4" />
        <!-- Fallback to image if video doesn't exist -->
        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/yes.jpg-pAxikDuxPxxWCRSU3bSbqBEHN5vtYl.jpeg" alt="Experience" class="w-full h-full object-cover" />
    </video>
    
    <!-- Fallback animated background -->
    <div class="absolute inset-0 z-0 animated-bg" id="experience-fallback" style="display: none;">
        <div class="absolute inset-0" style="background: 
            radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 40% 40%, rgba(120, 200, 255, 0.1) 0%, transparent 50%);
            animation: matrixShift 10s ease-in-out infinite;">
        </div>
        <div class="geometric-bg">
            <div class="shape" style="border-radius: 50%; animation-duration: 25s;"></div>
            <div class="shape" style="transform: rotate(45deg); animation-duration: 35s;"></div>
            <div class="shape" style="border-radius: 20%; animation-duration: 40s;"></div>
        </div>
    </div>
    
    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-black/50 z-10"></div>
    
    <div class="relative z-20 text-center max-w-5xl mx-auto px-6">
        <h2 class="hero-font text-6xl md:text-8xl font-black mb-8 tracking-wider pulse-glow">
            EXPERIENCE
        </h2>
        <p class="text-2xl md:text-3xl font-light mb-16 text-gray-300 leading-relaxed">
            The future of urban mobility starts with a single ride
        </p>
        <div class="flex flex-col sm:flex-row gap-8 justify-center">
            <button class="tesla-btn-primary px-16 py-5 text-sm font-medium tracking-wider">
                Schedule Test Ride
            </button>
            <button class="tesla-btn px-16 py-5 text-sm font-medium tracking-wider">
                Find Showroom
            </button>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="bg-white text-black py-32">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-5xl md:text-7xl font-light mb-8 tracking-tight">
                By the Numbers
            </h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-16 text-center">
            <div>
                <div class="text-6xl md:text-7xl font-light mb-4">500+</div>
                <div class="text-lg font-medium tracking-wide uppercase text-gray-600">Satisfied Customers</div>
            </div>
            <div>
                <div class="text-6xl md:text-7xl font-light mb-4">5+</div>
                <div class="text-lg font-medium tracking-wide uppercase text-gray-600">Years of Excellence</div>
            </div>
            <div>
                <div class="text-6xl md:text-7xl font-light mb-4">50+</div>
                <div class="text-lg font-medium tracking-wide uppercase text-gray-600">Premium Models</div>
            </div>
            <div>
                <div class="text-6xl md:text-7xl font-light mb-4">99%</div>
                <div class="text-lg font-medium tracking-wide uppercase text-gray-600">Customer Satisfaction</div>
            </div>
        </div>
    </div>
</section>

<!-- Technology Section -->
<section class="bg-black py-32">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-5xl md:text-6xl font-light mb-8 tracking-tight">
                    Advanced Technology
                </h2>
                <p class="text-xl font-light leading-relaxed text-gray-400 mb-12">
                    Our motorcycles feature state-of-the-art technology designed to enhance 
                    every aspect of your riding experience. From intelligent engine management 
                    to advanced safety systems, every innovation serves a purpose.
                </p>
                
                <div class="space-y-8">
                    <div class="flex items-start space-x-6">
                        <div class="w-12 h-12 bg-white flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-white mb-2">Smart Engine Management</h3>
                            <p class="text-gray-400 font-light">Optimized fuel efficiency and performance through intelligent engine control systems.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-6">
                        <div class="w-12 h-12 bg-white flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-white mb-2">Advanced Safety Systems</h3>
                            <p class="text-gray-400 font-light">Comprehensive safety features designed to protect you in every riding condition.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-6">
                        <div class="w-12 h-12 bg-white flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-white mb-2">Digital Integration</h3>
                            <p class="text-gray-400 font-light">Seamless connectivity and digital features for the modern urban rider.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/haha.jpg-44UMsbsyKdf7xeZ5yQNE4j8RJQaSti.jpeg" 
                     alt="Technology" 
                     class="w-full h-96 object-cover">
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-white text-black py-32">
    <div class="max-w-5xl mx-auto text-center px-6">
        <h2 class="text-5xl md:text-7xl font-light mb-8 tracking-tight">
            Ready to Begin?
        </h2>
        <p class="text-2xl font-light mb-16 text-gray-700 max-w-3xl mx-auto leading-relaxed">
            Discover the perfect motorcycle for your urban journey. 
            Experience the future of mobility today.
        </p>
        <div class="flex flex-col sm:flex-row gap-8 justify-center">
            <button class="bg-black text-white px-16 py-5 text-sm font-medium tracking-wider uppercase hover:bg-gray-800 smooth-transition">
                View All Models
            </button>
            <button class="border-2 border-black text-black px-16 py-5 text-sm font-medium tracking-wider uppercase hover:bg-black hover:text-white smooth-transition">
                Contact Us
            </button>
        </div>
    </div>
</section>

<style>
@keyframes matrixShift {
    0%, 100% { 
        background-position: 0% 0%, 100% 100%, 50% 50%;
    }
    33% { 
        background-position: 100% 0%, 0% 100%, 80% 20%;
    }
    66% { 
        background-position: 50% 100%, 50% 0%, 20% 80%;
    }
}
</style>

<script>
// Video fallback handling
document.addEventListener('DOMContentLoaded', function() {
    const videos = document.querySelectorAll('video');
    
    videos.forEach((video, index) => {
        video.addEventListener('error', function() {
            console.log('Video failed to load, showing fallback');
            const fallbackId = index === 0 ? 'fallback-bg' : 'experience-fallback';
            const fallback = document.getElementById(fallbackId);
            if (fallback) {
                fallback.style.display = 'block';
                video.style.display = 'none';
            }
        });
        
        // Check if video can play
        video.addEventListener('canplay', function() {
            console.log('Video loaded successfully');
        });
    });
});
</script>

@endsection
