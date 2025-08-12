@extends('layout.main')
@section('title', 'About - Baherindo Motor')
@section('content')

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Dynamic Background -->
    <div class="absolute inset-0 z-0">
        <!-- Animated Gradient -->
        <div class="about-gradient-bg"></div>
        
        <!-- Floating Tech Elements -->
        <div class="tech-elements">
            <div class="tech-circle tech-1"></div>
            <div class="tech-circle tech-2"></div>
            <div class="tech-circle tech-3"></div>
            <div class="tech-square tech-4"></div>
            <div class="tech-square tech-5"></div>
        </div>
        
        <!-- Binary Rain -->
        <div class="binary-rain">
            <div class="binary-column" data-text="01001000"></div>
            <div class="binary-column" data-text="01100101"></div>
            <div class="binary-column" data-text="01101100"></div>
            <div class="binary-column" data-text="01101100"></div>
            <div class="binary-column" data-text="01101111"></div>
        </div>
        
        <!-- Pulse Rings -->
        <div class="pulse-rings">
            <div class="pulse-ring ring-1"></div>
            <div class="pulse-ring ring-2"></div>
            <div class="pulse-ring ring-3"></div>
        </div>
    </div>
    
    <!-- Hero Content -->
    <div class="relative z-10 text-center max-w-6xl mx-auto px-8">
        <div class="hero-content">
            <!-- Made title much larger and added better spacing -->
            <h1 class="text-8xl md:text-9xl lg:text-[12rem] font-light mb-12 tracking-tight split-text leading-none">
                About Us
            </h1>
            <p class="text-2xl md:text-3xl lg:text-4xl font-light text-gray-300 reveal-text max-w-4xl mx-auto leading-relaxed">
                Pioneering the future of urban mobility
            </p>
        </div>
    </div>
    
    <!-- Animated Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <div class="scroll-indicator-about">
            <div class="scroll-wheel"></div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<!-- Increased padding from py-24 to py-40 and improved spacing -->
<section class="bg-white text-black py-40 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="pattern-grid"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div class="mission-content">
                <!-- Increased title size and bottom margin -->
                <h2 class="text-5xl md:text-7xl font-light mb-12 tracking-tight slide-in-left">
                    Our Mission
                </h2>
                <div class="mission-text space-y-8">
                    <p class="text-2xl font-light leading-relaxed text-gray-700 fade-in-up delay-1">
                        To accelerate the world's transition to sustainable urban transportation through innovative motorcycle solutions.
                    </p>
                    <p class="text-xl font-light leading-relaxed text-gray-600 fade-in-up delay-2">
                        We believe that premium motorcycles should be accessible to everyone, combining cutting-edge technology with exceptional design and uncompromising quality.
                    </p>
                </div>
                
                <!-- Animated Stats -->
                <!-- Increased top margin and gap between stats -->
                <div class="grid grid-cols-2 gap-12 mt-16">
                    <div class="stat-item">
                        <div class="text-4xl font-light text-black counter-about" data-target="15">0</div>
                        <div class="text-base font-medium tracking-wide uppercase text-gray-500 mt-2">Years Experience</div>
                    </div>
                    <div class="stat-item delay-1">
                        <div class="text-4xl font-light text-black counter-about" data-target="1000">0</div>
                        <div class="text-base font-medium tracking-wide uppercase text-gray-500 mt-2">Happy Customers</div>
                    </div>
                </div>
            </div>
            
            <div class="mission-image">
                <div class="image-container">
                    <img src="{{ asset('img/ini tempat nya anjay.jpg') }}" 
                         alt="Mission" 
                         class="w-full h-[500px] object-cover image-reveal rounded-lg" />
                    <div class="image-overlay"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section with More Padding -->
