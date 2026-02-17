<div class="page-shell">
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12">
        <!-- Hero Header -->
        <header class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-amber-400 via-yellow-300 to-lime-200 text-blue-900 shadow-2xl mb-8 sm:mb-12">
            <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,_rgba(0,0,0,0.5),_transparent_60%)]"></div>
            <div class="relative p-6 sm:p-8 lg:p-12">
                <div class="flex flex-col gap-4 sm:gap-6 lg:flex-row lg:items-center lg:justify-between">
                    <div class="space-y-2 sm:space-y-3">
                        <p class="uppercase tracking-[0.2em] text-xs font-semibold">Japan Direct Imports</p>
                        <h1 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold leading-tight">Find Your Dream Import</h1>
                        <p class="text-xs sm:text-base text-blue-800 max-w-2xl">Verified 2019+ Japanese vehicles, clean history, and transparent CIF pricing tailored for the Kenyan market.</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="stats font-extrabold text-sm sm:text-base">
                            <div class="stat place-items-center">
                                <div class="stat-value text-blue-300 text-2xl sm:text-3xl">{{ $cars->total() }}</div>
                                <div class="stat-desc text-blue-500 text-xs sm:text-sm">Available Cars</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="glass-panel p-6 mb-6 sm:mb-8">
            <h2 class="text-lg sm:text-xl font-semibold mb-2">Japan Car Imports in Kenya</h2>
            <p class="ui-muted text-sm sm:text-base">
                Explore KEBS-compliant import cars from Japan with verified inspection reports, transparent CIF pricing, and
                end-to-end shipping and customs clearing support.
            </p>
            <div class="mt-4 flex flex-wrap gap-3 sm:gap-4 text-xs sm:text-sm">
                <a href="{{ route('inspection') }}" class="text-amber-400 hover:text-amber-300 font-medium line-clamp-1">Inspection Reports</a>
                <a href="{{ route('shipping') }}" class="text-amber-400 hover:text-amber-300 font-medium line-clamp-1">Shipping & Clearing</a>
                <a href="{{ route('tradein') }}" class="text-amber-400 hover:text-amber-300 font-medium line-clamp-1">Trade-In Program</a>
            </div>
        </section>

        <!-- Filters Section -->
        <div class="glass-panel border-amber-300 border-2 rounded p-6 mb-6 sm:mb-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 mb-4">
                <!-- Search -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Search</span>
                    </label>
                    <input 
                        type="text" 
                        wire:model.live.debounce.300ms="search" 
                        placeholder="Make, Model, VIN..." 
                        class="ui-input p-2 text-sm"
                    />
                </div>

                <!-- Make Filter -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Make</span>
                    </label>
                    <select 
                        wire:model.live="make" 
                        class="ui-select p-2 text-sm"
                    >
                        <option value="">All Makes</option>
                        @foreach($this->makes as $makeName)
                            <option value="{{ $makeName }}">{{ $makeName }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Transmission Filter -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Transmission</span>
                    </label>
                    <select 
                        wire:model.live="transmission" 
                        class="ui-select p-2 text-sm"
                    >
                        <option value="">All Types</option>
                        <option value="Automatic">Automatic</option>
                        <option value="Manual">Manual</option>
                    </select>
                </div>

                <!-- Fuel Type Filter -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Fuel Type</span>
                    </label>
                    <select 
                        wire:model.live="fuelType" 
                        class="ui-select p-2 text-sm"
                    >
                        <option value="">All Types</option>
                        <option value="Petrol">Petrol</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Hybrid">Hybrid</option>
                    </select>
                </div>

                <!-- Min Year -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Min Year</span>
                    </label>
                    <input 
                        type="number" 
                        wire:model.live.debounce.300ms="minYear" 
                        placeholder="2019" 
                        min="2019"
                        max="2026"
                        class="ui-input text-sm"
                    />
                </div>

                <!-- Max Year -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Max Year</span>
                    </label>
                    <input 
                        type="number" 
                        wire:model.live.debounce.300ms="maxYear" 
                        placeholder="2026" 
                        min="2019"
                        max="2026"
                        class="ui-input text-sm"
                    />
                </div>

                <!-- Min Price -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Min Price (KES)</span>
                    </label>
                    <input 
                        type="number" 
                        wire:model.live.debounce.300ms="minPrice" 
                        placeholder="500000" 
                        class="ui-input p-2 text-sm"
                    />
                </div>

                <!-- Max Price -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Max Price (KES)</span>
                    </label>
                    <input 
                        type="number" 
                        wire:model.live.debounce.300ms="maxPrice" 
                        placeholder="5000000" 
                        class="ui-input p-2 text-sm"
                    />
                </div>
            </div>

            <!-- Sort and Reset -->
            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 items-start sm:items-center justify-between">
                <div class="form-control w-full sm:w-auto sm:max-w-xs">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Sort By</span>
                    </label>
                    <select 
                        wire:model.live="sortBy" 
                        class="ui-select p-2 text-sm"
                    >
                        <option value="newest">Newest First</option>
                        <option value="price_low">Price: Low to High</option>
                        <option value="price_high">Price: High to Low</option>
                        <option value="year_new">Year: Newest First</option>
                        <option value="year_old">Year: Oldest First</option>
                        <option value="mileage_low">Mileage: Low to High</option>
                    </select>
                </div>

                <button 
                    wire:click="resetFilters" 
                    class="btn-outline-amber text-sm w-full sm:w-auto"
                >
                    <ion-icon name="refresh-outline" class="text-lg"></ion-icon>
                    Reset Filters
                </button>
            </div>
        </div>

        <!-- Results Count -->
        <div class="mb-4 sm:mb-6">
            <p class="ui-muted text-xs sm:text-sm">
                Showing <span class="font-semibold text-amber-300">{{ $cars->firstItem() ?? 0 }}</span> 
                to <span class="font-semibold text-amber-300">{{ $cars->lastItem() ?? 0 }}</span> 
                of <span class="font-semibold text-amber-300">{{ $cars->total() }}</span> results
            </p>
        </div>

        <!-- Cars Grid -->
        @if($cars->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-6 sm:mb-8">
                @foreach($cars as $car)
                    <div class="ui-card border-amber-300 border-2">
                        <!-- Image -->
                        <div class="relative overflow-hidden h-40 sm:h-48 lg:h-56 ">
                            <img 
                                class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-300" 
                                src="{{ $car->primary_image }}" 
                                alt="{{ $car->full_name }}" 
                                loading="lazy"
                            />
                            <div class="absolute top-2 sm:top-3 left-2 sm:left-3 flex flex-col gap-1 sm:gap-2">
                                <span class="badge badge-accent font-semibold text-xs sm:text-sm">{{ $car->auction_grade }} Grade</span>
                                <span class="badge badge-warning text-xs sm:text-sm">{{ $car->fuel_type }}</span>
                            </div>
                            @if(!$car->is_available)
                                <div class="absolute inset-0 bg-slate-900/70 flex items-center justify-center dark:bg-slate-900/70">
                                    <span class="badge badge-error badge-lg">SOLD</span>
                                </div>
                            @endif
                        </div>

                        <!-- Content -->
                        <div class="p-4 sm:p-5 backdrop-blur-2xl bg-white/10 rounded-b-xl hover:bg-white/20 transition-colors">
                            <h3 class="text-sm sm:text-lg font-bold mb-2 ui-title line-clamp-1">
                                {{ $car->full_name }}
                            </h3>
                            
                            <!-- Specs -->
                            <div class="flex flex-wrap p-2 gap-1 sm:gap-2 mb-4 text-xs ui-muted">
                                <span class="flex items-center gap-1 line-clamp-1">
                                    <ion-icon name="speedometer-outline" class="text-sm sm:text-base"></ion-icon>
                                    {{ $car->formatted_mileage }}
                                </span>
                                <span class="flex items-center gap-1 line-clamp-1">
                                    <ion-icon name="settings-outline" class="text-sm sm:text-base"></ion-icon>
                                    {{ $car->transmission }}
                                </span>
                                <span class="flex items-center gap-1 line-clamp-1">
                                    <ion-icon name="flash-outline" class="text-sm sm:text-base"></ion-icon>
                                    {{ $car->engine_capacity }}
                                </span>
                            </div>

                            <!-- Price and Action -->
                            <div class="flex items-start sm:items-center justify-between gap-2">
                                <div class="flex-1 min-w-0">
                                    <p class="text-xs text-slate-400 mb-0.5">CIF Price</p>
                                    <p class="text-lg sm:text-2xl font-bold text-amber-300 line-clamp-1">
                                        {{ $car->formatted_price }}
                                    </p>
                                </div>
                                <a 
                                    href="{{ route('car.details', $car->slug) }}" 
                                    wire:navigate
                                    class="btn-pill-amber bg-amber-500 p-2 rounded sm:text-sm flex-shrink-0 whitespace-nowrap"
                                >
                                   <span class="">View Details</span>
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="flex justify-center overflow-x-auto">
                {{ $cars->links() }}
            </div>
        @else
            <!-- Empty State -->
            <div class="ui-empty">
                <ion-icon name="car-outline" class="text-5xl sm:text-6xl text-slate-400 mb-4"></ion-icon>
                <h3 class="text-xl sm:text-2xl font-bold mb-2">No Cars Found</h3>
                <p class="ui-muted mb-4 sm:mb-6 text-sm sm:text-base">Try adjusting your filters to see more results</p>
                <button 
                    wire:click="resetFilters" 
                    class="btn-primary text-sm sm:text-base"
                >
                    Reset All Filters
                </button>
            </div>
        @endif
    </div>

    @include('partials.footer')
</div>


