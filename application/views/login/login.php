<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?? 'E-Posyandu Login - Pelayanan Kesehatan Masyarakat'; ?></title>
    <link rel="icon" type="image/png" href="<?= base_url('build/img/'); ?>icon-posyandu.png">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('build/css/toastr.min.css') ?>">


    <style>
    :root {
        --primary-color: #2E8B57;
        --secondary-color: #3CB371;
        --accent-color: #20B2AA;
        --warm-color: #FFB347;
        --text-dark: #2C3E50;
        --text-light: #6C757D;
        --bg-light: #F8F9FA;
        --white: #FFFFFF;
        --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        --shadow-hover: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 50%, var(--accent-color) 100%);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow-x: hidden;
    }

    /* Animated Background Elements */
    .bg-decoration {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 1;
    }

    .floating-shape {
        position: absolute;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        animation: float 6s ease-in-out infinite;
    }

    .shape-1 {
        width: 80px;
        height: 80px;
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }

    .shape-2 {
        width: 60px;
        height: 60px;
        top: 60%;
        right: 15%;
        animation-delay: 2s;
    }

    .shape-3 {
        width: 100px;
        height: 100px;
        bottom: 20%;
        left: 20%;
        animation-delay: 4s;
    }

    .shape-4 {
        width: 40px;
        height: 40px;
        top: 30%;
        right: 30%;
        animation-delay: 1s;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
        }

        50% {
            transform: translateY(-20px) rotate(180deg);
        }
    }

    /* Main Container */
    .login-container {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 450px;
        margin: 0 auto;
        padding: 20px;
    }

    .login-card {
        background: var(--white);
        border-radius: 20px;
        box-shadow: var(--shadow);
        overflow: hidden;
        transition: all 0.3s ease;
        animation: slideUp 0.8s ease-out;
    }

    .login-card:hover {
        box-shadow: var(--shadow-hover);
        transform: translateY(-5px);
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Header Section */
    .login-header {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: var(--white);
        padding: 40px 30px;
        text-align: center;
        position: relative;
    }

    .login-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
        opacity: 0.3;
    }

    .logo-container {
        position: relative;
        z-index: 1;
        margin-bottom: 20px;
    }

    .logo-circle {
        width: 80px;
        height: 80px;
        background: var(--white);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }

        100% {
            transform: scale(1);
        }
    }

    .logo-icon {
        font-size: 2.5rem;
        color: var(--primary-color);
    }

    .welcome-text {
        position: relative;
        z-index: 1;
    }

    .welcome-text h1 {
        font-size: 1.8rem;
        font-weight: 600;
        margin-bottom: 8px;
        letter-spacing: -0.5px;
    }

    .welcome-text p {
        font-size: 0.95rem;
        opacity: 0.9;
        font-weight: 300;
    }

    /* Form Section */
    .login-form {
        padding: 40px 30px;
    }

    .form-group {
        margin-bottom: 25px;
        position: relative;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: var(--text-dark);
        font-size: 0.9rem;
    }

    .input-group {
        position: relative;
    }

    .input-icon {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-light);
        font-size: 1.1rem;
        z-index: 2;
        transition: color 0.3s ease;
    }

    .form-control {
        width: 100%;
        padding: 15px 15px 15px 50px;
        border: 2px solid #E9ECEF;
        border-radius: 12px;
        font-size: 1rem;
        font-weight: 400;
        transition: all 0.3s ease;
        background: var(--bg-light);
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary-color);
        background: var(--white);
        box-shadow: 0 0 0 0.2rem rgba(46, 139, 87, 0.15);
    }

    .form-control:focus+.input-icon {
        color: var(--primary-color);
    }

    .password-toggle {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: var(--text-light);
        cursor: pointer;
        font-size: 1.1rem;
        z-index: 2;
        transition: color 0.3s ease;
    }

    .password-toggle:hover {
        color: var(--primary-color);
    }

    .btn-login {
        width: 100%;
        padding: 15px;
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: var(--white);
        border: none;
        border-radius: 12px;
        font-size: 1.1rem;
        font-weight: 600;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .btn-login::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .btn-login:hover::before {
        left: 100%;
    }

    .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(46, 139, 87, 0.3);
    }

    .btn-login:active {
        transform: translateY(0);
    }

    /* Footer Section */
    .login-footer {
        text-align: center;
        padding: 30px;
        background: var(--bg-light);
        border-top: 1px solid #E9ECEF;
    }

    .footer-brand {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
    }

    .footer-logo {
        width: 35px;
        height: 35px;
        background: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
    }

    .footer-logo i {
        color: var(--white);
        font-size: 1.2rem;
    }

    .footer-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--text-dark);
        margin: 0;
    }

    .footer-link {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .footer-link:hover {
        color: var(--secondary-color);
        text-decoration: underline;
    }

    /* Error Messages */
    .error-message {
        background: #FFF5F5;
        border: 1px solid #FED7D7;
        color: #C53030;
        padding: 10px 15px;
        border-radius: 8px;
        font-size: 0.85rem;
        margin-top: 5px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .login-container {
            padding: 15px;
        }

        .login-header {
            padding: 30px 20px;
        }

        .login-form {
            padding: 30px 20px;
        }

        .welcome-text h1 {
            font-size: 1.5rem;
        }

        .logo-circle {
            width: 70px;
            height: 70px;
        }

        .logo-icon {
            font-size: 2rem;
        }
    }

    /* Loading Animation */
    .btn-login.loading {
        position: relative;
        color: transparent;
    }

    .btn-login.loading::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 20px;
        height: 20px;
        border: 2px solid transparent;
        border-top: 2px solid var(--white);
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: translate(-50%, -50%) rotate(0deg);
        }

        100% {
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }
    </style>
