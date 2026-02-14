@extends('layouts.app', ['title' => 'About Us - Xplore Car Imports'])

@section('content')
<div class="bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800 text-slate-100 min-h-screen">
    {{-- Hero Section --}}
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="text-center mb-16">
            <p class="uppercase tracking-[0.2em] text-xs font-semibold text-amber-400 mb-4">About Xplore Imports</p>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Making car importation easy, transparent, and stress-free for every Kenyan.</h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto">We connect Kenyans to quality, affordable cars from Japan—handling everything from sourcing and inspection to shipping and customs clearance.</p>
        </div>
    </div>

    {{-- Stats Section --}}
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid grid-cols-2 md:grid-cols-5 gap-6">
            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 text-center">
                <p class="text-3xl font-bold text-amber-400 mb-2">10+</p>
                <p class="text-slate-300 text-sm">Years in Business</p>
            </div>
            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 text-center">
                <p class="text-3xl font-bold text-amber-400 mb-2">1000+</p>
                <p class="text-slate-300 text-sm">Cars Imported</p>
            </div>
            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 text-center">
                <p class="text-3xl font-bold text-amber-400 mb-2">500+</p>
                <p class="text-slate-300 text-sm">Happy Clients</p>
            </div>
            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 text-center">
                <p class="text-3xl font-bold text-amber-400 mb-2">100+</p>
                <p class="text-slate-300 text-sm">Taxi Investors Trained</p>
            </div>
            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 text-center">
                <p class="text-3xl font-bold text-amber-400 mb-2">200+</p>
                <p class="text-slate-300 text-sm">Drivers Trained & Connected</p>
            </div>
        </div>
    </div>

    {{-- Our Story --}}
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold">Our Story</h2>
            <p class="text-slate-300 mt-2">Helping Kenyans Drive Their Dream Cars and Own a Stabilized Taxi Business</p>
        </div>

        <div class="max-w-4xl mx-auto bg-white/10 border border-white/10 backdrop-blur rounded-3xl p-8 md:p-12">
            <p class="text-slate-200 leading-relaxed mb-4">
                Xplore Imports was born out of a simple idea: helping everyday Kenyans find the right cars for their taxi and personal businesses. Over the years, we noticed one common challenge—many people wanted to import cars but didn't know where to start or who to trust.
            </p>
            <p class="text-slate-200 leading-relaxed mb-4">
                Our mission is to make the car importation journey easy, transparent, and stress-free. We connect clients to quality and affordable cars from Japan, handling everything from sourcing, inspection, shipping, and customs clearance to final delivery straight to your door.
            </p>
            <p class="text-slate-200 leading-relaxed mb-4">
                Since 2021, we've been offering expert Taxi Business Advising, helping hundreds of drivers and entrepreneurs make smarter car investment decisions. Building on that success, in 2025 we expanded into Car Import Services bringing the same trusted, transparent approach to vehicle sourcing and delivery from Japan.
            </p>
            <p class="text-slate-200 leading-relaxed mb-6">
                We believe in open communication and honesty every step of the way. Clients receive clear updates, transparent costs, and total peace of mind knowing their cars are handled with care.
            </p>
            <div class="flex justify-center">
                <a href="https://youtu.be/feO-u_WJjog?si=WusDX_6oR6UZO6Ep" target="_blank" class="btn btn-outline border-amber-400 text-amber-400 hover:bg-amber-400 hover:text-slate-900">
                    <ion-icon name="logo-youtube" class="text-xl"></ion-icon>
                    Watch on YouTube
                </a>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
        <div class="mt-16 rounded-3xl bg-white/10 border border-white/10 backdrop-blur p-8 md:p-12">
            <div class="text-center mb-12">
                <p class="uppercase tracking-[0.2em] text-xs font-semibold text-amber-400 mb-4">Questions?</p>
                <h2 class="text-3xl md:text-4xl font-bold mb-2">Frequently Asked Questions</h2>
                <p class="text-slate-300">Find answers to common questions about our import process, requirements, and services.</p>
            </div>

            <div class="space-y-3 ">
                <div class="collapse collapse-plus bg-white/10 border border-white/10 backdrop-blur rounded-lg">
                    <input type="radio" name="faq" checked />
                    <div class="collapse-title text-lg font-semibold text-slate-100 py-4">
                        1. How does car importation work?
                    </div>
                    <div class="collapse-content bg-white/5 text-slate-300">
                        <p class="pt-4">We help you source your preferred vehicle from overseas dealers, handle the purchase, shipping, and clearance at the port before delivery to you.</p>
                    </div>
                </div>

                <div class="collapse collapse-plus bg-white/10 border border-white/10 backdrop-blur rounded-lg">
                    <input type="radio" name="faq" />
                    <div class="collapse-title text-lg font-semibold text-slate-100 py-4">
                        2. What documents are required to import a car?
                    </div>
                    <div class="collapse-content bg-white/5 text-slate-300">
                        <p class="pt-4">You'll need a valid national ID or passport, KRA PIN certificate, and proof of purchase. We'll assist you with customs clearance documents as well.</p>
                    </div>
                </div>

                <div class="collapse collapse-plus bg-white/10 border border-white/10 backdrop-blur rounded-lg">
                    <input type="radio" name="faq" />
                    <div class="collapse-title text-lg font-semibold text-slate-100 py-4">
                        3. How long does the importation process take?
                    </div>
                    <div class="collapse-content bg-white/5 text-slate-300">
                        <p class="pt-4">The average timeline is 6–8 weeks depending on the country of origin, shipping schedules, and customs clearance procedures.</p>
                    </div>
                </div>

                <div class="collapse collapse-plus bg-white/10 border border-white/10 backdrop-blur rounded-lg">
                    <input type="radio" name="faq" />
                    <div class="collapse-title text-lg font-semibold text-slate-100 py-4">
                        4. Do I have to pay the full amount upfront?
                    </div>
                    <div class="collapse-content bg-white/5 text-slate-300">
                        <p class="pt-4">No. We offer flexible payment options where you can pay a deposit to initiate the process, with the balance payable upon delivery.</p>
                    </div>
                </div>

                <div class="collapse collapse-plus bg-white/10 border border-white/10 backdrop-blur rounded-lg">
                    <input type="radio" name="faq" />
                    <div class="collapse-title text-lg font-semibold text-slate-100 py-4">
                        5. Are there additional hidden costs?
                    </div>
                    <div class="collapse-content bg-white/5 text-slate-300">
                        <p class="pt-4">No. We provide a transparent quotation upfront, including shipping, customs duty, port charges, and clearance fees.</p>
                    </div>
                </div>

                <div class="collapse collapse-plus bg-white/10 border border-white/10 backdrop-blur rounded-lg">
                    <input type="radio" name="faq" />
                    <div class="collapse-title text-lg font-semibold text-slate-100 py-4">
                        6. Can I track my vehicle during shipping?
                    </div>
                    <div class="collapse-content bg-white/5 text-slate-300">
                        <p class="pt-4">Yes, we provide shipping details and updates so you can track your vehicle until it arrives in Kenya.</p>
                    </div>
                </div>

                <div class="collapse collapse-plus bg-white/10 border border-white/10 backdrop-blur rounded-lg">
                    <input type="radio" name="faq" />
                    <div class="collapse-title text-lg font-semibold text-slate-100 py-4">
                        7. What types of vehicles can I import?
                    </div>
                    <div class="collapse-content bg-white/5 text-slate-300">
                        <p class="pt-4">We help you import cars, SUVs, vans, trucks, and even specialized vehicles, as long as they meet KEBS age and standards requirements.</p>
                    </div>
                </div>

                <div class="collapse collapse-plus bg-white/10 border border-white/10 backdrop-blur rounded-lg">
                    <input type="radio" name="faq" />
                    <div class="collapse-title text-lg font-semibold text-slate-100 py-4">
                        8. Are imported cars inspected before arrival?
                    </div>
                    <div class="collapse-content bg-white/5 text-slate-300">
                        <p class="pt-4">Yes. All vehicles must pass a pre-shipment inspection (PSI) to ensure they meet safety and environmental standards.</p>
                    </div>
                </div>

                <div class="collapse collapse-plus bg-white/10 border border-white/10 backdrop-blur rounded-lg">
                    <input type="radio" name="faq" />
                    <div class="collapse-title text-lg font-semibold text-slate-100 py-4">
                        9. Can I finance my imported car?
                    </div>
                    <div class="collapse-content bg-white/5 text-slate-300">
                        <p class="pt-4">We work with financial partners who can offer car import financing solutions depending on eligibility.</p>
                    </div>
                </div>

                <div class="collapse collapse-plus bg-white/10 border border-white/10 backdrop-blur rounded-lg">
                    <input type="radio" name="faq" />
                    <div class="collapse-title text-lg font-semibold text-slate-100 py-4">
                        10. Do imported vehicles come with a warranty?
                    </div>
                    <div class="collapse-content bg-white/5 text-slate-300">
                        <p class="pt-4">Yes, some vehicles may come with manufacturer or dealer warranties, and we can guide you on extended warranty options.</p>
                    </div>
                </div>

                <div class="collapse collapse-plus bg-white/10 border border-white/10 backdrop-blur rounded-lg">
                    <input type="radio" name="faq" />
                    <div class="collapse-title text-lg font-semibold text-slate-100 py-4">
                        11. What happens if my car is damaged during shipping?
                    </div>
                    <div class="collapse-content bg-white/5 text-slate-300">
                        <p class="pt-4">All vehicles are insured during transit. In case of damage, insurance claims can be made to cover the loss.</p>
                    </div>
                </div>

                <div class="collapse collapse-plus bg-white/10 border border-white/10 backdrop-blur rounded-lg">
                    <input type="radio" name="faq" />
                    <div class="collapse-title text-lg font-semibold text-slate-100 py-4">
                        12. Can you help me register the car once it arrives?
                    </div>
                    <div class="collapse-content bg-white/5 text-slate-300">
                        <p class="pt-4">Absolutely. We assist with NTSA registration, number plate issuance, and roadworthiness certification.</p>
                    </div>
                </div>
            </div>
        </div> 

    {{-- Core Values --}}
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold">Our Core Values</h2>
            <p class="text-slate-300 mt-2">The principles that define who we are and how we serve our clients</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="shield-checkmark-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Integrity & Transparency</h3>
                <p class="text-slate-300 text-sm">Honest communication and clear pricing with no hidden fees.</p>
            </div>

            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="heart-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Customer Care</h3>
                <p class="text-slate-300 text-sm">Every client is treated as a partner—your satisfaction is our success.</p>
            </div>

            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="globe-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Global Reach</h3>
                <p class="text-slate-300 text-sm">Strong partnerships in Japan ensure premium selections.</p>
            </div>

            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="checkmark-circle-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Reliability</h3>
                <p class="text-slate-300 text-sm">We deliver what we promise—on time and with care.</p>
            </div>

            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="people-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Community Focus</h3>
                <p class="text-slate-300 text-sm">We grow by empowering Kenyans to make informed car investment decisions.</p>
            </div>

            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="star-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Excellence</h3>
                <p class="text-slate-300 text-sm">Striving for quality service in every import, every client, every time.</p>
            </div>
        </div>
    </div>

    {{-- Why Choose Us --}}
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold">Why Choose Xplore Imports</h2>
            <p class="text-slate-300 mt-2">Built on trust, experience, and a passion for making car importation simple</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="cube-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">End-to-End Service</h3>
                <p class="text-slate-300 text-sm">From vehicle sourcing to doorstep delivery—we handle it all for you.</p>
            </div>

            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="checkmark-done-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Trusted Markets</h3>
                <p class="text-slate-300 text-sm">We only source cars from reputable and verified dealers worldwide.</p>
            </div>

            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="person-circle-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Personal Guidance</h3>
                <p class="text-slate-300 text-sm">Our team walks with you through every step of the process.</p>
            </div>

            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="pricetag-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Affordable Pricing</h3>
                <p class="text-slate-300 text-sm">We ensure competitive rates without compromising on quality.</p>
            </div>

            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 md:col-span-2 lg:col-span-1">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="rocket-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Fast & Secure Delivery</h3>
                <p class="text-slate-300 text-sm">Your car arrives safely, with real-time shipment updates.</p>
            </div>
        </div>
    </div>

    {{-- CTA Section --}}
    <div class="max-w-4xl mx-auto px-6 py-16 text-center">
        <div class="rounded-3xl bg-gradient-to-r from-amber-400 to-yellow-300 text-slate-900 p-8 shadow-xl">
            <h2 class="text-3xl font-bold mb-4">Ready to Find Your Dream Car?</h2>
            <p class="mb-6 text-slate-800">Browse our latest inventory of premium Japanese imports, all KEBS compliant and ready for delivery.</p>
            <a href="{{ route('cars') }}" class="btn btn-lg bg-slate-900 text-amber-300 border-none hover:bg-slate-800">Browse Our Inventory</a>
        </div>
    </div>
</div>

@include('partials.footer')
@endsection
