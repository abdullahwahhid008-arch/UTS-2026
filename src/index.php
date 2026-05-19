<?php
// Kode Otomatis Pembuat Database & Tabel Proyek Es Teh
$host = "db"; 
$username = "root";

// Kita tes 3 password bawaan Docker paling umum dalam sekali jalan
$passwords = ["rootpassword", "root", ""];
$pdo = null;

foreach ($passwords as $pwd) {
    try {
        $pdo = new PDO("mysql:host=$host", $username, $pwd);
        $password_asli = $pwd;
        break; 
    } catch (PDOException $e) {
        continue;
    }
}

if (!$pdo) {
    die("Gagal terhubung ke MySQL. Cek kembali service database di docker-compose.yml");
}

try {
    // 1. Buat Database
    $pdo->exec("CREATE DATABASE IF NOT EXISTS portofolio_db;");
    $pdo->exec("USE portofolio_db;");

    // 2. Buat Tabel
    $pdo->exec("CREATE TABLE IF NOT EXISTS final_projects (
        id INT AUTO_INCREMENT PRIMARY KEY,
        judul VARCHAR(255) NOT NULL,
        deskripsi_singkat TEXT NOT NULL,
        analisis_masalah TEXT NOT NULL,
        fitur_utama TEXT NOT NULL,
        tech_stack VARCHAR(255) NOT NULL,
        diagram_url VARCHAR(255) NOT NULL,
        progress_status ENUM('Proposal', 'Analisis Sistem', 'Perancangan', 'Implementasi', 'Selesai') DEFAULT 'Proposal'
    );");

    // 3. Masukkan Data Awal Proyek Es Teh
    $stmt = $pdo->prepare("INSERT INTO final_projects (id, judul, deskripsi_singkat, analisis_masalah, fitur_utama, tech_stack, diagram_url, progress_status) 
        VALUES (1, :judul, :deskripsi, :analisis, :fitur, :stack, :diagram, 'Proposal')
        ON DUPLICATE KEY UPDATE judul=judul;");
        
    $stmt->execute([
        ':judul' => 'Sistem Pemesanan Es Teh dan Minuman Kekinian Berbasis Web',
        ':deskripsi' => 'Platform order management berbasis web responsif mendigitalisasi pemesanan via QR-Code di meja, mempercepat antrean dapur barista, dan mengotomatisasi pemotongan inventaris.',
        ':analisis' => 'Sistem manual memicu penumpukan antrean pada peak hours, pencatatan manual rentan human error, dan sulitnya memantau sisa stok boba/gula cair secara real-time.',
        ':fitur' => 'Scan QR Code Meja, Kustomisasi Gula & Es, Monitor Dapur Barista, Potong Stok Otomatis, Dashboard Omzet Penjualan',
        ':stack' => 'HTML5, CSS3, Bootstrap 5, JavaScript, PHP MVC, MySQL',
        ':diagram' => 'assets/img/diagram_sistem.png'
    ]);

    echo "<h2 style='color:green; text-align:center; margin-top:50px;'>🎉 HORE! Database & Data Proyek Es Teh Berhasil Dibuat!</h2>";
    echo "<p style='text-align:center;'>Password database asli Anda adalah: <b>'$password_asli'</b></p>";
    echo "<p style='text-align:center; color:red;'>Silakan catat password di atas, lalu kembalikan isi file index.php ke kode MVC sebelumnya.</p>";

} catch (PDOException $e) {
    die("Error saat membuat tabel: " . $e->getMessage());
}