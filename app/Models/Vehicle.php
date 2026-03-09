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
        'cif_price_min',
        'cif_price_max',
        'slug',
        'images',
        'is_available',
    ];

    protected $casts = [
        'images' => 'array',
        'is_available' => 'boolean',
        'year_of_reg' => 'integer',
        'mileage' => 'integer',
        'cif_price_min' => 'decimal:2',
        'cif_price_max' => 'decimal:2',
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
        $minPrice = number_format($this->cif_price_min * 130, 0);
        $maxPrice = number_format($this->cif_price_max * 130, 0);
        return "KES {$minPrice} - {$maxPrice}";
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
        $images = $this->images;

        if (is_string($images)) {
            $images = json_decode($images, true) ?: [];
        }

        if (is_array($images) && count($images) > 0) {
            foreach ($images as $image) {
                if (empty($image) || !is_string($image)) {
                    continue;
                }

                return $this->normalizeImageUrl($image);
            }
        }

        return $this->fallbackImageUrls()[0];
    }

    public function getImageUrlsAttribute(): array
    {
        $images = $this->images;

        if (is_string($images)) {
            $images = json_decode($images, true) ?: [];
        }

        if (!is_array($images) || empty($images)) {
            return $this->fallbackImageUrls();
        }

        $urls = collect($images)
            ->filter(fn ($image) => is_string($image) && !empty($image))
            ->map(fn (string $image) => $this->normalizeImageUrl($image))
            ->values()
            ->all();

        if (empty($urls)) {
            return $this->fallbackImageUrls();
        }

        return $urls;
    }

    protected function fallbackImageUrls(): array
    {
        $seedBase = $this->slug ?: ($this->vin_number ?: (string) ($this->id ?? 'vehicle'));

        return [
            'https://picsum.photos/seed/' . rawurlencode($seedBase . '-1') . '/1200/800',
            'https://picsum.photos/seed/' . rawurlencode($seedBase . '-2') . '/1200/800',
            'https://picsum.photos/seed/' . rawurlencode($seedBase . '-3') . '/1200/800',
        ];
    }

    protected function normalizeImageUrl(string $image): string
    {
        // Normalize backslashes and trim whitespace
        $image = trim(str_replace('\\', '/', $image));

        // If already a full URL, return as-is
        if (str_starts_with($image, 'http://') || str_starts_with($image, 'https://')) {
            return $image;
        }

        // If already a storage URL, return as-is
        if (str_starts_with($image, '/storage/')) {
            return $image;
        }

        // Remove 'storage/' prefix and ensure leading slash
        if (str_starts_with($image, 'storage/')) {
            $image = ltrim(substr($image, 8), '/');
            return $this->publicStorageUrl($image);
        }

        // Handle /public/ prefix
        if (str_starts_with($image, '/public/')) {
            $image = ltrim(substr($image, 7), '/');
            return $this->publicStorageUrl($image);
        }

        // Handle public/ prefix
        if (str_starts_with($image, 'public/')) {
            $image = ltrim(substr($image, 7), '/');
            return $this->publicStorageUrl($image);
        }

        // If starts with /, remove it for consistency
        $image = ltrim($image, '/');

        // Default: treat as public disk file
        return $this->publicStorageUrl($image);
    }

    protected function publicStorageUrl(string $path): string
    {
        $path = ltrim($path, '/');

        if (app()->runningInConsole()) {
            return '/storage/' . $path;
        }

        $baseUrl = rtrim(request()->getBaseUrl(), '/');
        return ($baseUrl !== '' ? $baseUrl : '') . '/storage/' . $path;
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
        $query->where('cif_price_max', '>=', $minPrice);
        if ($maxPrice) {
            $query->where('cif_price_min', '<=', $maxPrice);
        }
        return $query;
    }
}
