<div class="page-shell">
    <div class="w-4/5 mx-auto px-6 py-12">
        <!-- Header with Gradient Background -->
        <div class="mb-12 bg-linear-to-r from-blue-600 to-green-600 rounded-2xl px-8 py-10 text-white shadow-lg">
            <div class="flex items-center gap-4 mb-3">
                <div class="w-12 h-12 flex items-center justify-center rounded-full bg-white/20 backdrop-blur-sm">
                    <ion-icon name="speedometer-outline" class="text-3xl"></ion-icon>
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold">Admin Dashboard</h1>
            </div>
            <p class="text-blue-100 text-lg ml-16">Manage your vehicle inventory and monitor your website</p>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <!-- Total Vehicles -->
            <div class="bg-white dark:bg-slate-800 rounded-2xl border-2 border-slate-200 dark:border-slate-600 p-8 hover:shadow-lg hover:border-blue-300 dark:hover:border-blue-600 transition-all duration-200">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-14 h-14 bg-linear-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-md">
                        <ion-icon name="car-outline" class="text-3xl text-white"></ion-icon>
                    </div>
                    <span class="text-4xl font-bold text-blue-600 dark:text-blue-400">{{ $total_vehicles }}</span>
                </div>
                <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-1">Total Vehicles</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm">All vehicles in inventory</p>
            </div>

            <!-- Available Vehicles -->
            <div class="bg-white dark:bg-slate-800 rounded-2xl border-2 border-slate-200 dark:border-slate-600 p-8 hover:shadow-lg hover:border-green-300 dark:hover:border-green-600 transition-all duration-200">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-14 h-14 bg-linear-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center shadow-md">
                        <ion-icon name="checkmark-circle-outline" class="text-3xl text-white"></ion-icon>
                    </div>
                    <span class="text-4xl font-bold text-green-600 dark:text-green-400">{{ $available_vehicles }}</span>
                </div>
                <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-1">Available</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Ready for sale</p>
            </div>

            <!-- Sold Vehicles -->
            <div class="bg-white dark:bg-slate-800 rounded-2xl border-2 border-slate-200 dark:border-slate-600 p-8 hover:shadow-lg hover:border-red-300 dark:hover:border-red-600 transition-all duration-200">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-14 h-14 bg-linear-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center shadow-md">
                        <ion-icon name="close-circle-outline" class="text-3xl text-white"></ion-icon>
                    </div>
                    <span class="text-4xl font-bold text-red-600 dark:text-red-400">{{ $sold_vehicles }}</span>
                </div>
                <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-1">Sold</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm">No longer available</p>
            </div>
        </div>

        <!-- Quick Actions Section -->
        <div class="bg-white dark:bg-slate-800 rounded-2xl border-2 border-slate-200 dark:border-slate-600 overflow-hidden mb-12 shadow-md">
            <div class="bg-linear-to-r from-green-600 to-blue-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white flex items-center gap-3">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 backdrop-blur-sm">
                        <ion-icon name="flash-outline" class="text-xl"></ion-icon>
                    </div>
                    Quick Actions
                </h2>
            </div>
            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <a 
                        href="{{ route('admin.vehicles.create') }}" 
                        class="flex items-center gap-3 px-6 py-4 bg-linear-to-r from-blue-500 to-blue-600 rounded-xl text-white font-semibold hover:shadow-lg hover:scale-105 transition-all duration-200"
                    >
                        <ion-icon name="add-circle-outline" class="text-2xl"></ion-icon>
                        <span>Add Vehicle</span>
                    </a>
                    <a 
                        href="{{ route('admin.vehicles.index') }}" 
                        class="flex items-center gap-3 px-6 py-4 bg-linear-to-r from-green-500 to-green-600 rounded-xl text-white font-semibold hover:shadow-lg hover:scale-105 transition-all duration-200"
                    >
                        <ion-icon name="list-outline" class="text-2xl"></ion-icon>
                        <span>Manage Vehicles</span>
                    </a>
                    <a 
                        href="{{ route('cars') }}" 
                        target="_blank"
                        class="flex items-center gap-3 px-6 py-4 bg-white dark:bg-slate-700 border-2 border-blue-500 text-blue-600 dark:text-blue-400 font-semibold rounded-xl hover:bg-blue-50 dark:hover:bg-slate-600 hover:shadow-lg hover:scale-105 transition-all duration-200"
                    >
                        <ion-icon name="eye-outline" class="text-2xl"></ion-icon>
                        <span>View Site</span>
                    </a>
                    <a 
                        href="{{ route('profile.edit') }}" 
                        class="flex items-center gap-3 px-6 py-4 bg-white dark:bg-slate-700 border-2 border-slate-300 dark:border-slate-500 text-slate-700 dark:text-slate-300 font-semibold rounded-xl hover:bg-slate-50 dark:hover:bg-slate-600 hover:shadow-lg hover:scale-105 transition-all duration-200"
                    >
                        <ion-icon name="settings-outline" class="text-2xl"></ion-icon>
                        <span>Settings</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Recent Vehicles Section -->
        <div class="bg-white dark:bg-slate-800 rounded-2xl border-2 border-slate-200 dark:border-slate-600 overflow-hidden shadow-md">
            <div class="bg-linear-to-r from-blue-600 to-green-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white flex items-center gap-3">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 backdrop-blur-sm">
                        <ion-icon name="time-outline" class="text-xl"></ion-icon>
                    </div>
                    Recent Vehicles
                </h2>
            </div>

            @if($recent_vehicles->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-slate-50 dark:bg-slate-700 border-b border-slate-200 dark:border-slate-600">
                                <th class="px-6 py-4 text-left font-semibold text-slate-900 dark:text-white">Vehicle</th>
                                <th class="px-6 py-4 text-center font-semibold text-slate-900 dark:text-white">Year</th>
                                <th class="px-6 py-4 text-center font-semibold text-slate-900 dark:text-white">Mileage</th>
                                <th class="px-6 py-4 text-center font-semibold text-slate-900 dark:text-white">Price</th>
                                <th class="px-6 py-4 text-center font-semibold text-slate-900 dark:text-white">Status</th>
                                <th class="px-6 py-4 text-center font-semibold text-slate-900 dark:text-white">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recent_vehicles as $vehicle)
                                <tr class="border-b border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors duration-150">
                                    <td class="px-6 py-4">
                                        <div class="font-semibold text-slate-900 dark:text-white">{{ $vehicle->make }} {{ $vehicle->model }}</div>
                                        <div class="text-sm text-slate-500 dark:text-slate-400">{{ $vehicle->vin_number }}</div>
                                    </td>
                                    <td class="px-6 py-4 text-center text-slate-700 dark:text-slate-300">{{ $vehicle->year_of_reg }}</td>
                                    <td class="px-6 py-4 text-center text-slate-700 dark:text-slate-300">{{ $vehicle->formatted_mileage }}</td>
                                    <td class="px-6 py-4 text-center font-semibold text-green-600 dark:text-green-400">{{ $vehicle->formatted_price }}</td>
                                    <td class="px-6 py-4 text-center">
                                        @if($vehicle->is_available)
                                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 text-sm font-semibold">
                                                <ion-icon name="checkmark-circle" class="text-lg"></ion-icon>
                                                Available
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 text-sm font-semibold">
                                                <ion-icon name="close-circle" class="text-lg"></ion-icon>
                                                Sold
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex gap-2 justify-center">
                                            <a 
                                                href="{{ route('admin.vehicles.edit', $vehicle->id) }}" 
                                                class="px-4 py-2 bg-green-500/10 hover:bg-green-500/20 border border-green-500 rounded-lg text-green-600 dark:text-green-400 font-semibold transition-all duration-200 flex items-center gap-1"
                                            >
                                                <ion-icon name="create-outline" class="text-xl"></ion-icon>
                                            </a>
                                            <a 
                                                href="{{ route('car.details', $vehicle->slug) }}" 
                                                target="_blank"
                                                class="px-4 py-2 bg-blue-500/10 hover:bg-blue-500/20 border border-blue-500 rounded-lg text-blue-600 dark:text-blue-400 font-semibold transition-all duration-200 flex items-center gap-1"
                                            >
                                                <ion-icon name="eye-outline" class="text-xl"></ion-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="p-16 text-center">
                    <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <ion-icon name="car-outline" class="text-5xl text-blue-600 dark:text-blue-400"></ion-icon>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 text-lg mb-6">No vehicles added yet</p>
                    <a href="{{ route('admin.vehicles.create') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-linear-to-r from-blue-500 to-blue-600 text-white font-semibold rounded-xl hover:shadow-lg hover:scale-105 transition-all duration-200">
                        <ion-icon name="add-circle-outline" class="text-xl"></ion-icon>
                        Add Your First Vehicle
                    </a>
                </div>
            @endif
        </div>
    </div>

    @include('partials.footer')
</div>
