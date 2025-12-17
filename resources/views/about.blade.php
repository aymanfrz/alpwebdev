<!DOCTYPE html>
<html lang="en">
<head>
    <title>About - Campus Event System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/navigation.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/about.css">
</head>

<body class="page-container">

    @include('layout.navigation')

    <main class="content-area">
        <!-- Page Header -->
        <div class="page-header">
            <div class="container text-center">
                <h1 class="mb-3">About the System</h1>
                <p class="lead">
                    Website Sistem Kegiatan Event Kampus adalah platform yang membantu
                    panitia dan mahasiswa dalam mengelola event kampus secara efisien.
                </p>
            </div>
        </div>

        <div class="container py-5">
            <!-- Introduction -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-8">
                    <h2 class="section-title">Tentang Sistem Kami</h2>
                    <p>
                        Sistem ini dikembangkan untuk mempermudah proses pengelolaan, publikasi, 
                        dan pendaftaran berbagai kegiatan kampus seperti seminar, workshop, webinar, 
                        lomba, dan aktivitas organisasi mahasiswa.
                    </p>
                    <p>
                        Dengan sistem ini, admin atau panitia kampus dapat membuat dan mengatur event 
                        secara terstruktur, mulai dari menentukan kategori event, menambahkan pembicara, 
                        menetapkan jadwal, hingga memantau jumlah pendaftar.
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="info-card text-center">
                        <div class="info-card-icon">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <h5>Manajemen Terpadu</h5>
                        <p class="text-muted mb-0">
                            Semua kegiatan kampus dalam satu platform
                        </p>
                    </div>
                </div>
            </div>

            <!-- Features -->
            <div class="mb-5">
                <h2 class="section-title">Fitur yang Tersedia</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="feature-list">
                            <li>
                                <strong>Manajemen event lengkap</strong>
                                <p class="mb-0">Kategori, pembicara, jadwal, kuota peserta</p>
                            </li>
                            <li>
                                <strong>Pendaftaran peserta secara online</strong>
                                <p class="mb-0">Sistem registrasi yang mudah dan cepat</p>
                            </li>
                            <li>
                                <strong>Event tags untuk memudahkan filter topik</strong>
                                <p class="mb-0">Teknologi, Bisnis, Leadership, dll.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="feature-list">
                            <li>
                                <strong>Sistem feedback setelah acara selesai</strong>
                                <p class="mb-0">Evaluasi untuk perbaikan berkelanjutan</p>
                            </li>
                            <li>
                                <strong>Dashboard analytics</strong>
                                <p class="mb-0">Statistik dan laporan partisipasi</p>
                            </li>
                            <li>
                                <strong>Notifikasi otomatis</strong>
                                <p class="mb-0">Email pengingat untuk peserta</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Benefits -->
            <div class="mb-5">
                <h2 class="section-title">Manfaat untuk Stakeholder</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="bi bi-person-check"></i>
                            </div>
                            <h5>Untuk Mahasiswa</h5>
                            <p class="text-muted">
                                Mudah menemukan dan mendaftar event, notifikasi jadwal, 
                                dan akses informasi lengkap.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="bi bi-people"></i>
                            </div>
                            <h5>Untuk Panitia</h5>
                            <p class="text-muted">
                                Mengurangi beban administratif, manajemen peserta terpusat, 
                                dan tools evaluasi.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <h5>Untuk Kampus</h5>
                            <p class="text-muted">
                                Standardisasi proses, data terpusat, dan peningkatan 
                                kualitas kegiatan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- How It Works -->
            <div class="mb-5">
                <h2 class="section-title">Cara Kerja Sistem</h2>
                <div class="row text-center">
                    <div class="col-md-4 mb-4">
                        <div class="step-number">1</div>
                        <h5>Buat Event</h5>
                        <p class="text-muted">
                            Panitia membuat event dengan detail lengkap
                        </p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="step-number">2</div>
                        <h5>Publikasi</h5>
                        <p class="text-muted">
                            Event dipublikasikan ke platform kampus
                        </p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="step-number">3</div>
                        <h5>Pendaftaran</h5>
                        <p class="text-muted">
                            Mahasiswa mendaftar dan berpartisipasi
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact CTA -->
            <div class="contact-cta text-center rounded">
                <h3 class="mb-3">Tertarik Menggunakan Sistem Kami?</h3>
                <p class="mb-4">Hubungi kami untuk informasi implementasi di kampus Anda.</p>
                <a href="#" class="btn btn-light">
                    <i class="bi bi-envelope me-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </main>

    @include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>