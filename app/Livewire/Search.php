<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Vehicle;
use Livewire\WithPagination;


class Search extends Component
{
     use WithPagination;

    public $search = '';
    public $make = '';
    public $minPrice = 0;
    public $maxPrice = 10000000;
    public $year = 2019;

    public function render()
    {
        $cars = Vehicle::query()
            ->when($this->search, fn($q) => $q->where('model', 'like', '%' . $this->search . '%'))
            ->when($this->make, fn($q) => $q->where('make', $this->make))
            ->where('year_of_reg', '>=', $this->year)
            ->whereBetween('cif_price', [$this->minPrice, $this->maxPrice])
            ->paginate(12);

        return view('livewire.search', [
            'cars' => $cars
        ]);
    }
}
