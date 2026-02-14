<div class="min-h-screen bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800 text-slate-100">
    <div class="max-w-7xl mx-auto px-6 py-12">
        <!-- Breadcrumb -->
        <div class="text-sm breadcrumbs mb-6">
            <ul>
                <li><a href="{{ route('cars') }}" wire:navigate class="text-amber-400 hover:text-amber-300">Browse Cars</a></li>
                <li class="text-slate-300">{{ $car->make }}</li>
                <li class="text-slate-300">{{ $car->full_name }}</li>
            </ul>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            <!-- Left Column - Images and Details -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Main Image Gallery -->
                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur overflow-hidden">
                    <!-- Main Image Display -->
                    <div class="relative h-96 bg-slate-900/50">
                        <img 
                            src="{{ $car->primary_image }}" 
                            alt="{{ $car->full_name }}" 
                            class="w-full h-full object-contain"
                        />
                        @if(!$car->is_available)
                            <div class="absolute inset-0 bg-slate-900/70 flex items-center justify-center">
                                <span class="badge badge-error badge-lg text-lg px-8 py-4">SOLD</span>
                            </div>
                        @endif
                    </div>

                    <!-- Thumbnail Gallery (if multiple images exist) -->
                    @if($car->images && count($car->images) > 1)
                        <div class="p-4 flex gap-2 overflow-x-auto">
                            @foreach($car->images as $index => $image)
                                <button 
                                    wire:click="selectImage({{ $index }})"
                                    class="flex-shrink-0 w-20 h-20 rounded-lg overflow-hidden border-2 transition-colors
                                        {{ $selectedImage === $index ? 'border-amber-400' : 'border-slate-700 hover:border-amber-400/50' }}"
                                >
                                    <img src="{{ $image }}" alt="View {{ $index + 1 }}" class="w-full h-full object-cover" />
                                </button>
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Vehicle Specifications -->
                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 md:p-8">
                    <h2 class="text-2xl font-bold mb-6 flex items-center gap-2">
                        <ion-icon name="information-circle-outline" class="text-3xl text-amber-400"></ion-icon>
                        Vehicle Specifications
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Spec Item -->
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-amber-400/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <ion-icon name="car-outline" class="text-xl text-amber-400"></ion-icon>
                            </div>
                            <div>
                                <p class="text-slate-400 text-sm">Make & Model</p>
                                <p class="font-semibold text-lg">{{ $car->make }} {{ $car->model }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-amber-400/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <ion-icon name="calendar-outline" class="text-xl text-amber-400"></ion-icon>
                            </div>
                            <div>
                                <p class="text-slate-400 text-sm">Year of Registration</p>
                                <p class="font-semibold text-lg">{{ $car->year_of_reg }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-amber-400/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <ion-icon name="speedometer-outline" class="text-xl text-amber-400"></ion-icon>
                            </div>
                            <div>
                                <p class="text-slate-400 text-sm">Mileage</p>
                                <p class="font-semibold text-lg">{{ $car->formatted_mileage }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-amber-400/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <ion-icon name="flash-outline" class="text-xl text-amber-400"></ion-icon>
                            </div>
                            <div>
                                <p class="text-slate-400 text-sm">Engine Capacity</p>
                                <p class="font-semibold text-lg">{{ $car->engine_capacity }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-amber-400/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <ion-icon name="settings-outline" class="text-xl text-amber-400"></ion-icon>
                            </div>
                            <div>
                                <p class="text-slate-400 text-sm">Transmission</p>
                                <p class="font-semibold text-lg">{{ $car->transmission }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-amber-400/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <ion-icon name="water-outline" class="text-xl text-amber-400"></ion-icon>
                            </div>
                            <div>
                                <p class="text-slate-400 text-sm">Fuel Type</p>
                                <p class="font-semibold text-lg">{{ $car->fuel_type }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-amber-400/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <ion-icon name="star-outline" class="text-xl text-amber-400"></ion-icon>
                            </div>
                            <div>
                                <p class="text-slate-400 text-sm">Auction Grade</p>
                                <p class="font-semibold text-lg">{{ $car->auction_grade }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-amber-400/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <ion-icon name="barcode-outline" class="text-xl text-amber-400"></ion-icon>
                            </div>
                            <div>
                                <p class="text-slate-400 text-sm">VIN Number</p>
                                <p class="font-semibold text-lg font-mono">{{ $car->vin_number }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Information -->
                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6 md:p-8">
                    <h2 class="text-2xl font-bold mb-6 flex items-center gap-2">
                        <ion-icon name="clipboard-outline" class="text-3xl text-amber-400"></ion-icon>
                        Import Information
                    </h2>

                    <div class="prose prose-invert max-w-none">
                        <ul class="space-y-3 text-slate-300">
                            <li class="flex items-start gap-2">
                                <ion-icon name="checkmark-circle" class="text-xl text-green-400 flex-shrink-0 mt-1"></ion-icon>
                                <span>Sourced directly from verified Japanese auctions</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <ion-icon name="checkmark-circle" class="text-xl text-green-400 flex-shrink-0 mt-1"></ion-icon>
                                <span>Clean vehicle history with no major accidents</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <ion-icon name="checkmark-circle" class="text-xl text-green-400 flex-shrink-0 mt-1"></ion-icon>
                                <span>Pre-shipment inspection (PSI) certificate included</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <ion-icon name="checkmark-circle" class="text-xl text-green-400 flex-shrink-0 mt-1"></ion-icon>
                                <span>Full assistance with customs clearance and NTSA registration</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <ion-icon name="checkmark-circle" class="text-xl text-green-400 flex-shrink-0 mt-1"></ion-icon>
                                <span>Shipping and delivery to your preferred location in Kenya</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right Column - Pricing and Contact -->
            <div class="space-y-6">
                <!-- Price Card -->
                <div class="rounded-2xl bg-gradient-to-br from-amber-400 to-yellow-300 text-blue-900 p-6 md:p-8 shadow-2xl sticky top-6">
                    <div class="mb-6">
                        <p class="text-sm font-semibold uppercase tracking-wider mb-2">CIF Price</p>
                        <p class="text-4xl md:text-5xl font-extrabold">{{ $car->formatted_price }}</p>
                        <p class="text-sm mt-2 text-blue-800">Cost, Insurance, and Freight to Kenya</p>
                    </div>

                    <div class="divider my-6"></div>

                    <div class="space-y-3">
                        @if($car->is_available)
                            <a 
                                href="{{ route('contact') }}" 
                                class="btn btn-lg w-full bg-blue-900 text-white border-none hover:bg-blue-800"
                            >
                                <ion-icon name="mail-outline" class="text-xl"></ion-icon>
                                Request More Info
                            </a>
                            <button class="btn btn-lg w-full btn-outline border-blue-900 text-blue-900 hover:bg-blue-900 hover:text-white">
                                <ion-icon name="call-outline" class="text-xl"></ion-icon>
                                Call Us Now
                            </button>
                        @else
                            <div class="alert alert-error">
                                <ion-icon name="close-circle-outline" class="text-2xl"></ion-icon>
                                <span>This vehicle has been sold</span>
                            </div>
                            <a 
                                href="{{ route('cars') }}" 
                                wire:navigate
                                class="btn btn-lg w-full bg-blue-900 text-white border-none hover:bg-blue-800"
                            >
                                Browse Available Cars
                            </a>
                        @endif
                    </div>

                    <div class="mt-6 pt-6 border-t border-blue-900/20">
                        <div class="flex items-center gap-3 text-sm">
                            <ion-icon name="shield-checkmark-outline" class="text-2xl"></ion-icon>
                            <div>
                                <p class="font-semibold">Secure Transaction</p>
                                <p class="text-blue-800">Trusted by 500+ customers</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Contact Info -->
                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                    <h3 class="text-lg font-bold mb-4">Quick Contact</h3>
                    <div class="space-y-3 text-sm">
                        <div class="flex items-center gap-3">
                            <ion-icon name="call-outline" class="text-xl text-amber-400"></ion-icon>
                            <div>
                                <p class="text-slate-400">Phone</p>
                                <p class="font-semibold">+254 700 123 456</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <ion-icon name="mail-outline" class="text-xl text-amber-400"></ion-icon>
                            <div>
                                <p class="text-slate-400">Email</p>
                                <p class="font-semibold">info@xplorecar.com</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <ion-icon name="time-outline" class="text-xl text-amber-400"></ion-icon>
                            <div>
                                <p class="text-slate-400">Available</p>
                                <p class="font-semibold">24/7 Customer Support</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features Badge -->
                <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                    <h3 class="text-lg font-bold mb-4">Why Choose Us?</h3>
                    <div class="space-y-2 text-sm">
                        <div class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle" class="text-green-400"></ion-icon>
                            <span>Transparent Pricing</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle" class="text-green-400"></ion-icon>
                            <span>Quality Guarantee</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle" class="text-green-400"></ion-icon>
                            <span>Fast Processing</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle" class="text-green-400"></ion-icon>
                            <span>Full Documentation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Similar Cars Section -->
        @if($similarCars->count() > 0)
            <div class="mt-16">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h2 class="text-3xl font-bold mb-2">Similar Vehicles</h2>
                        <p class="text-slate-300">You might also be interested in these cars</p>
                    </div>
                    <a 
                        href="{{ route('cars') }}" 
                        wire:navigate
                        class="btn btn-outline border-amber-400 text-amber-400 hover:bg-amber-400 hover:text-blue-900"
                    >
                        View All Cars
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($similarCars as $similarCar)
                        <div class="group bg-white/10 border border-white/10 backdrop-blur rounded-2xl overflow-hidden shadow-lg hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">
                            <!-- Image -->
                            <div class="relative overflow-hidden h-48">
                                <img 
                                    class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-300" 
                                    src="{{ $similarCar->primary_image }}" 
                                    alt="{{ $similarCar->full_name }}" 
                                    loading="lazy"
                                />
                                <div class="absolute top-3 left-3">
                                    <span class="badge badge-accent font-semibold">{{ $similarCar->auction_grade }} Grade</span>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="p-5">
                                <h3 class="text-lg font-bold mb-2 text-slate-100 line-clamp-1">
                                    {{ $similarCar->full_name }}
                                </h3>
                                
                                <div class="flex flex-wrap gap-2 mb-4 text-sm text-slate-300">
                                    <span>{{ $similarCar->formatted_mileage }}</span>
                                    <span>•</span>
                                    <span>{{ $similarCar->transmission }}</span>
                                </div>

                                <div class="flex items-center justify-between">
                                    <p class="text-xl font-bold text-amber-300">
                                        {{ $similarCar->formatted_price }}
                                    </p>
                                    <a 
                                        href="{{ route('car.details', $similarCar->slug) }}" 
                                        wire:navigate
                                        class="btn btn-sm bg-amber-400 text-blue-900 border-none hover:bg-amber-300"
                                    >
                                        View
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>

    @include('partials.footer')
</div>