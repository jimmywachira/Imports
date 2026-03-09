<?php

$target = __DIR__ . '/storage/app/public';
$link = __DIR__ . '/public/storage';

// Remove existing link/directory if it exists
if (file_exists($link)) {
    if (is_link($link)) {
        unlink($link);
    } elseif (is_dir($link)) {
        rmdir($link);
    }
}

// Try to create symlink
if (symlink($target, $link)) {
    echo "✓ Storage link created successfully!\n";
    echo "  Target: $target\n";
    echo "  Link: $link\n";
} else {
    echo "✗ Failed to create storage link.\n";
    echo "  Trying alternative method...\n";
    
    // Alternative: create junction on Windows
    $cmd = 'mklink /J "' . $link . '" "' . $target . '"';
    exec($cmd, $output, $return);
    
    if ($return === 0) {
        echo "✓ Storage junction created successfully!\n";
    } else {
        echo "✗ Failed. Please run this command as Administrator:\n";
        echo "  $cmd\n";
        echo "\nOr copy files manually from:\n";
        echo "  $target\n";
        echo "To:\n";
        echo "  $link\n";
    }
}

// Verify the link works
if (file_exists($link)) {
    $testFile = $link . '/vehicles';
    if (file_exists($testFile)) {
        echo "\n✓ Link is working! Vehicles folder is accessible.\n";
    } else {
        echo "\n⚠ Link exists but vehicles folder not accessible.\n";
    }
}
