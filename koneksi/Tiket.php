<?php
// Tahap 3: Implementasi Abstraksi
// File: Tiket.php

abstract class Tiket {
    // Properti/Atribut Terenkapsulasi (Dipetakan dari kolom tabel database)
    private $id_tiket;
    private $nama_film;
    private $jadwal_tayang;
    private $jumlah_kursi;
    private $harga_dasar;

    // Constructor untuk menginisialisasi data objek
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar) {
        $this->id_tiket = $id_tiket;
        $this->nama_film = $nama_film;
        $this->jadwal_tayang = $jadwal_tayang;
        $this->jumlah_kursi = $jumlah_kursi;
        $this->harga_dasar = $harga_dasar;
    }

    // ==========================================
    // GETTER AND SETTER (Untuk Enkapsulasi)
    // ==========================================
    
    public function getIdTiket() {
        return $this->id_tiket;
    }
    public function setIdTiket($id_tiket) {
        $this->id_tiket = $id_tiket;
    }

    public function getNamaFilm() {
        return $this->nama_film;
    }
    public function setNamaFilm($nama_film) {
        $this->nama_film = $nama_film;
    }

    public function getJadwalTayang() {
        return $this->jadwal_tayang;
    }
    public function setJadwalTayang($jadwal_tayang) {
        $this->jadwal_tayang = $jadwal_tayang;
    }

    public function getJumlahKursi() {
        return $this->jumlah_kursi;
    }
    public function setJumlahKursi($jumlah_kursi) {
        $this->jumlah_kursi = $jumlah_kursi;
    }

    public function getHargaDasar() {
        return $this->harga_dasar;
    }
    public function setHargaDasar($harga_dasar) {
        $this->harga_dasar = $harga_dasar;
    }

    // ==========================================
    // ABSTRACT METHODS (Tanpa Isi/Body)
    // ==========================================
    
    // Wajib diimplementasikan di kelas anak untuk menghitung total bayar
    abstract public function hitungTotalHarga();

    // Wajib diimplementasikan di kelas anak untuk menampilkan fasilitas studio
    abstract public function tampilkanInfoFasilitas();
}