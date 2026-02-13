@extends('layouts.app', ['title' => 'Contact Us - Xplore Car Imports'])

@section('content')
<div class="bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800 text-slate-100 min-h-screen">
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="text-center mb-16">
            <p class="uppercase tracking-[0.2em] text-xs font-semibold text-amber-400 mb-4">Get In Touch</p>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Contact Us</h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto">Have questions about importing a car? Our team is ready to help. Reach out anytime—we're here 24/7.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
            <!-- Contact Form -->
            <div class="rounded-3xl bg-white/10 border border-white/10 backdrop-blur p-8">
                <form class="space-y-6">
                    <div>
                        <label class="label"><span class="label-text text-slate-200">Full Name</span></label>
                        <input type="text" placeholder="Your name" class="input input-bordered w-full bg-slate-900/70 border-slate-700 text-slate-100" />
                    </div>
                    <div>
                        <label class="label"><span class="label-text text-slate-200">Email Address</span></label>
                        <input type="email" placeholder="your@email.com" class="input input-bordered w-full bg-slate-900/70 border-slate-700 text-slate-100" />
                    </div>
                    <div>
                        <label class="label"><span class="label-text text-slate-200">Phone Number</span></label>
                        <input type="tel" placeholder="+254 7XX XXX XXX" class="input input-bordered w-full bg-slate-900/70 border-slate-700 text-slate-100" />
                    </div>
                    <div>
                        <label class="label"><span class="label-text text-slate-200">Subject</span></label>
                        <select class="select select-bordered w-full bg-slate-900/70 border-slate-700 text-slate-100">
                            <option>Car Inquiry</option>
                            <option>Inspection Report</option>
                            <option>Shipping Question</option>
                            <option>General Inquiry</option>
                        </select>
                    </div>
                    <div>
                        <label class="label"><span class="label-text text-slate-200">Message</span></label>
                        <textarea class="textarea textarea-bordered w-full h-32 bg-slate-900/70 border-slate-700 text-slate-100" placeholder="Your message here..."></textarea>
                    </div>
                    <button class="btn btn-lg w-full bg-amber-400 text-slate-900 border-none hover:bg-amber-300">Send Message</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="space-y-6">
                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                            <ion-icon name="call-outline" class="text-xl text-slate-900"></ion-icon>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Phone</h3>
                            <p class="text-slate-300">+254 700 123 456</p>
                            <p class="text-slate-400 text-sm mt-1">Available 24/7</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                            <ion-icon name="mail-outline" class="text-xl text-slate-900"></ion-icon>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Email</h3>
                            <p class="text-slate-300">info@xplorecar.com</p>
                            <p class="text-slate-400 text-sm mt-1">Response within 2 hours</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                            <ion-icon name="location-outline" class="text-xl text-slate-900"></ion-icon>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Office Location</h3>
                            <p class="text-slate-300">Nairobi, Kenya</p>
                            <p class="text-slate-400 text-sm mt-1">Visit by appointment</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                            <ion-icon name="time-outline" class="text-xl text-slate-900"></ion-icon>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Business Hours</h3>
                            <p class="text-slate-300">Mon - Fri: 8:00 AM - 6:00 PM</p>
                            <p class="text-slate-300">Sat - Sun: 10:00 AM - 4:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mt-16">
            <div class="text-center mb-12">
                <p class="uppercase tracking-[0.2em] text-xs font-semibold text-amber-400 mb-4">Questions?</p>
                <h2 class="text-3xl md:text-4xl font-bold mb-2">Frequently Asked Questions</h2>
                <p class="text-slate-300">Find answers to common questions about our import process, requirements, and services.</p>
            </div>
            <div class="space-y-3">
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
    </div>

    @include('partials.footer')
</div>
@endsection
