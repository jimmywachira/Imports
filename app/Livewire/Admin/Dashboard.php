<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Vehicle;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
#[Title('Admin Dashboard - Xplore Car Imports')]
class Dashboard extends Component
{
    public function render()
    {
        $stats = [
            'total_vehicles' => Vehicle::count(),
            'available_vehicles' => Vehicle::where('is_available', true)->count(),
            'sold_vehicles' => Vehicle::where('is_available', false)->count(),
            'recent_vehicles' => Vehicle::latest()->take(5)->get(),
        ];

        return view('livewire.admin.dashboard', $stats);
    }
}
