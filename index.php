<?php

include 'asset/config/koneksi.php';

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rental Mobil | Profesional & Terpercaya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="shortcut icon" href="asset/icon/logo.png">

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
html, body {
    overflow-x: hidden;
}
.hero {
    background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)),
    url('https://images.unsplash.com/photo-1503376780353-7e6692767b70') center/cover;
    height: 60vh;
    color: white;
}
.hero h1 {
    font-size: 3rem;
    font-weight: bold;
}

.btn {
    font-size: 0.9em;
    font-weight: bold;
}

/* Navbar default (awal transparan) */
.navbar {
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    background-color: transparent;
}

/* Navbar saat scroll */
.navbar.scrolled {
    background-color: white;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

/* Warna teks saat background putih */
.navbar.scrolled .nav-link,
.navbar.scrolled .navbar-brand {
    color: #000 !important;
}

.navbar.scrolled .btn {
    color: #fff !important;
}

/* Icon toggler default (navbar transparan) */
.navbar-toggler {
    border-color: rgba(255,255,255,0.7);
}

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(255,255,255,0.9)' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

/* Saat scroll (navbar putih) */
.navbar.scrolled .navbar-toggler {
    border-color: rgba(0,0,0,0.3);
}

.navbar.scrolled .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(0,0,0,0.9)' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.nav-link {
    position: relative;
    z-index: 1;
    padding: 8px 16px;
    overflow: hidden;
}

/* Lingkaran background */
.nav-link::before {
    content: "";
    position: absolute;
    width: 10px;
    height: 10px;
    background: rgba(255, 255, 255, 0.28);
    border-radius: 50%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: transform 0.45s ease;
    z-index: -1;
}

/* Hover: lingkaran membesar lalu berhenti sebagai bulat */
.nav-link:hover::before {
    transform: translate(-50%, -50%) scale(4);
}

.car-card {
    border: none;
    border-radius: 16px;
    overflow: hidden;
    transition: all 0.35s ease;
}

.car-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.car-img {
    height: 180px;
    object-fit: cover;
}

.car-price {
    font-size: 0.95rem;
    font-weight: bold;
    color: #0d6efd;
}

.car-spec i {
    margin-right: 6px;
}

.step-card {
    height: 100%;
    min-height: 320px; /* samakan tinggi */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: center;
}

.step-card i {
    margin-bottom: 15px;
}

.step-card p {
    flex-grow: 1;
}
.step-row {
    display: flex;
    flex-wrap: wrap;
}

.step-row > div {
    flex: 1 1 20%;
    max-width: 20%;
}

.testi-card {
    border: none;
    border-radius: 16px;
    padding: 25px;
    height: 100%;
    transition: all 0.3s ease;
}

.testi-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.12);
}

.testi-avatar {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    object-fit: cover;
}

.rating i {
    color: #ffc107;
}

.accordion-button:not(.collapsed) {
    background-color: rgba(13,110,253,.05);
    color: #0d6efd;
}

.icon-circle {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
}

.contact-item {
    padding: 10px;
    border-radius: 12px;
    transition: background .3s ease;
}

.contact-item:hover {
    background: rgba(0, 0, 0, 0.03);
}

.footer-link li {
    margin-bottom: 8px;
}

.footer-link a {
    color: rgba(255,255,255,.7);
    text-decoration: none;
    transition: color .3s ease;
}

.footer-link a:hover {
    color: #fff;
    text-decoration: underline;
}

.section-navbar {
    background: #f8f9fa;
    border-bottom: 1px solid rgba(0,0,0,.08);
    padding: 10px 0;
}

.section-menu {
    list-style: none;
    display: flex;
    justify-content: center;   /* CENTER */
    flex-wrap: wrap;           /* AUTO KE BAWAH */
    gap: 10px;
    padding: 0;
    margin: 0;
}

