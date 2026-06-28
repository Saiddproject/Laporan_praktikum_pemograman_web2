<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(145deg, #f1f5f9 0%, #e6edf4 100%);
            font-family: 'Inter', sans-serif;
            padding: 2rem 1rem;
        }
        .admin-card {
            border: none;
            border-radius: 28px;
            box-shadow: 0 20px 35px -12px rgba(0,0,0,0.1);
            overflow: hidden;
            background-color: rgba(255,255,255,0.95);
        }
        .card-header-custom {
            background: #ffffff;
            border-bottom: 1px solid #e9edf2;
            padding: 1.2rem 1.8rem;
        }
        .table-custom {
            margin-bottom: 0;
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
        }
        .table-custom tbody td {
            padding: 1rem 1.2rem;
            vertical-align: middle;
            border-bottom: 1px solid #ecf3fa;
            color: #1f2a3e;
            font-weight: 500;
        }
        .table-custom tbody tr:hover {
            background-color: #fefefe;
        }
        .badge-kategori {
            background: #eef2ff;
            color: #1e40af;
            padding: 0.3rem 0.8rem;
            border-radius: 40px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .btn-action {
            width: 34px;
            height: 34px;
            padding: 0;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: 0.2s;
            margin: 0 2px;
        }
        .btn-edit-action {
            background: #eef2ff;
            color: #2563eb;
            border: none;
        }
        .btn-edit-action:hover {
            background: #2563eb;
            color: white;
            transform: translateY(-2px);
        }
        .btn-delete-action {
            background: #fee2e2;
            color: #dc2626;
            border: none;
        }
        .btn-delete-action:hover {
            background: #dc2626;
            color: white;
            transform: translateY(-2px);
        }
        .pagination-modern .page-link {
            border-radius: 40px;
            margin: 0 4px;
            border: none;
            background: #f1f5f9;
            color: #1f2a3e;
            font-weight: 500;
        }
        .pagination-modern .page-link:hover {
            background: #0d6efd;
            color: white;
        }
        .pagination-modern .page-item.active .page-link {
            background: #0d6efd;
            color: white;
            box-shadow: 0 4px 8px rgba(13,110,253,0.2);
        }
        .filter-form .form-control, .filter-form .form-select {
            border-radius: 40px;
            padding: 0.45rem 1rem;
            border: 1px solid #cfdfed;
        }
        .btn-search, .btn-sort {
            border-radius: 40px;
            padding: 0.45rem 1rem;
            font-weight: 500;
        }
        .footer-text {
            font-size: 0.75rem;
            color: #5b6e8c;
        }
    </style>
</head>
<body>

<div class="container-lg">
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
        <div>
            <h1 class="display-6 fw-bold mb-1" style="font-size: 1.9rem;">📄 Manajemen Artikel</h1>
            <p class="text-secondary-emphasis mb-0">AJAX + Pagination + Sorting | Real-time tanpa reload</p>
        </div>
        <div class="mt-2 mt-sm-0">
            <a href="<?= base_url('artikel/tambah') ?>" class="btn btn-primary shadow-sm rounded-pill px-4">
                <i class="bi bi-plus-circle me-2"></i> Artikel Baru
            </a>
        </div>
    </div>

    <div class="admin-card">
        <div class="card-header-custom">
            <div class="row g-3 align-items-center">
                <div class="col-md-8">
                    <form id="search-form" class="row g-2 filter-form">
                        <div class="col-md-4 col-12">
                            <input type="text" id="search-box" class="form-control" placeholder="🔍 Cari judul..." value="<?= esc($q); ?>">
                        </div>
                        <div class="col-md-3 col-8">
                            <select id="category-filter" class="form-select">
                                <option value="">📂 Semua Kategori</option>
                                <?php foreach ($kategori as $k): ?>
                                    <option value="<?= $k['id_kategori']; ?>" <?= ($kategori_id == $k['id_kategori']) ? 'selected' : ''; ?>>
                                        <?= esc($k['nama_kategori']); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-2 col-4">
                            <button type="submit" class="btn btn-primary btn-search w-100">
                                <i class="bi bi-search me-1"></i> Cari
                            </button>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="d-flex gap-2">
                                <button type="button" id="sort-asc" class="btn btn-outline-secondary btn-sort flex-fill" data-sort="asc">
                                    <i class="bi bi-sort-alpha-up"></i> A-Z
                                </button>
                                <button type="button" id="sort-desc" class="btn btn-outline-secondary btn-sort flex-fill" data-sort="desc">
                                    <i class="bi bi-sort-alpha-down"></i> Z-A
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 text-md-end text-start">
                    <span class="badge bg-light text-dark px-3 py-2 rounded-pill">
                        <i class="bi bi-database"></i> Total data: <span id="totalCountSpan">0</span>
                    </span>
                </div>
            </div>
        </div>

        <div id="loading" class="text-center py-5" style="display: none;">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;"></div>
            <p class="mt-2 text-muted">Memuat data...</p>
        </div>

        <div id="article-container"></div>
        <div id="pagination-container" class="px-4 pb-4"></div>
    </div>

    <div class="text-center footer-text mt-4">
        <i class="bi bi-arrow-repeat"></i> Semua perubahan dimuat secara otomatis tanpa reload halaman
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function() {
    let currentSort = '<?= $sort; ?>';

    function fetchData(url) {
        $('#loading').show();
        $('#article-container').html('');
        $('#pagination-container').empty();
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            success: function(data) {
                renderArticles(data.artikel);
                renderPagination(data.pager, data.q, data.kategori_id, data.sort);
                $('#totalCountSpan').text(data.artikel ? data.artikel.length : 0);
                $('#loading').hide();
            },
            error: function() {
                $('#article-container').html('<div class="alert alert-danger m-4">⚠️ Gagal memuat data.</div>');
                $('#loading').hide();
            }
        });
    }

    function renderArticles(articles) {
        if (!articles || articles.length === 0) {
            $('#article-container').html('<div class="alert alert-info m-4 text-center"><i class="bi bi-inbox fs-1 d-block mb-2"></i>Belum ada artikel.</div>');
            return;
        }
        let html = '<div class="table-responsive"><table class="table table-custom">';
        html += '<thead><tr><th>No</th><th>Judul Artikel</th><th>Kategori</th><th class="text-end">Aksi</th></tr></thead><tbody>';
        $.each(articles, function(i, a) {
            let kategoriBadge = a.nama_kategori ? `<span class="badge-kategori"><i class="bi bi-tag"></i> ${escapeHtml(a.nama_kategori)}</span>` : '<span class="badge bg-secondary">-</span>';
            let judulPotong = escapeHtml(a.judul);
            let isiPreview = a.isi ? escapeHtml(a.isi.substring(0, 85)) + (a.isi.length > 85 ? '…' : '') : '';
            html += `<tr>
                        <td class="fw-semibold text-secondary">${a.no}</td>
                        <td>
                            <div class="fw-bold mb-1">${judulPotong}</div>
                            <div class="small text-muted">${isiPreview}</div>
                        </td>
                        <td>${kategoriBadge}</td>
                        <td class="text-end">
                            <a href="/artikel/edit/${a.id}" class="btn-action btn-edit-action" data-bs-toggle="tooltip" title="Edit">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <button class="btn-action btn-delete-action btn-delete" data-id="${a.id}" data-bs-toggle="tooltip" title="Hapus">
                                <i class="bi bi-trash3"></i>
                            </button>
                        </td>
                     </tr>`;
        });
        html += '</tbody></table></div>';
        $('#article-container').html(html);
        $('[data-bs-toggle="tooltip"]').tooltip();
    }

    function renderPagination(pager, q, kategori_id, sort) {
        if (!pager || !pager.links || pager.links.length === 0) {
            $('#pagination-container').empty();
            return;
        }
        let html = '<nav><ul class="pagination justify-content-center pagination-modern">';
        $.each(pager.links, function(i, link) {
            let url = link.url;
            if (url) {
                let sep = url.includes('?') ? '&' : '?';
                url = url + sep + `q=${encodeURIComponent(q)}&kategori_id=${encodeURIComponent(kategori_id)}&sort=${sort}`;
            } else {
                url = '#';
            }
            let active = link.active ? 'active' : '';
            html += `<li class="page-item ${active}"><a class="page-link" href="${url}">${link.title}</a></li>`;
        });
        html += '</ul></nav>';
        $('#pagination-container').html(html);
        $('#pagination-container .page-link').click(function(e) {
            e.preventDefault();
            let url = $(this).attr('href');
            if (url && url !== '#') fetchData(url);
        });
    }

    function escapeHtml(str) {
        if (!str) return '';
        return str.replace(/[&<>]/g, function(m) {
            if (m === '&') return '&amp;';
            if (m === '<') return '&lt;';
            if (m === '>') return '&gt;';
            return m;
        });
    }

    function buildUrl() {
        let q = $('#search-box').val();
        let kid = $('#category-filter').val();
        return '<?= base_url('artikel/admin'); ?>?' + $.param({q: q, kategori_id: kid, sort: currentSort});
    }

    // Initial load
    fetchData(buildUrl());

    // Search & filter
    $('#search-form').on('submit', function(e) {
        e.preventDefault();
        fetchData(buildUrl());
    });
    $('#category-filter').on('change', function() {
        fetchData(buildUrl());
    });

    // Sorting buttons
    $('#sort-asc').click(function() {
        currentSort = 'asc';
        fetchData(buildUrl());
    });
    $('#sort-desc').click(function() {
        currentSort = 'desc';
        fetchData(buildUrl());
    });

    // Delete
    $(document).on('click', '.btn-delete', function() {
        let id = $(this).data('id');
        if (confirm('⚠️ Yakin ingin menghapus artikel ini?')) {
            $.ajax({
                url: '<?= base_url('ajax/delete'); ?>',
                type: 'POST',
                data: { id: id },
                dataType: 'json',
                success: function(res) {
                    if (res.status === 'success') {
                        fetchData(buildUrl());
                        alert('✅ ' + res.message);
                    } else {
                        alert('❌ Gagal: ' + (res.message || 'Terjadi kesalahan'));
                    }
                },
                error: function() {
                    alert('❌ Gagal menghapus artikel.');
                }
            });
        }
    });
});
</script>
</body>
</html>