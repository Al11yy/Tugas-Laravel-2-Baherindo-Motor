@extends('layout.main')
@section('title', 'Contact - Baherindo Motor')
@section('content')

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- New geometric background animation -->
    <div class="absolute inset-0 z-0">
        <div class="geometric-bg">
            <div class="floating-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
                <div class="shape shape-4"></div>
                <div class="shape shape-5"></div>
            </div>
            <div class="grid-overlay"></div>
        </div>
    </div>
    
    <!-- Hero Content -->
    <div class="relative z-10 text-center max-w-6xl mx-auto px-6">
        <!-- Much larger title with better spacing -->
        <h1 class="text-8xl md:text-12xl lg:text-[12rem] font-light mb-12 tracking-tight contact-title-new">
            Contact
        </h1>
        <p class="text-2xl md:text-3xl font-light text-gray-300 mb-8 slide-up-text">
            Let's start a conversation
        </p>
        <div class="scroll-indicator">
            <div class="scroll-line"></div>
        </div>
    </div>
</section>

<!-- Contact Content -->
<!-- Increased padding from py-24 to py-40 for better spacing -->
<section class="bg-white text-black py-40 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="contact-grid-pattern"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <!-- Better spacing with gap-32 instead of gap-20 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-32">
            <!-- Contact Info -->
            <div class="contact-info">
                <!-- Larger title with more margin -->
                <h2 class="text-5xl md:text-7xl font-light mb-20 tracking-tight slide-in-left">
                    Visit Us
                </h2>
                
                <!-- Increased spacing between cards -->
                <div class="space-y-12">
                    <!-- Showroom Card -->
                    <div class="info-card-new">
                        <div class="card-border"></div>
                        <div class="card-content-new">
                            <div class="info-icon-new">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div class="info-content">
                                <h3 class="text-2xl font-medium mb-6 tracking-wide">Showroom</h3>
                                <p class="text-xl font-light text-gray-600 leading-relaxed">
                                    Jl. Raya Bekasi No. 123<br>
                                    Bekasi, Jawa Barat 17141<br>
                                    Indonesia
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div class="info-card-new delay-1">
                        <div class="card-border"></div>
                        <div class="card-content-new">
                            <div class="info-icon-new">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div class="info-content">
                                <h3 class="text-2xl font-medium mb-6 tracking-wide">Phone</h3>
                                <p class="text-xl font-light text-gray-600">
                                    +62 812-3456-7890
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div class="info-card-new delay-2">
                        <div class="card-border"></div>
                        <div class="card-content-new">
                            <div class="info-icon-new">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="info-content">
                                <h3 class="text-2xl font-medium mb-6 tracking-wide">Email</h3>
                                <p class="text-xl font-light text-gray-600">
                                    info@baherindomotor.com
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Hours Card -->
                    <div class="info-card-new delay-3">
                        <div class="card-border"></div>
                        <div class="card-content-new">
                            <div class="info-icon-new">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="info-content">
                                <h3 class="text-2xl font-medium mb-6 tracking-wide">Hours</h3>
                                <div class="space-y-3 text-xl font-light text-gray-600">
                                    <div class="flex justify-between">
                                        <span>Monday - Friday</span>
                                        <span>08:00 - 17:00</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Saturday</span>
                                        <span>08:00 - 15:00</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Sunday</span>
                                        <span>Closed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-container-new">
                <!-- Larger title with more margin -->
                <h2 class="text-5xl md:text-7xl font-light mb-20 tracking-tight slide-in-right">
                    Get Quote
                </h2>
                
                <!-- New form design with better spacing -->
                <form class="contact-form-new space-y-12">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                        <div class="form-group-new">
                            <div class="input-container">
                                <input type="text" 
                                       id="firstName"
                                       placeholder=" "
                                       class="modern-input" 
                                       required>
                                <label for="firstName" class="modern-label">First Name</label>
                                <div class="input-focus-line"></div>
                            </div>
                        </div>
                        <div class="form-group-new">
                            <div class="input-container">
                                <input type="text" 
                                       id="lastName"
                                       placeholder=" "
                                       class="modern-input" 
                                       required>
                                <label for="lastName" class="modern-label">Last Name</label>
                                <div class="input-focus-line"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group-new">
                        <div class="input-container">
                            <input type="email" 
                                   id="email"
                                   placeholder=" "
                                   class="modern-input" 
                                   required>
                            <label for="email" class="modern-label">Email Address</label>
                            <div class="input-focus-line"></div>
                        </div>
                    </div>
                    
                    <div class="form-group-new">
                        <div class="input-container">
                            <input type="tel" 
                                   id="phone"
                                   placeholder=" "
                                   class="modern-input" 
                                   required>
                            <label for="phone" class="modern-label">Phone Number</label>
                            <div class="input-focus-line"></div>
                        </div>
                    </div>
                    
                    <div class="form-group-new">
                        <div class="input-container">
                            <textarea id="message" 
                                      rows="6"
                                      placeholder=" "
                                      class="modern-input modern-textarea" 
                                      required></textarea>
                            <label for="message" class="modern-label">Message</label>
                            <div class="input-focus-line"></div>
                        </div>
                    </div>
                    
                    <div class="pt-12">
                        <button type="submit" class="modern-submit-btn">
                            <span class="btn-content">Send Message</span>
                            <div class="btn-hover-effect"></div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<!-- Increased padding from py-24 to py-40 -->
