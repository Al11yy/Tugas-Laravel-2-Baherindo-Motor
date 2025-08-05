@extends('layout.main')
@section('title', 'Contact - Baherindo Motor')
@section('content')

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center">
    <div class="absolute inset-0 z-0">
        <img src="/placeholder.svg?height=1080&width=1920" 
             alt="Contact Hero" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
    </div>
    
    <div class="relative z-10 text-center max-w-4xl mx-auto px-6 hero-fade">
        <h1 class="text-6xl md:text-8xl font-light mb-8 tracking-tight">
            Contact
        </h1>
        <p class="text-xl md:text-2xl font-light text-gray-300">
            Get in touch with our team
        </p>
    </div>
</section>

<!-- Contact Content -->
<section class="bg-white text-black py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
            <!-- Contact Info -->
            <div>
                <h2 class="text-4xl md:text-5xl font-light mb-12 tracking-tight">
                    Visit Us
                </h2>
                
                <div class="space-y-12">
                    <div>
                        <h3 class="text-xl font-medium mb-4 tracking-wide uppercase">Showroom</h3>
                        <p class="text-lg font-light text-gray-600 leading-relaxed">
                            Jl. Raya Bekasi No. 123<br>
                            Bekasi, Jawa Barat 17141<br>
                            Indonesia
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-medium mb-4 tracking-wide uppercase">Phone</h3>
                        <p class="text-lg font-light text-gray-600">
                            +62 812-3456-7890
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-medium mb-4 tracking-wide uppercase">Email</h3>
                        <p class="text-lg font-light text-gray-600">
                            info@baherindomotor.com
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-medium mb-4 tracking-wide uppercase">Hours</h3>
                        <div class="space-y-2 text-lg font-light text-gray-600">
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

            <!-- Contact Form -->
            <div>
                <h2 class="text-4xl md:text-5xl font-light mb-12 tracking-tight">
                    Get Quote
                </h2>
                
                <form class="space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <input type="text" 
                                   placeholder="First Name"
                                   class="w-full border-b-2 border-gray-300 bg-transparent pb-4 text-lg font-light focus:outline-none focus:border-black smooth-transition" 
                                   required>
                        </div>
                        <div>
                            <input type="text" 
                                   placeholder="Last Name"
                                   class="w-full border-b-2 border-gray-300 bg-transparent pb-4 text-lg font-light focus:outline-none focus:border-black smooth-transition" 
                                   required>
                        </div>
                    </div>
                    
                    <div>
                        <input type="email" 
                               placeholder="Email Address"
                               class="w-full border-b-2 border-gray-300 bg-transparent pb-4 text-lg font-light focus:outline-none focus:border-black smooth-transition" 
                               required>
                    </div>
                    
                    <div>
                        <input type="tel" 
                               placeholder="Phone Number"
                               class="w-full border-b-2 border-gray-300 bg-transparent pb-4 text-lg font-light focus:outline-none focus:border-black smooth-transition" 
                               required>
                    </div>
                    
                    <div>
                        <textarea rows="6" 
                                  placeholder="Message"
                                  class="w-full border-b-2 border-gray-300 bg-transparent pb-4 text-lg font-light focus:outline-none focus:border-black smooth-transition resize-none" 
                                  required></textarea>
                    </div>
                    
                    <div class="pt-8">
                        <button type="submit" 
                                class="bg-black text-white px-12 py-4 text-sm font-medium tracking-wider uppercase hover:bg-gray-800 smooth-transition">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="bg-black py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-light mb-6 tracking-tight text-white">
                Find Us
            </h2>
        </div>
        
        <div class="bg-gray-800 h-96 flex items-center justify-center rounded-xl overflow-hidden">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.300464733542!2d106.8166662!3d-6.2190997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3d0dbe4a219%3A0x2ed4b6a84a6c56a!2sMonas%20(Jakarta%20Monument)!5e0!3m2!1sen!2sid!4v1693451012345!5m2!1sen!2sid" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>


@endsection
