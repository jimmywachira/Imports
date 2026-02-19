@extends('layouts.app', [
    'title' => 'Car Importation Services from Japan to Kenya | Xplore Car Imports',
    'description' => 'Import your dream car from Japan to Kenya with Xplore Car Imports. We handle sourcing, inspection, customs compliance, shipping, clearing, and delivery. Competitive pricing, flexible payments, and Kenya-compliant vehicles.'
])

@section('content')
<div class="page-shell">
    {{-- Hero Section --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="text-center mb-8 sm:mb-12 lg:mb-16">
            <p class="uppercase tracking-[0.2em] text-xs font-semibold text-amber-400 mb-2 sm:mb-4">Professional Car Importation</p>
            <h1 class="text-2xl sm:text-4xl lg:text-6xl font-extrabold mb-3 sm:mb-6 leading-tight">
                Find the Right Car, the Right Way
            </h1>
            <p class="text-base sm:text-lg lg:text-xl ui-muted max-w-4xl mx-auto px-3 sm:px-0 mb-6 sm:mb-8">
                We simplify the process of importing your dream car. Our team of sourcing experts handle everything from car inspection to customs compliance, ensuring every import meets Kenya's strict standards for safety, age, and specification.
            </p>
            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center items-center font-semibold text-amber-400 p-2">
                <a href="{{ route('contact') }}" class="btn-primary text-sm sm:text-base w-full sm:w-auto">
                    <ion-icon size="large" name="document-text-outline" class="text-lg sm:text-xl"></ion-icon>
                    Get Free Quote
                </a>
                <a href="{{ route('cars') }}" class="btn-outline-amber text-sm sm:text-base w-full sm:w-auto">
                    <ion-icon size="large" name="car-sport-outline" class="text-lg sm:text-xl"></ion-icon>
                    Browse Available Cars
                </a>
            </div>
        </div>
    </div>

    {{-- How It Works Section --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-3 sm:mb-4">How It Works</h2>
            <p class="ui-muted text-sm sm:text-base max-w-2xl mx-auto">
                Our streamlined 9-step process makes importing your dream car from Japan to Kenya simple and stress-free
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            {{-- Step 1 --}}
            <div class="glass-panel p-6 relative">
                <div class="absolute -top-3 -left-3 w-12 h-12 bg-amber-400 rounded-full flex items-center justify-center font-bold text-slate-900 text-lg">
                    1
                </div>
                <h3 class="text-lg font-semibold mb-3 mt-2">Tell Us Your Needs</h3>
                <p class="ui-muted text-sm">
                    Share your car preferences, budget, and any specific requirements you have. Our team will use this information to find the perfect match for you.
                </p>
            </div>

            {{-- Step 2 --}}
            <div class="glass-panel p-6 relative">
                <div class="absolute -top-3 -left-3 w-12 h-12 bg-amber-400 rounded-full flex items-center justify-center font-bold text-slate-900 text-lg">
                    2
                </div>
                <h3 class="text-lg font-semibold mb-3 mt-2">We Search From Our Japan Network</h3>
                <p class="ui-muted text-sm">
                    We conduct an extensive search through our trusted network of Japanese dealers and auction houses to identify the best cars available.
                </p>
            </div>

            {{-- Step 3 --}}
            <div class="glass-panel p-6 relative">
                <div class="absolute -top-3 -left-3 w-12 h-12 bg-amber-400 rounded-full flex items-center justify-center font-bold text-slate-900 text-lg">
                    3
                </div>
                <h3 class="text-lg font-semibold mb-3 mt-2">Present Verified Options</h3>
                <p class="ui-muted text-sm">
                    You'll receive a curated list of verified car options that match your preferences, complete with photos and detailed specifications.
                </p>
            </div>

            {{-- Step 4 --}}
            <div class="glass-panel p-6 relative">
                <div class="absolute -top-3 -left-3 w-12 h-12 bg-amber-400 rounded-full flex items-center justify-center font-bold text-slate-900 text-lg">
                    4
                </div>
                <h3 class="text-lg font-semibold mb-3 mt-2">Reservation</h3>
                <p class="ui-muted text-sm">
                    Once you've selected your preferred car, we reserve it for up to 2 days while you prepare for purchase.
                </p>
            </div>

            {{-- Step 5 --}}
            <div class="glass-panel p-6 relative">
                <div class="absolute -top-3 -left-3 w-12 h-12 bg-amber-400 rounded-full flex items-center justify-center font-bold text-slate-900 text-lg">
                    5
                </div>
                <h3 class="text-lg font-semibold mb-3 mt-2">Due Diligence</h3>
                <p class="ui-muted text-sm">
                    Before finalizing the purchase, our experts conduct a comprehensive background check including service history, recall records, and accident reports to ensure the car's integrity.
                </p>
            </div>

            {{-- Step 6 --}}
            <div class="glass-panel p-6 relative">
                <div class="absolute -top-3 -left-3 w-12 h-12 bg-amber-400 rounded-full flex items-center justify-center font-bold text-slate-900 text-lg">
                    6
                </div>
                <h3 class="text-lg font-semibold mb-3 mt-2">Secure Payment</h3>
                <p class="ui-muted text-sm">
                    We facilitate a transparent and secure international payment process, ensuring your funds are safely transferred to the car's seller.
                </p>
            </div>

            {{-- Step 7 --}}
            <div class="glass-panel p-6 relative">
                <div class="absolute -top-3 -left-3 w-12 h-12 bg-amber-400 rounded-full flex items-center justify-center font-bold text-slate-900 text-lg">
                    7
                </div>
                <h3 class="text-lg font-semibold mb-3 mt-2">Relax While We Ship</h3>
                <p class="ui-muted text-sm">
                    Once payment is confirmed, sit back and relax as your car is shipped to Kenya, typically arriving within 45 days.
                </p>
            </div>

            {{-- Step 8 --}}
            <div class="glass-panel p-6 relative">
                <div class="absolute -top-3 -left-3 w-12 h-12 bg-amber-400 rounded-full flex items-center justify-center font-bold text-slate-900 text-lg">
                    8
                </div>
                <h3 class="text-lg font-semibold mb-3 mt-2">Clearing and Registration</h3>
                <p class="ui-muted text-sm">
                    Our team handles all port clearance procedures, duty payments, and NTSA registration to make the process completely hassle-free for you.
                </p>
            </div>

            {{-- Step 9 --}}
            <div class="glass-panel p-6 relative">
                <div class="absolute -top-3 -left-3 w-12 h-12 bg-amber-400 rounded-full flex items-center justify-center font-bold text-slate-900 text-lg">
                    9
                </div>
                <h3 class="text-lg font-semibold mb-3 mt-2">Final Delivery</h3>
                <p class="ui-muted text-sm">
                    Your car is delivered to Nairobi, inspected, and then transported directly to your doorstep, ready for the road.
                </p>
            </div>
        </div>
    </div>

    {{-- Why Choose Section --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-3 sm:mb-4">Why Choose Our Car Importation?</h2>
            <p class="ui-muted text-sm sm:text-base max-w-2xl mx-auto">
                We go beyond simple car sourcing—delivering quality, transparency, and peace of mind at every step
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            {{-- High-Grade Quality --}}
            <div class="glass-panel p-6 hover:border-amber-400 transition-colors">
                <div class="w-14 h-14 bg-amber-400 rounded-xl flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="star-outline" class="text-2xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-3">High-Grade Quality Cars</h3>
                <p class="ui-muted text-sm">
                    We specialize in importing low-mileage, high-grade cars (Grade 4 and above) to ensure premium quality and reliability.
                </p>
            </div>

            {{-- Due Diligence --}}
            <div class="glass-panel p-6 hover:border-amber-400 transition-colors">
                <div class="w-14 h-14 bg-amber-400 rounded-xl flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="search-outline" class="text-2xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-3">Thorough Due Diligence</h3>
                <p class="ui-muted text-sm">
                    Before any purchase, we perform a detailed background check on service history, recalls, and past accidents for complete transparency.
                </p>
            </div>

            {{-- Flexible Payment --}}
            <div class="glass-panel p-6 hover:border-amber-400 transition-colors">
                <div class="w-14 h-14 bg-amber-400 rounded-xl flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="card-outline" class="text-2xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-3">Flexible Payment Options</h3>
                <p class="ui-muted text-sm">
                    Enjoy flexibility by paying 70% upfront and settle the balance once your car arrives safely at the Port of Mombasa.
                </p>
            </div>

            {{-- Competitive Pricing --}}
            <div class="glass-panel p-6 hover:border-amber-400 transition-colors">
                <div class="w-14 h-14 bg-amber-400 rounded-xl flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="pricetag-outline" class="text-2xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-3">Competitive Pricing</h3>
                <p class="ui-muted text-sm">
                    We offer the best market rates by balancing your budget with exceptional car quality and value.
                </p>
            </div>

            {{-- Kenya Compliant --}}
            <div class="glass-panel p-6 hover:border-amber-400 transition-colors">
                <div class="w-14 h-14 bg-amber-400 rounded-xl flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="shield-checkmark-outline" class="text-2xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-3">Kenya-Compliant Vehicles</h3>
                <p class="ui-muted text-sm">
                    All sourced cars meet Kenyan import standards, including right-hand drive and the 8-year age limit requirement.
                </p>
            </div>

            {{-- Fast Sourcing --}}
            <div class="glass-panel p-6 hover:border-amber-400 transition-colors">
                <div class="w-14 h-14 bg-amber-400 rounded-xl flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="flash-outline" class="text-2xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-3">Fast and Reliable Sourcing</h3>
                <p class="ui-muted text-sm">
                    We prioritize cars already inspected and approved for export to ensure a quick, seamless sourcing process.
                </p>
            </div>
        </div>
    </div>

    {{-- Business Opportunity Section --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="glass-panel rounded-3xl p-6 sm:p-8 lg:p-12">
            <div class="text-center mb-8 sm:mb-12">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-amber-400 rounded-full mb-4">
                    <ion-icon name="business-outline" class="text-3xl text-slate-900"></ion-icon>
                </div>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-4">
                    Xplore Car Imports: A Business Opportunity on Wheels
                </h2>
                <p class="text-base sm:text-lg ui-muted max-w-3xl mx-auto">
                    We don't just import cars for personal use—we empower entrepreneurs and drivers to start or expand their ride-hailing businesses. Every vehicle we recommend for online taxi services, corporate transport, or personal hire has been carefully evaluated for efficiency, durability, and profitability.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8">
                {{-- Smart Car Selection --}}
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                            <ion-icon name="car-outline" class="text-xl text-slate-900"></ion-icon>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Smart Car Selection for Ride Hailing</h3>
                            <ul class="space-y-2 ui-muted text-sm">
                                <li class="flex items-start gap-2">
                                    <ion-icon name="checkmark-circle" class="text-amber-400 flex-shrink-0 mt-0.5"></ion-icon>
                                    <span>Fuel-efficient and reliable models ideal for platforms like Uber, Bolt, and Little Cab</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <ion-icon name="checkmark-circle" class="text-amber-400 flex-shrink-0 mt-0.5"></ion-icon>
                                    <span>Long-lasting cars with low maintenance costs and high resale value</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <ion-icon name="checkmark-circle" class="text-amber-400 flex-shrink-0 mt-0.5"></ion-icon>
                                    <span>Guidance on hybrid and economy options that maximize profit margins</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <ion-icon name="checkmark-circle" class="text-amber-400 flex-shrink-0 mt-0.5"></ion-icon>
                                    <span>Access to verified units already registered for commercial use</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Driver Recruitment --}}
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                            <ion-icon name="people-outline" class="text-xl text-slate-900"></ion-icon>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Driver Recruitment & Partnership Support</h3>
                            <ul class="space-y-2 ui-muted text-sm">
                                <li class="flex items-start gap-2">
                                    <ion-icon name="checkmark-circle" class="text-amber-400 flex-shrink-0 mt-0.5"></ion-icon>
                                    <span>Assistance connecting qualified drivers with available vehicles</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <ion-icon name="checkmark-circle" class="text-amber-400 flex-shrink-0 mt-0.5"></ion-icon>
                                    <span>Flexible payment and lease plans to help new drivers get started</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <ion-icon name="checkmark-circle" class="text-amber-400 flex-shrink-0 mt-0.5"></ion-icon>
                                    <span>Consultation on driving experience, professionalism, and customer service</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <ion-icon name="checkmark-circle" class="text-amber-400 flex-shrink-0 mt-0.5"></ion-icon>
                                    <span>Guided onboarding for those seeking to build long-term transport businesses</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Business Support --}}
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                            <ion-icon name="briefcase-outline" class="text-xl text-slate-900"></ion-icon>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Business Support</h3>
                            <ul class="space-y-2 ui-muted text-sm">
                                <li class="flex items-start gap-2">
                                    <ion-icon name="checkmark-circle" class="text-amber-400 flex-shrink-0 mt-0.5"></ion-icon>
                                    <span>Guidance on business setup for individuals and small fleets</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <ion-icon name="checkmark-circle" class="text-amber-400 flex-shrink-0 mt-0.5"></ion-icon>
                                    <span>Advisory on tax, insurance, and operational cost management</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <ion-icon name="checkmark-circle" class="text-amber-400 flex-shrink-0 mt-0.5"></ion-icon>
                                    <span>Ongoing mentorship for sustainable car-based income</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Local Support --}}
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                            <ion-icon name="construct-outline" class="text-xl text-slate-900"></ion-icon>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Local Support & Maintenance Network</h3>
                            <ul class="space-y-2 ui-muted text-sm">
                                <li class="flex items-start gap-2">
                                    <ion-icon name="checkmark-circle" class="text-amber-400 flex-shrink-0 mt-0.5"></ion-icon>
                                    <span>Links to trusted local garages and service centers</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <ion-icon name="checkmark-circle" class="text-amber-400 flex-shrink-0 mt-0.5"></ion-icon>
                                    <span>Access to affordable spare parts and bodywork services</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <ion-icon name="checkmark-circle" class="text-amber-400 flex-shrink-0 mt-0.5"></ion-icon>
                                    <span>Continuous technical support and maintenance guidance</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <ion-icon name="checkmark-circle" class="text-amber-400 flex-shrink-0 mt-0.5"></ion-icon>
                                    <span>After-sales support to keep your vehicle business running efficiently</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('advisory') }}" class="btn-primary text-sm sm:text-base">
                    <ion-icon name="information-circle-outline" class="text-lg sm:text-xl"></ion-icon>
                    Learn More About Our Advisory Services
                </a>
            </div>
        </div>
    </div>

    {{-- Popular Cars Section --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-3 sm:mb-4">Popular Cars We Source for Kenya</h2>
            <p class="ui-muted text-sm sm:text-base max-w-2xl mx-auto">
                From fuel-efficient hatchbacks to spacious SUVs, we source the most reliable and cost-effective vehicles for Kenyan roads
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
            {{-- Popular Taxi Vehicles --}}
            <div class="glass-panel p-6 sm:p-8">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <ion-icon name="car-sport-outline" class="text-xl text-slate-900"></ion-icon>
                    </div>
                    <h3 class="text-xl font-semibold">Popular Taxi Vehicles</h3>
                </div>
                <p class="ui-muted text-sm mb-4">
                    We import efficient and durable units ideal for ride-hailing businesses such as Uber, Bolt, and Little Cab.
                </p>
                <div class="grid grid-cols-2 gap-2 sm:gap-3">
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Toyota Axio</div>
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Toyota Fielder</div>
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Mazda Demio</div>
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Honda Fit</div>
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Nissan Note</div>
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Toyota Belta</div>
                </div>
            </div>

            {{-- Fuel-Efficient Hatchbacks --}}
            <div class="glass-panel p-6 sm:p-8">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <ion-icon name="leaf-outline" class="text-xl text-slate-900"></ion-icon>
                    </div>
                    <h3 class="text-xl font-semibold">Fuel-Efficient Hatchbacks</h3>
                </div>
                <p class="ui-muted text-sm mb-4">
                    Perfect for both private and taxi use—low maintenance, great fuel economy, and easy spare parts availability.
                </p>
                <div class="grid grid-cols-2 gap-2 sm:gap-3">
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Toyota Vitz</div>
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Mazda Demio SkyActiv</div>
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Honda Fit Hybrid</div>
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Suzuki Swift</div>
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Toyota Passo</div>
                </div>
            </div>

            {{-- Family & Executive Sedans --}}
            <div class="glass-panel p-6 sm:p-8">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <ion-icon name="people-circle-outline" class="text-xl text-slate-900"></ion-icon>
                    </div>
                    <h3 class="text-xl font-semibold">Family & Executive Sedans</h3>
                </div>
                <p class="ui-muted text-sm mb-4">
                    Spacious, comfortable cars suited for family and private use, balancing class with affordability.
                </p>
                <div class="grid grid-cols-2 gap-2 sm:gap-3">
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Toyota Premio</div>
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Toyota Allion</div>
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Nissan Sylphy</div>
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Mazda Atenza</div>
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Honda Grace</div>
                </div>
            </div>

            {{-- SUVs --}}
            <div class="glass-panel p-6 sm:p-8">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <ion-icon name="trail-sign-outline" class="text-xl text-slate-900"></ion-icon>
                    </div>
                    <h3 class="text-xl font-semibold">SUVs for Business or Private Use</h3>
                </div>
                <p class="ui-muted text-sm mb-4">
                    For long-distance comfort, high ground clearance, and multi-purpose usage—perfect for both urban and rural areas.
                </p>
                <div class="grid grid-cols-2 gap-2 sm:gap-3">
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Toyota Harrier</div>
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">RAV4</div>
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Honda CR-V</div>
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Mazda CX-5</div>
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 text-sm">Subaru Forester</div>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('cars') }}" class="btn-outline-amber text-sm sm:text-base">
                <ion-icon name="search-outline" class="text-lg sm:text-xl"></ion-icon>
                Explore All Available Cars
            </a>
        </div>
    </div>

    {{-- CTA Section --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="glass-panel rounded-3xl p-8 sm:p-12 lg:p-16 text-center bg-gradient-to-br from-amber-400/10 to-amber-600/10 border-amber-400/30">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-4">
                Ready to Import Your Dream Car from Japan?
            </h2>
            <p class="text-base sm:text-lg ui-muted max-w-2xl mx-auto mb-8">
                Let our team of experts guide you through every step of the importation process. Get started with a free, no-obligation quote today.
            </p>
            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center items-center">
                <a href="{{ route('contact') }}" class="btn-primary text-sm sm:text-base w-full sm:w-auto">
                    <ion-icon name="mail-outline" class="text-lg sm:text-xl"></ion-icon>
                    Get Your Free Quote
                </a>
                <a href="https://wa.me/254757356989" target="_blank" class="btn-outline-amber text-sm sm:text-base w-full sm:w-auto">
                    <ion-icon name="logo-whatsapp" class="text-lg sm:text-xl"></ion-icon>
                    Chat on WhatsApp
                </a>
            </div>
            <p class="text-xs sm:text-sm ui-muted mt-6">
                <ion-icon name="shield-checkmark-outline" class="text-amber-400"></ion-icon>
                All vehicles are KEBS compliant and meet Kenya's 8-year import age limit
            </p>
        </div>
    </div>
</div>
@endsection