.section-menu li a {
    display: block;
    padding: 6px 16px;
    font-size: .9rem;
    color: #333;
    text-decoration: none;
    border-radius: 50px;
    transition: all .3s ease;
    white-space: nowrap; /* biar rapi */
}

.section-menu li a:hover {
    background: rgba(0,0,0,.08);
}


@media (max-width: 992px) {
    .step-row > div {
        flex: 1 1 50%;
        max-width: 50%;
    }
}

@media (max-width: 576px) {
    .step-row > div {
        flex: 1 1 100%;
        max-width: 100%;
    }
}


@media (max-width: 991px) {
    .hero {
        height: 40vh;
    }
    .hdr {
        text-align: center;
    }
    .navbar {
        padding-bottom: 10px;
    }
    .navbar-collapse {
        background: rgba(255, 255, 255, 0.97);
        padding: 15px;
        margin-top: 10px;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        margin-bottom: 20px;
    }

    .navbar-collapse .nav-link {
        color: #000 !important;
        padding: 10px 0;
    }
}


    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="" style="background-image: url('asset/icon/logo.png'); padding-left: 50px; background-size: cover; width: 100px; height: 50px; background-position: center;"></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navMenu" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#Home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#Tentang">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#Mobil">Mobil</a></li>
                <li class="nav-item"><a class="nav-link" href="#Cara-Sewa">Cara Sewa</a></li>
                <li class="nav-item"><a class="nav-link" href="#Testimoni">Testimoni</a></li>
                <li class="nav-item"><a class="nav-link" href="#Kontak">Kontak</a></li>
                <li class="nav-item"><a class="btn btn-primary" href="login.php">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section id="Home" class="hero d-flex align-items-center">
    <div class="hdr container">
        <h1 id="hero-title" data-aos="fade-up"></h1>

        <p class="lead mt-3" data-aos="fade-up" data-aos-delay="150">
            <span id="hero-desc"></span>
        </p>

        <small data-aos="fade-up" data-aos-delay="300"><i id="hero-tagline"></i></small><br>

        <a href="#" class="btn btn-outline-primary mt-3" data-aos="zoom-in" data-aos-delay="450">Daftar Gratis</a>
    </div>
</section>

<!-- SECONDARY NAVBAR -->
<nav class="section-navbar mb-0">
    <div class="container">
        <ul class="section-menu">
            <li><a href="#Home">Home</a></li>
            <li><a href="#Tentang" class="active">Tentang</a></li>
            <li><a href="#Mobil">Mobil</a></li>
            <li><a href="#Cara-Sewa">Cara Sewa</a></li>
            <li><a href="#Testimoni">Testimoni</a></li>
            <li><a href="#Kontak">Kontak</a></li>
        </ul>
    </div>
</nav>

