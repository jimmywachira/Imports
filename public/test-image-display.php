<!DOCTYPE html>
<html>
<head>
    <title>Image Test</title>
</head>
<body>
    <h1>Database Image Display Test</h1>
    
    <?php
    require __DIR__.'/../vendor/autoload.php';
    $app = require_once __DIR__.'/../bootstrap/app.php';
    $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();
    
    $vehicle = App\Models\Vehicle::whereNotNull('images')->first();
    
    if ($vehicle) {
        echo "<h2>Vehicle: {$vehicle->full_name}</h2>";
        echo "<p><strong>DB Image Path:</strong> " . htmlspecialchars(json_encode($vehicle->images)) . "</p>";
        echo "<p><strong>Generated URL:</strong> " . htmlspecialchars($vehicle->primary_image) . "</p>";
        
        $imagePath = $vehicle->primary_image;
        echo "<h3>Testing Image Display:</h3>";
        echo "<img src='{$imagePath}' alt='Vehicle Image' style='max-width: 500px; border: 2px solid red;' onerror='this.style.border=\"2px solid red\"; this.alt=\"IMAGE FAILED TO LOAD: {$imagePath}\";'>";
        
        echo "<h3>Debug Info:</h3>";
        echo "<p>Current URL: " . (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'N/A') . "</p>";
        echo "<p>Document Root: " . (isset($_SERVER['DOCUMENT_ROOT']) ? $_SERVER['DOCUMENT_ROOT'] : 'N/A') . "</p>";
        
        $fullPath = __DIR__ . $imagePath;
        echo "<p>Full file path: {$fullPath}</p>";
        echo "<p>File exists at full path: " . (file_exists($fullPath) ? 'YES' : 'NO') . "</p>";
        
        $storagePath = dirname(__DIR__) . '/storage/app/public/' . $vehicle->images[0];
        echo "<p>Storage path: {$storagePath}</p>";
        echo "<p>File exists at storage: " . (file_exists($storagePath) ? 'YES' : 'NO') . "</p>";
    } else {
        echo "<p>No vehicles with images found in database.</p>";
    }
    ?>
</body>
</html>
