<div class="page-shell backdrop-blur-md dark:from-blue-90 dark:via-blue-900 dark:to-blue-950 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-8 sm:py-12">
        <!-- Header Section -->
        <div class="mb-6">
            <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4">
                <div>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-2xl bg-green-400 flex items-center justify-center">
                            <ion-icon name="car-outline" class="text-2xl text-white"></ion-icon>
                        </div>
                        <div>
                            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 dark:text-white">Vehicle Inventory</h1>
                            <p class="text-slate-600 dark:text-slate-400 font-medium mt-1">Manage all your vehicle listings</p>
                        </div>
                    </div>
                </div>
                <a 
                    href="{{ route('admin.vehicles.create') }}" 
                    class="inline-flex items-center justify-center gap-3 px-6 py-4 bg-green-600 hover:bg-green-700 text-white font-bold text-lg shadow-lg hover:shadow-xl transition-all duration-200 self-start sm:self-auto"
                >
                    <ion-icon name="add-circle" class="text-2xl"></ion-icon>
                    <span>Add New Vehicle</span>
                </a>
            </div>
        </div>

        <!-- Flash Messages -->
        @if (session()->has('success'))
            <div class="mb-6 p-4 bg-green-500 dark:bg-blue-900/20 border-2 border-green-200 dark:border-green-800 flex items-center gap-3 shadow-sm animate-fade-in">
                <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900/40">
                    <ion-icon name="checkmark-circle" class="text-2xl text-green-600 dark:text-green-400"></ion-icon>
                </div>
                <span class="text-green-800 dark:text-green-200 font-medium">{{ session('success') }}</span>
            </div>
        @endif

        @if (session()->has('error'))
            <div class="mb-6 p-4 bg-red-50 dark:bg-red-900/20 border-2 border-red-200 dark:border-red-800 flex items-center gap-3 shadow-sm animate-fade-in">
                <div class="w-10 h-10 flex items-center justify-center rounded-full bg-red-100 dark:bg-red-900/40">
                    <ion-icon name="alert-circle" class="text-2xl text-red-600 dark:text-red-400"></ion-icon>
                </div>
                <span class="text-red-800 dark:text-red-200 font-medium">{{ session('error') }}</span>
            </div>
        @endif

        @if (session()->has('message'))
            <div class="mb-6 p-4 bg-green-50 dark:bg-green-900/20 border-2 border-green-200 dark:border-green-800 flex items-center gap-3 shadow-sm animate-fade-in">
                <div class="w-10 h-10 flex items-center justify-center rounded-full bg-green-100 dark:bg-green-900/40">
                    <ion-icon name="checkmark-circle" class="text-2xl text-green-600 dark:text-green-400"></ion-icon>
                </div>
                <span class="text-green-800 dark:text-green-200 font-medium">{{ session('message') }}</span>
            </div>
        @endif

        <!-- Filters Section -->
        <div class="bg-white dark:bg-blue-800 rounded-2xl border-2 border-blue-100 dark:border-slate-700 shadow-sm overflow-hidden mb-8">
            <div class="bg-green-500 px-6 py-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 backdrop-blur-sm">
                        <ion-icon name="filter" class="text-2xl text-white"></ion-icon>
                    </div>
                    <h2 class="text-xl font-bold text-white">Search & Filter</h2>
                </div>
            </div>
            
            <div class="p-6 space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Search -->
                    <div class="form-control">
                        <label class="block mb-2">
                            <span class="text-sm font-semibold text-slate-700 dark:text-slate-300 flex items-center gap-2">
                                <ion-icon name="search-outline" class="text-blue-500"></ion-icon>
                                Search
                            </span>
                            <span class="text-xs text-slate-500 dark:text-slate-400">Make, Model, or VIN</span>
                        </label>
                        <input 
                            type="text" 
                            wire:model.live.debounce.300ms="search" 
                            placeholder="e.g., Toyota Harrier, JN1BCNS35U..." 
                            class="w-full px-4 py-3 border-2 border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-900 dark:text-white placeholder-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-200"
                        />
                    </div>

                    <!-- Status Filter -->
                    <div class="form-control">
                        <label class="block mb-2">
                            <span class="text-sm font-semibold text-slate-700 dark:text-slate-300 flex items-center gap-2">
                                <ion-icon name="albums-outline" class="text-green-500"></ion-icon>
                                Status
                            </span>
                            <span class="text-xs text-slate-500 dark:text-slate-400">Filter by availability</span>
                        </label>
                        <select 
                            wire:model.live="status" 
                            class="w-full px-4 py-3 border-2 border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-900 dark:text-white focus:border-green-500 focus:ring-2 focus:ring-green-500/20 transition-all duration-200"
                        >
                            <option value="all">All Vehicles</option>
                            <option value="available">Available Only</option>
                            <option value="sold">Sold Only</option>
                        </select>
                    </div>

                    <!-- Results Counter -->
                    <div class="flex items-end">
                        <div class="w-full px-4 py-3 bg-blue-50 dark:bg-blue-900/20 border-2 border-blue-200 dark:border-blue-800">
                            <p class="text-sm font-semibold text-blue-700 dark:text-blue-300 flex items-center gap-2">
                                <ion-icon name="bar-chart-outline" class="text-lg"></ion-icon>
                                <span class="font-mono">{{ $vehicles->total() }} total</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vehicles List -->
        @if($vehicles->count() > 0)
            <div class="space-y-4 mb-8">
                @foreach($vehicles as $vehicle)
                    <div class="bg-white dark:bg-blue-600/50 rounded-2xl border-2 border-slate-200 dark:border-slate-700 shadow-sm hover:shadow-md hover:border-blue-300 dark:hover:border-blue-600 transition-all duration-200 overflow-hidden group">
                        <div class="p-6">
                            <div class="flex flex-col lg:flex-row lg:items-center gap-6">
                                <!-- Vehicle Image -->
                                <div class="shrink-0">
                                    <div class="w-32 h-32 overflow-hidden border-2 border-slate-300 dark:border-slate-600 shadow-sm">
                                        <img src="{{ $vehicle->primary_image }}" alt="{{ $vehicle->full_name }}" class="w-full h-full object-cover" />
                                    </div>
                                </div>

                                <!-- Vehicle Info -->
                                <div class="flex-1 min-w-0">
                                    <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4 mb-4">
                                        <div>
                                            <h3 class="text-2xl font-bold text-slate-900 dark:text-white">{{ $vehicle->make }} {{ $vehicle->model }}</h3>
                                            <div class="flex items-center gap-2 mt-2">
                                                <span class="px-3 py-1 rounded-lg bg-blue-100 dark:bg-blue-900/30 border border-blue-300 dark:border-blue-700 text-sm font-semibold text-blue-700 dark:text-blue-300">
                                                    {{ $vehicle->year_of_reg }}
                                                </span>
                                                <span class="text-sm text-slate-600 dark:text-slate-400 font-medium">VIN: {{ $vehicle->vin_number }}</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <button 
                                                wire:click="toggleAvailability({{ $vehicle->id }})"
                                                wire:confirm="Are you sure you want to change the availability status?"
                                                class="px-4 py-2 rounded-lg font-semibold text-sm transition-all duration-200 flex items-center gap-2 {{ $vehicle->is_available ? 'bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 border border-green-300 dark:border-green-700 hover:bg-green-200 dark:hover:bg-green-900/50' : 'bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 border border-red-300 dark:border-red-700 hover:bg-red-200 dark:hover:bg-red-900/50' }}"
                                            >
                                                <ion-icon name="{{ $vehicle->is_available ? 'checkmark-circle' : 'close-circle' }}" class="text-lg"></ion-icon>
                                                {{ $vehicle->is_available ? 'Available' : 'Sold' }}
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Vehicle Specs -->
                                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-4">
                                        <div class="px-4 py-3 rounded-lg bg-slate-100 dark:bg-slate-700/50 border border-slate-200 dark:border-slate-600">
                                            <p class="text-xs font-semibold text-slate-600 dark:text-slate-400 mb-1">Mileage</p>
                                            <p class="text-lg font-bold text-slate-900 dark:text-white">{{ $vehicle->formatted_mileage }}</p>
                                        </div>
                                        <div class="px-4 py-3 rounded-lg bg-slate-100 dark:bg-slate-700/50 border border-slate-200 dark:border-slate-600">
                                            <p class="text-xs font-semibold text-slate-600 dark:text-slate-400 mb-1">Transmission</p>
                                            <p class="text-lg font-bold text-slate-900 dark:text-white">{{ $vehicle->transmission }}</p>
                                        </div>
                                        <div class="px-4 py-3 rounded-lg bg-slate-100 dark:bg-slate-700/50 border border-slate-200 dark:border-slate-600">
                                            <p class="text-xs font-semibold text-slate-600 dark:text-slate-400 mb-1">Fuel Type</p>
                                            <p class="text-lg font-bold text-slate-900 dark:text-white">{{ $vehicle->fuel_type }}</p>
                                        </div>
                                        <div class="px-4 py-3 rounded-lg bg-linear-to-br from-green-100 to-blue-100 dark:from-green-900/30 dark:to-blue-900/30 border border-green-300 dark:border-green-700">
                                            <p class="text-xs font-semibold text-green-700 dark:text-green-300 mb-1">Price</p>
                                            <p class="text-lg font-bold text-green-900 dark:text-green-200">{{ $vehicle->formatted_price }}</p>
                                        </div>
                                    </div>

                                    <!-- Engine & Grade -->
                                    <div class="flex flex-wrap gap-3">
                                        <div class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 text-sm font-medium border border-blue-200 dark:border-blue-800">
                                            <ion-icon name="flash-outline"></ion-icon>
                                            {{ $vehicle->engine_capacity }}
                                        </div>
                                        <div class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-amber-50 dark:bg-amber-900/20 text-amber-700 dark:text-amber-300 text-sm font-medium border border-amber-200 dark:border-amber-800">
                                            <ion-icon name="star-outline"></ion-icon>
                                            Grade {{ $vehicle->auction_grade }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="flex flex-row lg:flex-col gap-3 pt-4 lg:pt-0 lg:border-l lg:border-slate-200 lg:dark:border-slate-600 lg:pl-6">
                                    <a 
                                        href="{{ route('car.details', $vehicle->slug) }}" 
                                        target="_blank"
                                        class="flex-1 lg:flex-none px-4 py-3 bg-blue-100 dark:bg-blue-900/30 hover:bg-blue-200 dark:hover:bg-blue-900/50 text-blue-700 dark:text-blue-300 border border-blue-300 dark:border-blue-700 font-semibold text-sm flex items-center justify-center gap-2 transition-all duration-200"
                                        title="View on Website"
                                    >
                                        <ion-icon name="eye-outline" class="text-lg"></ion-icon>
                                        <span>View</span>
                                    </a>
                                    <a 
                                        href="{{ route('admin.vehicles.edit', $vehicle->id) }}" 
                                        class="flex-1 lg:flex-none px-4 py-3 bg-green-100 dark:bg-green-900/30 hover:bg-green-200 dark:hover:bg-green-900/50 text-green-700 dark:text-green-300 border border-green-300 dark:border-green-700 font-semibold text-sm flex items-center justify-center gap-2 transition-all duration-200"
                                        title="Edit Vehicle"
                                    >
                                        <ion-icon name="create-outline" class="text-lg"></ion-icon>
                                        <span>Edit</span>
                                    </a>
                                    <button 
                                        wire:click="deleteVehicle({{ $vehicle->id }})"
                                        wire:confirm="Are you sure you want to delete this vehicle? This action cannot be undone."
                                        class="flex-1 lg:flex-none px-4 py-3 bg-red-100 dark:bg-red-900/30 hover:bg-red-200 dark:hover:bg-red-900/50 text-red-700 dark:text-red-300 border border-red-300 dark:border-red-700 font-semibold text-sm flex items-center justify-center gap-2 transition-all duration-200"
                                        title="Delete Vehicle"
                                    >
                                        <ion-icon name="trash-outline" class="text-lg"></ion-icon>
                                        <span>Delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="flex justify-center items-center">
                {{ $vehicles->links() }}
            </div>
        @else
            <!-- Empty State -->
            <div class="bg-white dark:bg-slate-800 rounded-2xl border-2 border-dashed border-slate-300 dark:border-slate-600 px-8 py-16 text-center shadow-sm">
                <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-linear-to-br from-blue-100 to-green-100 dark:from-blue-900/30 dark:to-green-900/30 flex items-center justify-center border-2 border-blue-200 dark:border-blue-800">
                    <ion-icon name="car-outline" class="text-5xl text-slate-400 dark:text-slate-600"></ion-icon>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">No Vehicles Found</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-8 text-lg">Try adjusting your filters or create a new vehicle listing</p>
                <a 
                    href="{{ route('admin.vehicles.create') }}" 
                    class="inline-flex items-center justify-center gap-3 px-6 py-4 bg-linear-to-r from-green-600 to-blue-600 hover:from-green-700 hover:to-blue-700 text-white font-bold text-lg shadow-lg hover:shadow-xl transition-all duration-200"
                >
                    <ion-icon name="add-circle" class="text-2xl"></ion-icon>
                    <span>Add New Vehicle</span>
                </a>
            </div>
        @endif
    </div>

    @include('partials.footer')
</div>
