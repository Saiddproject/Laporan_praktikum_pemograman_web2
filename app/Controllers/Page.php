<?php

namespace App\Controllers;

// Import Model Artikel agar bisa mengambil data dari database
use App\Models\ArtikelModel;

class Page extends BaseController
{
    protected $artikelModel;

    public function __construct()
    {
        // Inisialisasi model
        $this->artikelModel = new ArtikelModel();
    }

    public function index()
    {
        return view('home', [
            'title'   => 'Halaman Home',
            'content' => 'Ini adalah halaman home yang menjelaskan isi situs ini.'
        ]);
    }

    public function artikel()
    {
        // Mengambil semua data artikel dari database
        $data = [
            'title'   => 'Halaman Artikel',
            'artikel' => $this->artikelModel->findAll() // Mengambil data untuk ditampilkan di view
        ];

        return view('artikel', $data);
    }

    public function about()
    {
        return view('about', [
            'title'   => 'Halaman About',
            'content' => 'Ini adalah halaman tentang kami (About Us).'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title'   => 'Halaman Kontak',
            'content' => 'Hubungi kami melalui email atau nomor telepon yang tersedia.'
        ]);
    }
}