@extends('layouts.app', ['title' => 'Contact Us - Xplore Car Imports', 'description' => 'Contact Xplore Car Imports for Japan car imports, inspection reports, shipping, and customs clearing in Kenya.'])

@section('content')
<div class="page-shell">
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="text-center mb-8 sm:mb-12 lg:mb-16">
            <p class="uppercase tracking-[0.2em] text-xs font-semibold text-amber-400 mb-2 sm:mb-4">Get In Touch</p>
            <h1 class="text-2xl sm:text-4xl lg:text-6xl font-extrabold mb-3 sm:mb-4 leading-tight">Contact Us</h1>
            <p class="text-base sm:text-lg lg:text-xl ui-muted max-w-3xl mx-auto px-2 sm:px-0">Have questions about importing a car? Our team is ready to help. Reach out anytime—we're here 24/7.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 mb-8 sm:mb-12 lg:mb-16">
            <!-- Contact Form -->
            <div class="rounded-3xl glass-panel p-6 sm:p-8">
                <form class="space-y-4 sm:space-y-6">
                    <div>
                        <label class="label"><span class="label-text ui-label text-sm sm:text-base">Full Name</span></label>
                        <input type="text" placeholder="Your name" class="ui-input text-sm p-2 sm:text-base" />
                    </div>
                    <div>
                        <label class="label"><span class="label-text ui-label text-sm sm:text-base">Email Address</span></label>
                        <input type="email" placeholder="your@email.com" class="ui-input text-sm p-2 sm:text-base" />
                    </div>
                    <div>
                        <label class="label"><span class="label-text ui-label text-sm sm:text-base">Phone Number</span></label>
                        <input type="tel" placeholder="+254 7XX XXX XXX" class="ui-input p-2 text-sm sm:text-base" />
                    </div>
                    <div>
                        <label class="label"><span class="label-text ui-label text-sm sm:text-base">Subject</span></label>
                        <select class="ui-select p-2 text-sm sm:text-base">
                            <option>Car Inquiry</option>
                            <option>Inspection Report</option>
                            <option>Shipping Question</option>
                            <option>General Inquiry</option>
                        </select>
                    </div>
                    <div>
                        <label class="label"><span class="label-text ui-label text-sm sm:text-base">Message</span></label>
                        <textarea class="ui-textarea h-24 sm:h-32 text-sm p-2 sm:text-base" placeholder="Your message here ..."></textarea>
                    </div>
                    <button class="btn-primary btn-lg w-full border-2 border-amber-400 hover:bg-amber-400 p-2 sm:text-base">Send Message</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="space-y-4 sm:space-y-6">
                <div class="glass-panel p-6">
                    <div class="flex items-start gap-3 sm:gap-4">
                        <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                            <ion-icon name="call-outline" class="text-lg sm:text-xl text-slate-900"></ion-icon>
                        </div>
                        <div>
                            <h3 class="text-base sm:text-lg font-semibold mb-1 sm:mb-2">Phone</h3>
                            <p class="ui-muted text-sm sm:text-base">+254 757 356 989</p>
                            <p class="text-slate-500 dark:text-slate-400 text-xs sm:text-sm mt-1">Just A Call Away</p>
                        </div>
                    </div>
                </div>

                <div class="glass-panel p-6">
                    <div class="flex items-start gap-3 sm:gap-4">
                        <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                            <ion-icon name="mail-outline" class="text-lg sm:text-xl text-slate-900"></ion-icon>
                        </div>
                        <div>
                            <h3 class="text-base sm:text-lg font-semibold mb-1 sm:mb-2">Email</h3>
                            <p class="ui-muted text-sm sm:text-base break-all">info@xplorecar.com</p>
                            <p class="text-slate-500 dark:text-slate-400 text-xs sm:text-sm mt-1">Response within 2 hours</p>
                        </div>
                    </div>
                </div>

                <div class="glass-panel p-6">
                    <div class="flex items-start gap-3 sm:gap-4">
                        <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                            <ion-icon name="location-outline" class="text-lg sm:text-xl text-slate-900"></ion-icon>
                        </div>
                        <div>
                            <h3 class="text-base sm:text-lg font-semibold mb-1 sm:mb-2">Office Location</h3>
                            <p class="ui-muted text-sm sm:text-base">New Rain, along Kenyatta Road - Nairobi</p>
                            <p class="text-slate-500 dark:text-slate-400 text-xs sm:text-sm mt-1">Visit by appointment</p>
                        </div>
                    </div>
                </div>

                <div class="glass-panel p-6">
                    <div class="flex items-start gap-3 sm:gap-4">
                        <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                            <ion-icon name="time-outline" class="text-lg sm:text-xl text-slate-900"></ion-icon>
                        </div>
                        <div>
                            <h3 class="text-base sm:text-lg font-semibold mb-1 sm:mb-2">Business Hours</h3>
                            <p class="ui-muted text-sm sm:text-base">Mon - Fri: 8:00 AM - 6:00 PM</p>
                            <p class="ui-muted text-sm sm:text-base">Sat - Sun: 10:00 AM - 4:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mt-8 sm:mt-12 lg:mt-16 rounded-3xl glass-panel p-6 sm:p-8 lg:p-12">
            <div class="text-center mb-8 sm:mb-12">
                <p class="uppercase tracking-[0.2em] text-xs font-semibold text-amber-400 mb-2 sm:mb-4">Questions?</p>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-2">Frequently Asked Questions</h2>
                <p class="ui-muted text-sm sm:text-base">Find answers to common questions about our import process, requirements, and services.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 sm:gap-4">
                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">01</span>
                            <span class="text-base font-semibold ui-title">How does car importation work?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        We help you source your preferred vehicle from overseas dealers, handle the purchase, shipping, and clearance at the port before delivery to you.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">02</span>
                            <span class="text-base font-semibold ui-title">What documents are required to import a car?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        You'll need a valid national ID or passport, KRA PIN certificate, and proof of purchase. We'll assist you with customs clearance documents as well.
                    </div>
                </details>

                

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">04</span>
                            <span class="text-base font-semibold ui-title">Do I have to pay the full amount upfront?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        No. We offer flexible payment options where you can pay a deposit to initiate the process, with the balance payable upon delivery.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">05</span>
                            <span class="text-base font-semibold ui-title">Are there additional hidden costs?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        No. We provide a transparent quotation upfront, including shipping, customs duty, port charges, and clearance fees.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">06</span>
                            <span class="text-base font-semibold ui-title">Can I track my vehicle during shipping?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Yes, we provide shipping details and updates so you can track your vehicle until it arrives in Kenya.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">07</span>
                            <span class="text-base font-semibold ui-title">What types of vehicles can I import?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        We help you import cars, SUVs, vans, trucks, and even specialized vehicles, as long as they meet KEBS age and standards requirements.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">08</span>
                            <span class="text-base font-semibold ui-title">Are imported cars inspected before arrival?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Yes. All vehicles must pass a pre-shipment inspection (PSI) to ensure they meet safety and environmental standards.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">09</span>
                            <span class="text-base font-semibold ui-title">Can I finance my imported car?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        We work with financial partners who can offer car import financing solutions depending on eligibility.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">10</span>
                            <span class="text-base font-semibold ui-title">Do imported vehicles come with a warranty?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Yes, some vehicles may come with manufacturer or dealer warranties, and we can guide you on extended warranty options.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">11</span>
                            <span class="text-base font-semibold ui-title">What happens if my car is damaged during shipping?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        All vehicles are insured during transit. In case of damage, insurance claims can be made to cover the loss.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">12</span>
                            <span class="text-base font-semibold ui-title">Can you help me register the car once it arrives?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Absolutely. We assist with NTSA registration, number plate issuance, and roadworthiness certification.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">13</span>
                            <span class="text-base font-semibold ui-title">How long does the importation process take?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        The entire process typically takes 45-60 days from the time you select your car to final delivery at your doorstep. This includes sourcing, due diligence, shipping (approximately 45 days), port clearance, NTSA registration, and final delivery.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">14</span>
                            <span class="text-base font-semibold ui-title">What payment options do you offer?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        We offer flexible payment terms: pay 70% upfront when the car is confirmed, and the remaining 30% plus any clearing charges once your vehicle arrives at the Port of Mombasa. All payments are processed securely through verified banking channels.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">15</span>
                            <span class="text-base font-semibold ui-title">Are all cars Kenya-compliant?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Yes, absolutely. We only source vehicles that meet Kenya's import regulations, including right-hand drive configuration and the 8-year age limit from the year of manufacture. All cars undergo thorough verification before purchase.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">16</span>
                            <span class="text-base font-semibold ui-title">Do you handle all customs and NTSA registration?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Yes, we handle everything. Our team manages all port clearance procedures, duty payments, KEBS compliance verification, NTSA registration, and number plate acquisition. You don't need to worry about any paperwork or bureaucratic processes.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">17</span>
                            <span class="text-base font-semibold ui-title">Can I get a car specifically for taxi/ride-hailing business?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Absolutely! We specialize in sourcing fuel-efficient, reliable cars perfect for taxi and ride-hailing businesses. We also provide business advisory services, driver recruitment support, and ongoing mentorship to help you succeed in the transport business.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">18</span>
                            <span class="text-base font-semibold ui-title">What if the car has hidden problems?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Before finalizing any purchase, we conduct comprehensive due diligence including service history checks, recall records, and accident reports. We only source high-grade vehicles (Grade 4 and above) and provide you with complete transparency about the car's condition before you commit to the purchase.
                    </div>
                </details>
            </div>
        </div>


    </div>

    @include('partials.footer')
</div>
@endsection