<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>HF-Tech</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo_hftech.jpeg') }}" rel="icon">
    <link href="{{ asset('assets/img/logo_hftech.jpeg') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <style>
        /* === ELEGANT BLACK & TEAL THEME === */
        body {
            background: linear-gradient(135deg, #0a0a0a 0%, #111111 50%, #0d1117 100%) !important;
        }

        .circle-step {
            width: 38px;
            height: 38px;
            background: rgba(20, 184, 166, 0.15);
            color: #14b8a6;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            border: 2px solid #14b8a6;
            transition: all .3s ease;
            margin-bottom: 4px;
        }

        .circle-step.active,
        .circle-step.done {
            background: linear-gradient(135deg, #14b8a6 0%, #0d9488 100%);
            color: #fff;
            box-shadow: 0 0 20px rgba(20, 184, 166, 0.4);
        }

        .step-label {
            font-size: 0.9rem;
            color: #14b8a6;
            font-weight: 500;
        }

        .jenis-card {
            cursor: pointer;
            border: 2px solid rgba(20, 184, 166, 0.2);
            transition: all .3s ease;
            background: linear-gradient(145deg, #1a1a1a, #0f0f0f);
        }

        .jenis-card:hover {
            box-shadow: 0 8px 32px rgba(20, 184, 166, 0.25);
            border-color: #14b8a6;
            background: linear-gradient(145deg, #1f2937, #111827);
            transform: translateY(-6px) scale(1.03);
        }

        .jenis-card.selected {
            box-shadow: 0 8px 32px rgba(20, 184, 166, 0.35);
            border-color: #14b8a6;
            background: linear-gradient(145deg, #134e4a, #0f3d3a);
        }

        .text-indigo {
            color: #14b8a6 !important;
        }

        .text-primary {
            color: #14b8a6 !important;
        }

        /* Buttons with gradient */
        .btn-primary,
        .btn-success {
            background: linear-gradient(135deg, #14b8a6 0%, #0d9488 50%, #06b6d4 100%) !important;
            border: none !important;
            box-shadow: 0 4px 15px rgba(20, 184, 166, 0.3);
            transition: all 0.3s ease;
        }

        .btn-primary:hover,
        .btn-success:hover {
            background: linear-gradient(135deg, #0d9488 0%, #14b8a6 50%, #22d3ee 100%) !important;
            box-shadow: 0 6px 25px rgba(20, 184, 166, 0.5);
            transform: translateY(-2px);
        }

        .btn-outline-secondary {
            border-color: rgba(20, 184, 166, 0.5) !important;
            color: #14b8a6 !important;
        }

        .btn-outline-secondary:hover {
            background: rgba(20, 184, 166, 0.1) !important;
            border-color: #14b8a6 !important;
        }

        /* Cards */
        .card {
            background: linear-gradient(145deg, #1a1a1a, #0f0f0f) !important;
            border: 1px solid rgba(20, 184, 166, 0.1) !important;
            color: #e0e0e0;
        }

        .card-title {
            color: #14b8a6 !important;
        }

        .card-text {
            color: #9ca3af !important;
        }

        .proyek-card {
            background: linear-gradient(145deg, #1a1a1a, #0f0f0f) !important;
            border: 1px solid rgba(20, 184, 166, 0.15) !important;
        }

        .proyek-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 12px 40px rgba(20, 184, 166, 0.25);
            border-color: #14b8a6 !important;
        }

        /* Form inputs */
        .form-control {
            background: #1a1a1a !important;
            border: 1px solid rgba(20, 184, 166, 0.3) !important;
            color: #e0e0e0 !important;
        }

        .form-control:focus {
            background: #1f2937 !important;
            border-color: #14b8a6 !important;
            box-shadow: 0 0 0 3px rgba(20, 184, 166, 0.2) !important;
        }

        .form-control::placeholder {
            color: #6b7280 !important;
        }

        .form-label {
            color: #14b8a6 !important;
        }

        .form-check-label {
            color: #e0e0e0 !important;
        }

        /* Testimonials */
        .testimonial-item {
            opacity: 1 !important;
            padding: 1.5rem;
            min-height: 120px;
            background: linear-gradient(145deg, #1a1a1a, #0f0f0f) !important;
            border: 1px solid rgba(20, 184, 166, 0.15) !important;
        }

        .testimonial-item p {
            color: #d1d5db !important;
        }

        .testimonial-item h5 {
            color: #14b8a6 !important;
        }

        .testimonials-swiper .swiper-slide {
            opacity: 1 !important;
        }

        /* Section titles */
        .section-title h2 {
            color: #14b8a6 !important;
        }

        .section-title p {
            color: #9ca3af !important;
        }

        /* Header & Navigation */
        .header {
            background: rgba(10, 10, 10, 0.95) !important;
            backdrop-filter: blur(10px);
        }

        .header .logo h1 {
            color: #14b8a6 !important;
        }

        .header .btn-getstarted {
            background: linear-gradient(135deg, #14b8a6 0%, #0d9488 100%) !important;
            box-shadow: 0 4px 15px rgba(20, 184, 166, 0.3);
        }

        .header .btn-getstarted:hover {
            box-shadow: 0 6px 25px rgba(20, 184, 166, 0.5);
        }

        /* Hero section */
        .hero {
            background: linear-gradient(135deg, #0a0a0a 0%, #111111 50%, #0d1117 100%) !important;
        }

        .hero h1 {
            color: #ffffff !important;
        }

        .hero h2,
        .hero h2 h1 {
            color: #14b8a6 !important;
        }

        .hero p {
            color: #9ca3af !important;
        }

        .btn-get-started {
            background: linear-gradient(135deg, #14b8a6 0%, #0d9488 50%, #06b6d4 100%) !important;
            border: none !important;
            box-shadow: 0 4px 20px rgba(20, 184, 166, 0.4);
            color: #fff !important;
        }

        .btn-get-started:hover {
            box-shadow: 0 8px 30px rgba(20, 184, 166, 0.6);
            transform: translateY(-2px);
        }

        /* Order section */
        #order-now {
            background: linear-gradient(135deg, #0a0a0a 0%, #0d1117 60%, #111111 100%) !important;
        }

        /* Recent posts / Proyek section */
        .recent-posts {
            background: linear-gradient(135deg, #0d1117 0%, #0a0a0a 100%) !important;
        }

        /* Badges */
        .badge.bg-primary {
            background: linear-gradient(135deg, #14b8a6, #0d9488) !important;
        }

        .badge.bg-light {
            background: rgba(20, 184, 166, 0.15) !important;
            color: #14b8a6 !important;
            border-color: rgba(20, 184, 166, 0.3) !important;
        }

        /* FAQ section */
        .faq {
            background: linear-gradient(135deg, #0a0a0a 0%, #0d1117 100%) !important;
            padding: 80px 0;
        }

        .faq-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .faq-item {
            background: linear-gradient(145deg, #1a1a1a, #0f0f0f) !important;
            border: 1px solid rgba(20, 184, 166, 0.15) !important;
            border-radius: 16px;
            padding-top: 25px;
            padding-right: 30px;
            padding-bottom: 25px;
            padding-left: 35px;
            position: relative;
            display: flex;
            align-items: flex-start;
            gap: 20px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            overflow: hidden;
        }

        .faq-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, #14b8a6, #06b6d4);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .faq-item:hover {
            border-color: rgba(20, 184, 166, 0.4) !important;
            transform: translateX(8px);
            box-shadow: 0 10px 40px rgba(20, 184, 166, 0.15);
        }

        .faq-item:hover::before,
        .faq-item.faq-active::before {
            opacity: 1;
        }

        .faq-item.faq-active {
            background: linear-gradient(145deg, #134e4a20, #0f3d3a20) !important;
            border-color: rgba(20, 184, 166, 0.4) !important;
            box-shadow: 0 10px 40px rgba(20, 184, 166, 0.2);
        }

        .faq-icon {
            width: 50px;
            height: 50px;
            min-width: 50px;
            margin-left: 15px;
            background: linear-gradient(135deg, rgba(20, 184, 166, 0.2), rgba(6, 182, 212, 0.1));
            border: 1px solid rgba(20, 184, 166, 0.3);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .faq-icon i {
            font-size: 1.4rem;
            color: #14b8a6;
            transition: all 0.3s ease;
        }

        .faq-item:hover .faq-icon,
        .faq-item.faq-active .faq-icon {
            background: linear-gradient(135deg, #14b8a6, #0d9488);
            box-shadow: 0 0 20px rgba(20, 184, 166, 0.4);
        }

        .faq-item:hover .faq-icon i,
        .faq-item.faq-active .faq-icon i {
            color: #ffffff;
            transform: scale(1.1);
        }

        .faq-content-wrapper {
            flex: 1;
        }

        .faq-item h3 {
            color: #e0e0e0 !important;
            font-size: 1.1rem;
            font-weight: 600;
            margin: 0 0 0 0;
            transition: color 0.3s ease;
        }

        .faq-item:hover h3,
        .faq-item.faq-active h3 {
            color: #14b8a6 !important;
        }

        .faq-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1),
                margin-top 0.3s ease,
                opacity 0.3s ease;
            opacity: 0;
        }

        .faq-item.faq-active .faq-content {
            max-height: 200px;
            margin-top: 15px;
            opacity: 1;
        }

        .faq-content p {
            color: #9ca3af !important;
            margin: 0;
            line-height: 1.7;
            font-size: 0.95rem;
        }

        .faq-toggle {
            font-size: 1.2rem;
            color: #14b8a6;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            margin-left: auto;
            padding-top: 5px;
        }

        .faq-item.faq-active .faq-toggle {
            transform: rotate(180deg);
            color: #22d3ee;
        }

        /* FAQ pulse animation on icon */
        @keyframes faqPulse {

            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(20, 184, 166, 0.4);
            }

            50% {
                box-shadow: 0 0 0 10px rgba(20, 184, 166, 0);
            }
        }

        .faq-item.faq-active .faq-icon {
            animation: faqPulse 2s infinite;
        }

        /* Footer */
        .footer {
            background: linear-gradient(180deg, #0a0a0a 0%, #050505 100%) !important;
            border-top: 1px solid rgba(20, 184, 166, 0.1);
        }

        .footer h4 {
            color: #14b8a6 !important;
        }

        .footer p {
            color: #9ca3af !important;
        }

        .footer .social-links a {
            background: rgba(20, 184, 166, 0.1) !important;
            color: #14b8a6 !important;
            border: 1px solid rgba(20, 184, 166, 0.2);
            transition: all 0.3s ease;
        }

        .footer .social-links a:hover {
            background: #14b8a6 !important;
            color: #fff !important;
            box-shadow: 0 4px 15px rgba(20, 184, 166, 0.4);
        }

        /* Modal */
        .modal-content {
            background: linear-gradient(145deg, #1a1a1a, #0f0f0f) !important;
            border: 1px solid rgba(20, 184, 166, 0.2) !important;
        }

        .modal-header {
            border-bottom: 1px solid rgba(20, 184, 166, 0.2) !important;
        }

        .modal-title {
            color: #14b8a6 !important;
        }

        .modal-footer {
            border-top: 1px solid rgba(20, 184, 166, 0.2) !important;
        }

        .btn-close {
            filter: invert(1);
        }

        /* Scroll to top */
        .scroll-top {
            background: linear-gradient(135deg, #14b8a6, #0d9488) !important;
            box-shadow: 0 4px 15px rgba(20, 184, 166, 0.4);
        }

        .scroll-top:hover {
            box-shadow: 0 6px 25px rgba(20, 184, 166, 0.6);
        }

        /* Price styling */
        .text-success {
            color: #14b8a6 !important;
        }

        /* Swiper pagination */
        .swiper-pagination-bullet {
            background: rgba(20, 184, 166, 0.5) !important;
        }

        .swiper-pagination-bullet-active {
            background: #14b8a6 !important;
        }

        /* Alert success */
        .alert-success {
            background: linear-gradient(135deg, rgba(20, 184, 166, 0.2), rgba(13, 148, 136, 0.2)) !important;
            border: 1px solid rgba(20, 184, 166, 0.4) !important;
            color: #14b8a6 !important;
        }

        /* Glow effects for luxury feel */
        .hero-img img {
            filter: drop-shadow(0 0 30px rgba(20, 184, 166, 0.2));
        }
    </style>
</head>

<body class="index-page">
    @include('sweetalert::alert')


    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <img src="assets/img/logo_hftech.jpeg" alt="">
                <h1 class="sitename">HF-Tech</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Beranda<br></a></li>
                    <li><a href="#recent-posts">Siap Jadi</a></li>
                    <li><a href="#testimonials">Testimoni</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a href="#order-now" class="btn-getstarted flex-md-shrink-0">Pesan Sekarang</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Kami Jokiin Proyek Kodingan Kamu,</h1>
                        <h2 data-aos="fade-up">Mulai dari <span>
                                <h1 style="text-decoration: line-through; text-decoration-color: white;">500K</h1>
                                <h1>99K</h1>
                            </span> Aja!</h2>
                        <p data-aos="fade-up" data-aos-delay="100">Kami adalah pilihan utama untuk layanan implementasi
                            proyek IT yang terjangkau, efisien, dan dapat diandalkan. Dengan komitmen kami terhadap
                            kualitas, kami menawarkan solusi tercepat dan termurah dalam sesuai kebutuhan.</p>
                        <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                            <a href="#order-now" class="btn-get-started">Pesan Sekarang <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="assets/img/hero-img-hf-tech.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- order-now Section -->
        <section id="order-now" class="about section"
            style="background: linear-gradient(135deg, #0a0a0a 0%, #0d1117 60%, #111111 100%);">
            <div class="container d-flex justify-content-center align-items-center" style="min-height: 450px;">
                <div class="col-lg-7">
                    <div class="mb-4">
                        <!-- Progress Step Bar -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="step-indicator flex-fill text-center">
                                <div class="circle-step active" id="circle-1">
                                    <i class="bi bi-calendar-event"></i>
                                </div>
                                <div class="step-label">Deadline</div>
                            </div>
                            <div class="flex-fill border-top border-2 mx-1" style="border-color:#14b8a6 !important;">
                            </div>
                            <div class="step-indicator flex-fill text-center">
                                <div class="circle-step" id="circle-2">
                                    <i class="bi bi-layers"></i>
                                </div>
                                <div class="step-label">Jenis</div>
                            </div>
                            <div class="flex-fill border-top border-2 mx-1" style="border-color:#14b8a6 !important;">
                            </div>
                            <div class="step-indicator flex-fill text-center">
                                <div class="circle-step" id="circle-3">
                                    <i class="bi bi-chat-dots"></i>
                                </div>
                                <div class="step-label">Detail</div>
                            </div>
                        </div>
                    </div>
                    <div id="order-steps">
                        <form id="order-form" method="POST" action="{{ route('pesanan.store') }}">
                            @csrf
                            <input type="hidden" name="jenis_tugas" id="jenis_tugas">
                            <input type="hidden" name="deadline_fleksibel" id="deadline_fleksibel">
                            <input type="hidden" name="deadline_tugas" id="deadline_tugas">

                            <!-- Step 1: Deadline -->
                            <div class="step step-1 animate__animated" style="display:block;">
                                <div class="card shadow-lg border-0 rounded-4 p-4">
                                    <h3 class="mb-4 text-center fw-bold text-primary">Pilih Deadline Pemesanan</h3>
                                    <div class="mb-3 text-center">
                                        <label class="form-label fs-5 mb-2">Deadline:</label>
                                        <div class="d-flex justify-content-center gap-3">
                                            <input type="date" class="form-control w-auto rounded-pill px-3"
                                                id="deadline-date">
                                            <div class="form-check align-self-center">
                                                <input class="form-check-input" type="checkbox"
                                                    id="deadline-flexible">
                                                <label class="form-check-label" for="deadline-flexible">
                                                    Deadline Saya Fleksibel
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button class="btn btn-primary btn-lg rounded-pill px-5" id="to-step-2">Lanjut
                                            <i class="bi bi-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- Step 2: Jenis Pesanan -->
                            <div class="step step-2 animate__animated" style="display:none;">
                                <div class="card shadow-lg border-0 rounded-4 p-4">
                                    <h3 class="mb-4 text-center fw-bold text-primary">Pilih Jenis Pesanan</h3>
                                    <div class="row g-4">
                                        <div class="col-md-4">
                                            <div class="card h-100 jenis-card border-0 shadow-sm rounded-3 text-center py-4 px-2"
                                                data-value="Aplikasi Sederhana">
                                                <div class="card-body">
                                                    <h5 class="card-title fw-bold mb-2 text-indigo">Aplikasi Sederhana
                                                    </h5>
                                                    <p class="card-text small text-secondary">Aplikasi dengan desain
                                                        dan fungsionalitas sederhana</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card h-100 jenis-card border-0 shadow-sm rounded-3 text-center py-4 px-2"
                                                data-value="Website">
                                                <div class="card-body">
                                                    <h5 class="card-title fw-bold mb-2 text-indigo">Website</h5>
                                                    <p class="card-text small text-secondary">Landing page, aplikasi
                                                        website, company profile, dll</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card h-100 jenis-card border-0 shadow-sm rounded-3 text-center py-4 px-2"
                                                data-value="Android Application">
                                                <div class="card-body">
                                                    <h5 class="card-title fw-bold mb-2 text-indigo">Android Application
                                                    </h5>
                                                    <p class="card-text small text-secondary">Membuat aplikasi mobile
                                                        (flutter, kotlin, dll.)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card h-100 jenis-card border-0 shadow-sm rounded-3 text-center py-4 px-2"
                                                data-value="Data Science">
                                                <div class="card-body">
                                                    <h5 class="card-title fw-bold mb-2 text-indigo">Data Science
                                                    </h5>
                                                    <p class="card-text small text-secondary">Pembuatan model AI, data
                                                        cleaning/analysis</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card h-100 jenis-card border-0 shadow-sm rounded-3 text-center py-4 px-2"
                                                data-value="Skripsi">
                                                <div class="card-body">
                                                    <h5 class="card-title fw-bold mb-2 text-indigo">Skripsi
                                                    </h5>
                                                    <p class="card-text small text-secondary">Penulisan skripsi seputar
                                                        teknologi informasi dan komputer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card h-100 jenis-card border-0 shadow-sm rounded-3 text-center py-4 px-2"
                                                data-value="Lainnya">
                                                <div class="card-body">
                                                    <h5 class="card-title fw-bold mb-2 text-indigo">Lainnya
                                                    </h5>
                                                    <p class="card-text small text-secondary">Pilih pilihan ini jika
                                                        kamu bingung atau jenis aplikasimu tidak tersedia pada pilihan
                                                        diatas</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button class="btn btn-outline-secondary rounded-pill px-4 me-2"
                                            id="back-to-step-1"><i class="bi bi-arrow-left"></i> Kembali</button>
                                        <button class="btn btn-primary btn-lg rounded-pill px-5" id="to-step-3"
                                            disabled>Lanjut <i class="bi bi-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- Step 3: Detail & Kontak -->
                            <div class="step step-3 animate__animated" style="display:none;">
                                <div class="card shadow-lg border-0 rounded-4 p-4">
                                    <h3 class="mb-4 text-center fw-bold text-primary">Detail Proyek & Kontak</h3>
                                    <form id="order-form">
                                        <div class="mb-3">
                                            <label for="nama_pelanggan" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control rounded-3" id="nama_pelanggan"
                                                name="nama_pelanggan" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="detail-tugas" class="form-label">Detail Proyek</label>
                                            <textarea class="form-control rounded-3" id="detail-tugas" name="detail_tugas" rows="3" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email_pemesan" class="form-label">Email</label>
                                            <input type="email" class="form-control rounded-3" id="email_pemesan"
                                                name="email_pemesan" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                                            <input type="text" class="form-control rounded-3" id="nomor_telepon"
                                                name="nomor_telepon" required maxlength="13" pattern="\d{10,13}"
                                                title="Nomor telepon harus 10-13 digit angka">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button class="btn btn-outline-secondary rounded-pill px-4 me-2"
                                                id="back-to-step-2"><i class="bi bi-arrow-left"></i> Kembali</button>
                                            <button type="submit"
                                                class="btn btn-success btn-lg rounded-pill px-5">Kirim
                                                Pesanan <i class="bi bi-send"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Sukses -->
                            <div class="step step-success animate__animated" style="display:none;">
                                <div class="card shadow-lg border-0 rounded-4 p-4 text-center">
                                    <div class="alert alert-success mb-0">
                                        <h4 class="mb-2">Pesanan Berhasil Dikirim!</h4>
                                        <p>Kami akan segera menghubungi Anda.</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recent Posts Section -->
        <section id="recent-posts" class="recent-posts section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Proyek Siap Pakai</h2>
                <p>Kami Punya Proyek Siap Pakai</p>
            </div>
            <div class="row gy-5 justify-content-center">
                @foreach ($proyekJadi as $proyek)
                    <div class="col-xl-4 col-md-6 mx-2"> <!-- Tambahkan mx-2 di sini -->
                        <div class="card proyek-card shadow-lg border-0 h-100" data-aos="fade-up"
                            style="transition:transform .2s;">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-center mb-3">
                                    @if (count($proyek->tags))
                                        <div class="me-2">
                                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/{{ strtolower($proyek->tags[0]->icon ?? 'code') }}.svg"
                                                alt="{{ $proyek->tags[0]->nama_tag ?? '' }}" width="40"
                                                height="40"
                                                style="background:#14b8a6;border-radius:8px;padding:6px; ">
                                        </div>
                                    @endif
                                    <div>
                                        <h5 class="card-title mb-0 fw-bold text-indigo">{{ $proyek->nama_proyek }}
                                        </h5>
                                        <span class="badge bg-primary mt-1">{{ $proyek->jenis_proyek }}</span>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    @foreach ($proyek->tags as $tag)
                                        <span class="badge bg-light text-dark border me-1">
                                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/{{ strtolower($tag->icon) }}.svg"
                                                alt="{{ $tag->nama_tag }}" width="16"
                                                style="vertical-align:middle; filter: brightness(0) invert(1);">
                                            {{ $tag->nama_tag }}
                                        </span>
                                    @endforeach
                                </div>
                                <div class="mb-2">
                                    <span
                                        class="text-decoration-line-through text-danger">Rp{{ number_format($proyek->harga_asli, 0, ',', '.') }}</span>
                                    <span
                                        class="fw-bold text-success ms-2">Rp{{ number_format($proyek->harga_diskon, 0, ',', '.') }}</span>
                                </div>
                                <p class="flex-grow-1">{{ $proyek->deskripsi_proyek }}</p>
                                <a href="#" class="btn btn-primary mt-2 w-100 btn-pesan-proyek"
                                    data-jenis="{{ $proyek->jenis_proyek }}"
                                    data-deskripsi="{{ $proyek->deskripsi_proyek }}"
                                    data-nama="{{ $proyek->nama_proyek }}">
                                    Pesan Proyek Ini
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>


        <!-- Modal Pesan Proyek -->
        <div class="modal fade" id="pesanProyekModal" tabindex="-1" aria-labelledby="pesanProyekModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <form id="modal-order-form" method="POST" action="{{ route('pesan.proyek.store') }}">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="pesanProyekModalLabel">Pesan Proyek Ini</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Tutup"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="jenis_tugas" id="modal-jenis_tugas">
                            <div class="mb-3">
                                <label for="modal-deadline_tugas" class="form-label">Deadline</label>
                                <input type="date" class="form-control" name="deadline_tugas"
                                    id="modal-deadline_tugas" required>
                            </div>
                            <div class="mb-3">
                                <label for="modal-email_pemesan" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email_pemesan"
                                    id="modal-email_pemesan" required>
                            </div>
                            <div class="mb-3">
                                <label for="modal-nomor_telepon" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" name="nomor_telepon"
                                    id="modal-nomor_telepon" required maxlength="13" pattern="\d{10,13}"
                                    title="Nomor telepon harus 10-13 digit angka">
                            </div>
                            <div class="mb-3">
                                <label for="modal-detail_tugas" class="form-label">Request Custom</label>
                                <textarea class="form-control" name="detail_tugas" id="modal-detail_tugas" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success">Kirim Pesanan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimoni</h2>
                <p>Apa kata mereka tentang kami</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper testimonials-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($testimoni as $item)
                            <div class="swiper-slide">
                                <div class="testimonial-item p-4 shadow rounded-4"
                                    style="background: linear-gradient(145deg, #1a1a1a, #0f0f0f) !important;">
                                    <div class="stars mb-2">
                                        @for ($i = 0; $i < ($item->rating ?? 5); $i++)
                                            <i class="bi bi-star-fill text-warning"></i>
                                        @endfor
                                    </div>
                                    <p class="mb-2">{{ $item->deskripsi_testimoni }}</p>
                                    <div class="profile mt-auto">
                                        <h5 class="mb-0">{{ $item->jenis_proyek }}</h5>
                                        <small
                                            class="text-muted">{{ $item->waktu_pengerjaan ? $item->waktu_pengerjaan->format('d-m-Y') : '' }}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>


        <!-- Faq Section -->
        <section id="faq" class="faq section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>F.A.Q</h2>
                <p>Frequently Asked Questions</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10" data-aos="fade-up" data-aos-delay="100">
                        <div class="faq-container">

                            {{-- <div class="faq-item" data-aos="fade-up" data-aos-delay="150">
                                <div class="faq-icon">
                                    <i class="bi bi-clock-history"></i>
                                </div>
                                <div class="faq-content-wrapper">
                                    <h3>Berapa Lama Proyek Dikerjakan?</h3>
                                    <div class="faq-content">
                                        <p>Beragam berdasarkan kompleksitas. Untuk proyek sederhana, biasanya 1 - 3 hari.</p>
                                    </div>
                                </div>
                                <i class="faq-toggle bi bi-chevron-down"></i>
                            </div> --}}

                            {{-- <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                                <div class="faq-icon">
                                    <i class="bi bi-credit-card"></i>
                                </div>
                                <div class="faq-content-wrapper">
                                    <h3>Apakah bisa di-refund?</h3>
                                    <div class="faq-content">
                                        <p>Proyek yang sudah disepakati (DP sudah ditransfer) tidak dapat di-refund.</p>
                                    </div>
                                </div>
                                <i class="faq-toggle bi bi-chevron-down"></i>
                            </div> --}}

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="250">
                                <div class="faq-icon">
                                    <i class="bi bi-arrow-repeat"></i>
                                </div>
                                <div class="faq-content-wrapper">
                                    <h3>Apakah ada jatah revisi?</h3>
                                    <div class="faq-content">
                                        <p>Ada. Maksimal 2x revisi</p>
                                    </div>
                                </div>
                                <i class="faq-toggle bi bi-chevron-down"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="faq-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div class="faq-content-wrapper">
                                    <h3>Apakah proyek dijamin selesai?</h3>
                                    <div class="faq-content">
                                        <p>Kami berkomitmen menyelesaikan proyek sesuai dengan kesepakatan. Jika ada
                                            kendala, maka akan kami komunikasikan langsung. Apabila melebihi deadline,
                                            kami refund 100%</p>
                                    </div>
                                </div>
                                <i class="faq-toggle bi bi-chevron-down"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="350">
                                <div class="faq-icon">
                                    <i class="bi bi-chat-dots"></i>
                                </div>
                                <div class="faq-content-wrapper">
                                    <h3>Bagaimana cara konsultasi?</h3>
                                    <div class="faq-content">
                                        <p>Anda bisa langsung menghubungi kami via WhatsApp atau mengisi form pemesanan.
                                            Tim kami akan segera merespons dalam waktu 1x24 jam.</p>
                                    </div>
                                </div>
                                <i class="faq-toggle bi bi-chevron-down"></i>
                            </div><!-- End Faq item-->

                        </div>
                    </div><!-- End Faq Column-->
                </div>
            </div>

        </section><!-- /Faq Section -->

        <!-- tiktok Section -->
        <section id="tiktok" class="tiktok section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Tiktok</h2>
                <p>Tiktok Accounts</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row justify-content-center">
                    <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@hf.tech" data-unique-id="hf.tech"
                        data-embed-type="creator" style="max-width: 780px; min-width: 288px;">
                        <section> <a target="_blank"
                                href="https://www.tiktok.com/@hf.tech?refer=creator_embed">@hf.tech</a> </section>
                    </blockquote>
                    <script async src="https://www.tiktok.com/embed.js"></script>
                </div>
            </div>

        </section><!-- /Tiktok Section -->

        <!-- Instagram Section -->
        <section id="instagram" class="instagram section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Instagram</h2>
                <p>Instagram Account</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row justify-content-center">
                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/hf_tech77"
                        data-instgrm-version="12"
                        style="background:#FFF;border:0;border-radius:3px;box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15);margin:1px;max-width:min(540px, 100%);min-width:150px;padding:0;width:99.375%;width:600px;height:400px;max-height:100%;width:undefinedpx">
                        <div style="padding:16px"><a id="main_link" href="hf_tech77"
                                style="background:#FFF;line-height:0;padding:0 0;text-align:center;text-decoration:none;width:100%"
                                target="_blank">
                                <div style="display:flex;flex-direction:row;align-items:center">
                                    <div
                                        style="background-color:#F4F4F4;border-radius:50%;flex-grow:0;height:40px;margin-right:14px;width:40px">
                                    </div>
                                    <div style="display:flex;flex-direction:column;flex-grow:1;justify-content:center">
                                        <div
                                            style="background-color:#F4F4F4;border-radius:4px;flex-grow:0;height:14px;margin-bottom:6px;width:100px">
                                        </div>
                                        <div
                                            style="background-color:#F4F4F4;border-radius:4px;flex-grow:0;height:14px;width:60px">
                                        </div>
                                    </div>
                                </div>
                                <div style="padding:50px 0"></div>
                                <div style="display:block;height:50px;margin:0 auto 12px;width:50px"><svg
                                        width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                        xmlns="https://www.w3.org/2000/svg"
                                        xmlns:xlink="https://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-511.000000, -20.000000)" fill="#000">
                                                <g>
                                                    <path
                                                        d="M556.869,30.41C554.814,30.41 553.148,32.076 553.148,34.131C553.148,36.186 554.814,37.852 556.869,37.852C558.924,37.852 560.59,36.186 560.59,34.131C560.59,32.076 558.924,30.41 556.869,30.41M541,60.657C535.114,60.657 530.342,55.887 530.342,50C530.342,44.114 535.114,39.342 541,39.342C546.887,39.342 551.658,44.114 551.658,50C551.658,55.887 546.887,60.657 541,60.657M541,33.886C532.1,33.886 524.886,41.1 524.886,50C524.886,58.899 532.1,66.113 541,66.113C549.9,66.113 557.115,58.899 557.115,50C557.115,41.1 549.9,33.886 541,33.886M565.378,62.101C565.244,65.022 564.756,66.606 564.346,67.663C563.803,69.06 563.154,70.057 562.106,71.106C561.058,72.155 560.06,72.803 558.662,73.347C557.607,73.757 556.021,74.244 553.102,74.378C549.944,74.521 548.997,74.552 541,74.552C533.003,74.552 532.056,74.521 528.898,74.378C525.979,74.244 524.393,73.757 523.338,73.347C521.94,72.803 520.942,72.155 519.894,71.106C518.846,70.057 518.197,69.06 517.654,67.663C517.244,66.606 516.755,65.022 516.623,62.101C516.479,58.943 516.448,57.996 516.448,50C516.448,42.003 516.479,41.056 516.623,37.899C516.755,34.978 517.244,33.391 517.654,32.338C518.197,30.938 518.846,29.942 519.894,28.894C520.942,27.846 521.94,27.196 523.338,26.654C524.393,26.244 525.979,25.756 528.898,25.623C532.057,25.479 533.004,25.448 541,25.448C548.997,25.448 549.943,25.479 553.102,25.623C556.021,25.756 557.607,26.244 558.662,26.654C560.06,27.196 561.058,27.846 562.106,28.894C563.154,29.942 563.803,30.938 564.346,32.338C564.756,33.391 565.244,34.978 565.378,37.899C565.522,41.056 565.552,42.003 565.552,50C565.552,57.996 565.522,58.943 565.378,62.101M570.82,37.631C570.674,34.438 570.167,32.258 569.425,30.349C568.659,28.377 567.633,26.702 565.965,25.035C564.297,23.368 562.623,22.342 560.652,21.575C558.743,20.834 556.562,20.326 553.369,20.18C550.169,20.033 549.148,20 541,20C532.853,20 531.831,20.033 528.631,20.18C525.438,20.326 523.257,20.834 521.349,21.575C519.376,22.342 517.703,23.368 516.035,25.035C514.368,26.702 513.342,28.377 512.574,30.349C511.834,32.258 511.326,34.438 511.181,37.631C511.035,40.831 511,41.851 511,50C511,58.147 511.035,59.17 511.181,62.369C511.326,65.562 511.834,67.743 512.574,69.651C513.342,71.625 514.368,73.296 516.035,74.965C517.703,76.634 519.376,77.658 521.349,78.425C523.257,79.167 525.438,79.673 528.631,79.82C531.831,79.965 532.853,80.001 541,80.001C549.148,80.001 550.169,79.965 553.369,79.82C556.562,79.673 558.743,79.167 560.652,78.425C562.623,77.658 564.297,76.634 565.965,74.965C567.633,73.296 568.659,71.625 569.425,69.651C570.167,67.743 570.674,65.562 570.82,62.369C570.966,59.17 571,58.147 571,50C571,41.851 570.966,40.831 570.82,37.631">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg></div>
                                <div style="padding-top:8px">
                                    <div
                                        style="color:#3897f0;font-family:Arial,sans-serif;font-size:14px;font-style:normal;font-weight:550;line-height:18px">
                                        View this post on Instagram</div>
                                </div>
                                <div style="padding:30px 0"></div>
                                <div style="display:flex;flex-direction:row;margin-bottom:14px;align-items:center">
                                    <div>
                                        <div
                                            style="background-color:#F4F4F4;border-radius:50%;height:12.5px;width:12.5px;transform:translateX(0px) translateY(7px)">
                                        </div>
                                        <div
                                            style="background-color:#F4F4F4;height:12.5px;transform:rotate(-45deg) translateX(3px) translateY(1px);width:12.5px;flex-grow:0;margin-right:14px;margin-left:2px">
                                        </div>
                                        <div
                                            style="background-color:#F4F4F4;border-radius:50%;height:12.5px;width:12.5px;transform:translateX(9px) translateY(-18px)">
                                        </div>
                                    </div>
                                    <div style="margin-left:8px">
                                        <div
                                            style="background-color:#F4F4F4;border-radius:50%;flex-grow:0;height:20px;width:20px">
                                        </div>
                                        <div
                                            style="width:0;height:0;border-top:2px solid transparent;border-left:6px solid #f4f4f4;border-bottom:2px solid transparent;transform:translateX(16px) translateY(-4px) rotate(30deg)">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">
                                        <div
                                            style="width:0;border-top:8px solid #F4F4F4;border-right:8px solid transparent;transform:translateY(16px)">
                                        </div>
                                        <div
                                            style="background-color:#F4F4F4;flex-grow:0;height:12px;width:16px;transform:translateY(-4px)">
                                        </div>
                                        <div
                                            style="width:0;height:0;border-top:8px solid #F4F4F4;border-left:8px solid transparent;transform:translateY(-4px) translateX(8px)">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    style="display:flex;flex-direction:column;flex-grow:1;justify-content:center;margin-bottom:24px">
                                    <div
                                        style="background-color:#F4F4F4;border-radius:4px;flex-grow:0;height:14px;margin-bottom:6px;width:224px">
                                    </div>
                                    <div
                                        style="background-color:#F4F4F4;border-radius:4px;flex-grow:0;height:14px;width:144px">
                                    </div>
                                </div>
                            </a></div>
                    </blockquote>
                    <div style="overflow:auto;position:absolute;height:0;width:0"><a
                            href="https://www.poper.ai/tools/embed-instagram-feed/">Embed Instagram Post</a></div>
                    <style>
                        .instagram-media:before {
                            display: none !important
                        }

                        .instagram-media {
                            max-width: 100%;
                        }
                    </style>
                    <script src="https://www.instagram.com/embed.js"></script>
                </div>
            </div>

        </section><!-- /Instagram Section -->


    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">



                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>SOLUSI MAHASISWA SIBUK, GAS CHAT!</p>
                    <div class="social-links d-flex">
                        {{-- <a href=""><i class="bi bi-twitter-x"></i></a> --}}
                        <a href="https://www.tiktok.com/@hf.tech"><i class="bi bi-tiktok"></i></a>
                        <a
                            href="https://www.instagram.com/hf_tech77?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://wa.me/6282228455809"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">hftech</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                Designed by <a href="https://www.instagram.com/hf_tech77">hftech</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>



    <script>
        // Step navigation & animasi
        let currentStep = 1;
        let selectedJenis = null;

        function updateStepIndicator(step) {
            for (let i = 1; i <= 3; i++) {
                const circle = document.getElementById('circle-' + i);
                circle.classList.remove('active', 'done');
                if (i < step) circle.classList.add('done');
                else if (i === step) circle.classList.add('active');
            }
        }

        function showStep(step, animation) {
            document.querySelectorAll('.step').forEach(s => s.style.display = 'none');
            const el = document.querySelector('.step-' + step);
            el.style.display = 'block';
            el.classList.remove('animate__fadeInLeft', 'animate__fadeInRight');
            el.classList.add(animation);
            currentStep = step;
            if (step === 'success') updateStepIndicator(3);
            else updateStepIndicator(Number(step));
        }

        document.getElementById('to-step-2').onclick = function() {
            showStep(2, 'animate__fadeInRight');
        };
        document.getElementById('back-to-step-1').onclick = function() {
            showStep(1, 'animate__fadeInLeft');
        };
        document.getElementById('to-step-3').onclick = function() {
            showStep(3, 'animate__fadeInRight');
        };
        document.getElementById('back-to-step-2').onclick = function() {
            showStep(2, 'animate__fadeInLeft');
        };

        // Deadline fleksibel
        document.getElementById('deadline-flexible').onchange = function() {
            document.getElementById('deadline-date').disabled = this.checked;
        };

        // Pilih jenis pesanan
        document.querySelectorAll('.jenis-card').forEach(card => {
            card.onclick = function() {
                document.querySelectorAll('.jenis-card').forEach(c => c.classList.remove('selected'));
                this.classList.add('selected');
                selectedJenis = this.getAttribute('data-value');
                document.getElementById('to-step-3').disabled = false;
            };
        });

        // Submit form (dummy, bisa diganti AJAX)
        document.getElementById('order-form').onsubmit = function(e) {
            e.preventDefault();
            showStep('success', 'animate__fadeInRight');
        };

        // Inisialisasi step indicator
        updateStepIndicator(1);
        document.getElementById('order-form').onsubmit = function(e) {
            // Isi hidden input dari step 1 & 2
            document.getElementById('jenis_tugas').value = selectedJenis || '';
            document.getElementById('deadline_fleksibel').value = document.getElementById('deadline-flexible').checked ?
                1 : 0;
            document.getElementById('deadline_tugas').value = document.getElementById('deadline-date').value;
            // Biarkan form submit ke backend (jangan pakai e.preventDefault())
        };
    </script>

    <script>
        new Swiper('.testimonials-swiper', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            grabCursor: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 3
                }
            }
        });
    </script>

    <script>
        document.querySelectorAll('.btn-pesan-proyek').forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                // Isi field modal
                document.getElementById('modal-jenis_tugas').value = btn.getAttribute('data-jenis');
                document.getElementById('modal-detail_tugas').value = btn.getAttribute('data-deskripsi');
                // Kosongkan input lain
                document.getElementById('modal-deadline_tugas').value = '';
                document.getElementById('modal-email_pemesan').value = '';
                document.getElementById('modal-nomor_telepon').addEventListener('input', function(e) {
                    // Hanya angka, maksimal 13 digit
                    this.value = this.value.replace(/\D/g, '').slice(0, 13);
                }); // Tampilkan modal
                var modal = new bootstrap.Modal(document.getElementById('pesanProyekModal'));
                modal.show();
            });
        });
    </script>

    <script>
        // Untuk form utama
        document.getElementById('nomor_telepon').addEventListener('input', function(e) {
            this.value = this.value.replace(/\D/g, '').slice(0, 13);
        });
        // Untuk modal
        document.getElementById('modal-nomor_telepon').addEventListener('input', function(e) {
            this.value = this.value.replace(/\D/g, '').slice(0, 13);
        });
    </script>

    <script>
        // FAQ Toggle Animation
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', function() {
                // Close all other FAQ items
                document.querySelectorAll('.faq-item').forEach(otherItem => {
                    if (otherItem !== this) {
                        otherItem.classList.remove('faq-active');
                    }
                });
                // Toggle current item
                this.classList.toggle('faq-active');
            });
        });
    </script>
</body>

</html>
