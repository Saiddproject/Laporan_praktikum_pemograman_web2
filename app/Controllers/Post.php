<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ArticleModel;

class Post extends ResourceController
{
    use ResponseTrait;

    protected $model;

    public function __construct()
    {
        $this->model = new ArticleModel();
    }

    // GET /post - menampilkan semua artikel
    public function index()
    {
        $data = $this->model->orderBy('id', 'DESC')->findAll();
        return $this->respond($data);
    }

    // GET /post/{id} - menampilkan satu artikel
    public function show($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Artikel tidak ditemukan');
        }
    }

    // POST /post - menambah artikel
    public function create()
    {
        $rules = [
            'judul' => 'required|is_unique[artikel.judul]',
            'isi'   => 'required',
            'id_kategori' => 'permit_empty|numeric'
        ];

        if (!$this->validate($rules)) {
            return $this->fail($this->validator->getErrors());
        }

        $data = [
            'judul'       => $this->request->getVar('judul'),
            'slug'        => url_title($this->request->getVar('judul'), '-', true),
            'isi'         => $this->request->getVar('isi'),
            'id_kategori' => $this->request->getVar('id_kategori'),
            'gambar'      => $this->request->getVar('gambar') ?? 'default.jpg',
        ];

        $this->model->insert($data);
        $response = [
            'status'  => 201,
            'message' => 'Data artikel berhasil ditambahkan',
            'data'    => $data
        ];
        return $this->respondCreated($response);
    }

    // PUT /post/{id} - mengupdate artikel
    public function update($id = null)
    {
        $data = $this->model->find($id);
        if (!$data) {
            return $this->failNotFound('Artikel tidak ditemukan');
        }

        // Untuk PUT request, ambil data dari raw input atau dari post
        $input = $this->request->getRawInput();
        if (empty($input)) {
            // Fallback ke getPost jika tidak ada raw input
            $input = $this->request->getPost();
        }

        $judul = $input['judul'] ?? null;
        $isi = $input['isi'] ?? null;
        $id_kategori = $input['id_kategori'] ?? null;
        $gambar = $input['gambar'] ?? null;

        if (empty($judul) || empty($isi)) {
            return $this->fail('Judul dan isi harus diisi', 400);
        }

        // Cek keunikan judul (kecuali untuk artikel ini sendiri)
        $existing = $this->model->where('judul', $judul)->where('id !=', $id)->first();
        if ($existing) {
            return $this->fail('Judul sudah digunakan oleh artikel lain', 400);
        }

        $updateData = [
            'judul'       => $judul,
            'slug'        => url_title($judul, '-', true),
            'isi'         => $isi,
            'id_kategori' => $id_kategori,
            'gambar'      => $gambar ?? $data['gambar'],
        ];

        $this->model->update($id, $updateData);
        $response = [
            'status'  => 200,
            'message' => 'Data artikel berhasil diupdate',
            'data'    => $updateData
        ];
        return $this->respond($response);
    }

    // DELETE /post/{id} - menghapus artikel
    public function delete($id = null)
    {
        $data = $this->model->find($id);
        if (!$data) {
            return $this->failNotFound('Artikel tidak ditemukan');
        }
        $this->model->delete($id);
        $response = [
            'status'  => 200,
            'message' => 'Data artikel berhasil dihapus'
        ];
        return $this->respond($response);
    }
}