<!-- TENTANG RENTIGO -->
<section id="Tentang" class="py-3 bg-light">
    <div class="container">
        <div class="text-center mb-4" data-aos="fade-right">
            <h2 class="fw-bold">Tentang Rentigo</h2>
        </div>

        <div class="row g-4">

            <!-- Card Tentang Rentigo -->
            <div class="col-md-6" data-aos="fade-right">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-info-circle text-primary me-2"></i>
                        Apa itu Rentigo ?
                    </h5>

                    <p class="text-muted">
                        <strong>Rentigo</strong> adalah layanan rental mobil online
                        yang menyediakan berbagai pilihan kendaraan untuk kebutuhan
                        perjalanan pribadi, bisnis, maupun liburan.
                    </p>

                    <p class="text-muted mb-3">
                        Dengan sistem pemesanan yang mudah, harga transparan, serta
                        armada kendaraan yang terawat, Rentigo berkomitmen memberikan
                        pengalaman sewa mobil yang aman, nyaman, dan terpercaya.
                    </p>

                    <!-- Info Pengganti Statistik -->
                    <div class="d-flex flex-wrap gap-3 mt-auto">
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2">
                            🚗 Banyak Pilihan Mobil
                        </span>
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2">
                            💰 Harga Transparan
                        </span>
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2">
                            ⏱️ Proses Cepat & Mudah
                        </span>
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2">
                            🔒 Aman & Terpercaya
                        </span>
                    </div>
                </div>
            </div>

            <!-- Card Syarat & Ketentuan -->
            <div class="col-md-6" data-aos="fade-left">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-file-text text-primary me-2"></i>
                        Syarat & Ketentuan
                    </h5>

                    <ul class="list-unstyled text-muted small mb-0">
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            Penyewa wajib memiliki KTP yang masih berlaku.
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            Data diri harus sesuai dan dapat diverifikasi.
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            Mobil digunakan sesuai dengan perjanjian sewa.
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            Keterlambatan pengembalian dikenakan biaya tambahan.
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            Kerusakan akibat kelalaian menjadi tanggung jawab penyewa.
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- DAFTAR MOBIL -->
<section id="Mobil" class="py-5 bg-light">
    <div class="container px-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Daftar Mobil</h2>
            <p class="text-muted">Pilih mobil sesuai kebutuhan perjalanan Anda</p>
        </div>

        <div class="row g-4">

            <?php for ($i=0; $i < 4; $i++) { ?>

            <!-- CARD MOBIL (ULANGI SAMPAI 10x) -->
            <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="card car-card h-100">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70" class="car-img">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">MPV</span>
                        <h6 class="fw-bold mb-1">Toyota Avanza</h6>
                        <div class="car-spec small text-muted mb-2">
                            <div><i class="bi bi-people"></i> 7 Orang</div>
                            <div><i class="bi bi-gear"></i> Manual</div>
                        </div>
                        <div class="car-price">Rp 350.000 / hari</div>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="#" class="btn btn-outline-primary w-100 btn-sm">Sewa</a>
                    </div>
                </div>
            </div>

            <?php } ?>

            <!-- Silakan duplikasi sampai 10 card -->
        </div>

        <div class="text-center mt-5">
            <a href="#" class="btn btn-primary px-4">Lihat Semua Mobil</a>
        </div>
    </div>
</section>

<!-- CARA SEWA -->
<section id="Cara-Sewa" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Alur Cara Sewa Mobil</h2>
            <p class="text-muted">Proses sewa mobil di Rentigo mudah, cepat, dan transparan</p>
        </div>

        <div class="row g-4 step-row">

            <!-- Step 1 -->
            <div class="col-lg-2 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                <div class="card step-card border-0 shadow-sm p-4">
                    <i class="bi bi-car-front-fill fs-1 text-primary mb-3"></i>
                    <h6 class="fw-bold">Pilih Mobil</h6>
                    <p class="small text-muted">
                        Buka halaman <strong>Daftar Mobil</strong> dan pilih kendaraan sesuai
                        tipe, harga, dan kapasitas.
                    </p>
                    <span class="badge bg-primary mt-2">1</span>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-2 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                <div class="card step-card border-0 shadow-sm p-4">
                    <i class="bi bi-calendar-date fs-1 text-primary mb-3"></i>
                    <h6 class="fw-bold">Tentukan Tanggal</h6>
                    <p class="small text-muted">
                        Pilih tanggal mulai dan tanggal kembali.
                        Sistem akan menghitung lama sewa otomatis.
                    </p>
                    <span class="badge bg-primary mt-2">2</span>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-2 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                <div class="card step-card border-0 shadow-sm p-4">
                    <i class="bi bi-person-lines-fill fs-1 text-primary mb-3"></i>
                    <h6 class="fw-bold">Isi Data Diri</h6>
                    <p class="small text-muted">
                        Lengkapi data penyewa: nama lengkap, nomor HP/WhatsApp,
                        alamat, dan nomor KTP.
                    </p>
                    <span class="badge bg-primary mt-2">3</span>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-lg-2 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                <div class="card step-card border-0 shadow-sm p-4">
                    <i class="bi bi-credit-card-fill fs-1 text-primary mb-3"></i>
                    <h6 class="fw-bold">Konfirmasi & Pembayaran</h6>
                    <p class="small text-muted">
                        Sistem menampilkan total biaya sewa.
                        Lakukan pembayaran (transfer / cash),
                        lalu admin akan mengonfirmasi pesanan Anda.
                    </p>
                    <span class="badge bg-primary mt-2">4</span>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="col-lg-2 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                <div class="card step-card border-0 shadow-sm p-4">
                    <i class="bi bi-check-circle-fill fs-1 text-primary mb-3"></i>
                    <h6 class="fw-bold">Mobil Siap Digunakan</h6>
                    <p class="small text-muted">
                        Mobil dapat diambil atau diantar.
                        Status sewa aktif sampai mobil dikembalikan setelah selesai.
                    </p>
                    <span class="badge bg-primary mt-2">5</span>
                </div>
            </div>

        </div>

        <!-- CTA -->
        <div class="text-center mt-5">
            <a href="#Daftar-Mobil" class="btn btn-primary px-4">
                Mulai Sewa Mobil
            </a>
        </div>
    </div>
