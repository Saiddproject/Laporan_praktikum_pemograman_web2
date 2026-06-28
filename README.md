# 📚 Laporan Praktikum Pemrograman Web 2
## Implementasi AJAX, REST API, dan VueJS pada Aplikasi Web Berbasis CodeIgniter 4

<p align="center">

![PHP](https://img.shields.io/badge/PHP-8.2-blue?style=for-the-badge&logo=php)
![CodeIgniter](https://img.shields.io/badge/CodeIgniter-4.7.0-red?style=for-the-badge&logo=codeigniter)
![VueJS](https://img.shields.io/badge/Vue.js-3.x-42b883?style=for-the-badge&logo=vue.js)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple?style=for-the-badge&logo=bootstrap)
![Axios](https://img.shields.io/badge/Axios-1.x-5A29E4?style=for-the-badge)
![License](https://img.shields.io/badge/License-Academic-green?style=for-the-badge)

</p>

---

# 📖 Deskripsi

Repository ini merupakan hasil **Praktikum Pemrograman Web 2** yang membahas implementasi teknologi web modern menggunakan **CodeIgniter 4**, **AJAX**, **REST API**, dan **VueJS**.

Seluruh modul praktikum dikembangkan secara bertahap mulai dari CRUD berbasis AJAX, REST API, Single Page Application (SPA), hingga implementasi autentikasi menggunakan Bearer Token dan Axios Interceptors.

---

# 📋 Daftar Isi

- Praktikum 8 - AJAX CRUD
- Praktikum 9 - AJAX Pagination & Search
- Praktikum 10 - REST API
- Praktikum 11 - VueJS Dasar
- Praktikum 12 - VueJS SPA & Routing
- Praktikum 13 - Authentication & Navigation Guards
- Praktikum 14 - API Security & Axios Interceptors
- Teknologi
- Struktur Project
- Instalasi
- Dokumentasi API
- Screenshot
- Demo
- Kesimpulan
- Kontributor

---

# 📖 Praktikum 8 — AJAX CRUD

## Deskripsi

Implementasi AJAX pada CodeIgniter 4 sehingga proses CRUD dapat dilakukan tanpa melakukan reload halaman.

### Fitur

- ✅ Menampilkan daftar artikel
- ✅ Menambah artikel
- ✅ Mengubah artikel
- ✅ Menghapus artikel
- ✅ AJAX CRUD
- ✅ Bootstrap Modal

### Teknologi

- CodeIgniter 4
- jQuery 3.7.1
- AJAX
- Bootstrap 5

### File Utama

```
app/
├── Controllers/
│   └── AjaxController.php
├── Views/
│   └── ajax/index.php

public/assets/js/
└── jquery-3.7.1.min.js
```

---

# 📖 Praktikum 9 — AJAX Pagination & Search

## Deskripsi

Menambahkan fitur pencarian, pagination, sorting, dan filter menggunakan AJAX.

### Fitur

- ✅ Pagination
- ✅ Search
- ✅ Filter kategori
- ✅ Sorting
- ✅ Loading Spinner
- ✅ Nomor otomatis

### File Utama

```
Artikel.php
KategoriModel.php
admin_index.php
Routes.php
```

---

# 📖 Praktikum 10 — REST API

## Deskripsi

Membangun REST API menggunakan CodeIgniter 4 dengan metode HTTP standar.

## Endpoint

| Method | Endpoint | Keterangan |
|---------|----------|------------|
| GET | `/post` | Semua Artikel |
| GET | `/post/{id}` | Detail Artikel |
| POST | `/post` | Tambah Artikel |
| PUT | `/post/{id}` | Update Artikel |
| DELETE | `/post/{id}` | Hapus Artikel |

### Fitur

- ✅ GET
- ✅ POST
- ✅ PUT
- ✅ DELETE
- ✅ Validasi Data
- ✅ JSON Response

---

# 📖 Praktikum 11 — VueJS Dasar

## Deskripsi

Frontend dibangun menggunakan VueJS 3 dan Axios yang terhubung langsung ke REST API.

### Fitur

- Reactive Data
- CRUD Artikel
- Axios
- Validasi Form
- Bootstrap UI

---

# 📖 Praktikum 12 — Vue Router (SPA)

## Deskripsi

Implementasi Single Page Application menggunakan Vue Router.

### Fitur

- Vue Router
- Router View
- Router Link
- Dynamic Navigation
- Responsive Layout

### Struktur

```
components/
│
├── Home.js
├── Artikel.js
└── About.js
```

---

# 📖 Praktikum 13 — Authentication

## Deskripsi

Implementasi autentikasi menggunakan Bearer Token.

### Fitur

- Login
- Logout
- LocalStorage
- Navigation Guards
- Protected Routes

### Alur Login

```
Login
   │
   ▼
REST API
   │
   ▼
Bearer Token
   │
   ▼
LocalStorage
   │
   ▼
Navigation Guards
```

---

# 📖 Praktikum 14 — API Security

## Deskripsi

Menambahkan keamanan API menggunakan Filter CodeIgniter dan Axios Interceptors.

### Fitur

- Bearer Authentication
- API Filter
- Request Interceptor
- Response Interceptor
- Auto Redirect Login

### Mekanisme

```
Login
   │
Token
   │
Axios Interceptor
   │
Authorization Header
   │
API Filter
   │
REST API
```

---

# 🛠 Teknologi

## Backend

| Teknologi | Versi |
|------------|--------|
| CodeIgniter | 4.7.0 |
| PHP | 8.2 |
| MySQL | 5.7+ |

## Frontend

| Teknologi | Versi |
|------------|--------|
| VueJS | 3.x |
| Vue Router | 4.x |
| Axios | 1.x |
| Bootstrap | 5.3 |
| jQuery | 3.7 |

## Tools

- VS Code
- XAMPP
- Git
- Postman

---

# 📁 Struktur Project

```
ci4/
│
├── app/
│   ├── Config/
│   ├── Controllers/
│   ├── Filters/
│   ├── Models/
│   └── Views/
│
├── public/
├── writable/
└── .env


lab8_vuejs/
│
├── assets/
│   ├── css/
│   └── js/
│       └── components/
│
├── index.html
└── README.md
```

---

# 🚀 Cara Menjalankan

## Clone Repository

```bash
git clone https://github.com/username/repository.git
```

---

## Import Database

Buat database

```
user_login
```

Import

```
user_login.sql
```

---

## Menjalankan Backend

```bash
cd ci4

composer install

cp env .env

php spark serve
```

Backend berjalan pada

```
http://localhost:8080
```

---

## Menjalankan Frontend

```bash
cd lab8_vuejs
```

Jalankan menggunakan Live Server

atau buka

```
http://localhost/lab8_vuejs/index.html
```

---

# 🔑 Login

```
Username : admin
Password : rahasia
```

---

# 📡 Dokumentasi API

## Artikel

| Method | Endpoint | Auth |
|---------|----------|------|
| GET | /post | ❌ |
| GET | /post/{id} | ❌ |
| POST | /post | ✅ |
| PUT | /post/{id} | ✅ |
| DELETE | /post/{id} | ✅ |

---

## Login

```
POST /api/login
```

### Request

```json
{
    "username":"admin",
    "password":"rahasia"
}
```

### Response

```json
{
    "status":200,
    "messages":"Login Berhasil",
    "data":{
        "id":1,
        "username":"admin",
        "token":"VE9LRU4tU0VDUkVULWFkbWlu"
    }
}
```

---

# 📸 Screenshot

Tambahkan screenshot hasil praktikum berikut:
<img width="2240" height="1328" alt="Cuplikan layar 2026-06-28 234642" src="https://github.com/user-attachments/assets/a3eae130-cd6d-4a22-a6f9-0b6cea757a88" />
<img width="2240" height="1328" alt="Cuplikan layar 2026-06-28 234652" src="https://github.com/user-attachments/assets/ffb5fc5d-574d-4322-8eb6-2b5d96014e9b" />
<img width="2240" height="1328" alt="Cuplikan layar 2026-06-28 234700" src="https://github.com/user-attachments/assets/ed6f4b0c-5f34-4cb7-aff8-06c82bcf61b2" />
<img width="2240" height="1328" alt="Cuplikan layar 2026-06-28 234711" src="https://github.com/user-attachments/assets/fba15396-2f0d-41d8-b971-8a9bf7c1f561" />
<img width="2240" height="1328" alt="Cuplikan layar 2026-06-28 234722" src="https://github.com/user-attachments/assets/25e53d2e-7ef5-4ee7-893e-45fcc088b1cd" />

Contoh:

```
images/
├── ajax-dashboard.png
├── admin-artikel.png
├── login.png
├── vue-router.png
└── postman.png
```

---

# 🎥 Demo

Video Presentasi

```
https://youtu.be/xSLnUk1XGf4?si=Xu98Du_M1vnNvqk0
```

---

# 🎯 Hasil Pembelajaran

- ✅ Memahami AJAX
- ✅ CRUD Asynchronous
- ✅ REST API
- ✅ VueJS
- ✅ Axios
- ✅ Vue Router
- ✅ Navigation Guards
- ✅ Authentication
- ✅ API Security
- ✅ Decoupled Architecture

---

# 📊 Status Praktikum

| Modul | Materi | Status |
|--------|---------|--------|
| 8 | AJAX CRUD | ✅ |
| 9 | Pagination & Search | ✅ |
| 10 | REST API | ✅ |
| 11 | VueJS | ✅ |
| 12 | Vue Router | ✅ |
| 13 | Authentication | ✅ |
| 14 | API Security | ✅ |

---

# 🏁 Kesimpulan

Seluruh modul praktikum berhasil diimplementasikan dengan baik. Aplikasi mampu menjalankan proses CRUD secara asynchronous menggunakan AJAX, menyediakan REST API berbasis CodeIgniter 4, mengembangkan frontend menggunakan VueJS, membangun Single Page Application (SPA), serta menerapkan autentikasi dan keamanan API menggunakan Bearer Token, Navigation Guards, CodeIgniter Filters, dan Axios Interceptors.

Implementasi tersebut memberikan pemahaman mengenai konsep pemisahan frontend dan backend (Decoupled Architecture) serta penerapan teknologi web modern dalam pengembangan aplikasi berbasis RESTful API.

---

# 👨‍💻 Kontributor

| Nama | NIM | Peran |
|------|------|------|
| **Muhammad Said Abimanyu** | **312410145** | Mahasiswa |

---

# 📄 Lisensi

Repository ini dibuat untuk keperluan akademik dan pembelajaran.

```
© 2026 Muhammad Said Abimanyu

Program Studi Teknik Informatika
Universitas Pelita Bangsa
Tahun Akademik 2025/2026
```

> *"Kode yang baik adalah kode yang dapat dipahami oleh manusia dan dijalankan oleh mesin."*

---

---

<p align="center">
Terima kasih telah mengunjungi repository ini 🙏
<br>
Semoga bermanfaat dan dapat menjadi referensi pembelajaran.
</p>
