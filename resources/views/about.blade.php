@extends('layouts.app', ['title' => 'About Us - Xplore Car Imports', 'description' => 'Learn about Xplore Car Imports, our mission, values, and experience helping Kenyans import premium Japanese vehicles with transparency and care.'])

@section('content')
<div class="page-shell">
    {{-- Hero Section --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="text-center mb-8 sm:mb-12 lg:mb-16">
            <p class="uppercase tracking-[0.2em] text-xs font-semibold text-amber-400 mb-2 sm:mb-4">About Xplore Imports</p>
            <h1 class="text-2xl sm:text-4xl lg:text-6xl font-extrabold mb-3 sm:mb-4 leading-tight">Making car importation easy, transparent, and stress-free for every Kenyan.</h1>
            <p class="text-base sm:text-lg lg:text-xl ui-muted max-w-3xl mx-auto px-3 sm:px-0">We connect Kenyans to quality, affordable cars from Japan—handling everything from sourcing and inspection to shipping and customs clearance.</p>
        </div>
    </div>

    {{-- Stats Section --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3 sm:gap-4 lg:gap-6">
            <div class="glass-panel p-4 sm:p-6 text-center">
                <p class="text-2xl sm:text-3xl font-bold text-amber-400 mb-1 sm:mb-2">10+</p>
                <p class="ui-muted text-xs sm:text-sm">Years in Business</p>
            </div>
            <div class="glass-panel p-4 sm:p-6 text-center">
                <p class="text-2xl sm:text-3xl font-bold text-amber-400 mb-1 sm:mb-2">1000+</p>
                <p class="ui-muted text-xs sm:text-sm">Cars Imported</p>
            </div>
            <div class="glass-panel p-4 sm:p-6 text-center">
                <p class="text-2xl sm:text-3xl font-bold text-amber-400 mb-1 sm:mb-2">500+</p>
                <p class="ui-muted text-xs sm:text-sm">Happy Clients</p>
            </div>
            <div class="glass-panel p-4 sm:p-6 text-center">
                <p class="text-2xl sm:text-3xl font-bold text-amber-400 mb-1 sm:mb-2">100+</p>
                <p class="ui-muted text-xs sm:text-sm">Taxi Investors Trained</p>
            </div>
            <div class="glass-panel p-4 sm:p-6 text-center">
                <p class="text-2xl sm:text-3xl font-bold text-amber-400 mb-1 sm:mb-2">200+</p>
                <p class="ui-muted text-xs sm:text-sm">Drivers Trained & Connected</p>
            </div>
        </div>
    </div>

    {{-- Our Story --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold">Our Story</h2>
            <p class="ui-muted mt-2 text-sm sm:text-base">Helping Kenyans Drive Their Dream Cars and Own a Stabilized Taxi Business</p>
        </div>

        <div class="max-w-4xl mx-auto glass-panel rounded-3xl p-6 sm:p-8 lg:p-12">
            <p class="ui-muted leading-relaxed mb-4 text-sm sm:text-base">
                Xplore Imports was born out of a simple idea: helping everyday Kenyans find the right cars for their taxi and personal businesses. Over the years, we noticed one common challenge—many people wanted to import cars but didn't know where to start or who to trust.
            </p>
            <p class="ui-muted leading-relaxed mb-4 text-sm sm:text-base">
                Our mission is to make the car importation journey easy, transparent, and stress-free. We connect clients to quality and affordable cars from Japan, handling everything from sourcing, inspection, shipping, and customs clearance to final delivery straight to your door.
            </p>
            <p class="ui-muted leading-relaxed mb-4 text-sm sm:text-base">
                Since 2021, we've been offering expert Taxi Business Advising, helping hundreds of drivers and entrepreneurs make smarter car investment decisions. Building on that success, in 2025 we expanded into Car Import Services bringing the same trusted, transparent approach to vehicle sourcing and delivery from Japan.
            </p>
            <p class="ui-muted leading-relaxed mb-6 text-sm sm:text-base">
                We believe in open communication and honesty every step of the way. Clients receive clear updates, transparent costs, and total peace of mind knowing their cars are handled with care.
            </p>
            <div class="flex justify-center">
                <a href="https://youtu.be/feO-u_WJjog?si=WusDX_6oR6UZO6Ep" target="_blank" class="btn-outline-amber text-sm sm:text-base">
                    <ion-icon name="logo-youtube" class="text-lg sm:text-xl"></ion-icon>
                    Watch on YouTube
                </a>
            </div>
        </div>
    </div>

    {{-- Core Values --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold">Our Core Values</h2>
            <p class="ui-muted mt-2 text-sm sm:text-base">The principles that define who we are and how we serve our clients</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="shield-checkmark-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Integrity & Transparency</h3>
                <p class="ui-muted text-xs sm:text-sm">Honest communication and clear pricing with no hidden fees.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="heart-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Customer Care</h3>
                <p class="ui-muted text-xs sm:text-sm">Every client is treated as a partner—your satisfaction is our success.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="globe-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Global Reach</h3>
                <p class="ui-muted text-xs sm:text-sm">Strong partnerships in Japan ensure premium selections.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="checkmark-circle-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Reliability</h3>
                <p class="ui-muted text-xs sm:text-sm">We deliver what we promise—on time and with care.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="people-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Community Focus</h3>
                <p class="ui-muted text-xs sm:text-sm">We grow by empowering Kenyans to make informed car investment decisions.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="star-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Excellence</h3>
                <p class="ui-muted text-xs sm:text-sm">Striving for quality service in every import, every client, every time.</p>
            </div>
        </div>
    </div>

    {{-- Why Choose Us --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold">Why Choose Xplore Imports</h2>
            <p class="ui-muted mt-2 text-sm sm:text-base">Built on trust, experience, and a passion for making car importation simple</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 sm:gap-6">
            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="cube-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">End-to-End Service</h3>
                <p class="ui-muted text-xs sm:text-sm">From vehicle sourcing to doorstep delivery—we handle it all for you.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="checkmark-done-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Trusted Markets</h3>
                <p class="ui-muted text-xs sm:text-sm">We only source cars from reputable and verified dealers worldwide.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="person-circle-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Personal Guidance</h3>
                <p class="ui-muted text-xs sm:text-sm">Our team walks with you through every step of the process.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="pricetag-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Affordable Pricing</h3>
                <p class="ui-muted text-xs sm:text-sm">We ensure competitive rates without compromising on quality.</p>
            </div>

            <div class="glass-panel p-6 sm:col-span-2 lg:col-span-1">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="rocket-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Fast & Secure Delivery</h3>
                <p class="ui-muted text-xs sm:text-sm">Your car arrives safely, with real-time shipment updates.</p>
            </div>
        </div>
    </div>

    {{-- CTA Section --}}
    <div class="max-w-4xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16 text-center">
        <div class="rounded-3xl bg-gradient-to-r from-amber-400 to-yellow-300 text-slate-900 p-6 sm:p-8 shadow-xl">
            <h2 class="text-2xl sm:text-3xl font-bold mb-3 sm:mb-4">Ready to Find Your Dream Car?</h2>
            <p class="mb-4 sm:mb-6 text-sm sm:text-base text-slate-800">Browse our latest inventory of premium Japanese imports, all KEBS compliant and ready for delivery.</p>
            <a href="{{ route('cars') }}" class="btn-ink btn-lg text-sm sm:text-base">Browse Our Inventory</a>
        </div>
    </div>
</div>

@include('partials.footer')
@endsection
