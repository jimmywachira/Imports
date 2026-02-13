@extends('layouts.app', ['title' => 'Inspection Reports - Xplore Car Imports'])

@section('content')
<div class="bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800 text-slate-100 min-h-screen">
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="text-center mb-16">
            <p class="uppercase tracking-[0.2em] text-xs font-semibold text-amber-400 mb-4">Quality Assurance</p>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Inspection Reports</h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto">Every vehicle undergoes rigorous third-party inspection. Full transparency with detailed reports, photos, and mechanical assessments.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="checkmark-circle-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Comprehensive Check</h3>
                <p class="text-slate-300 text-sm">Engine, transmission, suspension, electrical systems, and bodywork thoroughly inspected.</p>
            </div>

            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="camera-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">HD Photos & Videos</h3>
                <p class="text-slate-300 text-sm">360° views, close-ups, and videos of key components for complete transparency.</p>
            </div>

            <div class="rounded-2xl bg-white/10 border border-white/10 backdrop-blur p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="document-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Written Report</h3>
                <p class="text-slate-300 text-sm">Detailed PDF report with findings, ratings, and recommendations delivered to you.</p>
            </div>
        </div>

        <div class="rounded-3xl bg-white/10 border border-white/10 backdrop-blur p-8 md:p-12 mb-16">
            <h2 class="text-3xl font-bold mb-8">What's Included in Our Reports</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <ion-icon name="checkmark-outline" class="text-amber-400 text-2xl flex-shrink-0"></ion-icon>
                        <div>
                            <h3 class="font-semibold">Exterior Condition</h3>
                            <p class="text-slate-300 text-sm">Paint, body damage, rust, metal repairs</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <ion-icon name="checkmark-outline" class="text-amber-400 text-2xl flex-shrink-0"></ion-icon>
                        <div>
                            <h3 class="font-semibold">Engine & Transmission</h3>
                            <p class="text-slate-300 text-sm">Performance, oil condition, leaks</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <ion-icon name="checkmark-outline" class="text-amber-400 text-2xl flex-shrink-0"></ion-icon>
                        <div>
                            <h3 class="font-semibold">Electrical Systems</h3>
                            <p class="text-slate-300 text-sm">Lighting, electronics, battery condition</p>
                        </div>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <ion-icon name="checkmark-outline" class="text-amber-400 text-2xl flex-shrink-0"></ion-icon>
                        <div>
                            <h3 class="font-semibold">Suspension & Brakes</h3>
                            <p class="text-slate-300 text-sm">Wear, alignment, brake condition</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <ion-icon name="checkmark-outline" class="text-amber-400 text-2xl flex-shrink-0"></ion-icon>
                        <div>
                            <h3 class="font-semibold">Interior & Comfort</h3>
                            <p class="text-slate-300 text-sm">Upholstery, dashboard, climate control</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <ion-icon name="checkmark-outline" class="text-amber-400 text-2xl flex-shrink-0"></ion-icon>
                        <div>
                            <h3 class="font-semibold">Overall Grading</h3>
                            <p class="text-slate-300 text-sm">Based on Japanese auction standards (1-5)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rounded-3xl bg-gradient-to-r from-amber-400 to-yellow-300 text-slate-900 p-8 shadow-xl">
            <h2 class="text-3xl font-bold mb-4">Ready to View Inspection Reports?</h2>
            <p class="mb-6 text-slate-800">Browse our car inventory to see available vehicles with their detailed inspection reports.</p>
            <a href="{{ route('cars') }}" class="btn btn-lg bg-slate-900 text-amber-300 border-none hover:bg-slate-800">Browse Cars</a>
        </div>
    </div>

    @include('partials.footer')
</div>
@endsection
