<div class="min-h-screen bg-linear-to-br from-slate-100 via-white to-slate-100 text-slate-900 dark:from-blue-950 dark:via-blue-900 dark:to-blue-800 dark:text-blue-100">
    <div class="max-w-7xl mx-auto px-6 py-12">
        <header class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-amber-400 via-yellow-300 to-lime-200 text-blue-900 shadow-2xl">
            <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,_rgba(0,0,0,0.5),_transparent_60%)]"></div>
            <div class="relative p-8 md:p-12">
                <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
                    <div class="space-y-3">
                        <p class="uppercase tracking-[0.2em] text-xs font-semibold">Japan Direct Imports</p>
                        <h1 class="text-4xl md:text-5xl font-extrabold">Find Your Dream Import</h1>
                        <p class="text-blue-800 max-w-2xl">Verified 2019+ Japanese vehicles, clean history, and transparent CIF pricing tailored for the Kenyan market.</p>
                    </div>
                    <div class="grid grid-cols-3 gap-3 text-center">
                        <div class="rounded-2xl bg-white/80 p-4">
                            <p class="text-xs font-semibold text-blue-600">Rule</p>
                            <p class="text-lg font-bold">8-Year</p>
                        </div>
                        <div class="rounded-2xl bg-white/80 p-4">
                            <p class="text-xs font-semibold text-blue-600">Stock</p>
                            <p class="text-lg font-bold">Daily</p>
                        </div>
                        <div class="rounded-2xl bg-white/80 p-4">
                            <p class="text-xs font-semibold text-blue-600">Support</p>
                            <p class="text-lg font-bold">24/7</p>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex flex-wrap items-center gap-4">
                    <span class="badge badge-neutral">Auctions</span>
                    <span class="badge badge-neutral">Inspection Reports</span>
                    <span class="badge badge-neutral">Local Compliance</span>
                    <span class="badge badge-neutral">Fast Clearing</span>
                </div>
            </div>
        </header>

        <div class="mt-10 grid grid-cols-1 lg:grid-cols-[320px,1fr] gap-8">
            <aside class="rounded-3xl bg-white/10 backdrop-blur border border-white/10 shadow-xl p-6 h-fit">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-bold">Search Filters</h3>
                    <span class="badge badge-outline">Live</span>
                </div>

                <div class="form-control w-full mb-5">
                    <label class="label"><span class="label-text text-blue-200">Model Name</span></label>
                    <input wire:model.live="search" type="text" placeholder="e.g. Harrier" class="input input-bordered w-full bg-blue-900/70 border-blue-700 text-blue-100" />
                </div>

                <div class="form-control w-full mb-5">
                    <label class="label"><span class="label-text text-blue-200">Make</span></label>
                    <input wire:model.live="make" type="text" placeholder="e.g. Toyota" class="input input-bordered w-full bg-blue-900/70 border-blue-700 text-blue-100" />
                </div>

                <div class="form-control w-full mb-5">
                    <label class="label"><span class="label-text text-blue-200">Min Year (KEBS 2026 Rule)</span></label>
                    <select wire:model.live="year" class="select select-bordered bg-blue-900/70 border-blue-700 text-blue-100">
                        @foreach(range(2019, 2026) as $y)
                            <option value="{{ $y }}">{{ $y }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-control w-full mb-5">
                    <label class="label"><span class="label-text text-blue-200">Price Range (KES)</span></label>
                    <div class="grid grid-cols-2 gap-3">
                        <input wire:model.live="minPrice" type="number" min="0" step="10000" placeholder="Min" class="input input-bordered w-full bg-blue-900/70 border-blue-700 text-blue-100" />
                        <input wire:model.live="maxPrice" type="number" min="0" step="10000" placeholder="Max" class="input input-bordered w-full bg-blue-900/70 border-blue-700 text-blue-100" />
                    </div>
                </div>

                <div class="rounded-2xl bg-blue-900/70 border border-blue-800 p-4">
                    <p class="text-xs text-blue-400">Showing results for compliant imports only.</p>
                    <p class= font-semibold">Tip: Try popular models like Vitz, Harrier, or CX-5.</p>
                </div>
            </aside>

            <main>
                <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                    <div>
                        <h2 class="text-2xl font-bold">Available Imports</h2>
                        <p class="text-blue-300">Curated from trusted auctions and partner yards.</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="btn-outline-sky">Newest</button>
                        <button class="btn-outline-sky">Lowest Price</button>
                        <button class="btn-outline-sky">Top Grade</button>
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                    @foreach($cars as $car)
                        <div class="group rounded-3xl bg-white/10 border border-white/10 overflow-hidden shadow-lg hover:-tranblue-y-1 hover:shadow-2xl transition">
                            <div class="relative">
                                <img class="h-44 w-full object-cover" src="https://picsum.photos/600/360?random={{ $car->id }}" alt="{{ $car->model }}" loading="lazy" />
                                <div class="absolute top-3 left-3 flex items-center gap-2">
                                    <span class="badge badge-accent">{{ $car->auction_grade }} Grade</span>
                                    <span class="badge badge-outline text-blue-100">{{ $car->fuel_type }}</span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-semibold">{{ $car->year_of_reg }} {{ $car->make }} {{ $car->model }}</h3>
                                <p class="text-blue-300">{{ number_format($car->mileage) }} km · {{ $car->transmission }} · {{ $car->engine_capacity }}</p>
                                <div class="mt-4 flex items-center justify-between">
                                    <p class="text-xl font-bold text-amber-300">KES {{ number_format($car->cif_price) }}</p>
                                    <button class="btn-pill-amber-soft">View Details</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="mt-8">
                    {{ $cars->links() }}
                </div>
            </main>
        </div>
    </div>

    @include('partials.footer')
</div>