<!-- Increased padding to py-40 and improved spacing throughout -->
<section class="bg-black py-40 relative overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="values-bg"></div>
        <div class="constellation">
            <div class="star star-1"></div>
            <div class="star star-2"></div>
            <div class="star star-3"></div>
            <div class="star star-4"></div>
            <div class="star star-5"></div>
            <div class="star star-6"></div>
        </div>
    </div>
    
    <div class="max-w-8xl mx-auto px-8 relative z-10">
        <!-- Increased bottom margin and title size -->
        <div class="text-center mb-32">
            <h2 class="text-5xl md:text-7xl lg:text-8xl font-light mb-8 tracking-tight glitch-title" data-text="Our Values">
                Our Values
            </h2>
            <div class="title-underline"></div>
            <p class="text-xl md:text-2xl font-light text-gray-400 max-w-4xl mx-auto mt-8 leading-relaxed">
                The principles that drive our commitment to excellence
            </p>
        </div>

        <!-- Increased gap between cards and improved card spacing -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-16 lg:gap-24">
            <!-- Innovation Card -->
            <div class="value-card card-3d">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="icon-container">
                            <div class="icon-bg"></div>
                            <svg class="w-12 h-12 text-white relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-light mb-8 tracking-tight">Innovation</h3>
                        <p class="text-gray-400 font-light leading-relaxed text-lg">
                            Continuously pushing the boundaries of motorcycle technology and design.
                        </p>
                    </div>
                    <div class="card-back">
                        <h3 class="text-2xl font-light mb-8">Innovation Details</h3>
                        <ul class="text-base text-gray-300 space-y-4">
                            <li>• Advanced Engine Technology</li>
                            <li>• Smart Connectivity Features</li>
                            <li>• Eco-Friendly Solutions</li>
                            <li>• Future-Ready Design</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Quality Card -->
            <div class="value-card card-3d delay-2">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="icon-container">
                            <div class="icon-bg"></div>
                            <svg class="w-12 h-12 text-white relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-light mb-8 tracking-tight">Quality</h3>
                        <p class="text-gray-400 font-light leading-relaxed text-lg">
                            Uncompromising commitment to excellence in every motorcycle we deliver.
                        </p>
                    </div>
                    <div class="card-back">
                        <h3 class="text-2xl font-light mb-8">Quality Standards</h3>
                        <ul class="text-base text-gray-300 space-y-4">
                            <li>• Premium Materials Only</li>
                            <li>• Rigorous Testing Process</li>
                            <li>• International Certifications</li>
                            <li>• Lifetime Support</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Service Card -->
            <div class="value-card card-3d delay-4">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="icon-container">
                            <div class="icon-bg"></div>
                            <svg class="w-12 h-12 text-white relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-light mb-8 tracking-tight">Service</h3>
                        <p class="text-gray-400 font-light leading-relaxed text-lg">
                            Exceptional customer experience from purchase to long-term ownership.
                        </p>
                    </div>
                    <div class="card-back">
                        <h3 class="text-2xl font-light mb-8">Service Excellence</h3>
                        <ul class="text-base text-gray-300 space-y-4">
                            <li>• 24/7 Customer Support</li>
                            <li>• Expert Technicians</li>
                            <li>• Nationwide Network</li>
                            <li>• Personalized Care</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Section with Dark Background -->
<!-- Increased padding to py-40 and improved spacing -->
<section class="bg-black text-white py-40 relative overflow-hidden">
    <!-- Dark Background Animation -->
    <div class="absolute inset-0">
        <div class="dark-timeline-bg"></div>
        <div class="circuit-pattern"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-8 relative z-10">
        <!-- Increased bottom margin and title size -->
        <div class="text-center mb-32">
            <h2 class="text-5xl md:text-7xl lg:text-8xl font-light mb-8 tracking-tight slide-in-up text-white">
                Our Journey
            </h2>
            <div class="journey-line-dark"></div>
            <p class="text-xl md:text-2xl font-light text-gray-400 max-w-4xl mx-auto mt-8 leading-relaxed">
                Milestones that shaped our path to excellence
            </p>
        </div>

        <div class="timeline-container">
            <!-- Timeline Line -->
            <div class="timeline-line-dark"></div>
            
            <!-- Timeline Items -->
            <!-- Increased margin between timeline items -->
            <div class="timeline-item timeline-left mb-20" data-year="2019">
                <div class="timeline-content">
                    <div class="timeline-marker-dark"></div>
                    <div class="timeline-card-dark">
                        <div class="year-badge-dark">2019</div>
                        <h3 class="text-3xl font-light mb-6 text-white">Founded</h3>
                        <p class="text-gray-300 font-light text-lg leading-relaxed">
                            Baherindo Motor was established with a vision to revolutionize motorcycle retail in Bekasi.
                        </p>
                        <div class="timeline-icon-dark">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="timeline-item timeline-right mb-20" data-year="2021">
                <div class="timeline-content">
                    <div class="timeline-marker-dark"></div>
                    <div class="timeline-card-dark">
                        <div class="year-badge-dark">2021</div>
                        <h3 class="text-3xl font-light mb-6 text-white">Expansion</h3>
                        <p class="text-gray-300 font-light text-lg leading-relaxed">
                            Expanded our inventory to include premium motorcycle brands and enhanced customer service.
                        </p>
                        <div class="timeline-icon-dark">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="timeline-item timeline-left mb-20" data-year="2024">
                <div class="timeline-content">
                    <div class="timeline-marker-dark active"></div>
                    <div class="timeline-card-dark active">
                        <div class="year-badge-dark active">2024</div>
                        <h3 class="text-3xl font-light mb-6 text-white">Innovation</h3>
                        <p class="text-gray-300 font-light text-lg leading-relaxed">
                            Launched digital platform and introduced sustainable mobility solutions.
                        </p>
                        <div class="timeline-icon-dark">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Excellence & Recognition Section -->
