@extends('layout.main')
@section('title', 'Baherindo Motor - The Future of Urban Mobility')
@section('content')

<!-- Animated Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Animated Background Layers -->
    <div class="absolute inset-0 z-0">
        <!-- Gradient Animation -->
        <div class="gradient-bg"></div>
        
        <!-- Floating Particles -->
        <div class="particles-container">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
        
        <!-- Geometric Shapes -->
        <div class="geometric-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
        </div>
        
        <!-- Matrix Rain Effect -->
        <div class="matrix-rain">
            <div class="matrix-column"></div>
            <div class="matrix-column"></div>
            <div class="matrix-column"></div>
            <div class="matrix-column"></div>
            <div class="matrix-column"></div>
        </div>
        
        <!-- Glitch Lines -->
        <div class="glitch-lines">
            <div class="glitch-line"></div>
            <div class="glitch-line"></div>
            <div class="glitch-line"></div>
        </div>
    </div>
    
    <!-- Hero Content with Animations -->
    <div class="relative z-10 text-center max-w-6xl mx-auto px-6">
        <!-- Animated Logo/Title -->
        <div class="logo-container mb-8">
            <h1 class="hero-font text-7xl md:text-9xl font-black tracking-wider animated-title">
                <span class="letter" data-letter="B">B</span>
                <span class="letter" data-letter="A">A</span>
                <span class="letter" data-letter="H">H</span>
                <span class="letter" data-letter="E">E</span>
                <span class="letter" data-letter="R">R</span>
                <span class="letter" data-letter="I">I</span>
                <span class="letter" data-letter="N">N</span>
                <span class="letter" data-letter="D">D</span>
                <span class="letter" data-letter="O">O</span>
            </h1>
            
            <!-- Glitch Effect Overlay -->
            <h1 class="hero-font text-7xl md:text-9xl font-black tracking-wider glitch-text absolute top-0 left-0 w-full">
                BAHERINDO
            </h1>
        </div>
        
        <!-- Animated Subtitle -->
        <p class="text-2xl md:text-3xl font-light mb-16 text-gray-300 max-w-4xl mx-auto leading-relaxed typewriter">
            Accelerating the world's transition to sustainable urban mobility
        </p>
        
        <!-- Animated Buttons -->
        <div class="flex flex-col sm:flex-row gap-8 justify-center button-container">
            <button class="tesla-btn-primary px-16 py-5 text-sm font-medium tracking-wider animated-btn">
                Explore Models
            </button>
            <a href="/about">
            <button class="tesla-btn px-16 py-5 text-sm font-medium tracking-wider animated-btn cursor-pointer">
                Our Story
            </button>
            </a>
        </div>
    </div>
    
    <!-- Animated Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10 scroll-indicator">
        <div class="w-6 h-10 border border-white/50 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-white/70 rounded-full mt-2 scroll-dot"></div>
        </div>
    </div>
</section>

<!-- Mission Statement -->
<section class="bg-white text-black py-32">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-5xl md:text-7xl font-light mb-12 tracking-tight fade-in-up">
            Our Mission
        </h2>
        <p class="text-2xl md:text-3xl font-light leading-relaxed text-gray-700 max-w-4xl mx-auto fade-in-up delay-1">
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
            <h2 class="text-5xl md:text-7xl font-light mb-8 tracking-tight fade-in-up">
                Innovation
            </h2>
            <p class="text-xl font-light text-gray-400 max-w-3xl mx-auto fade-in-up delay-1">
                Every motorcycle we create pushes the boundaries of what's possible
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
            <div class="text-center card-hover">
                <div class="w-24 h-24 bg-white mx-auto mb-8 flex items-center justify-center icon-float">
                    <svg class="w-12 h-12 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-light mb-6 tracking-tight">Performance</h3>
                <p class="text-gray-400 font-light leading-relaxed text-lg">
                    Engineered for maximum efficiency and unparalleled riding experience in urban environments.
                </p>
            </div>

            <div class="text-center card-hover delay-2">
                <div class="w-24 h-24 bg-white mx-auto mb-8 flex items-center justify-center icon-float delay-1">
                    <svg class="w-12 h-12 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-light mb-6 tracking-tight">Quality</h3>
                <p class="text-gray-400 font-light leading-relaxed text-lg">
                    Every component meticulously crafted to meet the highest standards of reliability and durability.
                </p>
            </div>

            <div class="text-center card-hover delay-4">
                <div class="w-24 h-24 bg-white mx-auto mb-8 flex items-center justify-center icon-float delay-2">
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

