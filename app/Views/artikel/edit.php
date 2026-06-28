<?= $this->include('template/header'); ?>

<div class="container" style="padding: 50px 0; font-family: 'Plus Jakarta Sans', sans-serif;">
    <div class="glass-card" style="max-width: 700px; margin: 0 auto; background: white; padding: 40px; border-radius: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
        
        <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px;">
            <div style="width: 12px; height: 35px; background: #1e3a8a; border-radius: 4px;"></div>
            <h2 style="color: #1e3a8a; margin: 0; font-weight: 800;">Edit Artikel</h2>
        </div>
        
        <form action="<?= base_url('/artikel/update/' . $artikel['id']); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?> <!-- 🔥 CSRF TOKEN DITAMBAHKAN -->
            <input type="hidden" name="gambarLama" value="<?= $artikel['gambar']; ?>">

            <div class="form-group" style="margin-bottom: 25px;">
                <label style="display: block; font-weight: 700; color: #475569; margin-bottom: 8px;">Judul Artikel</label>
                <input type="text" name="judul" class="form-control" value="<?= $artikel['judul']; ?>" required style="width: 100%; padding: 14px; border-radius: 12px; border: 1.5px solid #e2e8f0; outline: none; transition: 0.3s;" onfocus="this.style.borderColor='#1e3a8a'">
            </div>

            <div class="form-group" style="margin-bottom: 25px;">
                <label style="display: block; font-weight: 700; color: #475569; margin-bottom: 8px;">Kategori Artikel</label>
                <select name="id_kategori" required style="width: 100%; padding: 14px; border-radius: 12px; border: 1.5px solid #e2e8f0; background: white; outline: none; cursor: pointer;">
                    <option value="" disabled>— Pilih Kategori —</option>
                    <?php foreach ($kategori as $k) : ?>
                        <option value="<?= $k['id_kategori']; ?>" <?= ($artikel['id_kategori'] == $k['id_kategori']) ? 'selected' : ''; ?>>
                            <?= $k['nama_kategori']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <small style="color: #64748b; display: block; margin-top: 5px;">Pilih kategori yang paling sesuai dengan konten Anda.</small>
            </div>

            <div class="form-group" style="margin-bottom: 25px;">
                <label style="display: block; font-weight: 700; color: #475569; margin-bottom: 8px;">Thumbnail Saat Ini</label>
                <?php if ($artikel['gambar']): ?>
                    <div style="margin-bottom: 10px;">
                        <img src="<?= base_url('img/' . $artikel['gambar']); ?>" alt="Preview" style="width: 150px; border-radius: 12px; border: 1px solid #e2e8f0; display: block;">
                        <small style="color: #94a3b8;">File: <?= $artikel['gambar']; ?></small>
                    </div>
                <?php endif; ?>
                
                <label style="display: block; font-weight: 700; color: #475569; margin-bottom: 8px;">Ganti Foto (Opsional)</label>
                <input type="file" name="gambar" class="form-control" style="width: 100%; padding: 10px; border-radius: 12px; border: 1.5px solid #e2e8f0; background: #f8fafc;">
                <small style="color: #64748b; display: block; margin-top: 5px;">*Format: JPG/PNG, maksimal 2MB. Biarkan kosong jika tidak ingin ganti foto.</small>
            </div>

            <div class="form-group" style="margin-bottom: 30px;">
                <label style="display: block; font-weight: 700; color: #475569; margin-bottom: 8px;">Isi Konten</label>
                <textarea name="isi" class="form-control" rows="10" required style="width: 100%; padding: 14px; border-radius: 12px; border: 1.5px solid #e2e8f0; outline: none; transition: 0.3s; line-height: 1.6;" onfocus="this.style.borderColor='#1e3a8a'"><?= $artikel['isi']; ?></textarea>
            </div>

            <div style="display: flex; gap: 15px; border-top: 1px solid #f1f5f9; padding-top: 25px;">
                <button type="submit" class="btn-primary" style="background: #1e3a8a; color: white; padding: 14px 35px; border: none; border-radius: 12px; cursor: pointer; font-weight: 700; transition: 0.3s; box-shadow: 0 4px 12px rgba(30, 58, 138, 0.2);" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                    <i class="fas fa-save" style="margin-right: 8px;"></i> Simpan Perubahan
                </button>
                <a href="<?= base_url('/artikel'); ?>" class="btn-secondary" style="background: #f1f5f9; color: #64748b; padding: 14px 35px; border-radius: 12px; text-decoration: none; font-weight: 700; transition: 0.3s; display: flex; align-items: center;">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

<?= $this->include('template/footer'); ?>