<div class="page-shell bg-linear-to-br from-blue-50 via-white to-green-50 dark:from-slate-950 dark:via-slate-900 dark:to-slate-950 min-h-screen">
    <div class="w-4/5 mx-auto px-4 sm:px-6 py-8 sm:py-12">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex items-start justify-between flex-wrap gap-4 mb-6">
                <div class="flex items-center gap-4">
                    <a href="{{ route('admin.vehicles.index') }}" 
                       class="w-10 h-10 flex items-center justify-center rounded-xl bg-white dark:bg-slate-800 border-2 border-blue-200 dark:border-slate-700 text-blue-600 dark:text-blue-400 hover:bg-blue-50 dark:hover:bg-slate-700 hover:border-blue-400 transition-all duration-200 shadow-sm">
                        <ion-icon name="arrow-back-outline" class="text-xl"></ion-icon>
                    </a>
                    <div>
                        <h1 class="text-3xl sm:text-4xl font-bold text-slate-900 dark:text-white mb-1">Add New Vehicle</h1>
                        <p class="text-sm text-slate-600 dark:text-slate-400 font-medium">Fill in the details below to add a vehicle to your inventory</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form -->
        <form wire:submit="save" class="space-y-6">
            
            <!-- Basic Information Section -->
            <div class="bg-white dark:bg-slate-800 rounded-2xl border-2 border-blue-100 dark:border-slate-700 shadow-sm overflow-hidden">
                <div class="bg-linear-to-r from-blue-500 to-green-500 px-6 py-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 backdrop-blur-sm">
                            <ion-icon name="information-circle" class="text-2xl text-white"></ion-icon>
                        </div>
                        <h2 class="text-xl font-bold text-white">Basic Information</h2>
                    </div>
                </div>
                
                <div class="p-6 space-y-6">
                    <!-- VIN Number -->
                    <div class="form-control">
                        <label class="block mb-2">
                            <span class="text-sm font-semibold text-slate-700 dark:text-slate-300 flex items-center gap-2">
                                <ion-icon name="barcode-outline" class="text-blue-500"></ion-icon>
                                VIN Number
                                <span class="text-red-500">*</span>
                            </span>
                            <span class="text-xs text-slate-500 dark:text-slate-400">Vehicle Identification Number</span>
                        </label>
                        <input 
                            type="text" 
                            wire:model="vin_number" 
                            placeholder="e.g., JN1BCNS35U0000001" 
                            class="w-full px-4 py-3 rounded-xl border-2 border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-900 dark:text-white placeholder-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-200"
                        />
                        @error('vin_number') 
                            <span class="flex items-center gap-1 text-red-500 text-sm mt-2">
                                <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!-- Make and Model -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="form-control">
                            <label class="block mb-2">
                                <span class="text-sm font-semibold text-slate-700 dark:text-slate-300 flex items-center gap-2">
                                    <ion-icon name="business-outline" class="text-green-500"></ion-icon>
                                    Make
                                    <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <input 
                                type="text" 
                                wire:model="make" 
                                placeholder="e.g., Toyota" 
                                class="w-full px-4 py-3 rounded-xl border-2 border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-900 dark:text-white placeholder-slate-400 focus:border-green-500 focus:ring-2 focus:ring-green-500/20 transition-all duration-200"
                            />
                            @error('make') 
                                <span class="flex items-center gap-1 text-red-500 text-sm mt-2">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-control">
                            <label class="block mb-2">
                                <span class="text-sm font-semibold text-slate-700 dark:text-slate-300 flex items-center gap-2">
                                    <ion-icon name="car-outline" class="text-green-500"></ion-icon>
                                    Model
                                    <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <input 
                                type="text" 
                                wire:model="model" 
                                placeholder="e.g., Harrier" 
                                class="w-full px-4 py-3 rounded-xl border-2 border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-900 dark:text-white placeholder-slate-400 focus:border-green-500 focus:ring-2 focus:ring-green-500/20 transition-all duration-200"
                            />
                            @error('model') 
                                <span class="flex items-center gap-1 text-red-500 text-sm mt-2">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Year and Mileage -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="form-control">
                            <label class="block mb-2">
                                <span class="text-sm font-semibold text-slate-700 dark:text-slate-300 flex items-center gap-2">
                                    <ion-icon name="calendar-outline" class="text-blue-500"></ion-icon>
                                    Year of Registration
                                    <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <input 
                                type="number" 
                                wire:model="year_of_reg" 
                                min="2019" 
                                max="2026" 
                                class="w-full px-4 py-3 rounded-xl border-2 border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-900 dark:text-white placeholder-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-200"
                            />
                            @error('year_of_reg') 
                                <span class="flex items-center gap-1 text-red-500 text-sm mt-2">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-control">
                            <label class="block mb-2">
                                <span class="text-sm font-semibold text-slate-700 dark:text-slate-300 flex items-center gap-2">
                                    <ion-icon name="speedometer-outline" class="text-blue-500"></ion-icon>
                                    Mileage (km)
                                    <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <input 
                                type="number" 
                                wire:model="mileage" 
                                min="0" 
                                placeholder="e.g., 45000" 
                                class="w-full px-4 py-3 rounded-xl border-2 border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-900 dark:text-white placeholder-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-200"
                            />
                            @error('mileage') 
                                <span class="flex items-center gap-1 text-red-500 text-sm mt-2">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technical Specifications Section -->
            <div class="bg-white dark:bg-slate-800 rounded-2xl border-2 border-green-100 dark:border-slate-700 shadow-sm overflow-hidden">
                <div class="bg-linear-to-r from-green-500 to-blue-500 px-6 py-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 backdrop-blur-sm">
                            <ion-icon name="settings" class="text-2xl text-white"></ion-icon>
                        </div>
                        <h2 class="text-xl font-bold text-white">Technical Specifications</h2>
                    </div>
                </div>
                
                <div class="p-6 space-y-6">
                    <!-- Engine and Transmission -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="form-control">
                            <label class="block mb-2">
                                <span class="text-sm font-semibold text-slate-700 dark:text-slate-300 flex items-center gap-2">
                                    <ion-icon name="flash-outline" class="text-green-500"></ion-icon>
                                    Engine Capacity
                                    <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <input 
                                type="text" 
                                wire:model="engine_capacity" 
                                placeholder="e.g., 2.0L" 
                                class="w-full px-4 py-3 rounded-xl border-2 border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-900 dark:text-white placeholder-slate-400 focus:border-green-500 focus:ring-2 focus:ring-green-500/20 transition-all duration-200"
                            />
                            @error('engine_capacity') 
                                <span class="flex items-center gap-1 text-red-500 text-sm mt-2">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-control">
                            <label class="block mb-2">
                                <span class="text-sm font-semibold text-slate-700 dark:text-slate-300 flex items-center gap-2">
                                    <ion-icon name="git-branch-outline" class="text-green-500"></ion-icon>
                                    Transmission
                                    <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <select 
                                wire:model="transmission" 
                                class="w-full px-4 py-3 rounded-xl border-2 border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-900 dark:text-white focus:border-green-500 focus:ring-2 focus:ring-green-500/20 transition-all duration-200"
                            >
                                <option value="">Select transmission type</option>
                                <option value="Automatic">Automatic</option>
                                <option value="Manual">Manual</option>
                            </select>
                            @error('transmission') 
                                <span class="flex items-center gap-1 text-red-500 text-sm mt-2">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Fuel Type and Grade -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="form-control">
                            <label class="block mb-2">
                                <span class="text-sm font-semibold text-slate-700 dark:text-slate-300 flex items-center gap-2">
                                    <ion-icon name="water-outline" class="text-blue-500"></ion-icon>
                                    Fuel Type
                                    <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <select 
                                wire:model="fuel_type" 
                                class="w-full px-4 py-3 rounded-xl border-2 border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-900 dark:text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-200"
                            >
                                <option value="">Select fuel type</option>
                                <option value="Petrol">Petrol</option>
                                <option value="Diesel">Diesel</option>
                                <option value="Hybrid">Hybrid</option>
                            </select>
                            @error('fuel_type') 
                                <span class="flex items-center gap-1 text-red-500 text-sm mt-2">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-control">
                            <label class="block mb-2">
                                <span class="text-sm font-semibold text-slate-700 dark:text-slate-300 flex items-center gap-2">
                                    <ion-icon name="star-outline" class="text-blue-500"></ion-icon>
                                    Auction Grade
                                    <span class="text-red-500">*</span>
                                </span>
                                <span class="text-xs text-slate-500 dark:text-slate-400">Vehicle condition rating</span>
                            </label>
                            <select 
                                wire:model="auction_grade" 
                                class="w-full px-4 py-3 rounded-xl border-2 border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-900 dark:text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-200"
                            >
                                <option value="">Select grade</option>
                                <option value="3">3 - Average</option>
                                <option value="3.5">3.5 - Good</option>
                                <option value="4">4 - Very Good</option>
                                <option value="4.5">4.5 - Excellent</option>
                                <option value="5">5 - Like New</option>
                            </select>
                            @error('auction_grade') 
                                <span class="flex items-center gap-1 text-red-500 text-sm mt-2">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pricing & Availability Section -->
            <div class="bg-white dark:bg-slate-800 rounded-2xl border-2 border-blue-100 dark:border-slate-700 shadow-sm overflow-hidden">
                <div class="bg-linear-to-r from-blue-600 to-green-600 px-6 py-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 backdrop-blur-sm">
                            <ion-icon name="cash" class="text-2xl text-white"></ion-icon>
                        </div>
                        <h2 class="text-xl font-bold text-white">Pricing & Availability</h2>
                    </div>
                </div>
                
                <div class="p-6 space-y-6">
                    <!-- Price Range -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="form-control">
                            <label class="block mb-2">
                                <span class="text-sm font-semibold text-slate-700 dark:text-slate-300 flex items-center gap-2">
                                    <ion-icon name="trending-down-outline" class="text-blue-500"></ion-icon>
                                    Minimum CIF Price (KES)
                                    <span class="text-red-500">*</span>
                                </span>
                                <span class="text-xs text-slate-500 dark:text-slate-400">Lowest price point</span>
                            </label>
                            <input 
                                type="number" 
                                wire:model="cif_price_min" 
                                min="0" 
                                step="0.01" 
                                placeholder="e.g., 2300000" 
                                class="w-full px-4 py-3 rounded-xl border-2 border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-900 dark:text-white placeholder-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-200"
                            />
                            @error('cif_price_min') 
                                <span class="flex items-center gap-1 text-red-500 text-sm mt-2">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-control">
                            <label class="block mb-2">
                                <span class="text-sm font-semibold text-slate-700 dark:text-slate-300 flex items-center gap-2">
                                    <ion-icon name="trending-up-outline" class="text-green-500"></ion-icon>
                                    Maximum CIF Price (KES)
                                    <span class="text-red-500">*</span>
                                </span>
                                <span class="text-xs text-slate-500 dark:text-slate-400">Highest price point</span>
                            </label>
                            <input 
                                type="number" 
                                wire:model="cif_price_max" 
                                min="0" 
                                step="0.01" 
                                placeholder="e.g., 2500000" 
                                class="w-full px-4 py-3 rounded-xl border-2 border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-900 dark:text-white placeholder-slate-400 focus:border-green-500 focus:ring-2 focus:ring-green-500/20 transition-all duration-200"
                            />
                            @error('cif_price_max') 
                                <span class="flex items-center gap-1 text-red-500 text-sm mt-2">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Availability Toggle -->
                    <div class="form-control">
                        <label class="flex items-center gap-4 p-4 rounded-xl border-2 border-slate-200 dark:border-slate-600 bg-linear-to-r from-blue-50 to-green-50 dark:from-slate-900/50 dark:to-slate-900/50 hover:border-green-400 dark:hover:border-green-500 transition-all duration-200 cursor-pointer">
                            <input 
                                type="checkbox" 
                                wire:model="is_available" 
                                class="w-5 h-5 rounded border-2 border-green-400 text-green-600 focus:ring-2 focus:ring-green-500/20 transition-all"
                            />
                            <div class="flex-1">
                                <span class="text-sm font-semibold text-slate-700 dark:text-slate-300 flex items-center gap-2">
                                    <ion-icon name="checkmark-circle-outline" class="text-green-500 text-lg"></ion-icon>
                                    Available for Sale
                                </span>
                                <span class="text-xs text-slate-500 dark:text-slate-400 block mt-0.5">Make this vehicle visible to customers</span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Vehicle Images Section -->
            <div class="bg-white dark:bg-slate-800 rounded-2xl border-2 border-green-100 dark:border-slate-700 shadow-sm overflow-hidden">
                <div class="bg-linear-to-r from-green-600 to-blue-600 px-6 py-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 backdrop-blur-sm">
                            <ion-icon name="images" class="text-2xl text-white"></ion-icon>
                        </div>
                        <div class="flex-1">
                            <h2 class="text-xl font-bold text-white">Vehicle Images</h2>
                            <p class="text-sm text-white/80">Upload up to 5 high-quality images</p>
                        </div>
                    </div>
                </div>
                
                <div class="p-6 space-y-6">
                    <p class="text-sm text-slate-600 dark:text-slate-400 flex items-center gap-2">
                        <ion-icon name="information-circle-outline" class="text-blue-500"></ion-icon>
                        Each image must be under 5MB. Supported formats: JPG, PNG, WebP
                    </p>
                    
                    <!-- Image Upload Input -->
                    <label class="block cursor-pointer group">
                            <div class="relative border-3 border-dashed border-slate-300 dark:border-slate-600 rounded-2xl p-8 hover:border-blue-400 dark:hover:border-blue-500 transition-all duration-300 bg-linear-to-br from-blue-50/50 to-green-50/50 dark:from-slate-900/30 dark:to-slate-900/30 group-hover:from-blue-100/70 group-hover:to-green-100/70 dark:group-hover:from-slate-800/50 dark:group-hover:to-slate-800/50">
                            <div class="flex flex-col items-center gap-4">
                                <div class="w-16 h-16 rounded-full bg-linear-to-br from-blue-500 to-green-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <ion-icon name="cloud-upload" class="text-4xl text-white"></ion-icon>
                                </div>
                                <div class="text-center">
                                    <p class="text-lg font-semibold text-slate-700 dark:text-slate-300 mb-1">Click to upload or drag and drop</p>
                                    <p class="text-sm text-slate-500 dark:text-slate-400">Select a high-quality image of the vehicle</p>
                                </div>
                            </div>
                            <input 
                                type="file" 
                                wire:model="newImage" 
                                accept="image/*" 
                                class="hidden"
                            />
                        </div>
                    </label>
                    @error('newImage') 
                        <span class="flex items-center gap-1 text-red-500 text-sm mt-2">
                            <ion-icon name="alert-circle" class="text-base"></ion-icon>
                            {{ $message }}
                        </span>
                    @enderror

                    <!-- Add Image Preview & Button -->
                    @if($newImage)
                        <div class="p-4 rounded-xl bg-green-50 dark:bg-green-900/20 border-2 border-green-200 dark:border-green-800">
                            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                                <img src="{{ $newImage->temporaryUrl() }}" alt="Preview" class="w-32 h-32 object-cover rounded-lg border-2 border-green-300 dark:border-green-700 shadow-sm">
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-green-800 dark:text-green-200 mb-2">Image ready to add</p>
                                    <button 
                                        type="button" 
                                        wire:click="addImage" 
                                        class="px-4 py-2 rounded-lg bg-green-600 hover:bg-green-700 text-white font-medium flex items-center gap-2 transition-colors duration-200 shadow-sm"
                                    >
                                        <ion-icon name="checkmark-circle" class="text-xl"></ion-icon>
                                        Add Image
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Display Uploaded Images -->
                    @if(count($images) > 0)
                        <div class="space-y-3">
                            <div class="flex items-center justify-between px-4 py-2 bg-blue-50 dark:bg-blue-900/20 rounded-lg border border-blue-200 dark:border-blue-800">
                                <span class="text-sm font-semibold text-blue-700 dark:text-blue-300 flex items-center gap-2">
                                    <ion-icon name="images-outline" class="text-lg"></ion-icon>
                                    {{ count($images) }} image(s) uploaded
                                </span>
                            </div>
                            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
                                @foreach($images as $index => $image)
                                    <div class="relative group aspect-square">
                                        <img src="{{ $image }}" alt="Vehicle image {{ $index + 1 }}" class="w-full h-full object-cover rounded-xl border-2 border-slate-200 dark:border-slate-600 shadow-sm">
                                        <button 
                                            type="button" 
                                            wire:click="removeImage({{ $index }})" 
                                            class="absolute inset-0 bg-red-500/90 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-200 rounded-xl flex flex-col items-center justify-center gap-2"
                                        >
                                            <ion-icon name="trash" class="text-3xl text-white"></ion-icon>
                                            <span class="text-xs font-semibold text-white">Remove</span>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @error('images') 
                        <span class="flex items-center gap-1 text-red-500 text-sm mt-2">
                            <ion-icon name="alert-circle" class="text-base"></ion-icon>
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 sticky bottom-4 z-10">
                <button 
                    type="submit" 
                    class="flex-1 px-8 py-4 rounded-xl bg-linear-to-r from-green-600 to-blue-600 hover:from-green-700 hover:to-blue-700 text-white font-bold text-lg shadow-lg hover:shadow-xl transition-all duration-200 flex items-center justify-center gap-3"
                >
                    <ion-icon name="checkmark-circle" class="text-2xl"></ion-icon>
                    Create Vehicle
                </button>
                <a 
                    href="{{ route('admin.vehicles.index') }}" 
                    class="flex-1 sm:flex-none px-8 py-4 rounded-xl border-2 border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-300 font-semibold text-lg transition-all duration-200 flex items-center justify-center gap-3"
                >
                    <ion-icon name="close-circle" class="text-2xl"></ion-icon>
                    Cancel
                </a>
            </div>
        </form>
    </div>

    @include('partials.footer')
</div>
