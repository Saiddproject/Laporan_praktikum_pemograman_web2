<?= $this->include('template/header'); ?>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<div class="minimal-contact-wrapper">
    <div class="contact-card animate-fade-in">
        
        <header class="contact-header-container">
            <h1 class="minimal-title"><?= esc($title); ?></h1>
            <p class="minimal-subtitle">Kami senang mendengar dari Anda. Silakan hubungi kami melalui saluran di bawah ini.</p>
        </header>

        <div class="contact-grid">
            <div class="contact-info-list">
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-envelope"></i></div>
                    <div class="info-text">
                        <span>Email</span>
                        <p>hello@perusahaan.com</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-phone"></i></div>
                    <div class="info-text">
                        <span>Telepon</span>
                        <p>+62 812 3456 7890</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="info-text">
                        <span>Lokasi</span>
                        <p>Cikarang, Jawa Barat, Indonesia</p>
                    </div>
                </div>
            </div>

            <div class="contact-description article-body">
                <?= $content; ?>
            </div>
        </div>

        <div class="minimal-map">
            <div class="map-overlay">
                <i class="fas fa-map-marked-alt"></i>
                <p>Buka di Google Maps</p>
            </div>
        </div>
    </div>
</div>

<style>
:root {
    --primary: #0056b3;
    --primary-light: #3b82f6;
    --text-main: #1e293b;
    --text-muted: #64748b;
    --bg: #f8fafc;
    --white: #ffffff;
    --border: #e2e8f0;
}

* {
    box-sizing: border-box;
}

.minimal-contact-wrapper {
    font-family: 'Inter', sans-serif;
    padding: 20px 0 50px;
    color: var(--text-main);
}

.contact-card {
    width: 100%;
}

/* HERO */
.contact-header-container {
    background: linear-gradient(
        135deg,
        var(--primary),
        var(--primary-light)
    );

    text-align: center;
    color: white;

    padding: 55px 25px;
    border-radius: 20px;

    position: relative;
    overflow: hidden;

    box-shadow:
        0 10px 25px rgba(0,86,179,.15);
}

.contact-header-container::before {
    content: '';
    position: absolute;
    width: 180px;
    height: 180px;
    background: rgba(255,255,255,.08);
    border-radius: 50%;
    top: -60px;
    right: -60px;
}

.contact-header-container::after {
    content: '';
    position: absolute;
    width: 120px;
    height: 120px;
    background: rgba(255,255,255,.06);
    border-radius: 50%;
    left: -40px;
    bottom: -40px;
}

.minimal-title {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 15px;
    position: relative;
    z-index: 2;
}

.minimal-subtitle {
    max-width: 600px;
    margin: auto;
    font-size: 1rem;
    line-height: 1.8;
    color: rgba(255,255,255,.9);
    position: relative;
    z-index: 2;
}

/* CONTENT WRAPPER */
.contact-grid {
    background: white;
    margin-top: 25px; /* Tidak overlap */
    border-radius: 20px;
    padding: 30px;

    display: grid;
    grid-template-columns: 320px 1fr;
    gap: 35px;

    box-shadow:
        0 10px 25px rgba(0,0,0,.05);
}

/* INFO */
.contact-info-list {
    display: flex;
    flex-direction: column;
    gap: 18px;
}

.info-item {
    background: #f8fafc;
    border: 1px solid var(--border);

    border-radius: 18px;
    padding: 18px;

    display: flex;
    align-items: center;
    gap: 15px;

    transition: .3s;
}

.info-item:hover {
    transform: translateY(-3px);
    box-shadow:
        0 8px 20px rgba(0,0,0,.05);
}

.info-icon {
    width: 55px;
    height: 55px;

    border-radius: 14px;

    background: linear-gradient(
        135deg,
        var(--primary),
        var(--primary-light)
    );

    color: white;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 20px;
}

.info-text span {
    display: block;
    font-size: 12px;
    color: var(--text-muted);
    text-transform: uppercase;
    margin-bottom: 5px;
}

.info-text p {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
}

/* DESCRIPTION */
.contact-description {
    color: var(--text-main);
    line-height: 1.9;
    font-size: 16px;

    border-left: 1px solid var(--border);
    padding-left: 30px;
}

.contact-description p {
    margin-bottom: 15px;
}

/* MAP */
.minimal-map {
    margin-top: 25px;

    height: 220px;

    background: #f8fafc;
    border: 1px solid var(--border);

    border-radius: 20px;

    display: flex;
    align-items: center;
    justify-content: center;

    transition: .3s;
    cursor: pointer;
}

.minimal-map:hover {
    transform: translateY(-3px);
    box-shadow:
        0 10px 20px rgba(0,0,0,.05);
}

.map-overlay {
    text-align: center;
    color: var(--text-muted);
}

.map-overlay i {
    font-size: 40px;
    color: var(--primary);
    margin-bottom: 10px;
}

.map-overlay p {
    margin: 0;
    font-weight: 600;
}

.animate-fade-in {
    animation: fadeIn .8s ease;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* RESPONSIVE */
@media (max-width: 992px) {

    .contact-grid {
        grid-template-columns: 1fr;
    }

    .contact-description {
        border-left: none;
        border-top: 1px solid var(--border);
        padding-left: 0;
        padding-top: 25px;
    }
}

@media (max-width: 768px) {

    .minimal-title {
        font-size: 2rem;
    }

    .contact-header-container {
        padding: 45px 20px;
    }

    .contact-grid {
        padding: 20px;
    }

    .minimal-map {
        height: 180px;
    }
}
</style>

<?= $this->include('template/footer'); ?>