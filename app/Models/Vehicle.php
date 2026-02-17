<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /** @use HasFactory<\Database\Factories\VehicleFactory> */
    use HasFactory;

    protected $fillable = [
        'vin_number',
        'make',
        'model',
        'year_of_reg',
        'mileage',
        'engine_capacity',
        'transmission',
        'fuel_type',
        'auction_grade',
        'cif_price',
        'slug',
        'images',
        'is_available',
    ];

    use \Illuminate\Database\Eloquent\Concerns\HasUuids;

    protected $casts = [
        'images' => 'array',
        'is_available' => 'boolean',
        'year_of_reg' => 'integer',
        'mileage' => 'integer',
        'cif_price' => 'decimal:2',
    ];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Get the formatted price with currency
     */
    public function getFormattedPriceAttribute(): string
    {
        return 'KES ' . number_format($this->cif_price * 130, 0);
    }

    /**
     * Get the formatted mileage
     */
    public function getFormattedMileageAttribute(): string
    {
        return number_format($this->mileage) . ' km';
    }

    /**
     * Get the full vehicle name
     */
    public function getFullNameAttribute(): string
    {
        return "{$this->year_of_reg} {$this->make} {$this->model}";
    }

    /**
     * Get the primary image or a placeholder
     */
    public function getPrimaryImageAttribute(): string
    {
        if ($this->images && is_array($this->images) && count($this->images) > 0) {
            return $this->images[0];
        }
        return "https://picsum.photos/800/600?random={$this->id}";
    }

    /**
     * Scope a query to only include available vehicles
     */
    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }

    /**
     * Scope a query to filter by year range
     */
    public function scopeYearRange($query, $minYear, $maxYear = null)
    {
        $query->where('year_of_reg', '>=', $minYear);
        if ($maxYear) {
            $query->where('year_of_reg', '<=', $maxYear);
        }
        return $query;
    }

    /**
     * Scope a query to filter by price range
     */
    public function scopePriceRange($query, $minPrice, $maxPrice = null)
    {
        $query->where('cif_price', '>=', $minPrice);
        if ($maxPrice) {
            $query->where('cif_price', '<=', $maxPrice);
        }
        return $query;
    }
}
