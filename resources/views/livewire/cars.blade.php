<div class="page-shell">
    <div class="w-full lg:w-3/4 mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <header class="relative overflow-hidden rounded-3xl bg-linear-to-r from-green-500 via-green-400 to-green-300 text-slate-900 shadow-2xl mb-8 sm:mb-10">
            <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,rgba(0,0,0,0.6),transparent_60%)]"></div>
            <div class="relative p-6 sm:p-8 lg:p-12">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                    <div class="space-y-3 max-w-3xl">
                        <p class="uppercase tracking-[0.22em] text-xs font-semibold text-slate-800/80">Japan Direct Imports</p>
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight">Find Your Dream Import</h1>
                        <p class="text-sm sm:text-base text-slate-800/90">Verified 2019+ Japanese vehicles, clean history, and transparent CIF pricing tailored for the Kenyan market.</p>
                    </div>

                    <div class="glass-panel px-5 py-4 rounded-2xl border border-white/30 bg-white/20 backdrop-blur-md">
                        <p class="text-xs uppercase tracking-wide text-slate-800/80">Current Listings</p>
                        <div class="flex items-end gap-2 mt-1">
                            <span class="text-3xl font-extrabold text-slate-900">{{ $cars->total() }}</span>
                            <span class="text-sm text-slate-700 mb-1">vehicles</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="glass-panel p-4 sm:p-6 rounded-2xl mb-6">
            <h2 class="text-lg sm:text-xl font-semibold mb-2">Japan Car Imports in Kenya</h2>
            <p class="ui-muted text-sm sm:text-base">Explore KEBS-compliant import cars from Japan with verified inspection reports, transparent CIF pricing, and end-to-end shipping and customs clearing support.</p>
            <div class="mt-4 flex flex-wrap gap-2 sm:gap-3 text-xs sm:text-sm">
                <a href="{{ route('inspection') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-green-500 text-green-300 hover:bg-green-500/20 transition-colors font-medium">
                    <ion-icon name="document-text-outline"></ion-icon>
                    <span>Inspection Reports</span>
                </a>
                <a href="{{ route('shipping') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-green-500 text-green-300 hover:bg-green-500/20 transition-colors font-medium">
                    <ion-icon name="boat-outline"></ion-icon>
                    <span>Shipping & Clearing</span>
                </a>
                <a href="{{ route('tradein') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-green-500 text-green-300 hover:bg-green-500/20 transition-colors font-medium">
                    <ion-icon name="swap-horizontal-outline"></ion-icon>
                    <span>Trade-In Program</span>
                </a>
            </div>
        </section>

        <div class="glass-panel rounded-2xl p-6 sm:p-8 mb-8 sm:mb-10 border border-white/10 backdrop-blur-xl">
            <!-- Header with Title and Reset -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8 pb-8 border-b border-white/10">
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold text-white mb-1 flex items-center gap-2">
                        <ion-icon name="filter-outline" class="text-2xl sm:text-3xl text-green-400"></ion-icon>
                        <span>Find Your Perfect Vehicle</span>
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-400">Use filters below to narrow down your search</p>
                </div>
                <button wire:click="resetFilters" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-gradient-to-r from-slate-700 to-slate-600 hover:from-slate-600 hover:to-slate-500 text-white text-sm font-semibold transition-all duration-200 hover:scale-105 active:scale-95 border border-slate-500/50">
                    <ion-icon name="refresh-outline" class="text-lg"></ion-icon>
                    <span>Reset All</span>
                </button>
            </div>

            <!-- Search Bar - Full Width -->
            <div class="mb-8">
                <div class="form-control p-1">
                    <label class="label mb-3">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-lg bg-green-500/20 flex items-center justify-center">
                                <ion-icon name="search-outline" class="text-base text-green-400"></ion-icon>
                            </div>
                            <span class="label-text text-sm font-semibold text-white dark:text-black">Quick Search</span>
                        </div>
                    </label>
                    <div class="relative">
                        <input
                            type="text"
                            wire:model.live.debounce.300ms="search"
                            placeholder="Search by make, model, or VIN..."
                            class="ui-input w-full pl-4 pr-4 px-2 py-3 text-sm placeholder-slate-500 bg-white/5 border border-white/10 rounded-xl focus:bg-white/10 focus:border-green-400/50 transition-all duration-200"
                        />
                    </div>
                </div>
            </div>

            <!-- Filter Grid - Organized Sections -->
            <div class="grid grid-cols-1 p-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Vehicle Type & Make -->
                <div class="form-control">
                    <label class="label mb-3">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-lg bg-blue-500/20 flex items-center justify-center">
                                <ion-icon name="car-outline" class="text-base text-blue-400"></ion-icon>
                            </div>
                            <span class="label-text text-sm font-semibold text-white dark:text-black">Make</span>
                        </div>
                    </label>
                    <select wire:model.live="make" class="ui-select p-1.5 text-sm bg-white/5 border border-white/10 rounded focus:border-blue-400/50 focus:bg-white/10 transition-all duration-200">
                        <option value="" class="bg-blue-600/50 p-2">All Makes</option>
                        @foreach($this->makes as $makeName)
                            <option value="{{ $makeName }}" class="bg-blue-600/50 p-2">{{ $makeName }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Transmission -->
                <div class="form-control p-1">
                    <label class="label mb-3">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded p-2 bg-purple-500/20 flex items-center justify-center">
                                <ion-icon name="settings-outline" class="text-base text-purple-400"></ion-icon>
                            </div>
                            <span class="label-text text-sm font-semibold text-white dark:text-black">Transmission</span>
                        </div>
                    </label>
                    <select wire:model.live="transmission" class="ui-select p-1.5 text-sm bg-white/5 border border-white/10 rounded focus:border-purple-400/50 focus:bg-white/10 transition-all duration-200">
                        <option value="" class=" p-2">All Types</option>
                        <option value="Automatic" class=" p-2">Automatic</option>
                        <option value="Manual" class=" p-2">Manual</option>
                    </select>
                </div>

                <!-- Fuel Type -->
                <div class="form-control p-1">
                    <label class="label mb-3">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-lg bg-orange-500/20 flex items-center justify-center">
                                <ion-icon name="flash-outline" class="text-base text-orange-400"></ion-icon>
                            </div>
                            <span class="label-text text-sm font-semibold text-white dark:text-black">Fuel Type</span>
                        </div>
                    </label>
                    <select wire:model.live="fuelType" class="ui-select p-1.5 text-sm bg-white/5 border border-white/10 rounded focus:border-orange-400/50 focus:bg-white/10 transition-all duration-200">
                        <option value="" class="bg-blue-600/50 p-2">All Types</option>
                        <option value="Petrol" class="bg-blue-600/50 p-2">Petrol</option>
                        <option value="Diesel" class="bg-blue-600/50 p-2">Diesel</option>
                        <option value="Hybrid" class="bg-blue-600/50 p-2">Hybrid</option>
                    </select>
                </div>

                <!-- Sort By -->
                <div class="form-control p-1">
                    <label class="label mb-3">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-lg bg-indigo-500/20 flex items-center justify-center">
                                <ion-icon name="swap-vertical-outline" class="text-base text-indigo-400"></ion-icon>
                            </div>
                            <span class="label-text text-sm font-semibold text-white dark:text-black p-2">Sort By</span>
                        </div>
                    </label>
                    <select wire:model.live="sortBy" class="ui-select p-1.5 text-sm bg-white/5 border border-white/10 rounded focus:border-indigo-400/50 focus:bg-white/10 transition-all duration-200">
                        <option value="newest" class="bg-blue-600/50 p-2">Newest First</option>
                        <option value="price_low" class="bg-blue-600/50 p-2">Price: Low to High</option>
                        <option value="price_high" class="bg-blue-600/50 p-2">Price: High to Low</option>
                        <option value="year_new" class="bg-blue-600/50 p-2">Year: Newest First</option>
                        <option value="year_old" class="bg-blue-600/50 p-2">Year: Oldest First</option>
                        <option value="mileage_low" class="bg-blue-600/50 p-2">Mileage: Low to High</option>
                    </select>
                </div>
            </div>

            <!-- Year & Price Range -->
            <div class="mt-6 pt-6 border-t border-white/10">
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                    <div class="form-control p-1">
                        <label class="label mb-2">
                            <span class="label-text text-xs font-semibold text-slate-400 uppercase">Min Year</span>
                        </label>
                        <input
                            type="number"
                            wire:model.live.debounce.300ms="minYear"
                            placeholder="2019"
                            min="2019"
                            max="2026"
                            class="ui-input text-sm bg-white/5 p-2 border border-white/10 rounded-lg focus:border-cyan-400/50 focus:bg-white/10 transition-all duration-200"
                        />
                    </div>

                    <div class="form-control p-1">
                        <label class="label mb-2">
                            <span class="label-text text-xs font-semibold text-slate-400 uppercase">Max Year</span>
                        </label>
                        <input
                            type="number"
                            wire:model.live.debounce.300ms="maxYear"
                            placeholder="2026"
                            min="2019"
                            max="2026"
                            class="ui-input text-sm bg-white/5 p-2 border border-white/10 rounded-lg focus:border-cyan-400/50 focus:bg-white/10 transition-all duration-200"
                        />
                    </div>

                    <div class="form-control p-1">
                        <label class="label mb-2">
                            <span class="label-text text-xs font-semibold text-slate-400 uppercase">Min Price</span>
                        </label>
                        <input
                            type="number"
                            wire:model.live.debounce.300ms="minPrice"
                            placeholder="500,000"
                            class="ui-input text-sm bg-white/5 p-2 border border-white/10 rounded-lg focus:border-emerald-400/50 focus:bg-white/10 transition-all duration-200"
                        />
                    </div>

                    <div class="form-control p-1">
                        <label class="label mb-2">
                            <span class="label-text text-xs font-semibold text-slate-400 uppercase">Max Price</span>
                        </label>
                        <input
                            type="number"
                            wire:model.live.debounce.300ms="maxPrice"
                            placeholder="5,000,000"
                            class="ui-input text-sm bg-white/5 p-2 border border-white/10 rounded-lg focus:border-emerald-400/50 focus:bg-white/10 transition-all duration-200"
                        />
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-4 sm:mb-6 flex items-center justify-between gap-3">
            <p class="ui-muted text-xs sm:text-sm">
                Showing <span class="font-semibold text-green-300">{{ $cars->firstItem() ?? 0 }}</span>
                to <span class="font-semibold text-green-300">{{ $cars->lastItem() ?? 0 }}</span>
                of <span class="font-semibold text-green-300">{{ $cars->total() }}</span> results
            </p>
        </div>

        @if($cars->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6 mb-6 sm:mb-8">
                @foreach($cars as $car)
                    <article class="ui-card rounded-2xl overflow-hidden border border-white/10 hover:border-green-400/50 transition-all duration-300 group">
                        <div class="relative overflow-hidden h-44 sm:h-52 lg:h-56">
                            <img
                                class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500"
                                src="{{ $car->primary_image }}"
                                alt="{{ $car->full_name }}"
                                loading="lazy"
                            />

                            <div class="absolute top-3 left-3 flex flex-col gap-2">
                                <span class="badge badge-accent font-semibold text-xs">{{ $car->auction_grade }} Grade</span>
                                <span class="badge badge-warning text-xs">{{ $car->fuel_type }}</span>
                            </div>

                            @if(!$car->is_available)
                                <div class="absolute inset-0 bg-blue-600/50/70 flex items-center justify-center">
                                    <span class="badge badge-error badge-lg">SOLD</span>
                                </div>
                            @endif
                        </div>

                        <div class="p-4 sm:p-5 bg-white/5 group-hover:bg-white/10 transition-colors">
                            <h3 class="text-base sm:text-lg font-bold mb-2 ui-title line-clamp-1">{{ $car->full_name }}</h3>

                            <div class="grid grid-cols-1 gap-2 mb-4 text-xs ui-muted">
                                <span class="inline-flex items-center gap-1.5">
                                    <ion-icon name="speedometer-outline" class="text-base"></ion-icon>
                                    <span>{{ $car->formatted_mileage }}</span>
                                </span>
                                <span class="inline-flex items-center gap-1.5">
                                    <ion-icon name="settings-outline" class="text-base"></ion-icon>
                                    <span>{{ $car->transmission }}</span>
                                </span>
                                <span class="inline-flex items-center gap-1.5">
                                    <ion-icon name="flash-outline" class="text-base"></ion-icon>
                                    <span>{{ $car->engine_capacity }}</span>
                                </span>
                            </div>

                            <div class="flex items-center justify-between gap-3">
                                <div class="min-w-0">
                                    <p class="text-xs mb-0.5">CIF Price</p>
                                    <p class="text-lg sm:text-2xl font-bold text-green-300 leading-tight">{{ $car->formatted_price }}</p>
                                </div>

                                <a
                                    href="{{ route('car.details', $car->slug) }}"
                                    wire:navigate
                                    class="inline-flex items-center gap-1.5 px-3 py-2 rounded-lg bg-green-500 hover:bg-green-600 text-white text-sm font-semibold transition-all duration-200 whitespace-nowrap"
                                >
                                    <span>View Details</span>
                                    <ion-icon name="arrow-forward-outline"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="flex justify-center overflow-x-auto">
                {{ $cars->links() }}
            </div>
        @else
            <div class="ui-empty rounded-2xl">
                <ion-icon name="car-outline" class="text-5xl sm:text-6xl mb-4"></ion-icon>
                <h3 class="text-xl sm:text-2xl font-bold mb-2">No Cars Found</h3>
                <p class="ui-muted mb-4 sm:mb-6 text-sm sm:text-base">Try adjusting your filters to see more results.</p>
                <button wire:click="resetFilters" class="bg-green-600 text-sm sm:text-base">
                    <ion-icon name="refresh-outline"></ion-icon>
                    <span>Reset All Filters</span>
                </button>
            </div>
        @endif
    </div>

    @include('partials.footer')
</div>


