<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ArticleModel;

class AjaxController extends Controller
{
    public function index()
    {
        return view('ajax/index');
    }

    public function getData()
    {
        $model = new ArticleModel();
        $data = $model->findAll();
        return $this->response->setJSON($data);
    }

    public function save()
    {
        $model = new ArticleModel();
        $id = $this->request->getPost('id');
        $data = [
            'judul' => $this->request->getPost('judul'),
            'isi'   => $this->request->getPost('isi')
        ];

        if (!empty($id)) {
            $model->update($id, $data);
            $response = ['status' => 'success', 'message' => 'Artikel berhasil diupdate'];
        } else {
            $model->save($data);
            $response = ['status' => 'success', 'message' => 'Artikel berhasil ditambahkan'];
        }
        return $this->response->setJSON($response);
    }

    // PERBAIKAN UTAMA: Mengubah pencarian ID dari Segmen URL menjadi Request POST Body
    public function delete()
    {
        $model = new ArticleModel();
        
        // Mengambil data ID yang dikirim oleh AJAX melalui metode POST
        $id = $this->request->getPost('id');

        if (!empty($id)) {
            $model->delete($id);
            $response = [
                'status'  => 'success', 
                'message' => 'Artikel berhasil terhapus'
            ];
        } else {
            $response = [
                'status'  => 'error', 
                'message' => 'Gagal menghapus, ID tidak ditemukan'
            ];
        }

        return $this->response->setJSON($response);
    }
}