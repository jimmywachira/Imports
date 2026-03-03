<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Vehicle;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;

#[Layout('layouts.app')]
#[Title('Manage Vehicles - Admin')]
class VehicleManagement extends Component
{
    use WithPagination;

    #[Url]
    public $search = '';

    #[Url]
    public $status = 'all'; // all, available, sold

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingStatus()
    {
        $this->resetPage();
    }

    public function deleteVehicle($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();
        session()->flash('message', 'Vehicle deleted successfully.');
    }

    public function toggleAvailability($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->is_available = !$vehicle->is_available;
        $vehicle->save();

        session()->flash('message', 'Vehicle status updated.');
    }

    public function render()
    {
        $query = Vehicle::query();

        if ($this->search) {
            $query->where(function ($q) {
                $q->where('make', 'like', '%' . $this->search . '%')
                    ->orWhere('model', 'like', '%' . $this->search . '%')
                    ->orWhere('vin_number', 'like', '%' . $this->search . '%');
            });
        }

        if ($this->status === 'available') {
            $query->where('is_available', true);
        } elseif ($this->status === 'sold') {
            $query->where('is_available', false);
        }

        $vehicles = $query->latest()->paginate(15);

        return view('livewire.admin.vehicle-management', [
            'vehicles' => $vehicles,
        ]);
    }
}
