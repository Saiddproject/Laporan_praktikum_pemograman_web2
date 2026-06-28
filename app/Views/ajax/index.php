<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Dashboard AJAX CRUD | Artikel Manager</title>
    
    <!-- Bootstrap 5 CSS + Icons + Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(145deg, #f0f4fa 0%, #e9eef4 100%);
            font-family: 'Plus Jakarta Sans', 'Inter', system-ui, -apple-system, sans-serif;
            padding: 2rem 1rem;
            min-height: 100vh;
        }

        /* Container utama lebih lebar dan responsif */
        .custom-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Header section */
        .hero-section {
            background: rgba(255,255,255,0.6);
            backdrop-filter: blur(10px);
            border-radius: 32px;
            padding: 1.5rem 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 20px rgba(0,0,0,0.02);
            border: 1px solid rgba(255,255,255,0.8);
        }

        .badge-stats {
            background: #0d6efd10;
            color: #0d6efd;
            padding: 0.35rem 1rem;
            border-radius: 40px;
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        /* Card utama */
        .article-card {
            background: #ffffff;
            border-radius: 28px;
            border: none;
            overflow: hidden;
            box-shadow: 0 20px 35px -12px rgba(0,0,0,0.08);
            transition: all 0.25s ease;
        }

        .article-card:hover {
            box-shadow: 0 24px 40px -14px rgba(0,0,0,0.12);
        }

        /* Table styling modern */
        .table-custom {
            margin-bottom: 0;
            border-collapse: separate;
            border-spacing: 0;
        }

        .table-custom thead th {
            background: #f8fafd;
            color: #1e2a3e;
            font-weight: 700;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 1rem 1.2rem;
            border-bottom: 1px solid #e2e8f0;
            border-top: none;
        }

        .table-custom tbody td {
            padding: 1rem 1.2rem;
            vertical-align: middle;
            border-bottom: 1px solid #edf2f7;
            color: #1e293b;
            font-weight: 500;
            transition: background 0.2s;
        }

        .table-custom tbody tr:hover td {
            background-color: #fafcff;
        }

        /* ID badge */
        .id-badge {
            background: #eef2ff;
            color: #1e40af;
            padding: 0.25rem 0.75rem;
            border-radius: 40px;
            font-size: 0.8rem;
            font-weight: 700;
            display: inline-block;
        }

        /* Tombol aksi */
        .action-btn {
            width: 34px;
            height: 34px;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            transition: all 0.2s;
            font-size: 1rem;
            margin: 0 3px;
            border: none;
        }

        .btn-edit-custom {
            background: #eff6ff;
            color: #2563eb;
        }
        .btn-edit-custom:hover {
            background: #2563eb;
            color: white;
            transform: translateY(-2px);
        }

        .btn-delete-custom {
            background: #fee2e2;
            color: #dc2626;
        }
        .btn-delete-custom:hover {
            background: #dc2626;
            color: white;
            transform: translateY(-2px);
        }

        /* Modal modern */
        .modern-modal .modal-content {
            border-radius: 28px;
            border: none;
            box-shadow: 0 30px 50px rgba(0,0,0,0.2);
            overflow: hidden;
        }

        .modern-modal .modal-header {
            border-bottom: 1px solid #eef2f8;
            background: white;
            padding: 1.2rem 1.8rem;
        }

        .modern-modal .modal-body {
            padding: 1.8rem;
        }

        .modern-modal .modal-footer {
            background: #f9fbfd;
            border-top: none;
            padding: 1rem 1.8rem;
        }

        /* Form control modern */
        .form-control-modern {
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            padding: 0.75rem 1.2rem;
            font-size: 0.95rem;
            transition: all 0.2s;
        }
        .form-control-modern:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 4px rgba(59,130,246,0.15);
            outline: none;
        }

        /* Loading skeleton */
        .skeleton-row td {
            height: 68px;
            background: linear-gradient(90deg, #f0f2f5 25%, #e9ecef 50%, #f0f2f5 75%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
        }
        @keyframes shimmer {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        /* Toast custom */
        .toast-custom {
            border-radius: 20px;
            border-left: 6px solid;
            font-weight: 500;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section { padding: 1rem; }
            .table-custom thead th { font-size: 0.7rem; padding: 0.8rem; }
            .table-custom tbody td { padding: 0.8rem; font-size: 0.85rem; }
            .action-btn { width: 28px; height: 28px; font-size: 0.8rem; }
        }
    </style>

    <script src="<?= base_url('assets/js/jquery-3.7.1.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="custom-container">
    <!-- Header Hero -->
    <div class="hero-section d-flex flex-wrap justify-content-between align-items-center">
        <div>
            <div class="d-flex align-items-center gap-2 mb-2">
                <i class="bi bi-journal-bookmark-fill fs-3 text-primary"></i>
                <h1 class="display-6 fw-bold mb-0" style="font-size: 1.8rem;">Kelola Artikel</h1>
            </div>
            <p class="text-secondary-emphasis mb-0">Manajemen konten real-time dengan <span class="badge-stats ms-1">AJAX + jQuery</span></p>
        </div>
        <button class="btn btn-primary shadow-sm rounded-4 px-4 py-2 mt-3 mt-sm-0" id="btnTambah">
            <i class="bi bi-plus-circle me-2"></i> Artikel Baru
        </button>
    </div>

    <!-- Card Tabel -->
    <div class="article-card">
        <div class="p-0">
            <div class="table-responsive">
                <table class="table table-custom" id="artikelTable">
                    <thead>
                        <tr>
                            <th style="width: 10%">ID</th>
                            <th style="width: 65%">Judul Artikel</th>
                            <th class="text-end" style="width: 25%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <!-- Skeleton loading akan tampil di sini -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Modern -->
<div class="modal fade modern-modal" id="modalArtikel" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="modalTitle">
                    <i class="bi bi-pencil-square me-2"></i>Tambah Artikel
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="artikelId">
                <div class="mb-4">
                    <label class="form-label fw-semibold mb-2">📌 Judul Artikel</label>
                    <input type="text" id="judul" class="form-control form-control-modern" autocomplete="off">
                </div>
                <div>
                    <label class="form-label fw-semibold mb-2">✍️ Isi Konten</label>
                    <textarea id="isi" class="form-control form-control-modern" rows="6" placeholder="Tulis isi artikel di sini..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary rounded-pill px-5" id="simpanData">
                    <i class="bi bi-check-lg me-1"></i> Simpan
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Toast Notification (tanpa jQuery, menggunakan BS5) -->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1100">
    <div id="liveToast" class="toast toast-custom align-items-center border-0 shadow-lg" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true" data-bs-delay="3000">
        <div class="d-flex">
            <div class="toast-body" id="toastMessage">
                <!-- Pesan notifikasi -->
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    let myModal = new bootstrap.Modal(document.getElementById('modalArtikel'));
    let toastEl = document.getElementById('liveToast');
    let toast = new bootstrap.Toast(toastEl, { animation: true, autohide: true, delay: 3000 });

    function showToast(message, isSuccess = true) {
        $('#toastMessage').text(message);
        toastEl.classList.remove('text-bg-success', 'text-bg-danger', 'text-bg-warning');
        if (isSuccess) {
            toastEl.classList.add('text-bg-success');
        } else {
            toastEl.classList.add('text-bg-danger');
        }
        toast.show();
    }

    // Tampilkan skeleton loading
    function showSkeleton() {
        let skeletonRows = '';
        for (let i = 0; i < 3; i++) {
            skeletonRows += `<tr class="skeleton-row"><td colspan="3">&nbsp;</td></tr>`;
        }
        $('#tableBody').html(skeletonRows);
    }

    function loadData() {
        showSkeleton();
        $.ajax({
            url: "<?= base_url('ajax/getData') ?>",
            method: "GET",
            dataType: "json",
            timeout: 5000,
            success: function(data) {
                let rows = "";
                if (data.length === 0) {
                    rows = `<tr><td colspan="3" class="text-center py-5 text-muted"><i class="bi bi-inbox fs-1 d-block mb-2"></i>Belum ada artikel. Klik "Artikel Baru" untuk membuat.</td></tr>`;
                } else {
                    $.each(data, function(i, row) {
                        rows += `<tr>
                            <td><span class="id-badge">#${row.id}</span></td>
                            <td class="fw-semibold">${escapeHtml(row.judul)}</td>
                            <td class="text-end">
                                <button class="action-btn btn-edit-custom btn-edit" data-id="${row.id}" data-judul="${escapeHtml(row.judul)}" data-isi="${escapeHtml(row.isi)}">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="action-btn btn-delete-custom btn-delete" data-id="${row.id}">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>`;
                    });
                }
                $('#tableBody').html(rows);
            },
            error: function(xhr, status, err) {
                $('#tableBody').html(`<tr><td colspan="3" class="text-center text-danger py-4"><i class="bi bi-wifi-off"></i> Gagal memuat data: ${err}</td></tr>`);
                showToast('Gagal mengambil data dari server', false);
            }
        });
    }

    // fungsi untuk menghindari XSS
    function escapeHtml(str) {
        if(!str) return '';
        return str.replace(/[&<>]/g, function(m) {
            if (m === '&') return '&amp;';
            if (m === '<') return '&lt;';
            if (m === '>') return '&gt;';
            return m;
        }).replace(/[\uD800-\uDBFF][\uDC00-\uDFFF]/g, function(c) {
            return c;
        });
    }

    // Tombol tambah
    $('#btnTambah').click(function() {
        $('#modalTitle').html('<i class="bi bi-plus-circle me-2"></i>Tambah Artikel');
        $('#artikelId').val('');
        $('#judul').val('');
        $('#isi').val('');
        myModal.show();
    });

    // Tombol edit (delegasi)
    $(document).on('click', '.btn-edit', function() {
        let id = $(this).data('id');
        let judul = $(this).data('judul');
        let isi = $(this).data('isi');
        $('#modalTitle').html('<i class="bi bi-pencil-square me-2"></i>Edit Artikel');
        $('#artikelId').val(id);
        $('#judul').val(judul);
        $('#isi').val(isi);
        myModal.show();
    });

    // Simpan (tambah/edit)
    $('#simpanData').click(function() {
        let id = $('#artikelId').val();
        let judul = $.trim($('#judul').val());
        let isi = $.trim($('#isi').val());

        if (!judul || !isi) {
            showToast('Judul dan isi tidak boleh kosong!', false);
            return;
        }

        // Nonaktifkan tombol simpan sementara
        let saveBtn = $(this);
        saveBtn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-2"></span> Menyimpan...');

        $.ajax({
            url: "<?= base_url('ajax/save') ?>",
            method: "POST",
            data: { id: id, judul: judul, isi: isi },
            dataType: "json",
            success: function(res) {
                saveBtn.prop('disabled', false).html('<i class="bi bi-check-lg me-1"></i> Simpan');
                if (res.status === 'success') {
                    showToast(res.message, true);
                    myModal.hide();
                    loadData();
                } else {
                    showToast(res.message || 'Gagal menyimpan data', false);
                }
            },
            error: function(xhr, status, err) {
                saveBtn.prop('disabled', false).html('<i class="bi bi-check-lg me-1"></i> Simpan');
                let errorMsg = xhr.responseJSON?.message || err || 'Terjadi kesalahan server';
                showToast('Error: ' + errorMsg, false);
            }
        });
    });

    // Hapus artikel (kirim id via POST data)
    $(document).on('click', '.btn-delete', function() {
        let id = $(this).data('id');
        if (confirm('Apakah Anda yakin ingin menghapus artikel ini? Tindakan ini tidak dapat dibatalkan.')) {
            $.ajax({
                url: "<?= base_url('ajax/delete') ?>",
                method: "POST",
                data: { id: id },
                dataType: "json",
                success: function(res) {
                    if (res.status === 'success') {
                        showToast(res.message, true);
                        loadData();
                    } else {
                        showToast(res.message || 'Gagal menghapus', false);
                    }
                },
                error: function(xhr, status, err) {
                    showToast('Gagal menghapus: ' + err, false);
                }
            });
        }
    });

    // Initial load
    loadData();
});
</script>
</body>
</html>