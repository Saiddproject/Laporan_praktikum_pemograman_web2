<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'isi', 'gambar', 'id_kategori', 'slug'];
    protected $returnType = 'array';
    protected $useTimestamps = false;
}