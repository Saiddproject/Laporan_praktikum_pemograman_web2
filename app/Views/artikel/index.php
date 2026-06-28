<?= $this->include('template/header'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<div class="main-content-card">
    <div class="container-fluid" style="padding: 40px 20px; background-color: #ffffff; min-height: 100vh;">
        
        <div class="page-header-flex animate-fade-up">
            <div>
                <h1 class="premium-title">Manajemen <span class="gradient-text">Artikel</span></h1>
                <p class="subtitle">Kelola konten dan publikasi portal Anda secara profesional.</p>
            </div>
            
            <?php if (session()->get('role') === 'admin') : ?>
                <a href="<?= base_url('/artikel/tambah'); ?>" class="btn-add-premium">
                    <i class="fas fa-plus-circle"></i> Tambah Artikel Baru
                </a>
            <?php endif; ?>
        </div>

        <div class="search-section animate-fade-up" style="margin-bottom: 30px;">
            <form action="" method="get" class="search-form">
                <div class="input-group-custom">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" name="keyword" value="<?= request()->getGet('keyword'); ?>" placeholder="Cari berdasarkan judul atau kategori artikel..." class="search-input">
                </div>
                
                <button type="submit" class="btn-search">
                    <i class="fas fa-filter"></i> Cari Data
                </button>

                <?php if (request()->getGet('keyword')) : ?>
                    <a href="<?= base_url('/artikel'); ?>" class="btn-reset">
                        <i class="fas fa-sync-alt"></i> Reset
                    </a>
                <?php endif; ?>
            </form>
        </div>

        <div class="clean-table-container animate-fade-up delay-1">
            <table class="luxury-table">
                <thead>
                    <tr>
                        <th width="150">Visual</th>
                        <th>Informasi Artikel</th>
                        <?php if (session()->get('role') === 'admin') : ?>
                            <th width="200" class="text-center">Tindakan</th>
                        <?php else : ?>
                            <th width="120" class="text-center">Aksi</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($artikel)) : ?>
                        <?php foreach ($artikel as $a) : ?>
                            <tr>
                                <td>
                                    <div class="img-preview-wrapper">
                                        <?php if ($a['gambar']): ?>
                                            <img src="<?= base_url('img/' . $a['gambar']); ?>" alt="Thumbnail">
                                        <?php else: ?>
                                            <img src="<?= base_url('img/default.jpg'); ?>" alt="Default">
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td>
                                    <!-- 🔥 MODIFIKASI: Judul menjadi link ke detail -->
                                    <h4 class="article-list-title">
                                        <a href="<?= base_url('artikel/detail/' . $a['slug']); ?>" style="text-decoration: none; color: #0f172a; transition: color 0.2s;" onmouseover="this.style.color='#4e73df'" onmouseout="this.style.color='#0f172a'">
                                            <?= esc($a['judul']); ?>
                                        </a>
                                    </h4>
                                    <span class="badge-category">
                                        <i class="fas fa-tag" style="font-size: 0.7rem; margin-right: 5px;"></i>
                                        <?= $a['nama_kategori'] ?? 'Tanpa Kategori'; ?>
                                    </span>
                                </td>
                                
                                <?php if (session()->get('role') === 'admin') : ?>
                                    <td>
                                        <div class="action-group">
                                            <a href="<?= base_url('/artikel/edit/' . $a['id']); ?>" class="btn-action edit" title="Edit Artikel">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="<?= base_url('/artikel/hapus/' . $a['id']); ?>" 
                                               class="btn-action delete" 
                                               onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')" 
                                               title="Hapus Artikel">
                                                 <i class="fas fa-trash-alt"></i> Hapus
                                            </a>
                                        </div>
                                    </td>
                                <?php else : ?>
                                    <!-- 🔥 MODIFIKASI: Tombol Baca untuk user -->
                                    <td>
                                        <div class="action-group">
                                            <a href="<?= base_url('artikel/detail/' . $a['slug']); ?>" class="btn-action edit" title="Baca Artikel">
                                                <i class="fas fa-book-open"></i> Baca
                                            </a>
                                        </div>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="<?= (session()->get('role') === 'admin') ? '3' : '3'; ?>" class="text-center" style="padding: 100px; color: #64748b;">
                                <i class="fas fa-search-minus" style="font-size: 3.5rem; display: block; margin-bottom: 20px; opacity: 0.3;"></i>
                                <span style="font-weight: 600; font-size: 1.1rem;">Data yang Anda cari tidak ditemukan.</span>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .main-content-card { background-color: #ffffff; font-family: 'Plus Jakarta Sans', sans-serif; }

    .page-header-flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 1px solid #f1f5f9;
    }

    .premium-title { font-size: 2.2rem; font-weight: 800; color: #1e293b; margin-bottom: 5px; letter-spacing: -0.5px; }
    .gradient-text { color: #4e73df; }
    .subtitle { color: #64748b; font-size: 1rem; }

    /* Styling Fitur Search Baru */
    .search-form {
        display: flex;
        gap: 12px;
        align-items: center;
        background: #f8fafc;
        padding: 15px 20px;
        border-radius: 16px;
        border: 1px solid #e2e8f0;
    }

    .input-group-custom { flex-grow: 1; position: relative; }
    .search-icon { position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #94a3b8; }
    .search-input {
        width: 100%;
        padding: 12px 12px 12px 45px;
        border-radius: 10px;
        border: 1px solid #cbd5e0;
        outline: none;
        transition: 0.3s;
        font-family: inherit;
    }
    .search-input:focus { border-color: #4e73df; box-shadow: 0 0 0 4px rgba(78, 115, 223, 0.1); }

    .btn-search {
        padding: 12px 24px;
        background: #1e293b;
        color: white;
        border: none;
        border-radius: 10px;
        font-weight: 700;
        cursor: pointer;
        transition: 0.3s;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .btn-search:hover { background: #0f172a; transform: translateY(-1px); }

    .btn-reset { color: #ef4444; text-decoration: none; font-size: 0.9rem; font-weight: 700; padding: 0 10px; }

    /* Tombol Tambah */
    .btn-add-premium {
        background: #4e73df;
        color: white;
        padding: 12px 24px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 700;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 4px 6px -1px rgba(78, 115, 223, 0.2);
    }
    .btn-add-premium:hover { background: #224abe; transform: translateY(-2px); color: white; }

    /* Tabel Styling */
    .clean-table-container { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1); }
    .luxury-table { width: 100%; border-collapse: collapse; }
    .luxury-table th { background: #f8fafc; padding: 18px 20px; text-align: left; color: #475569; font-weight: 700; text-transform: uppercase; font-size: 0.75rem; border-bottom: 1px solid #e2e8f0; }
    .luxury-table td { padding: 18px 20px; border-bottom: 1px solid #f1f5f9; vertical-align: middle; }

    /* Image & Badge */
    .img-preview-wrapper { width: 110px; height: 70px; border-radius: 10px; overflow: hidden; border: 1px solid #e2e8f0; }
    .img-preview-wrapper img { width: 100%; height: 100%; object-fit: cover; }
    .article-list-title { font-size: 1.1rem; font-weight: 700; color: #0f172a; margin-bottom: 6px; }
    .badge-category { background: #eff6ff; color: #3b82f6; font-size: 0.75rem; padding: 5px 14px; border-radius: 8px; font-weight: 700; border: 1px solid #dbeafe; }

    /* Actions */
    .action-group { display: flex; gap: 8px; justify-content: center; }
    .btn-action { padding: 8px 14px; border-radius: 10px; text-decoration: none; font-size: 0.85rem; font-weight: 700; transition: 0.2s; display: flex; align-items: center; gap: 6px; }
    .btn-action.edit { background: #f1f5f9; color: #475569; border: 1px solid #e2e8f0; }
    .btn-action.edit:hover { background: #e2e8f0; color: #1e293b; }
    .btn-action.delete { background: #fef2f2; color: #ef4444; border: 1px solid #fee2e2; }
    .btn-action.delete:hover { background: #ef4444; color: white; }

    /* Animations */
    @keyframes fadeUp { from { opacity: 0; transform: translateY(15px); } to { opacity: 1; transform: translateY(0); } }
    .animate-fade-up { animation: fadeUp 0.5s ease-out forwards; }
    .delay-1 { animation-delay: 0.1s; opacity: 0; }
</style>

<?= $this->include('template/footer'); ?>