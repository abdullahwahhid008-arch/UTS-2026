<?php
namespace App\Models;

class ProyekModel {
    private $db;

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

    // Mengambil data laporan es teh
    public function getLaporanUtama() {
        $query = "SELECT * FROM laporan_proyek WHERE judul LIKE '%Es Teh%' LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Fungsi Baru: Mengupdate progress laporan dari Panel Admin
    public function updateLaporan($id, $judul, $deskripsi, $status) {
        $query = "UPDATE laporan_proyek 
                  SET judul = :judul, deskripsi = :deskripsi, progress_status = :status 
                  WHERE id = :id";
        
        $stmt = $this->db->prepare($query);
        
        // Bind data untuk keamanan dari SQL Injection
        $stmt->bindParam(':judul', $judul);
        $stmt->bindParam(':deskripsi', $deskripsi);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':id', $id);
        
        return $stmt->execute();
    }
}