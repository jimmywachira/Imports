<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$vehicle = App\Models\Vehicle::whereNotNull('images')->first();

echo "=== Vehicle Image Debug ===\n\n";
echo "DB images column:\n";
var_dump($vehicle->images);
echo "\n";

echo "Primary image URL:\n";
var_dump($vehicle->primary_image);
echo "\n";

echo "All image URLs:\n";
var_dump($vehicle->image_urls);
echo "\n";

echo "File exists check:\n";
if (!empty($vehicle->images) && is_array($vehicle->images)) {
    $firstImage = $vehicle->images[0];
    $storagePath = storage_path('app/public/' . $firstImage);
    echo "Storage path: $storagePath\n";
    echo "File exists: " . (file_exists($storagePath) ? "YES" : "NO") . "\n";
}
