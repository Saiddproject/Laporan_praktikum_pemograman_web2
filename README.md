# 📚 Laporan Praktikum Pemrograman Web 2

## Implementasi AJAX, REST API, dan VueJS pada Aplikasi Web Berbasis CodeIgniter 4

![CodeIgniter](https://img.shields.io/badge/CodeIgniter-4.7.0-red)
![PHP](https://img.shields.io/badge/PHP-8.2-blue)
![VueJS](https://img.shields.io/badge/VueJS-3.x-green)
![Axios](https://img.shields.io/badge/Axios-1.x-purple)
![License](https://img.shields.io/badge/License-Educational-orange)

---

## 📋 Daftar Isi

* [Praktikum 8 - AJAX CRUD](#-praktikum-8---ajax-crud)
* [Praktikum 9 - AJAX Pagination dan Search](#-praktikum-9---ajax-pagination-dan-search)
* [Praktikum 10 - REST API](#-praktikum-10---rest-api)
* [Praktikum 11 - VueJS Dasar](#-praktikum-11---vuejs-dasar)
* [Praktikum 12 - VueJS Komponen dan Routing (SPA)](#-praktikum-12---vuejs-komponen-dan-routing-spa)
* [Praktikum 13 - VueJS Autentikasi dan Navigation Guards](#-praktikum-13---vuejs-autentikasi-dan-navigation-guards)
* [Praktikum 14 - Keamanan API dan Axios Interceptors](#-praktikum-14---keamanan-api-dan-axios-interceptors)
* [Teknologi yang Digunakan](#-teknologi-yang-digunakan)
* [Struktur Proyek](#-struktur-proyek)
* [Cara Menjalankan Aplikasi](#-cara-menjalankan-aplikasi)
* [Dokumentasi API](#-dokumentasi-api)
* [Screenshot](#-screenshot)
* [Kesimpulan](#-kesimpulan)
* [Kontributor](#-kontributor)

---

# 📖 Praktikum 8 - AJAX CRUD

## 📌 Deskripsi

Implementasi AJAX (Asynchronous JavaScript and XML) pada aplikasi CodeIgniter 4 untuk melakukan operasi CRUD tanpa melakukan reload halaman.

## 🎯 Fitur

* 📋 Menampilkan daftar artikel
* ➕ Menambahkan artikel baru
* ✏️ Mengedit artikel
* 🗑️ Menghapus artikel
* 🔄 Operasi CRUD berjalan secara asynchronous

## 💻 Teknologi

* CodeIgniter 4
* jQuery 3.7.1
* AJAX
* Bootstrap 5

## 📁 File Utama

```text
app/Controllers/AjaxController.php
app/Views/ajax/index.php
public/assets/js/jquery-3.7.1.min.js
app/Config/Routes.php
```

---

# 📖 Praktikum 9 - AJAX Pagination dan Search

## 📌 Deskripsi

Implementasi fitur pagination, pencarian, filter kategori, dan sorting menggunakan AJAX untuk meningkatkan pengalaman pengguna.

## 🎯 Fitur

* 📊 Pagination (5 data per halaman)
* 🔍 Pencarian berdasarkan judul
* 📂 Filter kategori
* 🔃 Sorting A-Z dan Z-A
* ⏳ Loading spinner
* 🔢 Nomor urut otomatis per halaman

## 📁 File Utama

```text
app/Controllers/Artikel.php
app/Models/KategoriModel.php
app/Views/artikel/admin_index.php
app/Config/Routes.php
```

---

# 📖 Praktikum 10 - REST API

## 📌 Deskripsi

Membangun REST API menggunakan CodeIgniter 4 dengan metode HTTP standar untuk mengelola data artikel.

## 🎯 Fitur

* 📋 GET semua artikel
* 📄 GET detail artikel
* ➕ POST artikel baru
* ✏️ PUT update artikel
* 🗑️ DELETE artikel

## Endpoint

| Method | Endpoint     | Keterangan     |
| ------ | ------------ | -------------- |
| GET    | `/post`      | Semua artikel  |
| GET    | `/post/{id}` | Detail artikel |
| POST   | `/post`      | Tambah artikel |
| PUT    | `/post/{id}` | Update artikel |
| DELETE | `/post/{id}` | Hapus artikel  |

## 📁 File Utama

```text
app/Controllers/Post.php
app/Config/Routes.php
app/Filters/ApiAuthFilter.php
```

---

# 📖 Praktikum 11 - VueJS Dasar

## 📌 Deskripsi

Membangun frontend menggunakan VueJS 3 dan Axios yang terhubung dengan REST API CodeIgniter 4.

## 🎯 Fitur

* 📋 Menampilkan artikel
* ➕ Menambahkan artikel
* ✏️ Mengedit artikel
* 🗑️ Menghapus artikel
* 🔄 Reactive Data Binding
* 📝 Validasi Form

## 📁 File Utama

```text
lab8_vuejs/index.html
lab8_vuejs/assets/css/style.css
lab8_vuejs/assets/js/app.js
```

---

# 📖 Praktikum 12 - VueJS Komponen dan Routing (SPA)

## 📌 Deskripsi

Membangun Single Page Application (SPA) menggunakan Vue Router untuk navigasi antar halaman tanpa reload.

## 🎯 Fitur

* 📦 Komponen VueJS
* 🧭 Vue Router
* 🔗 Router Link
* 📄 Router View
* 📱 Responsive Layout

## Struktur Komponen

```text
Home.js
Artikel.js
About.js
```

---

# 📖 Praktikum 13 - VueJS Autentikasi dan Navigation Guards

## 📌 Deskripsi

Implementasi autentikasi berbasis token dan Navigation Guards untuk membatasi akses pengguna yang belum login.

## 🎯 Fitur

* 🔐 Login
* 🎫 Token Authentication
* 🛡️ Navigation Guards
* 💾 LocalStorage
* 🚪 Logout
* 🔒 Protected Routes

## Alur Login

```text
User Login
     ↓
API Authentication
     ↓
Token Diterima
     ↓
Disimpan di LocalStorage
     ↓
Akses Halaman Terproteksi
```

---

# 📖 Praktikum 14 - Keamanan API dan Axios Interceptors

## 📌 Deskripsi

Implementasi keamanan API menggunakan Token-Based Authentication, Filters CodeIgniter 4, dan Axios Interceptors.

## 🎯 Fitur

* 🔒 API Security Filter
* 🎫 Bearer Token Authentication
* 🔄 Axios Request Interceptor
* ⚠️ Axios Response Interceptor
* 🛡️ End-to-End Security

## Mekanisme Keamanan

```text
Login
   ↓
Token Diterima
   ↓
LocalStorage
   ↓
Axios Interceptor
   ↓
Authorization Header
   ↓
API Auth Filter
   ↓
Akses Endpoint
```

---

# 🛠️ Teknologi yang Digunakan

## Backend

| Teknologi   | Versi  | Keterangan       |
| ----------- | ------ | ---------------- |
| CodeIgniter | 4.7.0  | Framework PHP    |
| PHP         | 8.2.12 | Backend Language |
| MySQL       | 5.7+   | Database         |

## Frontend

| Teknologi  | Versi | Keterangan         |
| ---------- | ----- | ------------------ |
| VueJS      | 3.x   | Frontend Framework |
| Vue Router | 4.x   | SPA Routing        |
| Axios      | 1.x   | HTTP Client        |
| jQuery     | 3.7.1 | AJAX Library       |
| Bootstrap  | 5.3.x | CSS Framework      |

## Tools

| Tools   | Kegunaan        |
| ------- | --------------- |
| XAMPP   | Local Server    |
| VS Code | Code Editor     |
| Postman | API Testing     |
| Git     | Version Control |

---

# 📁 Struktur Proyek

```text
📁 ci4/
├── app/
│   ├── Config/
│   ├── Controllers/
│   ├── Filters/
│   ├── Models/
│   └── Views/
├── public/
├── writable/
└── .env

📁 lab8_vuejs/
├── index.html
├── assets/
│   ├── css/
│   └── js/
│       └── components/
└── README.md
```

---

# 🚀 Cara Menjalankan Aplikasi

## 1️⃣ Clone Repository

```bash
git clone https://github.com/username/repository.git
```

---

## 2️⃣ Import Database

1. Buka phpMyAdmin
2. Buat database:

```sql
user_login
```

3. Import file:

```text
user_login.sql
```

---

## 3️⃣ Menjalankan Backend

Masuk ke folder backend:

```bash
cd ci4
```

Install dependency:

```bash
composer install
```

Copy file environment:

```bash
cp env .env
```

Sesuaikan konfigurasi database pada file `.env`.

Jalankan server:

```bash
php spark serve
```

Backend berjalan pada:

```text
http://localhost:8080
```

---

## 4️⃣ Menjalankan Frontend

Masuk ke folder frontend:

```bash
cd lab8_vuejs
```

Jalankan menggunakan Live Server atau buka langsung:

```text
http://localhost/lab8_vuejs/index.html
```

### Akun Login

```text
Username : admin
Password : rahasia
```

---

# 🧪 Dokumentasi API

## Endpoint Artikel

| Method | Endpoint   | Auth |
| ------ | ---------- | ---- |
| GET    | /post      | ❌    |
| GET    | /post/{id} | ❌    |
| POST   | /post      | ✅    |
| PUT    | /post/{id} | ✅    |
| DELETE | /post/{id} | ✅    |

---

## Endpoint Login

| Method | Endpoint   |
| ------ | ---------- |
| POST   | /api/login |

---

## Contoh Login

### Request

```json
{
  "username": "admin",
  "password": "rahasia"
}
```

### Response

```json
{
  "status": 200,
  "messages": "Login Berhasil",
  "data": {
    "id": 1,
    "username": "admin",
    "token": "VE9LRU4tU0VDUkVULWFkbWlu"
  }
}
```

---

# 📸 Screenshot


<img width="2240" height="1267" alt="Cuplikan layar 2026-06-22 172447" src="https://github.com/user-attachments/assets/ce5549ca-b563-4876-99b0-df4044a482df" />


<img width="2240" height="1267" alt="Cuplikan layar 2026-06-22 173707" src="https://github.com/user-attachments/assets/a9f4bbe5-2512-471f-92bb-b392a805acb7" />


<img width="2240" height="1265" alt="Cuplikan layar 2026-06-22 173725" src="https://github.com/user-attachments/assets/80fdac04-896d-4772-a7ae-2055cdd1dd3b" />


<img width="2240" height="1265" alt="Cuplikan layar 2026-06-22 173741" src="https://github.com/user-attachments/assets/0eca1535-037a-4c0b-8613-bda27f5335e1" />


<img width="2240" height="1265" alt="Cuplikan layar 2026-06-22 173752" src="https://github.com/user-attachments/assets/b4be3659-be2c-4c17-a2a3-872098370a07" />


<img width="2240" height="1267" alt="Cuplikan layar 2026-06-22 173819" src="https://github.com/user-attachments/assets/5e5369f1-8cd6-47cc-a254-a3eb171b32ba" />


<img width="2240" height="1267" alt="Cuplikan layar 2026-06-22 173906" src="https://github.com/user-attachments/assets/a5de70d7-a361-4dbe-8124-615065c94ea1" />


<img width="2240" height="1328" alt="Cuplikan layar 2026-06-22 174500" src="https://github.com/user-attachments/assets/88b18fae-26f0-43c3-b1d7-791e1773d92b" />


---

# 🏁 Kesimpulan

Seluruh modul praktikum berhasil diimplementasikan dengan baik, mulai dari AJAX, REST API, VueJS, hingga keamanan berbasis token.

### Pencapaian

| Modul | Materi                             | Status |
| ----- | ---------------------------------- | ------ |
| 8     | AJAX CRUD                          | ✅      |
| 9     | AJAX Pagination & Search           | ✅      |
| 10    | REST API                           | ✅      |
| 11    | VueJS Dasar                        | ✅      |
| 12    | SPA Vue Router                     | ✅      |
| 13    | Authentication & Navigation Guards | ✅      |
| 14    | API Security & Interceptors        | ✅      |

### Hasil Pembelajaran

* Memahami konsep AJAX pada aplikasi web modern.
* Mengimplementasikan REST API menggunakan CodeIgniter 4.
* Mengembangkan frontend menggunakan VueJS.
* Membangun Single Page Application (SPA).
* Mengimplementasikan autentikasi berbasis token.
* Meningkatkan keamanan API menggunakan Filter dan Interceptors.
* Memahami pemisahan frontend dan backend (Decoupled Architecture).

---

# 👨‍💻 Kontributor

| Nama           | NIM           | Peran      |
| -------------- | ------------- | ---------- |
| Muhammad Said Abimanyu | 312410145 | Mahasiswa |

---

# 💻 Kode Implementasi
1. Frontend - ajax_crud.html
File ini merupakan tampilan utama untuk mengelola artikel dengan menggunakan AJAX.

```
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Dashboard AJAX CRUD | Artikel Manager</title>
    
    <!-- Bootstrap 5 CSS + Icons + Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(145deg, #f0f4fa 0%, #e9eef4 100%);
            font-family: 'Plus Jakarta Sans', 'Inter', system-ui, -apple-system, sans-serif;
            padding: 2rem 1rem;
            min-height: 100vh;
        }

        /* Container utama lebih lebar dan responsif */
        .custom-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Header section */
        .hero-section {
            background: rgba(255,255,255,0.6);
            backdrop-filter: blur(10px);
            border-radius: 32px;
            padding: 1.5rem 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 20px rgba(0,0,0,0.02);
            border: 1px solid rgba(255,255,255,0.8);
        }

        .badge-stats {
            background: #0d6efd10;
            color: #0d6efd;
            padding: 0.35rem 1rem;
            border-radius: 40px;
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        /* Card utama */
        .article-card {
            background: #ffffff;
            border-radius: 28px;
            border: none;
            overflow: hidden;
            box-shadow: 0 20px 35px -12px rgba(0,0,0,0.08);
            transition: all 0.25s ease;
        }

        .article-card:hover {
            box-shadow: 0 24px 40px -14px rgba(0,0,0,0.12);
        }

        /* Table styling modern */
        .table-custom {
            margin-bottom: 0;
            border-collapse: separate;
            border-spacing: 0;
        }

        .table-custom thead th {
            background: #f8fafd;
            color: #1e2a3e;
            font-weight: 700;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 1rem 1.2rem;
            border-bottom: 1px solid #e2e8f0;
            border-top: none;
        }

        .table-custom tbody td {
            padding: 1rem 1.2rem;
            vertical-align: middle;
            border-bottom: 1px solid #edf2f7;
            color: #1e293b;
            font-weight: 500;
            transition: background 0.2s;
        }

        .table-custom tbody tr:hover td {
            background-color: #fafcff;
        }

        /* ID badge */
        .id-badge {
            background: #eef2ff;
            color: #1e40af;
            padding: 0.25rem 0.75rem;
            border-radius: 40px;
            font-size: 0.8rem;
            font-weight: 700;
            display: inline-block;
        }

        /* Tombol aksi */
        .action-btn {
            width: 34px;
            height: 34px;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            transition: all 0.2s;
            font-size: 1rem;
            margin: 0 3px;
            border: none;
        }

        .btn-edit-custom {
            background: #eff6ff;
            color: #2563eb;
        }
        .btn-edit-custom:hover {
            background: #2563eb;
            color: white;
            transform: translateY(-2px);
        }

        .btn-delete-custom {
            background: #fee2e2;
            color: #dc2626;
        }
        .btn-delete-custom:hover {
            background: #dc2626;
            color: white;
            transform: translateY(-2px);
        }

        /* Modal modern */
        .modern-modal .modal-content {
            border-radius: 28px;
            border: none;
            box-shadow: 0 30px 50px rgba(0,0,0,0.2);
            overflow: hidden;
        }

        .modern-modal .modal-header {
            border-bottom: 1px solid #eef2f8;
            background: white;
            padding: 1.2rem 1.8rem;
        }

        .modern-modal .modal-body {
            padding: 1.8rem;
        }

        .modern-modal .modal-footer {
            background: #f9fbfd;
            border-top: none;
            padding: 1rem 1.8rem;
        }

        /* Form control modern */
        .form-control-modern {
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            padding: 0.75rem 1.2rem;
            font-size: 0.95rem;
            transition: all 0.2s;
        }
        .form-control-modern:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 4px rgba(59,130,246,0.15);
            outline: none;
        }

        /* Loading skeleton */
        .skeleton-row td {
            height: 68px;
            background: linear-gradient(90deg, #f0f2f5 25%, #e9ecef 50%, #f0f2f5 75%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
        }
        @keyframes shimmer {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        /* Toast custom */
        .toast-custom {
            border-radius: 20px;
            border-left: 6px solid;
            font-weight: 500;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section { padding: 1rem; }
            .table-custom thead th { font-size: 0.7rem; padding: 0.8rem; }
            .table-custom tbody td { padding: 0.8rem; font-size: 0.85rem; }
            .action-btn { width: 28px; height: 28px; font-size: 0.8rem; }
        }
    </style>

    <script src="<?= base_url('assets/js/jquery-3.7.1.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="custom-container">
    <!-- Header Hero -->
    <div class="hero-section d-flex flex-wrap justify-content-between align-items-center">
        <div>
            <div class="d-flex align-items-center gap-2 mb-2">
                <i class="bi bi-journal-bookmark-fill fs-3 text-primary"></i>
                <h1 class="display-6 fw-bold mb-0" style="font-size: 1.8rem;">Kelola Artikel</h1>
            </div>
            <p class="text-secondary-emphasis mb-0">Manajemen konten real-time dengan <span class="badge-stats ms-1">AJAX + jQuery</span></p>
        </div>
        <button class="btn btn-primary shadow-sm rounded-4 px-4 py-2 mt-3 mt-sm-0" id="btnTambah">
            <i class="bi bi-plus-circle me-2"></i> Artikel Baru
        </button>
    </div>

    <!-- Card Tabel -->
    <div class="article-card">
        <div class="p-0">
            <div class="table-responsive">
                <table class="table table-custom" id="artikelTable">
                    <thead>
                        <tr>
                            <th style="width: 10%">ID</th>
                            <th style="width: 65%">Judul Artikel</th>
                            <th class="text-end" style="width: 25%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <!-- Skeleton loading akan tampil di sini -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Modern -->
<div class="modal fade modern-modal" id="modalArtikel" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="modalTitle">
                    <i class="bi bi-pencil-square me-2"></i>Tambah Artikel
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="artikelId">
                <div class="mb-4">
                    <label class="form-label fw-semibold mb-2">📌 Judul Artikel</label>
                    <input type="text" id="judul" class="form-control form-control-modern" autocomplete="off">
                </div>
                <div>
                    <label class="form-label fw-semibold mb-2">✍️ Isi Konten</label>
                    <textarea id="isi" class="form-control form-control-modern" rows="6" placeholder="Tulis isi artikel di sini..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary rounded-pill px-5" id="simpanData">
                    <i class="bi bi-check-lg me-1"></i> Simpan
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Toast Notification (tanpa jQuery, menggunakan BS5) -->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1100">
    <div id="liveToast" class="toast toast-custom align-items-center border-0 shadow-lg" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true" data-bs-delay="3000">
        <div class="d-flex">
            <div class="toast-body" id="toastMessage">
                <!-- Pesan notifikasi -->
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    let myModal = new bootstrap.Modal(document.getElementById('modalArtikel'));
    let toastEl = document.getElementById('liveToast');
    let toast = new bootstrap.Toast(toastEl, { animation: true, autohide: true, delay: 3000 });

    function showToast(message, isSuccess = true) {
        $('#toastMessage').text(message);
        toastEl.classList.remove('text-bg-success', 'text-bg-danger', 'text-bg-warning');
        if (isSuccess) {
            toastEl.classList.add('text-bg-success');
        } else {
            toastEl.classList.add('text-bg-danger');
        }
        toast.show();
    }

    // Tampilkan skeleton loading
    function showSkeleton() {
        let skeletonRows = '';
        for (let i = 0; i < 3; i++) {
            skeletonRows += `<tr class="skeleton-row"><td colspan="3">&nbsp;</td></tr>`;
        }
        $('#tableBody').html(skeletonRows);
    }

    function loadData() {
        showSkeleton();
        $.ajax({
            url: "<?= base_url('ajax/getData') ?>",
            method: "GET",
            dataType: "json",
            timeout: 5000,
            success: function(data) {
                let rows = "";
                if (data.length === 0) {
                    rows = `<tr><td colspan="3" class="text-center py-5 text-muted"><i class="bi bi-inbox fs-1 d-block mb-2"></i>Belum ada artikel. Klik "Artikel Baru" untuk membuat.</td></tr>`;
                } else {
                    $.each(data, function(i, row) {
                        rows += `<tr>
                            <td><span class="id-badge">#${row.id}</span></td>
                            <td class="fw-semibold">${escapeHtml(row.judul)}</td>
                            <td class="text-end">
                                <button class="action-btn btn-edit-custom btn-edit" data-id="${row.id}" data-judul="${escapeHtml(row.judul)}" data-isi="${escapeHtml(row.isi)}">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="action-btn btn-delete-custom btn-delete" data-id="${row.id}">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>`;
                    });
                }
                $('#tableBody').html(rows);
            },
            error: function(xhr, status, err) {
                $('#tableBody').html(`<tr><td colspan="3" class="text-center text-danger py-4"><i class="bi bi-wifi-off"></i> Gagal memuat data: ${err}</td></tr>`);
                showToast('Gagal mengambil data dari server', false);
            }
        });
    }

    // fungsi untuk menghindari XSS
    function escapeHtml(str) {
        if(!str) return '';
        return str.replace(/[&<>]/g, function(m) {
            if (m === '&') return '&amp;';
            if (m === '<') return '&lt;';
            if (m === '>') return '&gt;';
            return m;
        }).replace(/[\uD800-\uDBFF][\uDC00-\uDFFF]/g, function(c) {
            return c;
        });
    }

    // Tombol tambah
    $('#btnTambah').click(function() {
        $('#modalTitle').html('<i class="bi bi-plus-circle me-2"></i>Tambah Artikel');
        $('#artikelId').val('');
        $('#judul').val('');
        $('#isi').val('');
        myModal.show();
    });

    // Tombol edit (delegasi)
    $(document).on('click', '.btn-edit', function() {
        let id = $(this).data('id');
        let judul = $(this).data('judul');
        let isi = $(this).data('isi');
        $('#modalTitle').html('<i class="bi bi-pencil-square me-2"></i>Edit Artikel');
        $('#artikelId').val(id);
        $('#judul').val(judul);
        $('#isi').val(isi);
        myModal.show();
    });

    // Simpan (tambah/edit)
    $('#simpanData').click(function() {
        let id = $('#artikelId').val();
        let judul = $.trim($('#judul').val());
        let isi = $.trim($('#isi').val());

        if (!judul || !isi) {
            showToast('Judul dan isi tidak boleh kosong!', false);
            return;
        }

        // Nonaktifkan tombol simpan sementara
        let saveBtn = $(this);
        saveBtn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-2"></span> Menyimpan...');

        $.ajax({
            url: "<?= base_url('ajax/save') ?>",
            method: "POST",
            data: { id: id, judul: judul, isi: isi },
            dataType: "json",
            success: function(res) {
                saveBtn.prop('disabled', false).html('<i class="bi bi-check-lg me-1"></i> Simpan');
                if (res.status === 'success') {
                    showToast(res.message, true);
                    myModal.hide();
                    loadData();
                } else {
                    showToast(res.message || 'Gagal menyimpan data', false);
                }
            },
            error: function(xhr, status, err) {
                saveBtn.prop('disabled', false).html('<i class="bi bi-check-lg me-1"></i> Simpan');
                let errorMsg = xhr.responseJSON?.message || err || 'Terjadi kesalahan server';
                showToast('Error: ' + errorMsg, false);
            }
        });
    });

    // Hapus artikel (kirim id via POST data)
    $(document).on('click', '.btn-delete', function() {
        let id = $(this).data('id');
        if (confirm('Apakah Anda yakin ingin menghapus artikel ini? Tindakan ini tidak dapat dibatalkan.')) {
            $.ajax({
                url: "<?= base_url('ajax/delete') ?>",
                method: "POST",
                data: { id: id },
                dataType: "json",
                success: function(res) {
                    if (res.status === 'success') {
                        showToast(res.message, true);
                        loadData();
                    } else {
                        showToast(res.message || 'Gagal menghapus', false);
                    }
                },
                error: function(xhr, status, err) {
                    showToast('Gagal menghapus: ' + err, false);
                }
            });
        }
    });

    // Initial load
    loadData();
});
</script>
</body>
</html>

```
2. Backend - Post.php (REST API Controller)
Controller ini menangani operasi CRUD untuk artikel melalui REST API.
```
php
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
```
3. Routing - Routes.php
File ini mendefinisikan semua route untuk aplikasi termasuk AJAX dan REST API.
```
php
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// --- Rute Halaman Statis (Frontend) ---
$routes->get('/', 'Page::index');
$routes->get('about', 'Page::about');
$routes->get('contact', 'Page::contact');

// --- Rute Manajemen & Daftar Artikel ---
$routes->group('artikel', function($routes) {
    $routes->get('/', 'Artikel::index'); 
    $routes->get('tambah', 'Artikel::tambah');
    $routes->post('simpan', 'Artikel::simpan');
    $routes->get('edit/(:num)', 'Artikel::edit/$1'); 
    $routes->post('update/(:num)', 'Artikel::update/$1'); 
    $routes->get('hapus/(:num)', 'Artikel::hapus/$1');
    
    // Route untuk halaman admin dengan AJAX pagination & search (Modul 9)
    $routes->get('admin', 'Artikel::admin_index');
});

// --- Rute Autentikasi User ---
$routes->group('user', function($routes) {
    $routes->get('login', 'User::login');
    $routes->post('login', 'User::login'); 
    $routes->get('register', 'User::register');
    $routes->post('register', 'User::register');
    $routes->get('logout', 'User::logout');
});

// --- Rute AJAX (Praktikum 8) ---
$routes->get('ajax', 'AjaxController::index');
$routes->get('ajax/getData', 'AjaxController::getData');
$routes->post('ajax/save', 'AjaxController::save');
$routes->post('ajax/delete', 'AjaxController::delete');

// --- Rute REST API (Praktikum 10) ---
$routes->resource('post');
```

# 📄 Lisensi

Proyek ini dibuat untuk keperluan akademik dan pembelajaran.

© 2026 Muhammad Said Abimanyu

**Program Studi Teknik Informatika**
**Universitas Pelita Bangsa**
**Tahun Akademik 2025/2026**

> *"Kode yang baik adalah kode yang dapat dipahami oleh manusia dan dijalankan oleh mesin."*
