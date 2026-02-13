<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('vin_number')->unique();
            $table->string('make'); // e.g., Toyota
            $table->string('model'); // e.g., Vitz
            $table->year('year_of_reg'); // Must be >= 2019
            $table->integer('mileage');
            $table->string('engine_capacity');
            $table->string('transmission'); // Automatic/Manual
            $table->string('fuel_type');
            $table->string('auction_grade'); // e.g., 4.5
            $table->decimal('cif_price', 12, 2); // Price in USD or KES
            $table->string('slug')->unique(); // For SEO: /cars/toyota-vitz-2020-import
            $table->json('images')->nullable();
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
