<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $vehicles = [
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

        $perModel = 3;

        foreach ($vehicles as $vehicle) {
            Vehicle::factory()
                ->count($perModel)
                ->state($vehicle)
                ->create();
        }
    }
}
