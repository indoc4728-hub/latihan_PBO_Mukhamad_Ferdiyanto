<?php
// config/Database.php

class Database {
    // Pengaturan koneksi database
    private $host = "localhost";
    private $username = "root";
    private $password = ""; // Kosongkan kalau pakai XAMPP bawaan
    private $db_name = "db_latihan_pbo_trpl1a_mukhamad_ferdiyanto"; // <-- GANTI DENGAN NAMA DATABASE BARU
    public $conn;

    // Fungsi yang otomatis berjalan saat objek Database dibuat
    public function __construct() {
        $this->conn = null;
        
        try {
            // Mengoneksikan ke MySQL menggunakan driver PDO
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            
            // Mengatur agar jika ada error SQL, PHP akan melemparkan Exception (pesan error yang jelas)
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Mengatur default hasil fetch data menjadi Array Asosiatif (opsional, biar gampang dipanggil)
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
        } catch(PDOException $exception) {
            echo "Waduh, Koneksi database gagal nih: " . $exception->getMessage();
        }
    }
}