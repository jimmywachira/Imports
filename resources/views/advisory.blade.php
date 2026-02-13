@extends('layouts.app', ['title' => 'Advisory - Xplore Car Imports'])

@section('content')
<div class="bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800 text-slate-100 min-h-screen">
    <div class="max-w-5xl mx-auto px-6 py-16">
        <div class="text-center mb-12">
            <p class="uppercase tracking-[0.2em] text-xs font-semibold text-amber-400 mb-4">Advisory</p>
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Taxi Business Masterclass</h1>
            <p class="text-slate-300 text-lg">
                Thinking of joining Kenya's online taxi economy? This masterclass walks you through everything from
                choosing the right vehicle and understanding platforms like Uber and Bolt, to cost breakdowns,
                documentation, and profit insights. Perfect for new drivers, fleet owners, or anyone starting out
                in Kenya's taxi industry.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a href="#enroll" class="btn btn-lg bg-amber-400 text-slate-900 border-none hover:bg-amber-300">Enroll Now</a>
                <a href="https://youtube.com" target="_blank" class="btn btn-outline border-amber-400 text-amber-400 hover:bg-amber-400 hover:text-slate-900">
                    <ion-icon name="logo-youtube" class="text-xl"></ion-icon>
                    Watch on YouTube
                </a>
            </div>
        </div>

        <div class="space-y-8">
            <div class="rounded-3xl bg-white/10 border border-white/10 backdrop-blur p-8">
                <h2 class="text-2xl font-bold mb-3">1. Taxi Business Masterclass</h2>
                <p class="text-slate-300 mb-4">
                    A hands-on, revenue-focused module that gives you everything you need to run a profitable taxi
                    business whether you want to drive part-time or build a full-time fleet.
                </p>
                <ul class="space-y-2 text-slate-300">
                    <li>Training: Platform setup, customer handling, and safety basics.</li>
                    <li>Cost and revenue analysis: Templates to calculate expenses and profits.</li>
                    <li>Pros and cons: Honest breakdown of platform dynamics and challenges.</li>
                    <li>Best cars: Reliable, fuel-efficient models for Kenya's market.</li>
                    <li>Part-time vs full-time: Which approach suits your goals best?</li>
                </ul>
            </div>

            <div class="rounded-3xl bg-white/10 border border-white/10 backdrop-blur p-8">
                <h2 class="text-2xl font-bold mb-3">2. Driver Management</h2>
                <p class="text-slate-300 mb-4">
                    Build a dependable and professional team. Learn to recruit, train, monitor and motivate drivers
                    to maintain consistency and reliability in your operations.
                </p>
                <ul class="space-y-2 text-slate-300">
                    <li>Recruitment: Find and onboard reliable, well-vetted drivers.</li>
                    <li>Monitoring and performance: Tools to track daily performance and ratings.</li>
                    <li>Payment and incentives: Transparent and motivating compensation systems.</li>
                    <li>Retention: Keep top drivers happy through growth opportunities.</li>
                </ul>
                <div class="mt-6">
                    <a href="https://youtube.com" target="_blank" class="btn btn-outline border-amber-400 text-amber-400 hover:bg-amber-400 hover:text-slate-900">
                        <ion-icon name="logo-youtube" class="text-xl"></ion-icon>
                        Watch on YouTube
                    </a>
                </div>
            </div>

            <div class="rounded-3xl bg-white/10 border border-white/10 backdrop-blur p-8">
                <h2 class="text-2xl font-bold mb-3">3. Documents and Compliance</h2>
                <p class="text-slate-300 mb-4">
                    Navigate Kenya's regulatory landscape confidently. Learn which documents you need for both car
                    and driver to stay compliant and avoid penalties.
                </p>
                <ul class="space-y-2 text-slate-300">
                    <li>Car documents: Logbook, customs clearance, inspection reports.</li>
                    <li>Driver documents: Valid PSV licenses, contracts, and IDs.</li>
                    <li>Insurance and licensing: Best policies and renewal procedures.</li>
                </ul>
            </div>

            <div class="rounded-3xl bg-white/10 border border-white/10 backdrop-blur p-8">
                <h2 class="text-2xl font-bold mb-3">Car Maintenance and Parts</h2>
                <p class="text-slate-300 mb-6">
                    Proper vehicle maintenance is the backbone of a successful taxi or car hire business. In this
                    section, we help you understand how to minimize downtime, reduce repair costs, and keep your
                    vehicles running efficiently for longer.
                </p>

                <div class="space-y-6">
                    <div class="rounded-2xl bg-white/5 border border-white/10 p-6">
                        <h3 class="text-lg font-semibold mb-2">Routine Service</h3>
                        <p class="text-slate-300">
                            Learn how to create and follow a consistent maintenance schedule, including oil changes,
                            filter replacements, brake checks, and tire rotations, ensuring your cars remain
                            roadworthy and fuel-efficient.
                        </p>
                    </div>

                    <div class="rounded-2xl bg-white/5 border border-white/10 p-6">
                        <h3 class="text-lg font-semibold mb-2">Spare Parts Management</h3>
                        <p class="text-slate-300">
                            Discover how to source affordable and genuine spare parts locally and abroad. We cover
                            vendor selection, comparing aftermarket vs original parts, and how to track parts
                            expenses to stay within budget.
                        </p>
                    </div>

                    <div class="rounded-2xl bg-white/5 border border-white/10 p-6">
                        <h3 class="text-lg font-semibold mb-2">Mechanics and Vendors</h3>
                        <p class="text-slate-300">
                            Building relationships with skilled mechanics and trusted suppliers is key to smooth
                            operations. Learn how to negotiate fair rates, set service standards, and create
                            long-term partnerships that keep your business sustainable.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="enroll" class="mt-12 text-center">
            <div class="rounded-3xl bg-gradient-to-r from-amber-400 to-yellow-300 text-slate-900 p-8 shadow-xl">
                <h2 class="text-3xl font-bold mb-3">Enroll Now</h2>
                <p class="mb-6 text-slate-800">Get step-by-step guidance, templates, and insights to launch a profitable taxi business.</p>
                <a href="{{ route('contact') }}" class="btn btn-lg bg-slate-900 text-amber-300 border-none hover:bg-slate-800">Talk to Our Team</a>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
@endsection
