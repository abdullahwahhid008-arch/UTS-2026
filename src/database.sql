CREATE DATABASE IF NOT EXISTS `portofolio_db`;
USE `portofolio_db`;

CREATE TABLE IF NOT EXISTS `final_projects` (
  `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `judul` VARCHAR(255) NOT NULL,
  `deskripsi_singkat` TEXT NOT NULL,
  `analisis_masalah` TEXT NOT NULL,
  `fitur_utama` TEXT NOT NULL,
  `tech_stack` TEXT NOT NULL,
  `progress_status` VARCHAR(100) NOT NULL DEFAULT 'Draft',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `nama` VARCHAR(150) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `pesan` TEXT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `final_projects` (`judul`, `deskripsi_singkat`, `analisis_masalah`, `fitur_utama`, `tech_stack`, `progress_status`)
VALUES
('Sistem Pemesanan Es Teh dan Minuman Kekinian Berbasis Web', 'Aplikasi web untuk memesan es teh dan minuman kekinian dengan manajemen menu, keranjang, dan laporan pesanan.', 'Penjual minuman kekinian kesulitan mengelola pesanan manual dan pelanggan membutuhkan pengalaman pemesanan online yang cepat dan akurat.', 'Manajemen menu, Checkout pesanan, Status pesanan, Dashboard admin, Kontak pelanggan', 'PHP, MySQL, Bootstrap, MVC, HTML, CSS', 'Draft');
