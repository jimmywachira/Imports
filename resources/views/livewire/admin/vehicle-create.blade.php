<div class="page-shell">
    <div class="max-w-4xl mx-auto px-6 py-12">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center gap-3 mb-4">
                <a href="{{ route('admin.vehicles.index') }}" class="btn btn-sm btn-circle btn-outline border-slate-400 text-slate-300">
                    <ion-icon name="arrow-back-outline"></ion-icon>
                </a>
                <h1 class="text-4xl md:text-5xl font-extrabold">Add New Vehicle</h1>
            </div>
            <p class="ui-muted">Fill in the details below to add a new vehicle to your inventory</p>
        </div>

        <!-- Form -->
        <form wire:submit="save" class="glass-panel p-6 md:p-8">
            <div class="space-y-6">
                <!-- VIN Number -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label font-semibold">VIN Number *</span>
                    </label>
                    <input 
                        type="text" 
                        wire:model="vin_number" 
                        placeholder="e.g., JN1BCNS35U0000001" 
                        class="ui-input"
                    />
                    @error('vin_number') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Make and Model -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text ui-label font-semibold">Make *</span>
                        </label>
                        <input 
                            type="text" 
                            wire:model="make" 
                            placeholder="e.g., Toyota" 
                            class="ui-input"
                        />
                        @error('make') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text ui-label font-semibold">Model *</span>
                        </label>
                        <input 
                            type="text" 
                            wire:model="model" 
                            placeholder="e.g., Harrier" 
                            class="ui-input"
                        />
                        @error('model') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Year and Mileage -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text ui-label font-semibold">Year of Registration *</span>
                        </label>
                        <input 
                            type="number" 
                            wire:model="year_of_reg" 
                            min="2019" 
                            max="2026" 
                            class="ui-input"
                        />
                        @error('year_of_reg') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text ui-label font-semibold">Mileage (km) *</span>
                        </label>
                        <input 
                            type="number" 
                            wire:model="mileage" 
                            min="0" 
                            placeholder="e.g., 45000" 
                            class="ui-input"
                        />
                        @error('mileage') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Engine and Transmission -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text ui-label font-semibold">Engine Capacity *</span>
                        </label>
                        <input 
                            type="text" 
                            wire:model="engine_capacity" 
                            placeholder="e.g., 2.0L" 
                            class="ui-input"
                        />
                        @error('engine_capacity') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text ui-label font-semibold">Transmission *</span>
                        </label>
                        <select 
                            wire:model="transmission" 
                            class="ui-select"
                        >
                            <option value="Automatic">Automatic</option>
                            <option value="Manual">Manual</option>
                        </select>
                        @error('transmission') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Fuel Type and Grade -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text ui-label font-semibold">Fuel Type *</span>
                        </label>
                        <select 
                            wire:model="fuel_type" 
                            class="ui-select"
                        >
                            <option value="Petrol">Petrol</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Hybrid">Hybrid</option>
                        </select>
                        @error('fuel_type') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text ui-label font-semibold">Auction Grade *</span>
                        </label>
                        <select 
                            wire:model="auction_grade" 
                            class="ui-select"
                        >
                            <option value="3">3</option>
                            <option value="3.5">3.5</option>
                            <option value="4">4</option>
                            <option value="4.5">4.5</option>
                            <option value="5">5</option>
                        </select>
                        @error('auction_grade') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Price and Availability -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text ui-label font-semibold">CIF Price (KES) *</span>
                        </label>
                        <input 
                            type="number" 
                            wire:model="cif_price" 
                            min="0" 
                            step="0.01" 
                            placeholder="e.g., 2500000" 
                            class="ui-input"
                        />
                        @error('cif_price') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text ui-label font-semibold">Availability</span>
                        </label>
                        <label class="label cursor-pointer justify-start gap-3 glass-panel p-4">
                            <input 
                                type="checkbox" 
                                wire:model="is_available" 
                                class="checkbox checkbox-warning"
                            />
                            <span class="label-text ui-label">Available for Sale</span>
                        </label>
                    </div>
                </div>

                <!-- Image Upload Section -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label font-semibold">Vehicle Images (Up to 5)</span>
                    </label>
                    <p class="text-xs ui-muted mb-3">Each image must be under 5MB. Supported formats: JPG, PNG, WebP</p>
                    
                    <!-- Image Upload Input -->
                    <div class="form-control mb-4">
                        <label class="label cursor-pointer justify-start gap-3 rounded-2xl border-2 border-dashed border-slate-300/80 bg-gradient-to-b from-white/60 to-slate-50/30 p-6 shadow-sm transition-all hover:border-amber-400 hover:shadow-md dark:border-slate-600/80 dark:from-slate-900/50 dark:to-slate-800/30">
                            <div class="flex flex-col items-center w-full text-center">
                                <div class="mb-3 flex h-14 w-14 items-center justify-center rounded-full border border-amber-300/60 bg-amber-100/70 text-amber-500 shadow-inner dark:border-amber-400/30 dark:bg-amber-400/10">
                                    <ion-icon name="cloud-upload-outline" class="text-2xl"></ion-icon>
                                </div>
                                <span class="text-sm font-semibold text-slate-800 dark:text-slate-100">Upload a vehicle image</span>
                                <span class="mt-1 text-xs text-slate-500 dark:text-slate-400">Click to browse or drag and drop</span>
                                <div class="mt-3 inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white/70 px-3 py-1 text-[11px] font-medium text-slate-600 shadow-sm dark:border-slate-700 dark:bg-slate-900/40 dark:text-slate-300">
                                    <span>JPG, PNG, WebP</span>
                                    <span class="h-1 w-1 rounded-full bg-slate-300 dark:bg-slate-600"></span>
                                    <span>Up to 5MB</span>
                                </div>
                                <input 
                                    type="file" 
                                    wire:model="newImage" 
                                    accept="image/*" 
                                    class="hidden"
                                />
                            </div>
                        </label>
                        @error('newImage') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Add Image Button -->
                    @if($newImage)
                        <div class="mb-4">
                            <img src="{{ $newImage->temporaryUrl() }}" alt="Preview" class="w-full max-w-xs rounded-lg">
                            <button 
                                type="button" 
                                wire:click="addImage" 
                                class="btn btn-sm bg-green-600 text-white border-none hover:bg-green-700 mt-2"
                            >
                                <ion-icon name="checkmark-outline"></ion-icon>
                                Add Image
                            </button>
                        </div>
                    @endif

                    <!-- Display Uploaded Images -->
                    @if(count($images) > 0)
                        <div class="mb-4">
                            <p class="text-sm ui-muted mb-2">{{ count($images) }} image(s) added</p>
                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                                @foreach($images as $index => $image)
                                    <div class="relative group">
                                        <img src="{{ $image }}" alt="Vehicle image" class="w-full h-24 object-cover rounded-lg">
                                        <button 
                                            type="button" 
                                            wire:click="removeImage({{ $index }})" 
                                            class="absolute inset-0 bg-black/50 opacity-0 hover:opacity-100 transition-opacity rounded-lg flex items-center justify-center"
                                        >
                                            <ion-icon name="trash-outline" class="text-2xl text-red-500"></ion-icon>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @error('images') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Submit Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-white/10">
                    <button 
                        type="submit" 
                        class="btn-primary border-2 border-amber-400 flex-1"
                    >
                        <ion-icon name="checkmark-circle-outline" class="text-xl"></ion-icon>
                        Create Vehicle
                    </button>
                    <a 
                        href="{{ route('admin.vehicles.index') }}" 
                        class="btn-outline-slate flex-1"
                    >
                        <ion-icon name="close-circle-outline" class="text-xl"></ion-icon>
                        Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>

    @include('partials.footer')
</div>
