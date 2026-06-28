<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>
<body>
    <div id="container">
        <header>
            <h1>Layout Sederhana</h1>
        </header>
        <nav style="display: flex; justify-content: space-between; align-items: center;">
            <div>
                <a href="<?= base_url('/'); ?>" class="<?= ($title == 'Home') ? 'active' : ''; ?>">Home</a>
                <a href="<?= base_url('/artikel'); ?>" class="<?= ($title == 'Daftar Artikel') ? 'active' : ''; ?>">Artikel</a>
                <a href="<?= base_url('/about'); ?>" class="<?= ($title == 'About') ? 'active' : ''; ?>">About</a>
                <a href="<?= base_url('/contact'); ?>" class="<?= ($title == 'Kontak') ? 'active' : ''; ?>">Kontak</a>
            </div>

            <div style="margin-right: 20px;">
                <?php if (session()->get('logged_in')) : ?>
                    <span style="color: #666; font-size: 14px; margin-right: 10px;">
                        <i class="fas fa-user-circle"></i> Hi, <?= session()->get('role'); ?>
                    </span>
                    <a href="<?= base_url('/user/logout'); ?>" 
                       style="color: #e74a3b; font-weight: bold; text-decoration: none;"
                       onclick="return confirm('Apakah Anda ingin keluar?')">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                <?php else : ?>
                    <a href="<?= base_url('/user/login'); ?>" 
                       style="color: #4e73df; font-weight: bold; text-decoration: none;">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                <?php endif; ?>
            </div>
        </nav>
        <section id="wrapper">
            <section id="main">