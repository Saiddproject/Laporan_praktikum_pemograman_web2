<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Plus Jakarta Sans', sans-serif; }
        body {
            background: #f0f2f5;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: white;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-card h2 { color: #1e3a8a; margin-bottom: 10px; font-weight: 800; }
        .login-card p { color: #64748b; margin-bottom: 30px; font-size: 14px; }
        .form-group { text-align: left; margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 600; color: #475569; }
        
        /* Container untuk input password agar icon bisa melayang di dalam */
        .password-container {
            position: relative;
            display: flex;
            align-items: center;
        }
        
        .form-group input {
            width: 100%;
            padding: 12px 16px;
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            outline: none;
            transition: 0.3s;
        }
        
        /* Memberi ruang sedikit di kanan agar teks tidak tertutup icon */
        .password-container input {
            padding-right: 45px;
        }

        .form-group input:focus { border-color: #1e3a8a; box-shadow: 0 0 0 4px rgba(30, 58, 138, 0.1); }
        
        /* Styling Ikon Mata */
        .toggle-password {
            position: absolute;
            right: 15px;
            cursor: pointer;
            color: #94a3b8;
            transition: 0.3s;
        }
        .toggle-password:hover { color: #1e3a8a; }

        .btn-login {
            width: 100%;
            padding: 14px;
            background: #1e3a8a;
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }
        .btn-login:hover { background: #1e40af; transform: translateY(-2px); }
        
        .alert {
            background: #fee2e2;
            color: #ef4444;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 14px;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h2>Selamat Datang</h2>
    <p>Silakan login untuk mengelola artikel</p>

    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert">
            <i class="fas fa-exclamation-circle"></i> <?= session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('/user/login'); ?>" method="post">
        <div class="form-group">
            <label>Email / Username</label>
            <input type="text" name="username" placeholder="admin@gmail.com" required>
        </div>
        
        <div class="form-group">
            <label>Password</label>
            <div class="password-container">
                <input type="password" name="password" id="passwordField" placeholder="••••••••" required>
                <i class="fas fa-eye toggle-password" id="toggleIcon"></i>
            </div>
        </div>
        
        <button type="submit" class="btn-login">Masuk Sekarang</button>
    </form>
    
    <div style="margin-top: 25px; font-size: 13px; color: #94a3b8;">
        &copy; 2026 Project Artikel. Said Abimanyu
    </div>
</div>

<script>
    const passwordField = document.querySelector('#passwordField');
    const toggleIcon = document.querySelector('#toggleIcon');

    toggleIcon.addEventListener('click', function () {
        // Ubah tipe input dari password ke text atau sebaliknya
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
        
        // Ubah ikon mata (eye / eye-slash)
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
</script>

</body>
</html>