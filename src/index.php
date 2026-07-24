<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Arahkan semua request ke Laravel-style public/index.php
$publicIndex = __DIR__ . '/public/index.php';
if (file_exists($publicIndex)) {
    require_once $publicIndex;
    return;
}

echo "File public/index.php tidak ditemukan. Pastikan aplikasi sudah berada di folder public.";
