<div class="page-shell">
    <div class="max-w-7xl mx-auto px-6 py-12">
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
            <div>
                <h1 class="text-4xl md:text-5xl font-extrabold mb-2">Manage Vehicles</h1>
                <p class="ui-muted">View, edit, and manage all vehicle listings</p>
            </div>
            <div class="mt-4 md:mt-0 ">
                <a 
                    href="{{ route('admin.vehicles.create') }}" 
                    class="btn-primary p-2 border-2 border-amber-400"
                >
                    <ion-icon name="add-circle-outline" class="text-xl"></ion-icon>
                    <span class="ml-2 inline-block">Add New Vehicle</span>
                </a>
            </div>
        </div>

        <!-- Flash Messages -->
        @if (session()->has('message'))
            <div class="alert alert-success mb-6">
                <ion-icon name="checkmark-circle-outline" class="text-2xl"></ion-icon>
                <span>{{ session('message') }}</span>
            </div>
        @endif

        <!-- Filters -->
        <div class="glass-panel p-6 mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-2">
                <!-- Search -->
                <div class="form-control border-2 p-2 border-amber-400">
                    <label class="label">
                        <span class="label-text ui-label p-2">Search</span>
                    </label>
                    <input 
                        type="text" 
                        wire:model.live.debounce.300ms="search" 
                        placeholder="Make, Model, or VIN..." 
                        class="ui-input p-2"
                    />
                </div>

                <!-- Status Filter -->
                <div class="form-control border-2 p-2 border-amber-400">
                    <label class="label">
                        <span class="label-text ui-label">Status</span>
                    </label>
                    <select 
                        wire:model.live="status" 
                        class="ui-select"
                    >
                        <option value="all">All Vehicles</option>
                        <option value="available">Available Only</option>
                        <option value="sold">Sold Only</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Results Counter -->
        <div class="mb-6">
            <p class="ui-muted">
                Showing <span class="font-semibold text-amber-300">{{ $vehicles->firstItem() ?? 0 }}</span> 
                to <span class="font-semibold text-amber-300">{{ $vehicles->lastItem() ?? 0 }}</span> 
                of <span class="font-semibold text-amber-300">{{ $vehicles->total() }}</span> vehicles
            </p>
        </div>

        <!-- Vehicles Table -->
        @if($vehicles->count() > 0)
            <div class="glass-card overflow-hidden mb-8">
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <thead class="bg-white/5">
                            <tr class="border-b border-white/10">
                                <th class="text-amber-300 p-4 font-semibold">Vehicle</th>
                                <th class="text-amber-300 p-4 text-left font-semibold">Year</th>
                                <th class="text-amber-300 p-4 text-left font-semibold">Specs</th>
                                <th class="text-amber-300 p-4 font-semibold">Price</th>
                                <th class="text-amber-300 p-4 text-center font-semibold">Status</th>
                                <th class="text-amber-300 p-4 font-semibold">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vehicles as $vehicle)
                                <tr class="border-b border-white/5 hover:bg-white/5">
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <div class="avatar">
                                                <div class="w-16 h-16 rounded-lg">
                                                    <img src="{{ $vehicle->primary_image }}" alt="{{ $vehicle->full_name }}" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-semibold">{{ $vehicle->make }} {{ $vehicle->model }}</div>
                                                <div class="text-sm text-slate-400">VIN: {{ $vehicle->vin_number }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-slate-300 font-medium">{{ $vehicle->year_of_reg }}</td>
                                    <td class="text-slate-300 text-sm">
                                        <div>{{ $vehicle->formatted_mileage }}</div>
                                        <div class="text-slate-400">{{ $vehicle->transmission }} · {{ $vehicle->fuel_type }}</div>
                                    </td>
                                    <td class="text-amber-400 font-semibold">{{ $vehicle->formatted_price }}</td>
                                    <td>
                                        <button 
                                            wire:click="toggleAvailability({{ $vehicle->id }})"
                                            wire:confirm="Are you sure you want to change the availability status?"
                                            class="btn btn-sm {{ $vehicle->is_available ? 'badge-success' : 'badge-error' }}"
                                        >
                                            {{ $vehicle->is_available ? 'Available' : 'Sold' }}
                                        </button>
                                    </td>
                                    <td>
                                        <div class="flex gap-2">
                                            <a 
                                                href="{{ route('car.details', $vehicle->slug) }}" 
                                                target="_blank"
                                                class="btn-outline-slate btn-sm"
                                                title="View"
                                            >
                                                <ion-icon name="eye-outline"></ion-icon>
                                            </a>
                                            <a 
                                                href="{{ route('admin.vehicles.edit', $vehicle->id) }}" 
                                                class="btn-outline-amber btn-sm"
                                                title="Edit"
                                            >
                                                <ion-icon name="create-outline"></ion-icon>
                                            </a>
                                            <button 
                                                wire:click="deleteVehicle({{ $vehicle->id }})"
                                                wire:confirm="Are you sure you want to delete this vehicle? This action cannot be undone."
                                                class="btn-outline-danger btn-sm"
                                                title="Delete"
                                            >
                                                <ion-icon name="trash-outline"></ion-icon>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center">
                {{ $vehicles->links() }}
            </div>
        @else
            <!-- Empty State -->
            <div class="ui-empty">
                <ion-icon name="car-outline" class="text-6xl text-slate-400 mb-4"></ion-icon>
                <h3 class="text-2xl font-bold mb-2">No Vehicles Found</h3>
                <p class="ui-muted mb-6">Try adjusting your filters or add a new vehicle</p>
                <a 
                    href="{{ route('admin.vehicles.create') }}" 
                    class="btn-primary"
                >
                    <ion-icon name="add-circle-outline" class="text-xl"></ion-icon>
                    Add New Vehicle
                </a>
            </div>
        @endif
    </div>

    @include('partials.footer')
</div>
