<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>HF-Tech</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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
        .circle-step {
            width: 38px;
            height: 38px;
            background: #e0e7ff;
            color: #6366f1;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            border: 2px solid #6366f1;
            transition: background .2s, color .2s;
            margin-bottom: 4px;
        }

        .circle-step.active,
        .circle-step.done {
            background: #6366f1;
            color: #fff;
        }

        .step-label {
            font-size: 0.9rem;
            color: #6366f1;
            font-weight: 500;
        }

        .jenis-card {
            cursor: pointer;
            border: 2px solid transparent;
            transition: box-shadow .2s, border-color .2s, transform .2s;
            background: #f8fafc;
        }

        .jenis-card.selected,
        .jenis-card:hover {
            box-shadow: 0 4px 24px 0 rgba(99, 102, 241, 0.10);
            border-color: #6366f1;
            background: #eef2ff;
            transform: translateY(-4px) scale(1.03);
        }

        .text-indigo {
            color: #6366f1;
        }

        .btn-primary,
        .btn-success {
            background: linear-gradient(90deg, #6366f1 60%, #60a5fa 100%);
            border: none;
        }

        .btn-primary:hover,
        .btn-success:hover {
            background: linear-gradient(90deg, #4f46e5 60%, #2563eb 100%);
        }

        .card {
            background: #fff;
        }

        .proyek-card:hover {
            transform: translateY(-6px) scale(1.03);
            box-shadow: 0 8px 32px 0 rgba(99, 102, 241, 0.15);
        }

        .testimonial-item {
            min-height: 220px;
            opacity: 1 !important;
        }

        .testimonials-swiper .swiper-slide {
            opacity: 1 !important;
        }
    </style>
</head>

<body class="index-page">
    @include('sweetalert::alert')


    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <img src="assets/img/logo.png" alt="">
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
                        <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- order-now Section -->
        <section id="order-now" class="about section"
            style="background: linear-gradient(135deg, #f8fafc 60%, #e0e7ff 100%);">
            <div class="container d-flex justify-content-center align-items-center" style="min-height: 650px;">
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
                            <div class="flex-fill border-top border-2 mx-1" style="border-color:#6366f1 !important;">
                            </div>
                            <div class="step-indicator flex-fill text-center">
                                <div class="circle-step" id="circle-2">
                                    <i class="bi bi-layers"></i>
                                </div>
                                <div class="step-label">Jenis</div>
                            </div>
                            <div class="flex-fill border-top border-2 mx-1" style="border-color:#6366f1 !important;">
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
                                                name="nomor_telepon" required>
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
            <div class="row gy-5">
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
                                                style="background:#f3f4f6;border-radius:8px;padding:6px;">
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
                                                style="vertical-align:middle;"> {{ $tag->nama_tag }}
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
                                <a href="#order-now" class="btn btn-primary mt-2 w-100">Pesan Proyek Ini</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

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
                                    style="background:rgba(255,255,255,0.97);">
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

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>Berapa Lama Proyek Dikerjakan?</h3>
                                <div class="faq-content">
                                    <p>Beragam berdasarkan kompleksitas. Untuk proyek sederhana, biasanya 1 - 3 hari.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apakah bisa di-refund?</h3>
                                <div class="faq-content">
                                    <p>Proyek yang sudah disepakati (DP sudah ditransfer) tidak dapat di-refund.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apakah ada jatah revisi?</h3>
                                <div class="faq-content">
                                    <p>Ada. Maksimal 7x revisi minor (contoh: mengubah warna, tambahan fungsionalitas
                                        sederhana, dll.)</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div><!-- End Faq Column-->



                </div>

            </div>

        </section><!-- /Faq Section -->


    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">



                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">FlexStart</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
                    href="https://themewagon.com">ThemeWagon</a>
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
</body>

</html>