</section>

<!-- TESTIMONI -->
<section id="Testimoni" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Testimoni Pelanggan</h2>
            <p class="text-muted">Apa kata pelanggan yang telah menggunakan layanan Rentigo</p>
        </div>

        <div class="row g-4">

            <!-- Testimoni 1 -->
            <div class="col-md-4" data-aos="flip-left" data-aos-delay="200">
                <div class="card testi-card shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://i.pravatar.cc/100?img=11" class="testi-avatar me-3">
                        <div>
                            <h6 class="mb-0 fw-bold">Andi Pratama</h6>
                            <small class="text-muted">Jakarta</small>
                        </div>
                    </div>

                    <div class="rating mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>

                    <p class="text-muted small">
                        Pelayanan sangat cepat dan mobil dalam kondisi bersih.
                        Proses sewa mudah dan admin responsif.
                    </p>
                </div>
            </div>

            <!-- Testimoni 2 -->
            <div class="col-md-4" data-aos="flip-left" data-aos-delay="200">
                <div class="card testi-card shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://i.pravatar.cc/100?img=32" class="testi-avatar me-3">
                        <div>
                            <h6 class="mb-0 fw-bold">Siti Rahma</h6>
                            <small class="text-muted">Bandung</small>
                        </div>
                    </div>

                    <div class="rating mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>

                    <p class="text-muted small">
                        Harga terjangkau dan banyak pilihan mobil.
                        Cocok untuk perjalanan keluarga.
                    </p>
                </div>
            </div>

            <!-- Testimoni 3 -->
            <div class="col-md-4" data-aos="flip-left" data-aos-delay="200">
                <div class="card testi-card shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://i.pravatar.cc/100?img=18" class="testi-avatar me-3">
                        <div>
                            <h6 class="mb-0 fw-bold">Budi Santoso</h6>
                            <small class="text-muted">Depok</small>
                        </div>
                    </div>

                    <div class="rating mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>

                    <p class="text-muted small">
                        Mobil diantar tepat waktu dan kondisi prima.
                        Sangat direkomendasikan!
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FAQ -->
<section id="FAQ" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Pertanyaan yang Sering Diajukan</h2>
            <p class="text-muted">
                Temukan jawaban atas pertanyaan umum seputar layanan Rentigo
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="accordion accordion-flush shadow-sm rounded-4" id="faqAccordion">

                    <!-- FAQ 1 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="150">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                Apa saja syarat untuk menyewa mobil di Rentigo?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse"
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Penyewa wajib memiliki KTP yang masih berlaku,
                                mengisi data diri dengan benar, serta menyetujui
                                syarat dan ketentuan yang berlaku.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="150">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                Apakah bisa sewa mobil lepas kunci?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse"
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Ya, Rentigo menyediakan layanan sewa mobil
                                lepas kunci dan dengan sopir, sesuai dengan
                                ketentuan yang berlaku.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="150">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                Bagaimana cara pembayaran sewa mobil?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse"
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Pembayaran dapat dilakukan melalui transfer
                                bank atau pembayaran langsung (cash), sesuai
                                dengan kesepakatan saat pemesanan.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="150">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq4">
                                Apakah ada denda jika terlambat mengembalikan mobil?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse"
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Ya, keterlambatan pengembalian mobil akan dikenakan
                                biaya tambahan sesuai dengan ketentuan yang berlaku.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="150">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq5">
                                Apakah mobil bisa diantar ke lokasi?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse"
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Bisa. Rentigo menyediakan layanan antar–jemput
                                mobil dengan biaya tambahan sesuai jarak lokasi.
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<!-- KONTAK -->
<section id="Kontak" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Hubungi Kami</h2>
            <p class="text-muted">
                Punya pertanyaan atau ingin menyewa mobil?  
                Tim Rentigo siap membantu Anda.
            </p>
        </div>

        <div class="row g-4">

            <!-- INFO KONTAK -->
            <div class="col-lg-5" data-aos="fade-right">
                <div class="card shadow-sm border-0 rounded-4 h-100">
                    <div class="card-body p-4">

                        <h5 class="fw-bold mb-4">Informasi Kontak</h5>

                        <!-- Alamat -->
                        <div class="d-flex align-items-center mb-2 contact-item">
                            <div class="icon-circle bg-primary text-white me-3">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <small class="text-muted">Alamat</small><br>
                                <strong>Jakarta, Indonesia</strong>
                            </div>
                        </div>

                        <!-- Telepon -->
                        <div class="d-flex align-items-center mb-2 contact-item">
                            <div class="icon-circle bg-success text-white me-3">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <div>
                                <small class="text-muted">WhatsApp</small><br>
                                <strong>0812-3456-7890</strong>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="d-flex align-items-center mb-2 contact-item">
                            <div class="icon-circle bg-warning text-white me-3">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <small class="text-muted">Email</small><br>
                                <strong>support@rentigo.id</strong>
                            </div>
                        </div>

                        <!-- Jam Operasional -->
                        <div class="d-flex align-items-center mb-2 contact-item">
                            <div class="icon-circle bg-dark text-white me-3">
                                <i class="bi bi-clock-fill"></i>
                            </div>
                            <div>
                                <small class="text-muted">Jam Operasional</small><br>
                                <strong>08.00 – 22.00 WIB</strong>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="d-flex gap-2 mt-4">
                            <a href="https://wa.me/6281234567890?text=Halo%20Rentigo,%20saya%20ingin%20bertanya%20tentang%20sewa%20mobil."
                               target="_blank"
                               class="btn btn-success w-100">
                                <i class="bi bi-whatsapp"></i> Chat WhatsApp
                            </a>
                            <a href="mailto:support@rentigo.id
                            ?subject=Permintaan%20Sewa%20Mobil%20Rentigo
                            &body=Halo%20Rentigo,%0A%0ASaya%20ingin%20bertanya%20atau%20melakukan%20pemesanan%20mobil.%0A%0ANama:%0ANomor%20HP:%0ATanggal%20Sewa:%0ATipe%20Mobil:"
                               class="btn btn-outline-primary w-100">
                                <i class="bi bi-envelope"></i> Kirim Email
                            </a>
                        </div>

                    </div>
                </div>
            </div>


            <!-- FORM KONTAK -->
            <div class="col-lg-7" data-aos="fade-left">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-4">

                        <h5 class="fw-bold mb-4">Kirim Pesan</h5>

                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Nama Anda">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Nomor WhatsApp</label>
                                    <input type="text" class="form-control" placeholder="08xxxxxxxxxx">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="email@contoh.com">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Pesan</label>
                                    <textarea class="form-control" rows="4"
                                              placeholder="Tulis pesan Anda..."></textarea>
                                </div>
                                <div class="col-12 text-end">
                                    <button class="btn btn-primary px-4">
                                        <i class="bi bi-send"></i> Kirim Pesan
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer bg-dark text-white pt-5" data-aos="fade-up">
    <div class="container">
        <div class="row g-4">

            <!-- BRAND -->
            <div class="col-md-4">
                <div class="d-flex align-items-center mb-3">
                    <img src="asset/icon/logo.png" alt="Rentigo" height="100" class="me-2">  
                </div>
                <h5 class="fw-bold mb-2">Rentigo</h5>
                <p class="text-white-50 small">
                    Rentigo adalah layanan rental mobil online terpercaya
                    dengan armada lengkap, harga transparan, dan proses mudah.
                </p>
            </div>

            <!-- MENU -->
            <div class="col-md-2">
                <h6 class="fw-bold mb-3">Menu</h6>
                <ul class="list-unstyled footer-link">
                    <li><a href="#Home">Home</a></li>
                    <li><a href="#Tentang-Rentigo">Tentang Rentigo</a></li>
                    <li><a href="#Daftar-Mobil">Daftar Mobil</a></li>
                    <li><a href="#Cara-Sewa">Cara Sewa</a></li>
                    <li><a href="#Kontak">Kontak</a></li>
                </ul>
            </div>

            <!-- LAYANAN -->
            <div class="col-md-3">
                <h6 class="fw-bold mb-3">Layanan</h6>
                <ul class="list-unstyled footer-link">
                    <li>Rental Harian</li>
                    <li>Rental Mingguan</li>
                    <li>Rental Bulanan</li>
                    <li>Dengan Sopir</li>
                    <li>Lepas Kunci</li>
                </ul>
            </div>

            <!-- KONTAK -->
            <div class="col-md-3">
                <h6 class="fw-bold mb-3">Hubungi Kami</h6>

                <p class="mb-2">
                    <i class="bi bi-geo-alt-fill me-2"></i>
                    Jakarta, Indonesia
                </p>
                <p class="mb-2">
                    <i class="bi bi-whatsapp me-2"></i>
                    <a href="https://wa.me/6281234567890?text=Halo%20Rentigo,%20saya%20ingin%20menyewa%20mobil."
                       target="_blank"
                       class="text-white text-decoration-none">
                        0812-3456-7890
                    </a>
                </p>
                <p>
                    <i class="bi bi-envelope-fill me-2"></i>
                    <a href="mailto:support@rentigo.id"
                       class="text-white text-decoration-none">
                        support@rentigo.id
                    </a>
                </p>

                <div class="d-flex gap-2 mt-3">
                    <a href="https://wa.me/6281234567890" target="_blank"
                       class="btn btn-success btn-sm">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                    <a href="mailto:support@rentigo.id"
                       class="btn btn-outline-light btn-sm">
                        <i class="bi bi-envelope"></i>
                    </a>
                </div>
            </div>

        </div>

        <hr class="border-secondary my-4">

        <div class="text-center small text-white-50 pb-3">
            © 2025 <strong>Rentigo</strong>. All Rights Reserved.
        </div>
    </div>
</footer>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 900,
    easing: 'ease-in-out',
    once: true,
    offset: 100
  });
</script>

<script>
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<script>
new Typed("#hero-title", {
    strings: ["RENTIGO"],
    typeSpeed: 80,
    showCursor: false
});

new Typed("#hero-desc", {
    strings: [
        "Solusi sewa mobil online yang cepat, aman, dan terpercaya.",
        "Pesan mobil favorit Anda hanya dalam beberapa klik."
    ],
    typeSpeed: 35,
    startDelay: 800,
    showCursor: false
});

new Typed("#hero-tagline", {
    strings: ["Sewa Mobil Jadi Lebih Mudah."],
    typeSpeed: 50,
    startDelay: 2000,
    showCursor: false
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
