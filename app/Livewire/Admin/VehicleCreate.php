<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Vehicle;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;

#[Layout('layouts.app')]
#[Title('Create Vehicle - Admin')]
class VehicleCreate extends Component
{
    use WithFileUploads;
    #[Validate('required|unique:vehicles,vin_number')]
    public $vin_number = '';

    #[Validate('required|string|max:255')]
    public $make = '';

    #[Validate('required|string|max:255')]
    public $model = '';

    #[Validate('required|integer|min:2019|max:2026')]
    public $year_of_reg = 2024;

    #[Validate('required|integer|min:0')]
    public $mileage = 0;

    #[Validate('required|string')]
    public $engine_capacity = '';

    #[Validate('required|in:Automatic,Manual')]
    public $transmission = 'Automatic';

    #[Validate('required|in:Petrol,Diesel,Hybrid')]
    public $fuel_type = 'Petrol';

    #[Validate('required|string')]
    public $auction_grade = '4';

    #[Validate('required|numeric|min:0')]
    public $cif_price = 0;

    #[Validate('boolean')]
    public $is_available = true;

    #[Validate('array|max:5')]
    public $images = [];

    #[Validate('image|max:5120')] // 5MB max per image
    public $newImage = null;

    public function addImage()
    {
        $this->validate(['newImage' => 'required|image|max:5120']);
        
        if ($this->newImage) {
            $path = $this->newImage->store('vehicles', 'public');
            $this->images[] = Storage::url($path);
            $this->newImage = null;
        }
    }

    public function removeImage($index)
    {
        unset($this->images[$index]);
        $this->images = array_values($this->images);
    }

    public function save()
    {
        $this->validate();

        if ($this->newImage) {
            $this->addImage();
        }

        $vehicle = Vehicle::create([
            'vin_number' => $this->vin_number,
            'make' => $this->make,
            'model' => $this->model,
            'year_of_reg' => $this->year_of_reg,
            'mileage' => $this->mileage,
            'engine_capacity' => $this->engine_capacity,
            'transmission' => $this->transmission,
            'fuel_type' => $this->fuel_type,
            'auction_grade' => $this->auction_grade,
            'cif_price' => $this->cif_price,
            'slug' => Str::slug($this->make . ' ' . $this->model . ' ' . $this->year_of_reg . ' ' . $this->vin_number),
            'is_available' => $this->is_available,
            'images' => !empty($this->images) ? $this->images : null,
        ]);

        session()->flash('message', 'Vehicle created successfully!');

        return redirect()->route('admin.vehicles.index');
    }

    public function render()
    {
        return view('livewire.admin.vehicle-create');
    }
}
