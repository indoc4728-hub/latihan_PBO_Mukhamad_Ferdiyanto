<?php
// Tahap 4: Implementasi Subclass (Tiket Velvet)
// File: TiketVelvet.php

require_once __DIR__ . '/Tiket.php';

class TiketVelvet extends Tiket {
    // Properti tambahan khusus Tiket Velvet (Terenkapsulasi)
    private $bantalSelimutPack; // Contoh: "Premium Pack" atau "Standard Pack"
    private $layananButler;     // Contoh: "Tersedia" atau "Tidak Tersedia"

    // Constructor Kelas Anak
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar, $bantalSelimutPack, $layananButler) {
        // Memanggil constructor dari kelas induk (Tiket)
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar);
        
        // Mengisi properti tambahan khusus kelas anak
        $this->bantalSelimutPack = $bantalSelimutPack;
        $this->layananButler = $layananButler;
    }

    // ==========================================
    // GETTER AND SETTER (Enkapsulasi Properti Tambahan)
    // ==========================================
    
    public function getBantalSelimutPack() {
        return $this->bantalSelimutPack;
    }
    public function setBantalSelimutPack($bantalSelimutPack) {
        $this->bantalSelimutPack = $bantalSelimutPack;
    }

    public function getLayananButler() {
        return $this->layananButler;
    }
    public function setLayananButler($layananButler) {
        $this->layananButler = $layananButler;
    }

    // ==========================================
    // IMPLEMENTASI METHOD ABSTRAK
    // ==========================================

    // 1. Mengimplementasikan hitungTotalHarga()
    public function hitungTotalHarga() {
        // Misal: Studio Velvet ada tambahan biaya kemewahan sebesar 50.000 per kursi
        $biayaPremiumVelvet = 50000;
        $hargaPerKursi = $this->getHargaDasar() + $biayaPremiumVelvet;
        
        return $hargaPerKursi * $this->getJumlahKursi();
    }

    // 2. Mengimplementasikan tampilkanInfoFasilitas()
    public function tampilkanInfoFasilitas() {
        return "Fasilitas Tiket Velvet: Sofa Bed Mewah, Fasilitas Kamar: " . $this->bantalSelimutPack . ", Pelayanan Butler Pribadi: " . $this->layananButler . ".";
    }
}