<!-- Increased padding to py-40, renamed section, and improved spacing -->
<section class="bg-white text-black py-40 relative overflow-hidden">


        <!-- Statistics -->
        <!-- Increased top margin and padding, improved stat sizing -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-12 ">
            <div class="text-center achievement-stat">
                <div class="text-5xl font-light mb-4 counter-achievement" data-target="98">0</div>
                <div class="text-base font-medium tracking-wide uppercase text-gray-500">Customer Satisfaction</div>
            </div>
            <div class="text-center achievement-stat delay-1">
                <div class="text-5xl font-light mb-4 counter-achievement" data-target="5">0</div>
                <div class="text-base font-medium tracking-wide uppercase text-gray-500">Industry Awards</div>
            </div>
            <div class="text-center achievement-stat delay-2">
                <div class="text-5xl font-light mb-4 counter-achievement" data-target="15">0</div>
                <div class="text-base font-medium tracking-wide uppercase text-gray-500">Years Experience</div>
            </div>
            <div class="text-center achievement-stat delay-3">
                <div class="text-5xl font-light mb-4 counter-achievement" data-target="1200">0</div>
                <div class="text-base font-medium tracking-wide uppercase text-gray-500">Happy Customers</div>
            </div>
        </div>
    </div>

</section>

<style>
/* Existing styles remain the same... */
/* Hero Section Animations */
.about-gradient-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(-45deg, #000000, #1a1a1a, #2d2d2d, #1a1a1a, #000000);
    background-size: 400% 400%;
    animation: aboutGradient 20s ease infinite;
}

