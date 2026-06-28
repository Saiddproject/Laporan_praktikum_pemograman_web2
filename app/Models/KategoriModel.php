<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    // Nama tabel yang ada di database
    protected $table      = 'kategori';
    
    // Nama primary key dari tabel tersebut
    protected $primaryKey = 'id_kategori';

    // Field mana saja yang boleh diisi (mass assignment)
    // Sesuai dengan struktur tabel kategori di Modul Praktikum 6
    protected $allowedFields = ['nama_kategori', 'slug_kategori'];

    /**
     * Fungsi untuk mengambil semua data kategori
     * Bisa digunakan untuk dropdown pada form tambah/edit artikel
     */
    public function getKategori($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id_kategori' => $id])->first();
    }
}