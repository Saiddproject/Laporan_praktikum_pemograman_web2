<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    // Nama tabel di database
    protected $table = 'artikel';
    
    // Primary key tabel (sesuaikan jika di database Anda 'id' atau 'id_artikel')
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    // Tambahkan 'id_kategori' ke dalam allowedFields agar bisa disimpan ke database
    protected $allowedFields = ['judul', 'isi', 'gambar', 'id_kategori', 'slug'];

    protected $useTimestamps = false; 

    protected $returnType = 'array';

    /**
     * Method untuk mengambil artikel sekaligus nama kategorinya
     * Ini mengimplementasikan Query Builder Join sesuai Modul Praktikum 6
     */
    public function getArtikelDenganKategori($slug = false)
    {
        if ($slug === false) {
            // Mengambil semua artikel dan join dengan tabel kategori
            return $this->select('artikel.*, kategori.nama_kategori')
                        ->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
                        ->findAll();
        }

        // Mengambil satu artikel berdasarkan slug
        return $this->select('artikel.*, kategori.nama_kategori')
                    ->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
                    ->where(['artikel.slug' => $slug])
                    ->first();
    }
}