@keyframes aboutGradient {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* Tech Elements */
.tech-elements {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.tech-circle, .tech-square {
    position: absolute;
    border: 2px solid rgba(255, 255, 255, 0.1);
    animation: techFloat 15s ease-in-out infinite;
}

.tech-circle {
    border-radius: 50%;
}

.tech-1 { width: 80px; height: 80px; top: 20%; left: 10%; animation-delay: 0s; }
.tech-2 { width: 60px; height: 60px; top: 70%; right: 20%; animation-delay: 5s; }
.tech-3 { width: 100px; height: 100px; bottom: 30%; left: 30%; animation-delay: 10s; }
.tech-4 { width: 40px; height: 40px; top: 40%; right: 40%; animation-delay: 7s; }
.tech-5 { width: 70px; height: 70px; bottom: 20%; right: 10%; animation-delay: 12s; }

@keyframes techFloat {
    0%, 100% { transform: translate(0, 0) rotate(0deg); opacity: 0.3; }
    25% { transform: translate(20px, -20px) rotate(90deg); opacity: 0.7; }
    50% { transform: translate(-10px, 10px) rotate(180deg); opacity: 1; }
    75% { transform: translate(-20px, -10px) rotate(270deg); opacity: 0.5; }
}

/* Binary Rain */
.binary-rain {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.binary-column {
    position: absolute;
    top: -100%;
    width: 20px;
    height: 100px;
    color: rgba(0, 255, 0, 0.3);
    font-family: 'Courier New', monospace;
    font-size: 12px;
    animation: binaryFall 8s linear infinite;
}

.binary-column:nth-child(1) { left: 15%; animation-delay: 0s; }
.binary-column:nth-child(2) { left: 35%; animation-delay: 2s; }
.binary-column:nth-child(3) { left: 55%; animation-delay: 4s; }
.binary-column:nth-child(4) { left: 75%; animation-delay: 6s; }
.binary-column:nth-child(5) { left: 85%; animation-delay: 1s; }

.binary-column::before {
    content: attr(data-text);
    animation: binaryChange 1s infinite;
}

@keyframes binaryFall {
    0% { transform: translateY(-100px); opacity: 0; }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% { transform: translateY(100vh); opacity: 0; }
}

@keyframes binaryChange {
    0%, 50% { content: attr(data-text); }
    51%, 100% { content: "10110101"; }
}

/* Pulse Rings */
.pulse-rings {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.pulse-ring {
    position: absolute;
    border: 2px solid rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    animation: pulseExpand 4s ease-out infinite;
}

.ring-1 { width: 100px; height: 100px; animation-delay: 0s; }
.ring-2 { width: 100px; height: 100px; animation-delay: 1.3s; }
.ring-3 { width: 100px; height: 100px; animation-delay: 2.6s; }

@keyframes pulseExpand {
    0% {
        width: 100px;
        height: 100px;
        opacity: 1;
        transform: translate(-50%, -50%);
    }
    100% {
        width: 300px;
        height: 300px;
        opacity: 0;
        transform: translate(-50%, -50%);
    }
}

/* Split Text Animation */
.split-text {
    opacity: 0;
    animation: splitReveal 2s ease-out forwards;
}

@keyframes splitReveal {
    0% {
        opacity: 0;
        transform: translateY(100px) rotateX(90deg);
    }
    100% {
        opacity: 1;
        transform: translateY(0) rotateX(0deg);
    }
}

/* Reveal Text */
.reveal-text {
    opacity: 0;
    animation: revealText 1.5s ease-out 0.5s forwards;
}

@keyframes revealText {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Scroll Indicator About */
.scroll-indicator-about {
    width: 30px;
    height: 50px;
    border: 2px solid rgba(255, 255, 255, 0.5);
    border-radius: 25px;
    position: relative;
}

.scroll-wheel {
    width: 4px;
    height: 8px;
    background: rgba(255, 255, 255, 0.7);
    border-radius: 2px;
    position: absolute;
    top: 8px;
    left: 50%;
    transform: translateX(-50%);
    animation: scrollWheel 2s ease-in-out infinite;
}

@keyframes scrollWheel {
    0%, 20% { transform: translateX(-50%) translateY(0); opacity: 1; }
    100% { transform: translateX(-50%) translateY(20px); opacity: 0; }
}

/* Pattern Grid */
.pattern-grid {
    width: 100%;
    height: 100%;
    background-image: 
        linear-gradient(rgba(0,0,0,0.1) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0,0,0,0.1) 1px, transparent 1px);
    background-size: 50px 50px;
    animation: patternMove 20s linear infinite;
}

@keyframes patternMove {
    0% { transform: translate(0, 0); }
    100% { transform: translate(50px, 50px); }
}

/* Mission Content Animations */
.slide-in-left {
    opacity: 0;
    transform: translateX(-50px);
    animation: slideInLeft 1s ease-out forwards;
}

@keyframes slideInLeft {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.fade-in-up {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 1s ease-out forwards;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Image Reveal */
.image-container {
    position: relative;
    overflow: hidden;
}

.image-reveal {
    transform: scale(1.2);
    animation: imageReveal 1.5s ease-out forwards;
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, rgba(0,0,0,0.3), transparent);
    animation: overlaySlide 2s ease-out;
}

@keyframes imageReveal {
    to {
        transform: scale(1);
    }
}

@keyframes overlaySlide {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

/* Stat Items */
.stat-item {
    opacity: 0;
    transform: translateY(20px);
    animation: statReveal 1s ease-out forwards;
}

@keyframes statReveal {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Values Background */
.values-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at 30% 70%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 70% 30%, rgba(147, 51, 234, 0.1) 0%, transparent 50%);
    animation: valuesBgShift 15s ease-in-out infinite;
}

@keyframes valuesBgShift {
    0%, 100% { filter: hue-rotate(0deg); }
    50% { filter: hue-rotate(180deg); }
}

/* Constellation */
.constellation {
    position: absolute;
    width: 100%;
    height: 100%;
}

.star {
    position: absolute;
    width: 2px;
    height: 2px;
    background: white;
    border-radius: 50%;
    animation: starTwinkle 3s ease-in-out infinite;
}

.star-1 { top: 20%; left: 20%; animation-delay: 0s; }
.star-2 { top: 30%; right: 30%; animation-delay: 0.5s; }
.star-3 { bottom: 40%; left: 40%; animation-delay: 1s; }
.star-4 { top: 60%; right: 20%; animation-delay: 1.5s; }
.star-5 { bottom: 20%; left: 60%; animation-delay: 2s; }
.star-6 { top: 80%; right: 50%; animation-delay: 2.5s; }

@keyframes starTwinkle {
    0%, 100% { opacity: 0.3; transform: scale(1); }
    50% { opacity: 1; transform: scale(1.5); }
}

/* Glitch Title */
.glitch-title {
    position: relative;
    animation: glitchTitle 5s infinite;
}

.glitch-title::before,
.glitch-title::after {
    content: attr(data-text);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.glitch-title::before {
    animation: glitchBefore 3s infinite;
    color: #ff0000;
    z-index: -1;
}

.glitch-title::after {
    animation: glitchAfter 3s infinite;
    color: #00ff00;
    z-index: -2;
}

@keyframes glitchTitle {
    0%, 90%, 100% { transform: translate(0); }
    91%, 99% { transform: translate(2px, 0); }
}

@keyframes glitchBefore {
    0%, 90%, 100% { transform: translate(0); }
    91%, 99% { transform: translate(-2px, 0); }
}

@keyframes glitchAfter {
    0%, 90%, 100% { transform: translate(0); }
    91%, 99% { transform: translate(2px, -2px); }
}

/* Title Underline */
.title-underline {
    width: 100px;
    height: 2px;
    background: linear-gradient(90deg, transparent, white, transparent);
    margin: 0 auto;
    animation: underlineExpand 2s ease-out;
}

@keyframes underlineExpand {
    0% { width: 0; }
    100% { width: 100px; }
}

/* 3D Cards with More Padding */
.value-card {
    perspective: 1000px;
    height: 350px;
    opacity: 0;
    animation: cardReveal 1s ease-out forwards;
    padding: 1rem;
}

.card-3d {
    position: relative;
    width: 100%;
    height: 100%;
    transition: transform 0.6s;
    transform-style: preserve-3d;
    cursor: pointer;
}

.card-3d:hover {
    transform: rotateY(180deg);
}

.card-front,
.card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 3rem 2rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}

.card-back {
    transform: rotateY(180deg);
    background: rgba(255, 255, 255, 0.05);
}

.icon-container {
    position: relative;
    width: 80px;
    height: 80px;
    margin: 0 auto 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.icon-bg {
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
    border-radius: 50%;
    animation: iconRotate 10s linear infinite;
}

@keyframes iconRotate {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

@keyframes cardReveal {
    to {
        opacity: 1;
    }
}

/* Dark Timeline Styles */
.dark-timeline-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #000000 0%, #1a1a1a 50%, #000000 100%);
    animation: darkBgShift 20s ease-in-out infinite;
}

@keyframes darkBgShift {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.circuit-pattern {
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: 
        linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px);
    background-size: 100px 100px;
    animation: circuitMove 30s linear infinite;
}

@keyframes circuitMove {
    0% { transform: translate(0, 0); }
    100% { transform: translate(100px, 100px); }
}

.journey-line-dark {
    width: 200px;
    height: 2px;
    background: linear-gradient(90deg, transparent, #fff, transparent);
    margin: 0 auto;
    animation: journeyLineExpand 2s ease-out;
}

.timeline-line-dark {
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background: linear-gradient(to bottom, transparent, #fff, transparent);
    transform: translateX(-50%);
    animation: timelineGrow 3s ease-out;
}

.timeline-marker-dark {
    position: absolute;
    left: 50%;
    top: 50%;
    width: 20px;
    height: 20px;
    background: #fff;
    border: 4px solid #000;
    border-radius: 50%;
    transform: translate(-50%, -50%);
    z-index: 10;
    animation: markerPulseDark 2s ease-in-out infinite;
}

.timeline-marker-dark.active {
    background: #ff0000;
    animation: markerPulseActiveDark 2s ease-in-out infinite;
}

@keyframes markerPulseDark {
    0%, 100% { transform: translate(-50%, -50%) scale(1); }
    50% { transform: translate(-50%, -50%) scale(1.2); }
}

@keyframes markerPulseActiveDark {
    0%, 100% { 
        transform: translate(-50%, -50%) scale(1);
        box-shadow: 0 0 0 0 rgba(255, 0, 0, 0.7);
    }
    50% { 
        transform: translate(-50%, -50%) scale(1.2);
        box-shadow: 0 0 0 10px rgba(255, 0, 0, 0);
    }
}

.timeline-card-dark {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 2rem;
    border-radius: 8px;
    position: relative;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    backdrop-filter: blur(10px);
}

.timeline-card-dark:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(255, 255, 255, 0.1);
}

.timeline-card-dark.active {
    border: 2px solid #ff0000;
    background: rgba(255, 0, 0, 0.1);
}

.year-badge-dark {
    position: absolute;
    top: -15px;
    left: 2rem;
    background: #fff;
    color: #000;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 500;
}

.year-badge-dark.active {
    background: #ff0000;
    color: #fff;
}

.timeline-icon-dark {
    position: absolute;
    top: 1rem;
    right: 1rem;
    color: #ccc;
}

/* Awards Section */
.awards-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    opacity: 0.5;
}

.trophy-pattern {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.trophy-icon {
    position: absolute;
    width: 60px;
    height: 60px;
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23f59e0b' viewBox='0 0 24 24'%3E%3Cpath d='M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z'/%3E%3C/svg%3E") no-repeat center;
    background-size: contain;
    opacity: 0.1;
    animation: trophyFloat 20s ease-in-out infinite;
}

.trophy-1 { top: 20%; left: 10%; animation-delay: 0s; }
.trophy-2 { top: 60%; right: 15%; animation-delay: 7s; }
.trophy-3 { bottom: 20%; left: 20%; animation-delay: 14s; }

@keyframes trophyFloat {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    25% { transform: translate(20px, -20px) rotate(90deg); }
    50% { transform: translate(-10px, 10px) rotate(180deg); }
    75% { transform: translate(-20px, -10px) rotate(270deg); }
}

.awards-title {
    background: linear-gradient(45deg, #f59e0b, #d97706);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: titleShine 3s ease-in-out infinite;
}

@keyframes titleShine {
    0%, 100% { filter: brightness(1); }
    50% { filter: brightness(1.2); }
}

.award-card {
    opacity: 0;
    transform: translateY(50px);
    animation: awardReveal 1s ease-out forwards;
    background: white;
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
}

.award-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
    transition: left 0.5s;
}

.award-card:hover::before {
    left: 100%;
}

.award-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

.award-inner {
    text-align: center;
}

.award-icon {
    margin-bottom: 1.5rem;
    animation: iconBounce 2s ease-in-out infinite;
}

@keyframes iconBounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

@keyframes awardReveal {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.achievement-stat {
    opacity: 0;
    transform: translateY(30px);
    animation: statReveal 1s ease-out forwards;
}

/* Delay Classes */
.delay-1 { animation-delay: 0.2s; }
.delay-2 { animation-delay: 0.4s; }
.delay-3 { animation-delay: 0.6s; }
.delay-4 { animation-delay: 0.8s; }

/* Responsive */
@media (max-width: 768px) {
    .timeline-left .timeline-content,
    .timeline-right .timeline-content {
        margin: 0;
        padding: 0 1rem;
    }
    
    .timeline-line-dark {
        left: 2rem;
    }
    
    .timeline-marker-dark {
        left: 2rem;
    }
    
    .value-card {
        height: 300px;
        padding: 0.5rem;
    }
    
    .card-front,
    .card-back {
        padding: 2rem 1.5rem;
    }
}
</style>

<script>
// Counter Animation for About Page
function animateAboutCounters() {
    const counters = document.querySelectorAll('.counter-about');
    
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const increment = target / 100;
        let current = 0;
        
        const updateCounter = () => {
            if (current < target) {
                current += increment;
                counter.textContent = Math.ceil(current) + (target > 50 ? '+' : '');
                setTimeout(updateCounter, 30);
            } else {
                counter.textContent = target + (target > 50 ? '+' : '');
            }
        };
        
        updateCounter();
    });
}

// Counter Animation for Achievement Stats
function animateAchievementCounters() {
    const counters = document.querySelectorAll('.counter-achievement');
    
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const increment = target / 100;
        let current = 0;
        
        const updateCounter = () => {
            if (current < target) {
                current += increment;
                counter.textContent = Math.ceil(current) + (target > 50 ? '+' : target === 98 ? '%' : '');
                setTimeout(updateCounter, 30);
            } else {
                counter.textContent = target + (target > 50 ? '+' : target === 98 ? '%' : '');
            }
        };
        
        updateCounter();
    });
}

// Intersection Observer for About Page
const aboutObserverOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const aboutObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.animationPlayState = 'running';
            
            // Trigger counter animation
            if (entry.target.classList.contains('stat-item')) {
                setTimeout(animateAboutCounters, 500);
            }
            
            // Trigger achievement counter animation
            if (entry.target.classList.contains('achievement-stat')) {
                setTimeout(animateAchievementCounters, 500);
            }
            
            // Timeline items
            if (entry.target.classList.contains('timeline-item')) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        }
    });
}, aboutObserverOptions);

