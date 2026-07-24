<?php
namespace App\Config;

use PDO;
use PDOException;

class Database {
    private $host = 'portfolio-es-teh-db'; // Jika error, nanti bisa diganti ke 'mysql_db' sesuai nama container docker ps-mu
    private $db_name = 'portfolio';
    private $username = 'root';
    private $password = 'root'; 
    private $conn;

    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name, 
                $this->username, 
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Koneksi Database Gagal: " . $e->getMessage();
        }
        return $this->conn;
    }
}