@extends('layouts.app', ['title' => 'Trade-In Program - Xplore Car Imports'])

@section('content')
<div class="bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800 text-slate-100 min-h-screen">
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="text-center mb-16">
            <p class="uppercase tracking-[0.2em] text-xs font-semibold text-amber-400 mb-4">Flexible Ownership</p>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Trade-In Program</h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto">Upgrade your car with our competitive trade-in program. Get maximum value for your current vehicle and drive away with a newer import.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="swap-horizontal-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Easy Trade-In</h3>
                <p class="text-slate-300 text-sm">Simple process—bring your car, get it valued, and upgrade in one transaction.</p>
            </div>

            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="cash-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Best Value</h3>
                <p class="text-slate-300 text-sm">Competitive valuations based on current market rates and vehicle condition.</p>
            </div>

            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="time-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Fast Process</h3>
                <p class="text-slate-300 text-sm">Quick valuation and paperwork. Trade-in credit applied immediately to your new car.</p>
            </div>
        </div>

        {{-- How It Works --}}
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-12">How Our Trade-In Program Works</h2>
            <div class="space-y-6">
                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 flex items-start gap-6">
                    <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-slate-900">1</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Schedule Inspection</h3>
                        <p class="text-slate-300">Contact us and book an inspection appointment at your convenience.</p>
                    </div>
                </div>

                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 flex items-start gap-6">
                    <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-slate-900">2</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Vehicle Assessment</h3>
                        <p class="text-slate-300">We thoroughly evaluate your car's condition, mileage, and market value.</p>
                    </div>
                </div>

                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 flex items-start gap-6">
                    <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-slate-900">3</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Receive Quote</h3>
                        <p class="text-slate-300">Get a competitive trade-in offer with no obligation to proceed.</p>
                    </div>
                </div>

                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 flex items-start gap-6">
                    <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-slate-900">4</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Select New Vehicle</h3>
                        <p class="text-slate-300">Browse our inventory and choose your next car. Credit is applied to the purchase price.</p>
                    </div>
                </div>

                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 flex items-start gap-6">
                    <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-slate-900">5</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Complete Transaction</h3>
                        <p class="text-slate-300">Finalize paperwork, arrange payment, and take ownership of your new vehicle.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- What We Accept --}}
        <div class="rounded-3xl bg-white/10 border border-white/10 backdrop-blur p-8 md:p-12 mb-16">
            <h2 class="text-3xl font-bold mb-8">What We Accept</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-amber-400">We Accept:</h3>
                    <ul class="space-y-3 text-slate-300">
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle-outline" class="text-amber-400"></ion-icon>
                            <span>All vehicle makes and models</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle-outline" class="text-amber-400"></ion-icon>
                            <span>Local and imported vehicles</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle-outline" class="text-amber-400"></ion-icon>
                            <span>Used cars with high mileage</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle-outline" class="text-amber-400"></ion-icon>
                            <span>Vehicles with minor damage</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-4 text-amber-400">Requirements:</h3>
                    <ul class="space-y-3 text-slate-300">
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle-outline" class="text-amber-400"></ion-icon>
                            <span>Valid logbook and registration</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle-outline" class="text-amber-400"></ion-icon>
                            <span>No outstanding loans</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle-outline" class="text-amber-400"></ion-icon>
                            <span>Clear vehicle history</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle-outline" class="text-amber-400"></ion-icon>
                            <span>Valid insurance document</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Benefits --}}
        <div class="rounded-3xl bg-gradient-to-br from-amber-400/20 via-yellow-300/10 to-lime-200/5 border border-amber-400/30 p-8 md:p-12 mb-16">
            <h2 class="text-3xl font-bold mb-8">Benefits of Trading In With Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex items-start gap-4">
                    <ion-icon name="star-outline" class="text-amber-400 text-2xl flex-shrink-0 mt-1"></ion-icon>
                    <div>
                        <h3 class="font-semibold">Hassle-Free Experience</h3>
                        <p class="text-slate-300 text-sm">We handle all documentation and paperwork. One visit, simple transaction.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <ion-icon name="star-outline" class="text-amber-400 text-2xl flex-shrink-0 mt-1"></ion-icon>
                    <div>
                        <h3 class="font-semibold">Fair Market Value</h3>
                        <p class="text-slate-300 text-sm">Transparent pricing based on current market conditions and vehicle assessment.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <ion-icon name="star-outline" class="text-amber-400 text-2xl flex-shrink-0 mt-1"></ion-icon>
                    <div>
                        <h3 class="font-semibold">Instant Credit</h3>
                        <p class="text-slate-300 text-sm">Trade-in value applied immediately to your new vehicle purchase.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <ion-icon name="star-outline" class="text-amber-400 text-2xl flex-shrink-0 mt-1"></ion-icon>
                    <div>
                        <h3 class="font-semibold">Upgrade Easily</h3>
                        <p class="text-slate-300 text-sm">Simple way to move to a newer, better car without selling privately.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="rounded-3xl bg-gradient-to-r from-amber-400 to-yellow-300 text-slate-900 p-8 shadow-xl">
            <h2 class="text-3xl font-bold mb-4">Ready to Trade In?</h2>
            <p class="mb-6 text-slate-800">Contact us today to schedule your vehicle inspection and get a competitive trade-in quote.</p>
            <a href="{{ route('contact') }}" class="btn btn-lg bg-slate-900 text-amber-300 border-none hover:bg-slate-800">Schedule Inspection</a>
        </div>
    </div>

    @include('partials.footer')
</div>
@endsection