</head>

<body>
    <div class="bg-decoration">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
        <div class="floating-shape shape-4"></div>
    </div>

    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="logo-container">
                    <div class="logo-circle">
                        <i class="fas fa-hospital logo-icon"></i>
                    </div>
                    <div class="welcome-text">
                        <h1>E-Posyandu</h1>
                        <p>Pelayanan Kesehatan Masyarakat Digital</p>
                    </div>
                </div>
            </div>

            <div class="login-form">
                <form class="user validate-form" action="<?php echo base_url('login'); ?>" method="POST" id="loginForm">
                    <?php if (isset($this->session) && $this->session->flashdata('message')) : ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label class="form-label" for="username">
                            <i class="fas fa-user me-2"></i>Username
                        </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Masukkan username Anda" required autofocus
                                value="<?= set_value('username'); ?>">
                            <i class="fas fa-user input-icon"></i>
                        </div>
                        <?php if (isset($errors) && array_key_exists('username', $errors)) : ?>
                        <div class="error-message" id="usernameError">
                            <?= $errors['username']; ?>
                        </div>
                        <?php else : ?>
                        <div class="error-message d-none" id="usernameError">
                            Username tidak boleh kosong
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">
                            <i class="fas fa-lock me-2"></i>Password
                        </label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Masukkan password Anda" required>
                            <i class="fas fa-lock input-icon"></i>
                            <button type="button" class="password-toggle" onclick="togglePassword()">
                                <i class="fas fa-eye" id="toggleIcon"></i>
                            </button>
                        </div>
                        <?php if (isset($errors) && array_key_exists('password', $errors)) : ?>
                        <div class="error-message" id="passwordError">
                            <?= $errors['password']; ?>
                        </div>
                        <?php else : ?>
                        <div class="error-message d-none" id="passwordError">
                            Password tidak boleh kosong
                        </div>
                        <?php endif; ?>
                    </div>

                    <button type="submit" class="btn-login" id="loginBtn">
                        <i class="fas fa-sign-in-alt me-2"></i>
                        Masuk ke Sistem
                    </button>
                </form>
            </div>

            <div class="login-footer">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <img style="width: 100%; height: 100%; border-radius: 50%;"
                            src="<?= base_url('build/img/'); ?>logo-posyandu-1.png" alt="Posyandu Logo">
                    </div>
                    <h6 class="footer-title">Posyandu </h6>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('build/js/toastr.min.js') ?>"></script>

    <script>
    // Password Toggle Function
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        }
    }

    // Form Submission and Loading State
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        // No e.preventDefault() here so the form actually submits to the backend
        const loginBtn = document.getElementById('loginBtn');
        loginBtn.classList.add('loading');
        loginBtn.disabled = true;

        // Optional: You might want to remove the 'loading' class and re-enable the button
        // if the form submission fails for some reason (e.g., network error)
        // This would typically be handled in your backend response or AJAX request.
    });

    // Input focus animations
    document.querySelectorAll('.form-control').forEach(input => {
        input.addEventListener('focus', function() {
            // Check if the input-icon exists before trying to access its style property
            const inputIcon = this.parentElement.querySelector('.input-icon');
            if (inputIcon) {
                inputIcon.style.color = 'var(--primary-color)';
            }
        });

        input.addEventListener('blur', function() {
            const inputIcon = this.parentElement.querySelector('.input-icon');
            if (inputIcon && !this.value) {
                inputIcon.style.color = 'var(--text-light)';
            }
        });
    });

    // Welcome animation on page load
    window.addEventListener('load', function() {
        document.querySelector('.login-card').style.animation = 'slideUp 0.8s ease-out';
    });

    // Display Toastr messages if any (from old page's concept)
    <?php if (isset($this->session) && $this->session->flashdata('toastr_message')) : ?>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    toastr.<?= $this->session->flashdata('toastr_type') ?>("<?= $this->session->flashdata('toastr_message') ?>");
    <?php endif; ?>
    </script>
</body>

</html>