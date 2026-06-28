<?= $this->include('template/header'); ?>

<div class="form-container">
    <div class="form-card">
        <h2>Tambah Artikel Baru</h2>
        <hr>
        
        <?php if (session()->getFlashdata('error')) : ?>
            <div style="background-color: #fee2e2; color: #ef4444; padding: 12px; border-radius: 6px; margin-bottom: 20px; font-size: 14px; border: 1px solid #fecaca;">
                <?= session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/artikel/simpan'); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            
            <div class="input-group">
                <label for="judul">Judul Artikel</label>
                <input type="text" name="judul" id="judul" placeholder="Masukkan judul artikel..." value="<?= old('judul'); ?>" required>
            </div>

            <div class="input-group">
                <label for="id_kategori">Kategori Artikel</label>
                <select name="id_kategori" id="id_kategori" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; background-color: white;">
                    <option value="" disabled selected>— Pilih Kategori —</option>
                    <?php foreach ($kategori as $k) : ?>
                        <option value="<?= $k['id_kategori']; ?>" <?= old('id_kategori') == $k['id_kategori'] ? 'selected' : ''; ?>>
                            <?= $k['nama_kategori']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="input-group">
                <label for="isi">Isi Artikel</label>
                <textarea name="isi" id="isi" placeholder="Tuliskan isi konten di sini..." required><?= old('isi'); ?></textarea>
            </div>

            <div class="input-group">
                <label for="gambar">Gambar Unggulan</label>
                <input type="file" name="gambar" id="gambar" accept="image/png, image/jpeg, image/jpg, image/webp" required>
                <small>Format yang didukung: JPG, PNG, WebP (Maks. 2MB)</small>
            </div>

            <div class="button-group">
                <button type="submit" class="btn-submit">Simpan Artikel</button>
                <a href="<?= base_url('/artikel'); ?>" class="btn-cancel">Batal</a>
            </div>

        </form>
    </div>
</div>

<style>
    .form-container {
        display: flex;
        justify-content: center;
        padding: 20px;
        background-color: transparent; 
        min-height: 70vh;
    }

    .form-card {
        background: #ffffff;
        width: 100%;
        max-width: 650px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        border-radius: 8px;
        border: 1px solid #eee;
    }

    .form-card h2 {
        color: #0056b3; 
        margin-top: 0;
        font-family: sans-serif;
        font-size: 24px;
    }

    .form-card hr {
        border: 0;
        border-top: 1px solid #eee;
        margin-bottom: 25px;
    }

    .input-group {
        margin-bottom: 20px;
    }

    .input-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #333;
        font-family: sans-serif;
    }

    .input-group input[type="text"],
    .input-group textarea,
    .input-group select {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 14px;
        transition: border-color 0.3s;
        box-sizing: border-box;
    }

    .input-group textarea {
        height: 180px;
        resize: vertical;
    }

    .input-group input:focus,
    .input-group textarea:focus,
    .input-group select:focus {
        border-color: #0056b3;
        outline: none;
    }

    .input-group small {
        color: #888;
        font-size: 12px;
        display: block;
        margin-top: 5px;
    }

    .button-group {
        display: flex;
        gap: 10px;
        margin-top: 10px;
    }

    .btn-submit {
        background-color: #0056b3;
        color: white;
        padding: 12px 25px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        flex: 2;
        transition: background 0.3s;
    }

    .btn-submit:hover {
        background-color: #004494;
    }

    .btn-cancel {
        background-color: #6c757d;
        color: white;
        padding: 12px 20px;
        text-decoration: none;
        text-align: center;
        border-radius: 6px;
        font-size: 16px;
        flex: 1;
        line-height: 2.4; 
    }

    .btn-cancel:hover {
        background-color: #5a6268;
    }
</style>

<?= $this->include('template/footer'); ?>