<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class CarDetails extends Component
{
    public Vehicle $car;
    public $selectedImage = 0;

    public function mount($slug)
    {
        try {
            $this->car = Vehicle::where('slug', $slug)->firstOrFail();
            $this->selectedImage = 0;
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function selectImage($index)
    {
        $this->selectedImage = $index;
    }

    public function nextImage()
    {
        $images = $this->car->images ?? [];
        if (empty($images)) return;
        
        $this->selectedImage = ($this->selectedImage + 1) % count($images);
    }

    public function previousImage()
    {
        $images = $this->car->images ?? [];
        if (empty($images)) return;
        
        $this->selectedImage = $this->selectedImage > 0 
            ? $this->selectedImage - 1 
            : count($images) - 1;
    }

    public function render()
    {
        $description = sprintf(
            'View %s (%s) with %s transmission, %s engine, and CIF price %s. Available for import in Kenya with inspection and shipping support.',
            $this->car->full_name,
            $this->car->year_of_reg,
            $this->car->transmission,
            $this->car->engine_capacity,
            $this->car->formatted_price
        );

        // Get similar cars (same make, different model or similar price range)
        $similarCars = Vehicle::query()
            ->available()
            ->where('id', '!=', $this->car->id)
            ->where(function ($query) {
                $query->where('make', $this->car->make)
                    ->orWhereBetween('cif_price', [
                        $this->car->cif_price * 0.8,
                        $this->car->cif_price * 1.2
                    ]);
            })
            ->limit(3)
            ->get();

        return view('livewire.car-details', [
            'similarCars' => $similarCars,
            'pageTitle' => $this->car->full_name . ' - Xplore Car Imports',
        ])->layoutData([
            'title' => $this->car->full_name . ' - Xplore Car Imports',
            'description' => $description,
            'keywords' => 'import cars, Japan car imports, ' . $this->car->make . ', ' . $this->car->model . ', CIF price, Kenya car imports',
        ]);
    }
}
