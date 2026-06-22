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

# 📄 Lisensi

Proyek ini dibuat untuk keperluan akademik dan pembelajaran.

© 2026 Muhammad Said Abimanyu

**Program Studi Teknik Informatika**
**Universitas Pelita Bangsa**
**Tahun Akademik 2025/2026**

> *"Kode yang baik adalah kode yang dapat dipahami oleh manusia dan dijalankan oleh mesin."*
