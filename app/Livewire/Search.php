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
#[Title('Premium Japanese Car Imports - Xplore Car Imports')]
class Search extends Component
{
    use WithPagination;

    #[Url]
    public $search = '';

    #[Url]
    public $make = '';

    #[Url]
    public $minPrice = '';

    #[Url]
    public $maxPrice = '';

    #[Url]
    public $year = 2019;

    #[Url]
    public $transmission = '';

    #[Url]
    public $fuelType = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingMake()
    {
        $this->resetPage();
    }

    public function resetFilters()
    {
        $this->reset(['search', 'make', 'minPrice', 'maxPrice', 'year', 'transmission', 'fuelType']);
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
                    ->orWhere('model', 'like', '%' . $this->search . '%');
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

        // Year filter
        $query->where('year_of_reg', '>=', $this->year);

        // Price range filter
        if ($this->minPrice) {
            $query->where('cif_price', '>=', $this->minPrice);
        }
        if ($this->maxPrice) {
            $query->where('cif_price', '<=', $this->maxPrice);
        }

        // Order by newest
        $query->latest();

        $cars = $query->paginate(12);

        return view('livewire.search', [
            'cars' => $cars,
        ])->layoutData([
            'description' => 'Search Japan direct import cars in Kenya by make, price, and year. KEBS compliant vehicles with inspection reports and shipping support.',
            'keywords' => 'car imports, import cars, Japan direct imports, car shipping, KEBS compliant cars, import car dealership',
        ]);
    }
}
