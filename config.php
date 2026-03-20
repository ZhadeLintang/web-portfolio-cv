<?php
// config.php

$dataFile = __DIR__ . '/data/cv.json';

if (!file_exists($dataFile)) {
    die("File data CV tidak ditemukan.");
}

$jsonData = file_get_contents($dataFile);
$cv = json_decode($jsonData, true);

if (!$cv) {
    die("Data CV gagal dibaca.");
}
?>
