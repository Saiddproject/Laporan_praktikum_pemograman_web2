<?= $this->include('template/header'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<div class="container" style="padding: 60px 20px; font-family: 'Plus Jakarta Sans', 'Segoe UI', sans-serif; background-color: #ffffff;">
    
    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 30px;">
        <div>
            <h1 style="color: #1e293b; font-weight: 800; font-size: 2.2rem; margin: 0; letter-spacing: -1px;">
                Manajemen <span style="color: #4e73df;">Artikel</span>
            </h1>
            <p style="color: #64748b; margin-top: 5px; font-size: 1rem;">Kelola konten dan publikasi Anda dengan mudah.</p>
        </div>
        
        <?php if (session()->get('role') === 'admin') : ?>
            <a href="<?= base_url('/artikel/tambah'); ?>" style="padding: 12px 24px; background: #4e73df; color: white; border-radius: 12px; text-decoration: none; font-weight: 700; display: flex; align-items: center; gap: 8px; transition: 0.3s; box-shadow: 0 4px 12px rgba(78, 115, 223, 0.2);" onmouseover="this.style.background='#224abe'" onmouseout="this.style.background='#4e73df'">
                <i class="fas fa-plus-circle"></i> Tambah Artikel
            </a>
        <?php endif; ?>
    </div>

    <hr style="border: 0; border-top: 1px solid #e2e8f0; margin-bottom: 40px;">

    <?php if (!empty($artikel) && is_array($artikel)): ?>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 32px;">
            <?php foreach ($artikel as $row): ?>
                <div class="article-card" style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); border: 1px solid #f1f5f9; display: flex; flex-direction: column;">
                    
                    <div style="overflow: hidden; height: 180px; position: relative;">
                        <?php if ($row['gambar']): ?>
                            <img src="<?= base_url('img/' . $row['gambar']); ?>" alt="<?= $row['judul']; ?>" style="width: 100%; height: 100%; object-fit: cover; transition: 0.6s;">
                        <?php else: ?>
                            <img src="<?= base_url('img/default.jpg'); ?>" alt="Default" style="width: 100%; height: 100%; object-fit: cover;">
                        <?php endif; ?>
                        
                        <div style="position: absolute; top: 15px; left: 15px;">
                            <span style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(4px); color: #4e73df; padding: 4px 12px; border-radius: 8px; font-size: 11px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.5px;">
                                <?= $row['nama_kategori'] ?? 'Umum'; ?>
                            </span>
                        </div>
                    </div>

                    <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column;">
                        <h3 style="margin: 0 0 12px 0; color: #0f172a; font-size: 1.2rem; font-weight: 700; line-height: 1.4;"><?= $row['judul']; ?></h3>
                        
                        <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-bottom: 24px; flex-grow: 1;">
                            <?= substr(strip_tags($row['isi']), 0, 100); ?>...
                        </p>

                        <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 18px; border-top: 1px solid #f1f5f9;">
                            <div style="display: flex; gap: 12px;">
                                <?php if (session()->get('role') === 'admin') : ?>
                                    <a href="<?= base_url('/artikel/edit/' . $row['id']); ?>" style="color: #4e73df; text-decoration: none; font-size: 13px; font-weight: 700; transition: 0.2s;" onmouseover="this.style.color='#1e293b'" onmouseout="this.style.color='#4e73df'">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="<?= base_url('/artikel/hapus/' . $row['id']); ?>" onclick="return confirm('Hapus artikel ini?')" style="color: #ef4444; text-decoration: none; font-size: 13px; font-weight: 700; transition: 0.2s;" onmouseover="this.style.color='#991b1b'" onmouseout="this.style.color='#ef4444'">
                                        <i class="fas fa-trash"></i> Hapus
                                    </a>
                                <?php else : ?>
                                    <a href="#" style="color: #4e73df; text-decoration: none; font-size: 13px; font-weight: 700;">
                                        Baca Selengkapnya
                                    </a>
                                <?php endif; ?>
                            </div>
                            
                            <span style="font-size: 11px; color: #94a3b8; font-weight: 600;">
                                <i class="far fa-calendar-alt"></i> <?= date('d M Y'); ?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div style="text-align: center; padding: 80px 20px; background: #f8fafc; border-radius: 24px; border: 2px dashed #e2e8f0;">
            <i class="fas fa-file-signature" style="font-size: 3.5rem; color: #cbd5e0; margin-bottom: 20px;"></i>
            <p style="color: #64748b; font-size: 1.1rem; font-weight: 500;">Belum ada artikel yang tersedia.</p>
        </div>
    <?php endif; ?>
</div>

<style>
    /* Efek Hover untuk Kartu */
    .article-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
        border-color: #cbd5e0 !important;
    }
    
    /* Efek Zoom Gambar saat Kartu di-hover */
    .article-card:hover img {
        transform: scale(1.1);
    }

    /* Memastikan font terlihat premium */
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
</style>

<?= $this->include('template/footer'); ?>