<section class="bg-black py-40 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="map-background-pattern"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-20">
            <!-- Larger title with better spacing -->
            <h2 class="text-5xl md:text-7xl font-light mb-8 tracking-tight text-white map-title-new">
                Find Us
            </h2>
            <div class="title-underline"></div>
        </div>
        
        <!-- Updated map iframe and better container -->
        <div class="map-container-new">
            <div class="map-frame-new">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!4v1754968004958!6m8!1m7!1sQgzJcC4TNi_ZXUy9_K-PKA!2m2!1d-6.313878975798656!2d107.01846383929!3f340.91315!4f0!5f0.7820865974627469" 
                    width="100%" 
                    height="600" 
                    style="border:0; border-radius: 16px;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    class="map-iframe">
                </iframe>
                
                <!-- Map Overlay -->
                <div class="map-overlay-new">
                    <div class="location-card">
                        <div class="location-pin-new">
                            <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                        </div>
                        <div class="location-info-new">
                            <h3 class="text-white font-medium text-lg mb-2">Baherindo Motor</h3>
                            <p class="text-gray-300 text-sm mb-4">Jl. Raya Bekasi No. 123, Bekasi</p>
                            <div class="location-actions-new">
                                <button class="action-btn-new">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-1.447-.894L15 4m0 13V4m0 0L9 7"></path>
                                    </svg>
                                    Directions
                                </button>
                                <button class="action-btn-new">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    Call Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* New geometric background animation */
.geometric-bg {
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #000000 0%, #1a1a1a 50%, #000000 100%);
    overflow: hidden;
}

.floating-shapes {
    position: absolute;
    width: 100%;
    height: 100%;
}

.shape {
    position: absolute;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    animation: floatShape 20s ease-in-out infinite;
}

.shape-1 {
    width: 100px;
    height: 100px;
    top: 20%;
    left: 10%;
    border-radius: 50%;
    animation-delay: 0s;
}

.shape-2 {
    width: 80px;
    height: 80px;
    top: 60%;
    right: 15%;
    transform: rotate(45deg);
    animation-delay: 4s;
}

.shape-3 {
    width: 120px;
    height: 120px;
    bottom: 30%;
    left: 20%;
    border-radius: 20px;
    animation-delay: 8s;
}

.shape-4 {
    width: 60px;
    height: 60px;
    top: 40%;
    left: 60%;
    border-radius: 50%;
    animation-delay: 12s;
}

.shape-5 {
    width: 90px;
    height: 90px;
    bottom: 20%;
    right: 30%;
    transform: rotate(30deg);
    animation-delay: 16s;
}

@keyframes floatShape {
    0%, 100% {
        transform: translateY(0px) rotate(0deg);
        opacity: 0.3;
    }
    25% {
        transform: translateY(-30px) rotate(90deg);
        opacity: 0.6;
    }
    50% {
        transform: translateY(20px) rotate(180deg);
        opacity: 0.4;
    }
    75% {
        transform: translateY(-20px) rotate(270deg);
        opacity: 0.7;
    }
}

.grid-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: 
        linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
    background-size: 50px 50px;
    animation: gridMove 30s linear infinite;
}

