@extends('layouts.app', ['title' => 'Shipping & Clearing - Xplore Car Imports'])

@section('content')
<div class="bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800 text-slate-100 min-h-screen">
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="text-center mb-16">
            <p class="uppercase tracking-[0.2em] text-xs font-semibold text-amber-400 mb-4">Logistics & Delivery</p>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Shipping & Customs Clearing</h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto">We handle all logistics from Japan to your doorstep. Fast, secure shipping with real-time tracking and full customs clearance.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-16">
            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 text-center">
                <p class="text-3xl font-bold text-amber-400 mb-2">2-3 Weeks</p>
                <p class="text-slate-300 text-sm">Japan to Port</p>
            </div>
            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 text-center">
                <p class="text-3xl font-bold text-amber-400 mb-2">1 Week</p>
                <p class="text-slate-300 text-sm">Port Clearance</p>
            </div>
            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 text-center">
                <p class="text-3xl font-bold text-amber-400 mb-2">1-3 Days</p>
                <p class="text-slate-300 text-sm">Final Delivery</p>
            </div>
            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 text-center">
                <p class="text-3xl font-bold text-amber-400 mb-2">24/7</p>
                <p class="text-slate-300 text-sm">Tracking Updates</p>
            </div>
        </div>

        {{-- Process Flow --}}
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-12">Our Shipping Process</h2>
            <div class="space-y-6">
                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 flex items-start gap-6">
                    <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-slate-900">1</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Auction Selection & Purchase</h3>
                        <p class="text-slate-300">We select and purchase your vehicle from licensed Japanese auctions after inspection confirmation.</p>
                    </div>
                </div>

                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 flex items-start gap-6">
                    <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-slate-900">2</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Preparation & Export</h3>
                        <p class="text-slate-300">Vehicle is washed, serviced, and documents prepared. Export procedures begin with Japanese customs.</p>
                    </div>
                </div>

                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 flex items-start gap-6">
                    <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-slate-900">3</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Ocean Shipping</h3>
                        <p class="text-slate-300">Vehicle loaded in 40ft container with other vehicles. Weekly departures to Mombasa port.</p>
                    </div>
                </div>

                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 flex items-start gap-6">
                    <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-slate-900">4</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Port Arrival & Clearance</h3>
                        <p class="text-slate-300">Vehicle arrives at Mombasa. We handle all customs declarations, taxes, and import duties.</p>
                    </div>
                </div>

                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 flex items-start gap-6">
                    <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-slate-900">5</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Transport to Nairobi</h3>
                        <p class="text-slate-300">Vehicle transported from port to our facility in Nairobi for final inspection and registration.</p>
                    </div>
                </div>

                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 flex items-start gap-6">
                    <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-slate-900">6</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Delivery to You</h3>
                        <p class="text-slate-300">Final delivery to your location with all documents, registration, and warranty information.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- What We Handle --}}
        <div class="rounded-3xl bg-white/10 border border-white/10 backdrop-blur p-8 md:p-12 mb-16">
            <h2 class="text-3xl font-bold mb-8">What We Handle for You</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-3">
                    <div class="flex items-center gap-3">
                        <ion-icon name="checkmark-circle-outline" class="text-amber-400 text-2xl"></ion-icon>
                        <span>Export documentation from Japan</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <ion-icon name="checkmark-circle-outline" class="text-amber-400 text-2xl"></ion-icon>
                        <span>Ocean freight booking & loading</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <ion-icon name="checkmark-circle-outline" class="text-amber-400 text-2xl"></ion-icon>
                        <span>Import permits & clearance</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <ion-icon name="checkmark-circle-outline" class="text-amber-400 text-2xl"></ion-icon>
                        <span>Customs brokerage services</span>
                    </div>
                </div>
                <div class="space-y-3">
                    <div class="flex items-center gap-3">
                        <ion-icon name="checkmark-circle-outline" class="text-amber-400 text-2xl"></ion-icon>
                        <span>Vehicle registration assistance</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <ion-icon name="checkmark-circle-outline" class="text-amber-400 text-2xl"></ion-icon>
                        <span>Tax & duty calculations</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <ion-icon name="checkmark-circle-outline" class="text-amber-400 text-2xl"></ion-icon>
                        <span>24/7 shipment tracking</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <ion-icon name="checkmark-circle-outline" class="text-amber-400 text-2xl"></ion-icon>
                        <span>Final delivery coordination</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="rounded-3xl bg-gradient-to-r from-amber-400 to-yellow-300 text-slate-900 p-8 shadow-xl">
            <h2 class="text-3xl font-bold mb-4">Ready to Import Your Car?</h2>
            <p class="mb-6 text-slate-800">Let us handle the shipping and clearing process. Contact us today to get your car delivered hassle-free.</p>
            <a href="{{ route('contact') }}" class="btn btn-lg bg-slate-900 text-amber-300 border-none hover:bg-slate-800">Contact Us</a>
        </div>
    </div>

    @include('partials.footer')
</div>
@endsection
