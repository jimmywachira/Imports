<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Vehicle;
use Livewire\WithPagination;
use Livewire\Attributes\Url;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
#[Title('Browse Import Cars - Xplore Car Imports')]
class Cars extends Component
{
    use WithPagination;

    #[Url]
    public $search = '';

    #[Url]
    public $make = '';

    #[Url]
    public $transmission = '';

    #[Url]
    public $fuelType = '';

    #[Url]
    public $sortBy = 'newest';

    #[Url]
    public $minPrice = '';

    #[Url]
    public $maxPrice = '';

    #[Url]
    public $minYear = '';

    #[Url]
    public $maxYear = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingMake()
    {
        $this->resetPage();
    }

    public function updatingTransmission()
    {
        $this->resetPage();
    }

    public function updatingFuelType()
    {
        $this->resetPage();
    }

    public function updatingSortBy()
    {
        $this->resetPage();
    }

    public function resetFilters()
    {
        $this->reset(['search', 'make', 'transmission', 'fuelType', 'sortBy', 'minPrice', 'maxPrice', 'minYear', 'maxYear']);
        $this->resetPage();
    }

    #[Computed]
    public function makes()
    {
        return Vehicle::query()
            ->select('make')
            ->distinct()
            ->orderBy('make')
            ->pluck('make');
    }

    public function render()
    {
        $query = Vehicle::query()->available();

        // Search filter
        if ($this->search) {
            $query->where(function ($q) {
                $q->where('make', 'like', '%' . $this->search . '%')
                    ->orWhere('model', 'like', '%' . $this->search . '%')
                    ->orWhere('vin_number', 'like', '%' . $this->search . '%');
            });
        }

        // Make filter
        if ($this->make) {
            $query->where('make', $this->make);
        }

        // Transmission filter
        if ($this->transmission) {
            $query->where('transmission', $this->transmission);
        }

        // Fuel type filter
        if ($this->fuelType) {
            $query->where('fuel_type', $this->fuelType);
        }

        // Price range filter
        if ($this->minPrice) {
            $query->where('cif_price', '>=', $this->minPrice);
        }
        if ($this->maxPrice) {
            $query->where('cif_price', '<=', $this->maxPrice);
        }

        // Year range filter
        if ($this->minYear) {
            $query->where('year_of_reg', '>=', $this->minYear);
        }
        if ($this->maxYear) {
            $query->where('year_of_reg', '<=', $this->maxYear);
        }

        // Sorting
        switch ($this->sortBy) {
            case 'price_low':
                $query->orderBy('cif_price', 'asc');
                break;
            case 'price_high':
                $query->orderBy('cif_price', 'desc');
                break;
            case 'year_new':
                $query->orderBy('year_of_reg', 'desc');
                break;
            case 'year_old':
                $query->orderBy('year_of_reg', 'asc');
                break;
            case 'mileage_low':
                $query->orderBy('mileage', 'asc');
                break;
            case 'newest':
            default:
                $query->latest();
                break;
        }

        $cars = $query->paginate(12);

        return view('livewire.cars', [
            'cars' => $cars,
        ])->layoutData([
            'description' => 'Browse premium Japanese import cars in Kenya with verified inspection reports, transparent CIF pricing, and KEBS compliance.',
            'keywords' => 'car imports, import cars, Japan car imports, Kenya car imports, Nairobi car imports, verified imports, CIF pricing',
        ]);
    }
}
