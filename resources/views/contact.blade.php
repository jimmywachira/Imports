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
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg">
                        <p class="text-red-700 dark:text-red-300 text-sm font-semibold mb-2">Please fix the following errors:</p>
                        <ul class="list-disc list-inside text-red-600 dark:text-red-400 text-sm space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="mb-6 p-4 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg flex items-start gap-3">
                        <ion-icon name="checkmark-circle-outline" class="text-green-600 dark:text-green-400 text-xl flex-shrink-0 mt-0.5"></ion-icon>
                        <div>
                            <p class="text-green-700 dark:text-green-300 text-sm font-semibold">Success!</p>
                            <p class="text-green-600 dark:text-green-400 text-sm">{{ session('success') }}</p>
                        </div>
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4 border-2 p-4 sm:space-y-6">
                    @csrf
                    <div>
                        <label class="label"><span class="label-text ui-label text-sm sm:text-base">Full Name <span class="text-red-500">*</span></span></label>
                        <input type="text" name="name" placeholder="Your name" class="ui-input text-sm border-2 p-2 sm:text-base @error('name') border-red-500 @enderror" value="{{ old('name') }}" required />
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="label"><span class="label-text ui-label text-sm sm:text-base">Email Address <span class="text-red-500">*</span></span></label>
                        <input type="email" name="email" placeholder="your@email.com" class="ui-input text-sm border-2 p-2 sm:text-base @error('email') border-red-500 @enderror" value="{{ old('email') }}" required />
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="label"><span class="label-text ui-label text-sm sm:text-base">Phone Number <span class="text-red-500">*</span></span></label>
                        <input type="tel" name="phone" placeholder="+254 7XX XXX XXX" class="ui-input border-2 p-2 text-sm sm:text-base @error('phone') border-red-500 @enderror" value="{{ old('phone') }}" required />
                        @error('phone')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="label"><span class="label-text ui-label text-sm sm:text-base">Subject <span class="text-red-500">*</span></span></label>
                        <select name="subject" class="ui-select p-2 text-sm border-2 sm:text-base @error('subject') border-red-500 @enderror" required>
                            <option value="" disabled selected>Select a subject</option>
                            <option value="Car Inquiry" @if(old('subject') === 'Car Inquiry') selected @endif>Car Inquiry</option>
                            <option value="Inspection Report" @if(old('subject') === 'Inspection Report') selected @endif>Inspection Report</option>
                            <option value="Shipping Question" @if(old('subject') === 'Shipping Question') selected @endif>Shipping Question</option>
                            <option value="General Inquiry" @if(old('subject') === 'General Inquiry') selected @endif>General Inquiry</option>
                        </select>
                        @error('subject')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="label"><span class="label-text ui-label text-sm sm:text-base">Message <span class="text-red-500">*</span></span></label>
                        <textarea name="message" class="ui-textarea h-24 sm:h-32 text-sm border-2 p-2 sm:text-base @error('message') border-red-500 @enderror" placeholder="Your message here ..." required>{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn-primary btn-lg w-full border-2 border-amber-400 hover:bg-amber-400 p-2 sm:text-base">Send Message</button>
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
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center flex-shrink-0">
                            <ion-icon name="logo-whatsapp" class="text-lg sm:text-xl text-white"></ion-icon>
                        </div>
                        <div>
                            <h3 class="text-base sm:text-lg font-semibold mb-1 sm:mb-2">WhatsApp</h3>
                            <a href="https://wa.me/254757356989" target="_blank" class="text-sm sm:text-base text-green-500 hover:text-green-600 font-medium transition-colors">
                                +254 757 356 989
                            </a>
                            <p class="text-slate-500 dark:text-slate-400 text-xs sm:text-sm mt-1">Chat with us instantly</p>
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
    </div>

    @include('partials.footer')
</div>
@endsection