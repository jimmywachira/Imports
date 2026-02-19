<div class="page-shell">
    <div class="max-w-7xl mx-auto px-6 py-12">
        <!-- Header -->
        <div class="mb-12">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
                <ion-icon name="speedometer-outline" class="align-middle text-amber-400"></ion-icon>
                Admin Dashboard
            </h1>
            <p class="ui-muted text-lg">Manage your vehicle inventory and monitor your website</p>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <!-- Total Vehicles -->
            <div class="glass-panel p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-amber-400/20 rounded-lg flex items-center justify-center">
                        <ion-icon name="car-outline" class="text-3xl text-amber-400"></ion-icon>
                    </div>
                    <span class="text-3xl font-bold text-amber-400">{{ $total_vehicles }}</span>
                </div>
                <h3 class="text-lg font-semibold mb-1">Total Vehicles</h3>
                <p class="text-blue-400 text-sm">All vehicles in inventory</p>
            </div>

            <!-- Available Vehicles -->
            <div class="glass-panel p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-green-400/20 rounded-lg flex items-center justify-center">
                        <ion-icon name="checkmark-circle-outline" class="text-3xl text-green-400"></ion-icon>
                    </div>
                    <span class="text-3xl font-bold text-green-400">{{ $available_vehicles }}</span>
                </div>
                <h3 class="text-lg font-semibold mb-1">Available</h3>
                <p class="text-blue-400 text-sm">Ready for sale</p>
            </div>

            <!-- Sold Vehicles -->
            <div class="glass-panel p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-red-400/20 rounded-lg flex items-center justify-center">
                        <ion-icon name="close-circle-outline" class="text-3xl text-red-400"></ion-icon>
                    </div>
                    <span class="text-3xl font-bold text-red-400">{{ $sold_vehicles }}</span>
                </div>
                <h3 class="text-lg font-semibold mb-1">Sold</h3>
                <p class="text-blue-400 text-sm">No longer available</p>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="glass-panel p-6 mb-12">
            <h2 class="text-2xl font-bold mb-6 flex items-center gap-2">
                <ion-icon name="flash-outline" class="text-amber-400"></ion-icon>
                Quick Actions
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <a 
                    href="{{ route('admin.vehicles.create') }}" 
                    class="btn-primary p-3 justify-start"
                >
                    <ion-icon name="add-circle-outline" class="text-xl"></ion-icon>
                    Add New Vehicle
                </a>
                <a 
                    href="{{ route('admin.vehicles.index') }}" 
                    class="btn-outline-amber justify-start"
                >
                    <ion-icon name="list-outline" class="text-xl"></ion-icon>
                    Manage Vehicles
                </a>
                <a 
                    href="{{ route('cars') }}" 
                    target="_blank"
                    class="btn-outline-blue justify-start"
                >
                    <ion-icon name="eye-outline" class="text-xl"></ion-icon>
                    View Public Site
                </a>
                <a 
                    href="{{ route('profile.edit') }}" 
                    class="btn-outline-blue justify-start"
                >
                    <ion-icon name="settings-outline" class="text-xl"></ion-icon>
                    Settings
                </a>
            </div>
        </div>

        <!-- Recent Vehicles -->
        <div class="glass-panel p-6">
            <h2 class="text-2xl font-bold mb-6 flex items-center gap-2">
                <ion-icon name="time-outline" class="text-amber-400"></ion-icon>
                Recent Vehicles
            </h2>

            @if($recent_vehicles->count() > 0)
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <thead>
                            <tr class="text-amber-400 backdrop-blur-sm border-b border-white/10">
                                <th class="ui-muted p-4 text-left font-semibold">Vehicle</th>
                                <th class="ui-muted p-4 font-semibold">Year</th>
                                <th class="ui-muted p-4 font-semibold">Mileage</th>
                                <th class="ui-muted p-4 font-semibold">Price</th>
                                <th class="ui-muted p-4 font-semibold">Status</th>
                                <th class="ui-muted p-4 text-center font-semibold">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recent_vehicles as $vehicle)
                                <tr class="border-b border-white/5 hover:bg-white/5">
                                    <td>
                                        <div class="font-semibold">{{ $vehicle->make }} {{ $vehicle->model }}</div>
                                        <div class="text-sm text-blue-400">{{ $vehicle->vin_number }}</div>
                                    </td>
                                    <td class="text-blue-300">{{ $vehicle->year_of_reg }}</td>
                                    <td class="text-blue-300">{{ $vehicle->formatted_mileage }}</td>
                                    <td class="text-amber-400 font-semibold">{{ $vehicle->formatted_price }}</td>
                                    <td>
                                        @if($vehicle->is_available)
                                            <span class="badge badge-success">Available</span>
                                        @else
                                            <span class="badge badge-error">Sold</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="flex gap-2">
                                            <a 
                                                href="{{ route('admin.vehicles.edit', $vehicle->id) }}" 
                                                class="btn-outline-amber btn-sm"
                                            >
                                                <ion-icon name="create-outline"></ion-icon>
                                            </a>
                                            <a 
                                                href="{{ route('car.details', $vehicle->slug) }}" 
                                                target="_blank"
                                                class="btn-outline-blue btn-sm"
                                            >
                                                <ion-icon name="eye-outline"></ion-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center py-12">
                    <ion-icon name="car-outline" class="text-6xl text-blue-400 mb-4"></ion-icon>
                    <p class="text-blue-400">No vehicles added yet</p>
                    <a href="{{ route('admin.vehicles.create') }}" class="btn-primary mt-4">
                        Add Your First Vehicle
                    </a>
                </div>
            @endif
        </div>
    </div>

    @include('partials.footer')
</div>