// Initialize About Page Animations
document.addEventListener('DOMContentLoaded', () => {
    // Observe animated elements
    const aboutAnimatedElements = document.querySelectorAll(
        '.fade-in-up, .slide-in-left, .stat-item, .timeline-item, .award-card, .value-card, .achievement-stat'
    );
    
    aboutAnimatedElements.forEach(el => {
        if (el.classList.contains('fade-in-up') || el.classList.contains('slide-in-left')) {
            el.style.animationPlayState = 'paused';
        }
        aboutObserver.observe(el);
    });
    
    // Timeline item hover effects
    const timelineItems = document.querySelectorAll('.timeline-item');
    timelineItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            const marker = item.querySelector('.timeline-marker-dark');
            if (marker) {
                marker.style.transform = 'translate(-50%, -50%) scale(1.3)';
            }
        });
        
        item.addEventListener('mouseleave', () => {
            const marker = item.querySelector('.timeline-marker-dark');
            if (marker) {
                marker.style.transform = 'translate(-50%, -50%) scale(1)';
            }
        });
    });
    
    // 3D Card flip on mobile tap
    const cards3D = document.querySelectorAll('.card-3d');
    cards3D.forEach(card => {
        card.addEventListener('click', () => {
            card.style.transform = card.style.transform === 'rotateY(180deg)' 
                ? 'rotateY(0deg)' 
                : 'rotateY(180deg)';
        });
    });
});

// Parallax effect for about page
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    
    // Tech elements parallax
    const techElements = document.querySelectorAll('.tech-elements, .trophy-pattern');
    techElements.forEach(element => {
        const speed = 0.3;
        element.style.transform = `translateY(${scrolled * speed}px)`;
    });
    
    // Timeline line growth based on scroll
    const timelineLine = document.querySelector('.timeline-line-dark');
    if (timelineLine) {
        const timelineSection = timelineLine.closest('section');
        const rect = timelineSection.getBoundingClientRect();
        const progress = Math.max(0, Math.min(1, (window.innerHeight - rect.top) / (window.innerHeight + rect.height)));
        timelineLine.style.height = `${progress * 100}%`;
    }
});

// Add glitch effect to title randomly
setInterval(() => {
    const glitchTitle = document.querySelector('.glitch-title');
    if (glitchTitle && Math.random() > 0.95) {
        glitchTitle.style.animation = 'none';
        setTimeout(() => {
            glitchTitle.style.animation = 'glitchTitle 0.3s';
        }, 50);
    }
}, 1000);
</script>

@endsection
