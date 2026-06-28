<?= $this->include('template/header'); ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

    :root {
        --primary: #2563eb;
        --primary-light: #4f8cff;
        --dark: #111827;
        --text: #6b7280;
        --light: #f8fafc;
        --white: #ffffff;
    }

    * {
        box-sizing: border-box;
    }

    .about-section {
        font-family: 'Inter', sans-serif;
        padding: 40px 0 80px;
    }

    .container {
        max-width: 1000px;
        margin: auto;
        padding: 0 20px;
    }

    /* HERO */
    .about-hero {
        background: linear-gradient(
            135deg,
            var(--primary),
            var(--primary-light)
        );

        color: white;
        text-align: center;
        padding: 70px 30px 100px;
        border-radius: 24px;
        position: relative;
        overflow: hidden;
    }

    .about-hero::before {
        content: '';
        position: absolute;
        width: 250px;
        height: 250px;
        background: rgba(255,255,255,.1);
        border-radius: 50%;
        top: -80px;
        right: -80px;
    }

    .about-hero::after {
        content: '';
        position: absolute;
        width: 180px;
        height: 180px;
        background: rgba(255,255,255,.08);
        border-radius: 50%;
        bottom: -60px;
        left: -60px;
    }

    .about-hero h1 {
        font-size: 42px;
        font-weight: 700;
        margin-bottom: 15px;
        position: relative;
        z-index: 2;
    }

    .about-hero p {
        max-width: 650px;
        margin: auto;
        font-size: 18px;
        line-height: 1.8;
        opacity: .95;
        position: relative;
        z-index: 2;
    }

    /* CONTENT CARD */
    .about-card {
        background: var(--white);
        padding: 35px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,.08);

        margin: -50px auto 0;
        position: relative;
        z-index: 5;

        color: #4b5563;
        line-height: 1.9;
        font-size: 16px;
    }

    .about-card p {
        margin: 0;
    }

    /* GRID */
    .about-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
        gap: 20px;
        margin-top: 40px;
    }

    .about-box {
        background: white;
        padding: 30px 25px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 8px 20px rgba(0,0,0,.05);
        transition: all .3s ease;
    }

    .about-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,.08);
    }

    .about-icon {
        width: 65px;
        height: 65px;

        margin: 0 auto 20px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: linear-gradient(
            135deg,
            var(--primary),
            var(--primary-light)
        );

        color: white;
        font-size: 28px;
    }

    .about-box h3 {
        font-size: 22px;
        color: var(--dark);
        margin-bottom: 15px;
    }

    .about-box p {
        color: var(--text);
        font-size: 15px;
        line-height: 1.8;
        margin: 0;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {

        .about-section {
            padding: 20px 0 50px;
        }

        .about-hero {
            padding: 50px 20px 80px;
            border-radius: 18px;
        }

        .about-hero h1 {
            font-size: 32px;
        }

        .about-hero p {
            font-size: 16px;
        }

        .about-card {
            margin-top: -35px;
            padding: 25px;
        }

        .about-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="about-section">

    <div class="container">

        <!-- HERO -->
        <div class="about-hero">
            <h1><?= esc($title); ?></h1>

            <p>
                Kami berkomitmen menghadirkan solusi digital modern,
                inovatif, dan terpercaya untuk memenuhi kebutuhan pengguna.
            </p>
        </div>

        <!-- CONTENT -->
        <div class="about-card">
            <p><?= nl2br(esc($content)); ?></p>
        </div>

        <!-- VISI MISI VALUE -->
        <div class="about-grid">

            <div class="about-box">
                <div class="about-icon">🎯</div>

                <h3>Visi</h3>

                <p>
                    Menjadi platform digital modern yang inovatif,
                    terpercaya, dan memberikan dampak positif.
                </p>
            </div>

            <div class="about-box">
                <div class="about-icon">🚀</div>

                <h3>Misi</h3>

                <p>
                    Menyediakan solusi teknologi berkualitas tinggi
                    dengan layanan terbaik bagi pengguna.
                </p>
            </div>

            <div class="about-box">
                <div class="about-icon">💡</div>

                <h3>Value</h3>

                <p>
                    Mengutamakan inovasi, integritas,
                    kecepatan, dan kepuasan pelanggan.
                </p>
            </div>

        </div>

    </div>

</section>

<?= $this->include('template/footer'); ?>