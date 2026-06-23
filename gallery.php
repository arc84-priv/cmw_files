<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$dir = __DIR__ . '/bilder_2026/';
$allowed = ['jpg','jpeg','png','webp'];
$files = [];

if (is_dir($dir)) {
    foreach (scandir($dir) as $file) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, $allowed)) {
            $files[] = 'bilder_2026/' . $file;
        }
    }
    sort($files);
}

echo json_encode($files);
