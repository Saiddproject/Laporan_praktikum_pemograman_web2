<?= $this->include('template/header'); ?>

<div class="home-container">
    <section class="hero-section">
        <div class="hero-content">
            <h1>Selamat Datang di Portal <?= $title; ?></h1>
            <p>Solusi digital modern untuk pengelolaan informasi dan artikel berkualitas tinggi.</p>
            <div class="hero-buttons">
                <a href="<?= base_url('/artikel'); ?>" class="btn-primary">Mulai Membaca</a>
                <a href="<?= base_url('/about'); ?>" class="btn-secondary">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </section>

    <section class="features-grid">
        <div class="feature-box">
            <div class="icon">🚀</div>
            <h3>Cepat & Responsif</h3>
            <p>Aplikasi dibangun dengan CodeIgniter 4 untuk performa yang maksimal di berbagai perangkat.</p>
        </div>
        <div class="feature-box">
            <div class="icon">✍️</div>
            <h3>Manajemen Artikel</h3>
            <p>Tulis, edit, dan publikasikan artikel Anda dengan mudah melalui dashboard admin.</p>
        </div>
        <div class="feature-box">
            <div class="icon">🛡️</div>
            <h3>Sistem Aman</h3>
            <p>Keamanan data menjadi prioritas kami dengan enkripsi password dan proteksi database.</p>
        </div>
    </section>

    <section class="content-description">
        <h2>Tentang Situs Ini</h2>
        <div class="divider"></div>
        <p><?= $content; ?></p>
        <p>Gunakan platform ini untuk menjelajahi berbagai topik menarik atau mengelola konten artikel Anda secara profesional.</p>
    </section>
</div>

<style>
    .home-container {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #333;
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, #0056b3 0%, #1f7ce1 100%);
        color: white;
        padding: 80px 40px;
        border-radius: 15px;
        text-align: center;
        margin-bottom: 50px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .hero-content h1 {
        font-size: 42px;
        margin-bottom: 20px;
        color: #ffffff; /* PERBAIKAN: Memastikan teks putih bersih */
        text-shadow: 0 2px 10px rgba(0,0,0,0.2); /* Memberikan sedikit bayangan agar lebih terbaca */
    }

    .hero-content p {
        font-size: 18px;
        margin-bottom: 30px;
        color: #ffffff; /* PERBAIKAN: Teks paragraf jadi putih */
        opacity: 1;      /* PERBAIKAN: Menghilangkan efek redup (opacity) */
    }

    .hero-buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .btn-primary {
        background: #ffc107;
        color: #333;
        padding: 12px 25px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-secondary {
        background: rgba(255,255,255,0.1);
        color: white;
        padding: 12px 25px;
        border-radius: 8px;
        text-decoration: none;
        border: 1px solid white;
        transition: 0.3s;
    }

    .btn-primary:hover { background: #e0a800; transform: translateY(-2px); }
    .btn-secondary:hover { background: white; color: #0056b3; }

    /* Features Grid */
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
        margin-bottom: 50px;
    }

    .feature-box {
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        text-align: center;
        border: 1px solid #eee;
        transition: 0.3s;
    }

    .feature-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .feature-box .icon { font-size: 40px; margin-bottom: 15px; }
    .feature-box h3 { color: #0056b3; margin-bottom: 10px; }
    .feature-box p { color: #666; font-size: 14px; line-height: 1.6; }

    /* Content Description */
    .content-description {
        text-align: left;
        background: white;
        padding: 30px;
        border-radius: 12px;
        border-left: 5px solid #0056b3;
    }

    .divider {
        width: 60px;
        height: 4px;
        background: #0056b3;
        margin-bottom: 20px;
    }

    .content-description p {
        line-height: 1.8;
        font-size: 16px;
        margin-bottom: 10px;
    }
</style>

<?= $this->include('template/footer'); ?>