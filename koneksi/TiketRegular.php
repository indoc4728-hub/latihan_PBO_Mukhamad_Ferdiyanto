<?php
// Tahap 4: Implementasi Subclass (Tiket Regular)
// File: TiketRegular.php

require_once __DIR__ . '/Tiket.php';

class TiketRegular extends Tiket {
    // Properti tambahan khusus Tiket Regular (Terenkapsulasi)
    private $tipe_audio;     // Contoh: Dolby Atmos, DTS, dll.
    private $lokasi_baris;   // Contoh: Baris A, Baris B, dll.

    // Constructor Kelas Anak
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar, $tipe_audio, $lokasi_baris) {
        // Memanggil constructor dari kelas induk (Tiket)
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar);
        
        // Mengisi properti tambahan khusus kelas anak
        $this->tipe_audio = $tipe_audio;
        $this->lokasi_baris = $lokasi_baris;
    }

    // ==========================================
    // GETTER AND SETTER (Enkapsulasi Properti Tambahan)
    // ==========================================
    
    public function getTipeAudio() {
        return $this->tipe_audio;
    }
    public function setTipeAudio($tipe_audio) {
        $this->tipe_audio = $tipe_audio;
    }

    public function getLokasiBaris() {
        return $this->lokasi_baris;
    }
    public function setLokasiBaris($lokasi_baris) {
        $this->lokasi_baris = $lokasi_baris;
    }

    // ==========================================
    // IMPLEMENTASI METHOD ABSTRAK
    // ==========================================

    // 1. Mengimplementasikan hitungTotalHarga()
    public function hitungTotalHarga() {
        // Untuk tiket regular, total harga adalah harga dasar dikali jumlah kursi
        // Ingat: karena harga_dasar dan jumlah_kursi di kelas induk itu 'private',
        // kita wajib mengambil nilainya lewat fungsi getter!
        return $this->getHargaDasar() * $this->getJumlahKursi();
    }

    // 2. Mengimplementasikan tampilkanInfoFasilitas()
    public function tampilkanInfoFasilitas() {
        return "Fasilitas Tiket Regular: Kursi Standard, Audio " . $this->tipe_audio . ", Posisi Tempat Duduk di " . $this->lokasi_baris . ".";
    }
}