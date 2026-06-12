<?php
// Tahap 4: Implementasi Subclass (Tiket IMAX)
// File: TiketIMAX.php

require_once __DIR__ . '/Tiket.php';

class TiketIMAX extends Tiket {
    // Properti tambahan khusus Tiket IMAX (Terenkapsulasi)
    private $kacamata3d;        // Contoh: "Include" atau "Tidak"
    private $efekGerakFitur;    // Contoh: "4DX Active", "Standard IMAX Vibration"

    // Constructor Kelas Anak
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar, $kacamata3d, $efekGerakFitur) {
        // Memanggil constructor dari kelas induk (Tiket)
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar);
        
        // Mengisi properti tambahan khusus kelas anak
        $this->kacamata3d = $kacamata3d;
        $this->efekGerakFitur = $efekGerakFitur;
    }

    // ==========================================
    // GETTER AND SETTER (Enkapsulasi Properti Tambahan)
    // ==========================================
    
    public function getKacamata3d() {
        return $this->kacamata3d;
    }
    public function setKacamata3d($kacamata3d) {
        $this->kacamata3d = $kacamata3d;
    }

    public function getEfekGerakFitur() {
        return $this->efekGerakFitur;
    }
    public function setEfekGerakFitur($efekGerakFitur) {
        $this->efekGerakFitur = $efekGerakFitur;
    }

    // ==========================================
    // IMPLEMENTASI METHOD ABSTRAK
    // ==========================================

    // 1. Mengimplementasikan hitungTotalHarga()
    public function hitungTotalHarga() {
        // Misal: Studio IMAX ada tambahan biaya teknologi sebesar 25.000 per kursi
        $biayaTambahanIMAX = 25000;
        $hargaPerKursi = $this->getHargaDasar() + $biayaTambahanIMAX;
        
        return $hargaPerKursi * $this->getJumlahKursi();
    }

    // 2. Mengimplementasikan tampilkanInfoFasilitas()
    public function tampilkanInfoFasilitas() {
        return "Fasilitas Tiket IMAX: Layar Lebar IMAX Geometris, Layanan Kacamata 3D: " . $this->kacamata3d . ", dengan Fitur Efek Gerak: " . $this->efekGerakFitur . ".";
    }
}