<!-- Experience Section with Animated Background -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 z-0">
        <!-- Morphing Background -->
        <div class="morphing-bg"></div>
        
        <!-- Floating Elements -->
        <div class="floating-elements">
            <div class="float-element element-1"></div>
            <div class="float-element element-2"></div>
            <div class="float-element element-3"></div>
            <div class="float-element element-4"></div>
        </div>
        
        <!-- Wave Animation -->
        <div class="wave-container">
            <div class="wave wave-1"></div>
            <div class="wave wave-2"></div>
            <div class="wave wave-3"></div>
        </div>
    </div>
    
    <div class="relative z-10 text-center max-w-5xl mx-auto px-6">
        <h2 class="hero-font text-6xl md:text-8xl font-black mb-8 tracking-wider text-reveal">
            EXPERIENCE
        </h2>
        <p class="text-2xl md:text-3xl font-light mb-16 text-gray-300 leading-relaxed fade-in-up delay-2">
            The future of urban mobility starts with a single ride
        </p>
        <div class="flex flex-col sm:flex-row gap-8 justify-center">
            <button class="tesla-btn-primary px-16 py-5 text-sm font-medium tracking-wider animated-btn">
                Schedule Test Ride
            </button>
            <button class="tesla-btn px-16 py-5 text-sm font-medium tracking-wider animated-btn">
                Find Showroom
            </button>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="bg-white text-black py-32">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-5xl md:text-7xl font-light mb-8 tracking-tight fade-in-up">
                By the Numbers
            </h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-16 text-center">
            <div class="counter-container">
                <div class="text-6xl md:text-7xl font-light mb-4 counter" data-target="500">0</div>
                <div class="text-lg font-medium tracking-wide uppercase text-gray-600">Satisfied Customers</div>
            </div>
            <div class="counter-container delay-1">
                <div class="text-6xl md:text-7xl font-light mb-4 counter" data-target="5">0</div>
                <div class="text-lg font-medium tracking-wide uppercase text-gray-600">Years of Excellence</div>
            </div>
            <div class="counter-container delay-2">
                <div class="text-6xl md:text-7xl font-light mb-4 counter" data-target="50">0</div>
                <div class="text-lg font-medium tracking-wide uppercase text-gray-600">Premium Models</div>
            </div>
            <div class="counter-container delay-3">
                <div class="text-6xl md:text-7xl font-light mb-4 counter" data-target="99">0</div>
                <div class="text-lg font-medium tracking-wide uppercase text-gray-600">Customer Satisfaction</div>
            </div>
        </div>
    </div>
</section>

<!-- Technology Section -->
<section class="bg-black py-32">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div class="fade-in-left">
                <h2 class="text-5xl md:text-6xl font-light mb-8 tracking-tight">
                    Advanced Technology
                </h2>
                <p class="text-xl font-light leading-relaxed text-gray-400 mb-12">
                    Our motorcycles feature state-of-the-art technology designed to enhance 
                    every aspect of your riding experience. From intelligent engine management 
                    to advanced safety systems, every innovation serves a purpose.
                </p>
                
                <div class="space-y-8">
                    <div class="flex items-start space-x-6 feature-item">
                        <div class="w-12 h-12 bg-white flex items-center justify-center flex-shrink-0 icon-pulse">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-white mb-2">Smart Engine Management</h3>
                            <p class="text-gray-400 font-light">Optimized fuel efficiency and performance through intelligent engine control systems.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-6 feature-item delay-1">
                        <div class="w-12 h-12 bg-white flex items-center justify-center flex-shrink-0 icon-pulse delay-1">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-medium text-white mb-2">Advanced Safety Systems</h3>
                            <p class="text-gray-400 font-light">Comprehensive safety features designed to protect you in every riding condition.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-6 feature-item delay-2">
                        <div class="w-12 h-12 bg-white flex items-center justify-center flex-shrink-0 icon-pulse delay-2">
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
            
            <div class="fade-in-right">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/haha.jpg-44UMsbsyKdf7xeZ5yQNE4j8RJQaSti.jpeg" 
                     alt="Technology" 
                     class="w-full h-96 object-cover image-hover">
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-white text-black py-32">
    <div class="max-w-5xl mx-auto text-center px-6">
        <h2 class="text-5xl md:text-7xl font-light mb-8 tracking-tight fade-in-up">
            Ready to Begin?
        </h2>
        <p class="text-2xl font-light mb-16 text-gray-700 max-w-3xl mx-auto leading-relaxed fade-in-up delay-1">
            Discover the perfect motorcycle for your urban journey. 
            Experience the future of mobility today.
        </p>
        <div class="flex flex-col sm:flex-row gap-8 justify-center fade-in-up delay-2">
            <button class="bg-black text-white px-16 py-5 text-sm font-medium tracking-wider uppercase hover:bg-gray-800 smooth-transition animated-btn">
                View All Models
            </button>
            <button class="border-2 border-black text-black px-16 py-5 text-sm font-medium tracking-wider uppercase hover:bg-black hover:text-white smooth-transition animated-btn">
                Contact Us
            </button>
        </div>
    </div>
