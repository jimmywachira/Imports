<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $vehicleOptions = [
            ['make' => 'Toyota', 'model' => 'Vitz'],
            ['make' => 'Toyota', 'model' => 'Land Cruiser Prado'],
            ['make' => 'Honda', 'model' => 'Fit'],
            ['make' => 'Toyota', 'model' => 'Corolla Axio'],
            ['make' => 'Toyota', 'model' => 'Corolla Fielder'],
            ['make' => 'Toyota', 'model' => 'Hiace'],
            ['make' => 'Subaru', 'model' => 'Forester'],
            ['make' => 'Nissan', 'model' => 'Note'],
            ['make' => 'Toyota', 'model' => 'Allion'],
            ['make' => 'Toyota', 'model' => 'Land Cruiser'],
            ['make' => 'Nissan', 'model' => 'X-Trail'],
            ['make' => 'Mazda', 'model' => 'CX-5'],
            ['make' => 'Mazda', 'model' => 'Demio'],
            ['make' => 'Toyota', 'model' => 'Harrier'],
            ['make' => 'Toyota', 'model' => 'RAV4'],
            ['make' => 'Daihatsu', 'model' => 'Mira'],
            ['make' => 'Mercedes-Benz', 'model' => 'C-Class'],
            ['make' => 'Mercedes-Benz', 'model' => 'GLE'],
            ['make' => 'BMW', 'model' => '3 Series'],
            ['make' => 'BMW', 'model' => '5 Series'],
            ['make' => 'Land Rover', 'model' => 'Range Rover'],
            ['make' => 'Lexus', 'model' => 'RX'],
            ['make' => 'Lexus', 'model' => 'LX'],
            ['make' => 'Nissan', 'model' => 'Dualis (Qashqai)'],
            ['make' => 'Honda', 'model' => 'CR-V'],
            ['make' => 'Subaru', 'model' => 'Outback'],
            ['make' => 'Toyota', 'model' => 'Vanguard'],
            ['make' => 'Suzuki', 'model' => 'Swift'],
            ['make' => 'Toyota', 'model' => 'Premio'],
            ['make' => 'Nissan', 'model' => 'Sylphy'],
            ['make' => 'Toyota', 'model' => 'Passo'],
        ];

        $selected = $this->faker->randomElement($vehicleOptions);
        $yearOfReg = $this->faker->numberBetween(2019, 2026);
        $vin = strtoupper($this->faker->bothify('?????????????????'));

        return [
            'vin_number' => $vin,
            'make' => $selected['make'],
            'model' => $selected['model'],
            'year_of_reg' => $yearOfReg,
            'mileage' => $this->faker->numberBetween(5000, 90000),
            'engine_capacity' => number_format($this->faker->randomFloat(1, 0.7, 5.0), 1) . 'L',
            'transmission' => $this->faker->randomElement(['Automatic', 'Manual']),
            'fuel_type' => $this->faker->randomElement(['Petrol', 'Diesel', 'Hybrid']),
            'auction_grade' => $this->faker->randomElement(['3', '3.5', '4', '4.5', '5']),
            'cif_price' => $this->faker->randomFloat(2, 8000, 65000),
            'slug' => Str::slug($selected['make'] . ' ' . $selected['model'] . ' ' . $yearOfReg . ' ' . $vin),
            'images' => null,
            'is_available' => $this->faker->boolean(80),
        ];
    }
}
