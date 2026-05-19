<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Langsung panggil halaman portofolio tanpa memutar lewat database dulu demi keamanan awal
if (file_exists('app/views/portfolio.php')) {
    require_once 'app/views/portfolio.php';
} else {
    echo "File portfolio.php tidak ditemukan di folder app/views/ !";
}