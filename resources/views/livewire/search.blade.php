<div class="min-h-screen bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800 text-slate-100">
    <div class="max-w-7xl mx-auto px-6 py-12">
        <!-- Hero Header -->
        <header class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-amber-400 via-yellow-300 to-lime-200 text-blue-900 shadow-2xl mb-12">
            <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,_rgba(0,0,0,0.5),_transparent_60%)]"></div>
            <div class="relative p-8 md:p-12">
                <div class="space-y-6">
                    <div class="space-y-3">
                        <p class="uppercase tracking-[0.2em] text-xs font-semibold">Premium Japanese Imports</p>
                        <h1 class="text-4xl md:text-6xl font-extrabold">Your Dream Car Awaits</h1>
                        <p class="text-blue-800 text-lg max-w-3xl">Explore verified 2019+ Japanese vehicles with clean history and transparent CIF pricing. Compliant with KEBS 8-year import rule.</p>
                    </div>

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-3 gap-3 md:gap-4 max-w-2xl">
                        <div class="rounded-2xl bg-white/90 backdrop-blur p-4 text-center">
                            <p class="text-xs font-semibold text-blue-600 mb-1">Import Rule</p>
                            <p class="text-xl md:text-2xl font-bold">8-Year</p>
                        </div>
                        <div class="rounded-2xl bg-white/90 backdrop-blur p-4 text-center">
                            <p class="text-xs font-semibold text-blue-600 mb-1">New Stock</p>
                            <p class="text-xl md:text-2xl font-bold">Daily</p>
                        </div>
                        <div class="rounded-2xl bg-white/90 backdrop-blur p-4 text-center">
                            <p class="text-xs font-semibold text-blue-600 mb-1">Support</p>
                            <p class="text-xl md:text-2xl font-bold">24/7</p>
                        </div>
                    </div>

                    <!-- Feature Badges -->
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="badge badge-lg bg-blue-900/50 border-blue-800 text-white">
                            <ion-icon name="checkmark-circle" class="mr-1"></ion-icon>
                            Auction Verified
                        </span>
                        <span class="badge badge-lg bg-blue-900/50 border-blue-800 text-white">
                            <ion-icon name="document-text" class="mr-1"></ion-icon>
                            Full Reports
                        </span>
                        <span class="badge badge-lg bg-blue-900/50 border-blue-800 text-white">
                            <ion-icon name="shield-checkmark" class="mr-1"></ion-icon>
                            KEBS Compliant
                        </span>
                        <span class="badge badge-lg bg-blue-900/50 border-blue-800 text-white">
                            <ion-icon name="rocket" class="mr-1"></ion-icon>
                            Fast Clearing
                        </span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content: Sidebar + Results -->
        <div class="grid grid-cols-1 lg:grid-cols-[320px,1fr] gap-8">
            <!-- Filter Sidebar -->
            <aside class="rounded-3xl bg-white/10 backdrop-blur border border-white/10 shadow-xl p-6 h-fit sticky top-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold flex items-center gap-2">
                        <ion-icon name="funnel-outline" class="text-2xl text-amber-400"></ion-icon>
                        Filters
                    </h3>
                    <span class="badge badge-accent badge-sm">Live</span>
                </div>

                <!-- Search Input -->
                <div class="form-control w-full mb-5">
                    <label class="label">
                        <span class="label-text text-slate-200 font-semibold">Search</span>
                    </label>
                    <input 
                        wire:model.live.debounce.300ms="search" 
                        type="text" 
                        placeholder="e.g. Harrier, Vitz, Land Cruiser" 
                        class="input input-bordered w-full bg-slate-900/70 border-slate-700 text-slate-100 focus:border-amber-400"
                    />
                </div>

                <!-- Make Select -->
                <div class="form-control w-full mb-5">
                    <label class="label">
                        <span class="label-text text-slate-200 font-semibold">Make</span>
                    </label>
                    <select 
                        wire:model.live="make" 
                        class="select select-bordered w-full bg-slate-900/70 border-slate-700 text-slate-100 focus:border-amber-400"
                    >
                        <option value="">All Makes</option>
                        @foreach($this->makes as $makeName)
                            <option value="{{ $makeName }}">{{ $makeName }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Transmission -->
                <div class="form-control w-full mb-5">
                    <label class="label">
                        <span class="label-text text-slate-200 font-semibold">Transmission</span>
                    </label>
                    <select 
                        wire:model.live="transmission" 
                        class="select select-bordered w-full bg-slate-900/70 border-slate-700 text-slate-100 focus:border-amber-400"
                    >
                        <option value="">Any</option>
                        <option value="Automatic">Automatic</option>
                        <option value="Manual">Manual</option>
                    </select>
                </div>

                <!-- Fuel Type -->
                <div class="form-control w-full mb-5">
                    <label class="label">
                        <span class="label-text text-slate-200 font-semibold">Fuel Type</span>
                    </label>
                    <select 
                        wire:model.live="fuelType" 
                        class="select select-bordered w-full bg-slate-900/70 border-slate-700 text-slate-100 focus:border-amber-400"
                    >
                        <option value="">Any</option>
                        <option value="Petrol">Petrol</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Hybrid">Hybrid</option>
                    </select>
                </div>

                <!-- Min Year -->
                <div class="form-control w-full mb-5">
                    <label class="label">
                        <span class="label-text text-slate-200 font-semibold">Min Year (KEBS 2026 Rule)</span>
                    </label>
                    <select 
                        wire:model.live="year" 
                        class="select select-bordered w-full bg-slate-900/70 border-slate-700 text-slate-100 focus:border-amber-400"
                    >
                        @foreach(range(2019, 2026) as $y)
                            <option value="{{ $y }}">{{ $y }} or newer</option>
                        @endforeach
                    </select>
                </div>

                <!-- Price Range -->
                <div class="form-control w-full mb-5">
                    <label class="label">
                        <span class="label-text text-slate-200 font-semibold">Price Range (KES)</span>
                    </label>
                    <div class="grid grid-cols-2 gap-3">
                        <input 
                            wire:model.live.debounce.300ms="minPrice" 
                            type="number" 
                            min="0" 
                            step="100000" 
                            placeholder="Min" 
                            class="input input-bordered w-full bg-slate-900/70 border-slate-700 text-slate-100 focus:border-amber-400"
                        />
                        <input 
                            wire:model.live.debounce.300ms="maxPrice" 
                            type="number" 
                            min="0" 
                            step="100000" 
                            placeholder="Max" 
                            class="input input-bordered w-full bg-slate-900/70 border-slate-700 text-slate-100 focus:border-amber-400"
                        />
                    </div>
                </div>

                <!-- Reset Button -->
                <button 
                    wire:click="resetFilters" 
                    class="btn btn-outline border-amber-400 text-amber-400 hover:bg-amber-400 hover:text-blue-900 w-full mb-5"
                >
                    <ion-icon name="refresh-outline" class="text-lg"></ion-icon>
                    Reset Filters
                </button>

                <!-- Info Box -->
                <div class="rounded-2xl bg-gradient-to-br from-blue-900/70 to-blue-800/50 border border-blue-700 p-4">
                    <div class="flex items-start gap-2 mb-2">
                        <ion-icon name="information-circle" class="text-amber-400 text-xl flex-shrink-0 mt-0.5"></ion-icon>
                        <p class="text-xs text-slate-300 leading-relaxed">
                            All vehicles shown comply with Kenya's 8-year import rule and include clean inspection reports.
                        </p>
                    </div>
                    <p class="text-sm font-semibold text-slate-100 mt-3">
                        💡 Popular: Vitz, Harrier, CX-5, Land Cruiser
                    </p>
                </div>
            </aside>

            <!-- Results Section -->
            <main>
                <!-- Results Header -->
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold mb-1">Available Imports</h2>
                        <p class="text-slate-300">
                            @if($cars->total() > 0)
                                Showing <span class="font-semibold text-amber-300">{{ $cars->firstItem() }}</span> 
                                to <span class="font-semibold text-amber-300">{{ $cars->lastItem() }}</span> 
                                of <span class="font-semibold text-amber-300">{{ $cars->total() }}</span> results
                            @else
                                No vehicles found
                            @endif
                        </p>
                    </div>
                    <a 
                        href="{{ route('cars') }}" 
                        wire:navigate
                        class="btn btn-outline border-amber-400 text-amber-400 hover:bg-amber-400 hover:text-blue-900 hidden md:flex"
                    >
                        <ion-icon name="grid-outline" class="text-lg"></ion-icon>
                        View All
                    </a>
                </div>

                <!-- Cars Grid -->
                @if($cars->count() > 0)
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-6 mb-8">
                        @foreach($cars as $car)
                            <div class="group bg-white/10 border border-white/10 backdrop-blur rounded-2xl overflow-hidden shadow-lg hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">
                                <!-- Image -->
                                <div class="relative overflow-hidden h-56">
                                    <img 
                                        class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-300" 
                                        src="{{ $car->primary_image }}" 
                                        alt="{{ $car->full_name }}" 
                                        loading="lazy"
                                    />
                                    <div class="absolute top-3 left-3 flex flex-col gap-2">
                                        <span class="badge badge-accent font-semibold">{{ $car->auction_grade }} Grade</span>
                                        <span class="badge badge-warning">{{ $car->fuel_type }}</span>
                                    </div>
                                    @if(!$car->is_available)
                                        <div class="absolute inset-0 bg-slate-900/70 flex items-center justify-center">
                                            <span class="badge badge-error badge-lg">SOLD</span>
                                        </div>
                                    @endif
                                </div>

                                <!-- Content -->
                                <div class="p-5">
                                    <h3 class="text-lg font-bold mb-2 text-slate-100 line-clamp-1">
                                        {{ $car->full_name }}
                                    </h3>
                                    
                                    <!-- Specs -->
                                    <div class="flex flex-wrap gap-2 mb-4 text-sm text-slate-300">
                                        <span class="flex items-center gap-1">
                                            <ion-icon name="speedometer-outline"></ion-icon>
                                            {{ $car->formatted_mileage }}
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <ion-icon name="settings-outline"></ion-icon>
                                            {{ $car->transmission }}
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <ion-icon name="flash-outline"></ion-icon>
                                            {{ $car->engine_capacity }}
                                        </span>
                                    </div>

                                    <!-- Price and Action -->
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-xs text-slate-400 mb-1">CIF Price</p>
                                            <p class="text-2xl font-bold text-amber-300">
                                                {{ $car->formatted_price }}
                                            </p>
                                        </div>
                                        <a 
                                            href="{{ route('car.details', $car->slug) }}" 
                                            wire:navigate
                                            class="btn btn-sm bg-amber-400 text-blue-900 border-none hover:bg-amber-300 group-hover:scale-110 transition-transform"
                                        >
                                            <ion-icon name="eye-outline" class="text-lg"></ion-icon>
                                            View
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-center">
                        {{ $cars->links() }}
                    </div>
                @else
                    <!-- Empty State -->
                    <div class="flex flex-col items-center justify-center py-20 rounded-2xl bg-white/10 border border-white/10 backdrop-blur">
                        <ion-icon name="search-outline" class="text-6xl text-slate-400 mb-4"></ion-icon>
                        <h3 class="text-2xl font-bold mb-2">No Vehicles Found</h3>
                        <p class="text-slate-300 mb-6 text-center max-w-md">
                            We couldn't find any vehicles matching your criteria. Try adjusting your filters or search terms.
                        </p>
                        <button 
                            wire:click="resetFilters" 
                            class="btn bg-amber-400 text-blue-900 border-none hover:bg-amber-300"
                        >
                            <ion-icon name="refresh-outline" class="text-lg"></ion-icon>
                            Reset All Filters
                        </button>
                    </div>
                @endif

                <!-- Browse More CTA -->
                <div class="mt-12 rounded-2xl bg-gradient-to-r from-amber-400/20 to-yellow-300/20 border border-amber-400/30 backdrop-blur p-6 md:p-8 text-center">
                    <h3 class="text-2xl font-bold mb-2">Looking for Something Specific?</h3>
                    <p class="text-slate-300 mb-6">Browse our complete inventory or contact us for personalized assistance</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a 
                            href="{{ route('cars') }}" 
                            wire:navigate
                            class="btn bg-amber-400 text-blue-900 border-none hover:bg-amber-300"
                        >
                            <ion-icon name="grid-outline" class="text-lg"></ion-icon>
                            Browse All Cars
                        </a>
                        <a 
                            href="{{ route('contact') }}" 
                            class="btn btn-outline border-amber-400 text-amber-400 hover:bg-amber-400 hover:text-blue-900"
                        >
                            <ion-icon name="chatbubbles-outline" class="text-lg"></ion-icon>
                            Contact Us
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </div>

    @include('partials.footer')
</div>