</section>

<style>
/* Gradient Background Animation */
.gradient-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(-45deg, #000000, #1a1a1a, #2d2d2d, #000000, #0f0f0f);
    background-size: 400% 400%;
    animation: gradientShift 15s ease infinite;
}

@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* Floating Particles */
.particles-container {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.particle {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    animation: floatUp 20s infinite linear;
}

.particle:nth-child(1) { width: 4px; height: 4px; left: 10%; animation-delay: 0s; animation-duration: 25s; }
.particle:nth-child(2) { width: 6px; height: 6px; left: 20%; animation-delay: 2s; animation-duration: 30s; }
.particle:nth-child(3) { width: 3px; height: 3px; left: 30%; animation-delay: 4s; animation-duration: 20s; }
.particle:nth-child(4) { width: 5px; height: 5px; left: 40%; animation-delay: 6s; animation-duration: 35s; }
.particle:nth-child(5) { width: 4px; height: 4px; left: 60%; animation-delay: 8s; animation-duration: 25s; }
.particle:nth-child(6) { width: 7px; height: 7px; left: 70%; animation-delay: 10s; animation-duration: 40s; }
.particle:nth-child(7) { width: 3px; height: 3px; left: 80%; animation-delay: 12s; animation-duration: 22s; }
.particle:nth-child(8) { width: 5px; height: 5px; left: 90%; animation-delay: 14s; animation-duration: 28s; }

@keyframes floatUp {
    0% {
        transform: translateY(100vh) rotate(0deg);
        opacity: 0;
    }
    10% {
        opacity: 1;
    }
    90% {
        opacity: 1;
    }
    100% {
        transform: translateY(-100px) rotate(360deg);
        opacity: 0;
    }
}

/* Geometric Shapes */
.geometric-shapes {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.shape {
    position: absolute;
    border: 1px solid rgba(255, 255, 255, 0.1);
    animation: rotate 30s linear infinite;
}

.shape-1 {
    width: 200px;
    height: 200px;
    top: 20%;
    left: 10%;
    border-radius: 50%;
    animation-delay: 0s;
}

.shape-2 {
    width: 150px;
    height: 150px;
    top: 60%;
    right: 15%;
    animation-delay: -10s;
}

.shape-3 {
    width: 100px;
    height: 100px;
    bottom: 20%;
    left: 20%;
    border-radius: 20%;
    animation-delay: -20s;
}

.shape-4 {
    width: 120px;
    height: 120px;
    top: 40%;
    right: 40%;
    transform: rotate(45deg);
    animation-delay: -15s;
}

@keyframes rotate {
    0% { transform: rotate(0deg) scale(1); }
    50% { transform: rotate(180deg) scale(1.1); }
    100% { transform: rotate(360deg) scale(1); }
}

/* Matrix Rain Effect */
.matrix-rain {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.matrix-column {
    position: absolute;
    top: -100%;
    width: 2px;
    height: 100px;
    background: linear-gradient(transparent, rgba(0, 255, 0, 0.3), transparent);
    animation: matrixFall 10s linear infinite;
}

.matrix-column:nth-child(1) { left: 10%; animation-delay: 0s; }
.matrix-column:nth-child(2) { left: 30%; animation-delay: 2s; }
.matrix-column:nth-child(3) { left: 50%; animation-delay: 4s; }
.matrix-column:nth-child(4) { left: 70%; animation-delay: 6s; }
.matrix-column:nth-child(5) { left: 90%; animation-delay: 8s; }

@keyframes matrixFall {
    0% { transform: translateY(-100px); opacity: 0; }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% { transform: translateY(100vh); opacity: 0; }
}

/* Glitch Lines */
.glitch-lines {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.glitch-line {
    position: absolute;
    width: 100%;
    height: 2px;
    background: rgba(255, 255, 255, 0.1);
    animation: glitchMove 8s linear infinite;
}

.glitch-line:nth-child(1) { top: 20%; animation-delay: 0s; }
.glitch-line:nth-child(2) { top: 50%; animation-delay: 3s; }
.glitch-line:nth-child(3) { top: 80%; animation-delay: 6s; }

@keyframes glitchMove {
    0%, 90% { transform: translateX(-100%); opacity: 0; }
    5%, 85% { transform: translateX(0); opacity: 1; }
    10%, 80% { transform: translateX(100%); opacity: 0; }
    100% { transform: translateX(100%); opacity: 0; }
}

/* Animated Title */
.animated-title .letter {
    display: inline-block;
    animation: letterDrop 2s ease-out forwards;
    opacity: 0;
    transform: translateY(-100px) rotateX(90deg);
}

.animated-title .letter:nth-child(1) { animation-delay: 0.1s; }
.animated-title .letter:nth-child(2) { animation-delay: 0.2s; }
.animated-title .letter:nth-child(3) { animation-delay: 0.3s; }
.animated-title .letter:nth-child(4) { animation-delay: 0.4s; }
.animated-title .letter:nth-child(5) { animation-delay: 0.5s; }
.animated-title .letter:nth-child(6) { animation-delay: 0.6s; }
.animated-title .letter:nth-child(7) { animation-delay: 0.7s; }
.animated-title .letter:nth-child(8) { animation-delay: 0.8s; }
.animated-title .letter:nth-child(9) { animation-delay: 0.9s; }

@keyframes letterDrop {
    0% {
        opacity: 0;
        transform: translateY(-100px) rotateX(90deg);
    }
    50% {
        transform: translateY(10px) rotateX(0deg);
    }
    100% {
        opacity: 1;
        transform: translateY(0) rotateX(0deg);
    }
}

/* Glitch Text Effect */
.glitch-text {
    animation: glitch 3s infinite;
    opacity: 0;
}

@keyframes glitch {
    0%, 90%, 100% { opacity: 0; }
    91%, 99% { 
        opacity: 1; 
        transform: translate(2px, 1px);
        color: #ff0000;
    }
    92%, 98% { 
        transform: translate(-2px, -1px);
        color: #00ff00;
    }
    93%, 97% { 
        transform: translate(1px, 2px);
        color: #0000ff;
    }
}

/* Typewriter Effect */
.typewriter {
    overflow: hidden;
    border-right: 2px solid rgba(255, 255, 255, 0.75);
    white-space: nowrap;
    animation: typing 4s steps(60, end) 1s forwards, blink-caret 0.75s step-end infinite;
    width: 0;
}

@keyframes typing {
    from { width: 0; }
    to { width: 100%; }
}

@keyframes blink-caret {
    from, to { border-color: transparent; }
    50% { border-color: rgba(255, 255, 255, 0.75); }
}

/* Animated Buttons */
.animated-btn {
    position: relative;
    overflow: hidden;
    transform: translateY(50px);
    opacity: 0;
    animation: slideUp 1s ease-out 2s forwards;
}

.animated-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.animated-btn:hover::before {
    left: 100%;
}

@keyframes slideUp {
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Scroll Indicator */
.scroll-indicator {
    animation: bounce 2s infinite;
}

.scroll-dot {
    animation: scrollDot 2s infinite;
}

@keyframes scrollDot {
    0%, 20% { transform: translateY(0); }
    50% { transform: translateY(10px); }
    80%, 100% { transform: translateY(0); }
}

/* Morphing Background */
.morphing-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(120, 200, 255, 0.3) 0%, transparent 50%);
    animation: morphing 20s ease-in-out infinite;
}

@keyframes morphing {
    0%, 100% { 
        background-position: 0% 0%, 100% 100%, 50% 50%;
        filter: hue-rotate(0deg);
    }
    33% { 
        background-position: 100% 0%, 0% 100%, 80% 20%;
        filter: hue-rotate(120deg);
    }
    66% { 
        background-position: 50% 100%, 50% 0%, 20% 80%;
        filter: hue-rotate(240deg);
    }
}

/* Floating Elements */
.floating-elements {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.float-element {
    position: absolute;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 50%;
    animation: floatAround 15s ease-in-out infinite;
}

.element-1 {
    width: 60px;
    height: 60px;
    top: 20%;
    left: 10%;
    animation-delay: 0s;
}

.element-2 {
    width: 40px;
    height: 40px;
    top: 70%;
    right: 20%;
    animation-delay: 5s;
}

.element-3 {
    width: 80px;
    height: 80px;
    bottom: 30%;
    left: 30%;
    animation-delay: 10s;
}

.element-4 {
    width: 50px;
    height: 50px;
    top: 40%;
    right: 40%;
    animation-delay: 15s;
}

@keyframes floatAround {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    25% { transform: translate(30px, -30px) rotate(90deg); }
    50% { transform: translate(-20px, 20px) rotate(180deg); }
    75% { transform: translate(-30px, -20px) rotate(270deg); }
}

/* Wave Animation */
.wave-container {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100px;
    overflow: hidden;
}

.wave {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 200%;
    height: 100px;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
    animation: waveMove 10s linear infinite;
}

.wave-1 { animation-delay: 0s; }
.wave-2 { animation-delay: 3s; opacity: 0.5; }
.wave-3 { animation-delay: 6s; opacity: 0.3; }

@keyframes waveMove {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(0); }
}

/* Text Reveal Effect */
.text-reveal {
    background: linear-gradient(90deg, transparent 0%, white 50%, transparent 100%);
    background-size: 200% 100%;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: textReveal 3s ease-in-out;
}

@keyframes textReveal {
    0% { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}

/* Fade In Animations */
.fade-in-up {
    opacity: 0;
    transform: translateY(50px);
    animation: fadeInUp 1s ease-out forwards;
}

.fade-in-left {
    opacity: 0;
    transform: translateX(-50px);
    animation: fadeInLeft 1s ease-out forwards;
}

.fade-in-right {
    opacity: 0;
    transform: translateX(50px);
    animation: fadeInRight 1s ease-out forwards;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInLeft {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Delay Classes */
.delay-1 { animation-delay: 0.2s; }
.delay-2 { animation-delay: 0.4s; }
.delay-3 { animation-delay: 0.6s; }
.delay-4 { animation-delay: 0.8s; }

/* Card Hover Effects */
.card-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-hover:hover {
    transform: translateY(-10px);
}

/* Icon Animations */
.icon-float {
    animation: iconFloat 3s ease-in-out infinite;
}

.icon-pulse {
    animation: iconPulse 2s ease-in-out infinite;
}

@keyframes iconFloat {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

@keyframes iconPulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

/* Feature Item Animation */
.feature-item {
    opacity: 0;
    transform: translateX(-30px);
    animation: slideInLeft 0.8s ease-out forwards;
}

@keyframes slideInLeft {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Image Hover Effect */
.image-hover {
    transition: transform 0.5s ease, filter 0.5s ease;
}

.image-hover:hover {
    transform: scale(1.05);
    filter: brightness(1.1);
}

/* Counter Animation */
.counter-container {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 1s ease-out forwards;
}

/* Intersection Observer will trigger counter animation */
.counter.animate {
    animation: countUp 2s ease-out forwards;
}
</style>

<script>
// Counter Animation
function animateCounters() {
    const counters = document.querySelectorAll('.counter');
    
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const increment = target / 100;
        let current = 0;
        
        const updateCounter = () => {
            if (current < target) {
                current += increment;
                counter.textContent = Math.ceil(current) + (target > 50 ? '+' : '');
                setTimeout(updateCounter, 20);
            } else {
                counter.textContent = target + (target > 50 ? '+' : '');
            }
        };
        
        updateCounter();
    });
}

// Intersection Observer for animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.animationPlayState = 'running';
            
            // Trigger counter animation
            if (entry.target.classList.contains('counter-container')) {
                setTimeout(animateCounters, 500);
            }
        }
    });
}, observerOptions);

// Observe elements
document.addEventListener('DOMContentLoaded', () => {
    const animatedElements = document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right, .counter-container, .feature-item');
    
    animatedElements.forEach(el => {
        el.style.animationPlayState = 'paused';
        observer.observe(el);
    });
    
    // Add smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});

// Parallax effect for scroll
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const parallaxElements = document.querySelectorAll('.geometric-shapes, .floating-elements');
    
    parallaxElements.forEach(element => {
        const speed = 0.5;
        element.style.transform = `translateY(${scrolled * speed}px)`;
    });
});
</script>

@endsection
