<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Artikel extends BaseController
{
    protected $artikelModel;
    protected $kategoriModel;

    public function __construct()
    {
        $this->artikelModel = new ArtikelModel();
        $this->kategoriModel = new KategoriModel();
    }

    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        
        if ($keyword) {
            $artikel = $this->artikelModel->select('artikel.*, kategori.nama_kategori')
                ->join('kategori', 'kategori.id_kategori = artikel.id_kategori', 'left')
                ->groupStart()
                    ->like('artikel.judul', $keyword)
                    ->orLike('kategori.nama_kategori', $keyword)
                ->groupEnd()
                ->findAll();
        } else {
            $artikel = $this->artikelModel->getArtikelDenganKategori();
        }

        $data = [
            'title'   => 'Daftar Artikel',
            'artikel' => $artikel,
            'keyword' => $keyword
        ];
        
        return view('artikel/index', $data); 
    }

    /**
     * Halaman admin dengan AJAX pagination, search, filter kategori, dan sorting
     */
    public function admin_index()
    {
        $title = 'Daftar Artikel (Admin)';
        
        $q = $this->request->getVar('q') ?? '';
        $kategori_id = $this->request->getVar('kategori_id') ?? '';
        $page = $this->request->getVar('page') ?? 1;
        $sort = $this->request->getVar('sort') ?? 'desc';
        $perPage = 5;

        $builder = $this->artikelModel->table('artikel')
            ->select('artikel.*, kategori.nama_kategori')
            ->join('kategori', 'kategori.id_kategori = artikel.id_kategori', 'left');

        if ($q != '') {
            $builder->like('artikel.judul', $q);
        }
        if ($kategori_id != '') {
            $builder->where('artikel.id_kategori', $kategori_id);
        }

        if ($sort === 'asc') {
            $builder->orderBy('artikel.judul', 'ASC');
        } else {
            $builder->orderBy('artikel.judul', 'DESC');
        }

        $artikel = $builder->paginate($perPage, 'default', $page);
        $pager = $this->artikelModel->pager;

        $data = [
            'title'       => $title,
            'q'           => $q,
            'kategori_id' => $kategori_id,
            'sort'        => $sort,
            'artikel'     => $artikel,
            'pager'       => $pager
        ];

        if ($this->request->isAJAX()) {
            $start = ($page - 1) * $perPage + 1;
            foreach ($data['artikel'] as $key => $row) {
                $data['artikel'][$key]['no'] = $start + $key;
            }
            return $this->response->setJSON($data);
        } else {
            $data['kategori'] = $this->kategoriModel->findAll();
            return view('artikel/admin_index', $data);
        }
    }

    public function tambah()
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/artikel')->with('error', 'Akses ditolak!');
        }

        $data = [
            'title'    => 'Tambah Artikel Baru',
            'kategori' => $this->kategoriModel->findAll()
        ];

        return view('artikel/tambah', $data);
    }

    public function simpan()
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/artikel');
        }

        $validationRules = [
            'judul'       => 'required|is_unique[artikel.judul]',
            'isi'         => 'required',
            'id_kategori' => 'required|numeric|is_not_unique[kategori.id_kategori]',
            'gambar'      => 'permit_empty|max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]'
        ];

        if (!$this->validate($validationRules)) {
            $errors = $this->validator->getErrors();
            $errorMsg = implode(', ', $errors);
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan: ' . $errorMsg);
        }

        $fileGambar = $this->request->getFile('gambar');
        
        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $namaGambar);
        } else {
            $namaGambar = 'default.jpg';
        }

        $this->artikelModel->insert([
            'judul'       => $this->request->getPost('judul'),
            'slug'        => url_title($this->request->getPost('judul'), '-', true),
            'isi'         => $this->request->getPost('isi'),
            'id_kategori' => $this->request->getPost('id_kategori'),
            'gambar'      => $namaGambar
        ]);

        return redirect()->to('/artikel')->with('success', 'Artikel berhasil ditambahkan!');
    }

    public function edit($id)
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/artikel');
        }

        $artikel = $this->artikelModel->find($id);

        if (empty($artikel)) {
            throw new PageNotFoundException('Artikel tidak ditemukan.');
        }

        $data = [
            'title'    => 'Edit Artikel',
            'artikel'  => $artikel,
            'kategori' => $this->kategoriModel->findAll()
        ];

        return view('artikel/edit', $data);
    }

    public function update($id)
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/artikel');
        }

        $artikelLama = $this->artikelModel->find($id);
        if (!$artikelLama) {
            throw new PageNotFoundException('Artikel tidak ditemukan.');
        }

        // Validasi judul unik kecuali untuk artikel ini sendiri
        $rule_judul = $artikelLama['judul'] == $this->request->getPost('judul') ? 'required' : 'required|is_unique[artikel.judul]';

        if (!$this->validate([
            'judul'       => $rule_judul,
            'isi'         => 'required',
            'id_kategori' => 'required|numeric|is_not_unique[kategori.id_kategori]',
            'gambar'      => 'permit_empty|max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]'
        ])) {
            $errors = $this->validator->getErrors();
            $errorMsg = implode(', ', $errors);
            return redirect()->back()->withInput()->with('error', 'Gagal update: ' . $errorMsg);
        }

        // Proses gambar
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            // Hapus gambar lama jika bukan default
            if ($artikelLama['gambar'] != 'default.jpg' && file_exists('img/' . $artikelLama['gambar'])) {
                @unlink('img/' . $artikelLama['gambar']);
            }
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $namaGambar);
        } else {
            $namaGambar = $this->request->getPost('gambarLama');
        }

        $data = [
            'judul'       => $this->request->getPost('judul'),
            'slug'        => url_title($this->request->getPost('judul'), '-', true),
            'isi'         => $this->request->getPost('isi'),
            'id_kategori' => $this->request->getPost('id_kategori'),
            'gambar'      => $namaGambar
        ];

        $this->artikelModel->update($id, $data);

        return redirect()->to('/artikel')->with('success', 'Artikel berhasil diperbarui!');
    }

    public function hapus($id)
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/artikel');
        }

        $data = $this->artikelModel->find($id);
        
        if ($data) {
            if ($data['gambar'] != 'default.jpg' && file_exists('img/' . $data['gambar'])) {
                @unlink('img/' . $data['gambar']); 
            }
            $this->artikelModel->delete($id);
        }

        return redirect()->to('/artikel')->with('success', 'Artikel berhasil dihapus!');
    }
}