@keyframes gridMove {
    0% { transform: translate(0, 0); }
    100% { transform: translate(50px, 50px); }
}

/* New hero title animation */
.contact-title-new {
    background: linear-gradient(45deg, #ffffff, #888888, #ffffff, #cccccc);
    background-size: 400% 400%;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: titleFlow 4s ease-in-out infinite;
}

@keyframes titleFlow {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.slide-up-text {
    opacity: 0;
    transform: translateY(30px);
    animation: slideUpFade 1s ease-out 0.5s forwards;
}

@keyframes slideUpFade {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.scroll-indicator {
    position: absolute;
    bottom: 40px;
    left: 50%;
    transform: translateX(-50%);
}

.scroll-line {
    width: 2px;
    height: 60px;
    background: linear-gradient(to bottom, transparent, white, transparent);
    animation: scrollPulse 2s ease-in-out infinite;
}

@keyframes scrollPulse {
    0%, 100% { opacity: 0.3; }
    50% { opacity: 1; }
}

/* New contact grid pattern */
.contact-grid-pattern {
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: 
        radial-gradient(circle at 20% 20%, rgba(0, 0, 0, 0.05) 2px, transparent 2px),
        radial-gradient(circle at 80% 80%, rgba(0, 0, 0, 0.05) 2px, transparent 2px);
    background-size: 80px 80px;
    animation: patternFloat 25s linear infinite;
}

@keyframes patternFloat {
    0% { transform: translate(0, 0); }
    100% { transform: translate(80px, 80px); }
}

/* New slide animations */
.slide-in-left {
    opacity: 0;
    transform: translateX(-50px);
    animation: slideInLeft 1s ease-out forwards;
}

.slide-in-right {
    opacity: 0;
    transform: translateX(50px);
    animation: slideInRight 1s ease-out 0.3s forwards;
}

@keyframes slideInLeft {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slideInRight {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* New info card design */
.info-card-new {
    position: relative;
    padding: 2rem;
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
    border-radius: 16px;
    transition: all 0.4s ease;
    opacity: 0;
    transform: translateY(30px);
    animation: cardSlideUp 0.8s ease-out forwards;
}

.info-card-new.delay-1 { animation-delay: 0.2s; }
.info-card-new.delay-2 { animation-delay: 0.4s; }
.info-card-new.delay-3 { animation-delay: 0.6s; }

@keyframes cardSlideUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.info-card-new:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.card-border {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border-radius: 16px;
    padding: 2px;
    background: linear-gradient(45deg, transparent, rgba(0, 0, 0, 0.1), transparent);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.info-card-new:hover .card-border {
    opacity: 1;
}

.card-content-new {
    display: flex;
    align-items: flex-start;
    gap: 1.5rem;
}

.info-icon-new {
    flex-shrink: 0;
    width: 60px;
    height: 60px;
    background: rgba(0, 0, 0, 0.05);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.info-card-new:hover .info-icon-new {
    background: rgba(0, 0, 0, 0.1);
    transform: scale(1.1);
}

.info-content {
    flex: 1;
}

/* New form design */
.contact-form-container-new {
    position: relative;
}

.form-group-new {
    position: relative;
}

.input-container {
    position: relative;
    margin-bottom: 1rem;
}

.modern-input {
    width: 100%;
    padding: 1.5rem 0 0.5rem 0;
    background: transparent;
    border: none;
    border-bottom: 2px solid #e5e5e5;
    font-size: 1.25rem;
    font-weight: 300;
    transition: all 0.3s ease;
    outline: none;
}

.modern-textarea {
    resize: vertical;
    min-height: 150px;
    padding-top: 2rem;
}

.modern-input:focus {
    border-bottom-color: #000;
}

.modern-label {
    position: absolute;
    top: 1.5rem;
    left: 0;
    font-size: 1.25rem;
    font-weight: 300;
    color: #999;
    transition: all 0.3s ease;
    pointer-events: none;
    transform-origin: left top;
}

.modern-input:focus + .modern-label,
.modern-input:not(:placeholder-shown) + .modern-label {
    transform: translateY(-1.5rem) scale(0.8);
    color: #000;
}

.input-focus-line {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #000, #333);
    transition: width 0.4s ease;
}

.modern-input:focus ~ .input-focus-line {
    width: 100%;
}

/* New submit button */
.modern-submit-btn {
    position: relative;
    width: 100%;
    padding: 2rem;
    background: #000;
    color: white;
    border: none;
    border-radius: 12px;
    font-size: 1rem;
    font-weight: 500;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    cursor: pointer;
    overflow: hidden;
    transition: all 0.4s ease;
}

.modern-submit-btn:hover {
    background: #333;
    transform: translateY(-4px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
}

.btn-content {
    position: relative;
    z-index: 2;
}

.btn-hover-effect {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
    transition: left 0.6s ease;
}

.modern-submit-btn:hover .btn-hover-effect {
    left: 100%;
}

/* New map section styles */
.map-background-pattern {
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: 
        linear-gradient(45deg, rgba(255, 255, 255, 0.02) 25%, transparent 25%),
        linear-gradient(-45deg, rgba(255, 255, 255, 0.02) 25%, transparent 25%);
    background-size: 60px 60px;
    animation: mapPatternMove 20s linear infinite;
}

@keyframes mapPatternMove {
    0% { transform: translate(0, 0); }
    100% { transform: translate(60px, 60px); }
}

.map-title-new {
    opacity: 0;
    transform: translateY(30px);
    animation: titleFadeUp 1s ease-out forwards;
}

@keyframes titleFadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.title-underline {
    width: 100px;
    height: 3px;
    background: linear-gradient(90deg, transparent, white, transparent);
    margin: 0 auto;
    animation: underlineGlow 2s ease-in-out infinite;
}

@keyframes underlineGlow {
    0%, 100% { opacity: 0.5; }
    50% { opacity: 1; }
}

/* New map container */
.map-container-new {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
    opacity: 0;
    transform: translateY(50px);
    animation: mapSlideUp 1s ease-out 0.5s forwards;
}

@keyframes mapSlideUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.map-frame-new {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
}

.map-iframe {
    transition: all 0.3s ease;
}

.map-frame-new:hover .map-iframe {
    transform: scale(1.02);
}

.map-overlay-new {
    position: absolute;
    top: 2rem;
    left: 2rem;
    z-index: 10;
}

.location-card {
    background: rgba(0, 0, 0, 0.8);
    backdrop-filter: blur(10px);
    border-radius: 12px;
    padding: 1.5rem;
    border: 1px solid rgba(255, 255, 255, 0.1);
    transition: all 0.3s ease;
}

.location-card:hover {
    background: rgba(0, 0, 0, 0.9);
    transform: translateY(-2px);
}

.location-pin-new {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    margin-bottom: 1rem;
    animation: pinPulse 2s ease-in-out infinite;
}

@keyframes pinPulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

.location-actions-new {
    display: flex;
    gap: 0.5rem;
}

.action-btn-new {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1rem;
    background: rgba(255, 255, 255, 0.1);
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 0.875rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.action-btn-new:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-1px);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .contact-title-new {
        font-size: 4rem;
    }
    
    .slide-in-left,
    .slide-in-right {
        font-size: 3rem;
    }
    
    .map-overlay-new {
        position: relative;
        top: auto;
        left: auto;
        margin-top: 1rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Form submission handling
    const form = document.querySelector('.contact-form-new');
    const submitBtn = document.querySelector('.modern-submit-btn');
    
    if (form && submitBtn) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Add loading state
            submitBtn.innerHTML = `
                <div style="width: 20px; height: 20px; border: 2px solid transparent; border-top: 2px solid white; border-radius: 50%; animation: spin 1s linear infinite; margin: 0 auto;"></div>
            `;
            submitBtn.disabled = true;
            
            // Simulate form submission
            setTimeout(() => {
                submitBtn.innerHTML = `
                    <span class="btn-content">Message Sent!</span>
                    <div class="btn-hover-effect"></div>
                `;
                submitBtn.style.background = '#10b981';
                
                // Reset after 3 seconds
                setTimeout(() => {
                    submitBtn.innerHTML = `
                        <span class="btn-content">Send Message</span>
                        <div class="btn-hover-effect"></div>
                    `;
                    submitBtn.style.background = '#000';
                    submitBtn.disabled = false;
                    form.reset();
                }, 3000);
            }, 2000);
        });
    }
});

// Add spin animation for loading
const style = document.createElement('style');
style.textContent = `
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
`;
document.head.appendChild(style);
</script>

@endsection
