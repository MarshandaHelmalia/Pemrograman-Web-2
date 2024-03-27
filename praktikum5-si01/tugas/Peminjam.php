<?php

    class Peminjam {
        public $nama;
        public $buku;
        public $genre;

        public function __construct($nama, $buku, $genre) {
            $this->nama = $nama;
            $this->buku = $buku;
            $this->genre = $genre;
        }

        public function getNama() {
           return $this->nama;
        }

        public function getBuku() {
           return $this->buku;
        }

        public function getGenre() {
            return $this->genre;
        }

        public function hitungTanggalPengembalian($tanggal_peminjaman = null) {
            // Jika tanggal peminjaman tidak diberikan, set sebagai tanggal hari ini
            if (is_null($tanggal_peminjaman)) {
                $tanggal_peminjaman = date('d-m-y');
            }
        
            // Menghitung tanggal pengembalian (5 hari setelah tanggal peminjaman)
            $tanggal_pengembalian = date('d-m-y', strtotime($tanggal_peminjaman . ' +5 days'));
        
            // Mengembalikan tanggal pengembalian
            return $tanggal_pengembalian;
        }
    }
