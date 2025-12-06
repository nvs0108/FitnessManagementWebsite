<?php
session_start();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$path = ltrim($uri, '/');

// If nothing requested, go to index.php
if ($path === '' || $path === 'api' || $path === 'api/') {
    $path = 'index.php';
}

// Security: don't allow going up directories
$path = str_replace('..', '', $path);

// Full file path in project root
$fullPath = __DIR__ . '/../' . $path;

// If the requested file exists in the root, include it
if (file_exists($fullPath) && is_file($fullPath)) {
    require $fullPath;
} else {
    $altPath = $fullPath . '.php';
    if (file_exists($altPath) && is_file($altPath)) {
        require $altPath;
    } else {
        http_response_code(404);
        echo "404 - Page not found";
    }
}
