CREATE DATABASE IF NOT EXISTS portfolio;

USE portfolio;

CREATE TABLE kontak(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    email VARCHAR(100),
    pesan TEXT
);  