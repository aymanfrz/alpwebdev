<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home - Campus Event System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/navigation.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/home.css">
</head>

<body class="page-container">

    @include('layout.navigation')

    <main class="content-area">
        <div class="container py-5">
            <!-- Hero Section -->
            <div class="hero-section text-center mb-5">
                <h1 class="mb-4">Welcome to Campus Event System</h1>
                <p class="lead mb-4">
                    Sistem Kegiatan Event Kampus mempermudah publikasi, pengelolaan,
                    dan pendaftaran event kampus secara digital dan terintegrasi.
                </p>
                <a href="{{ url('/events') }}" class="btn btn-hero">
                    <i class="bi bi-calendar-event me-2"></i>Jelajahi Event
                </a>
            </div>

            <!-- Features Grid -->
            <div class="features-grid">
                <h2 class="text-center mb-5">Fitur Unggulan Sistem</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="feature-card text-center">
                            <div class="feature-icon">
                                <i class="bi bi-calendar-check"></i>
                            </div>
                            <h4>Manajemen Event Lengkap</h4>
                            <p class="text-muted">
                                Kelola kategori, pembicara, jadwal, dan kuota peserta secara terpusat
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card text-center">
                            <div class="feature-icon">
                                <i class="bi bi-person-plus"></i>
                            </div>
                            <h4>Pendaftaran Online</h4>
                            <p class="text-muted">
                                Sistem pendaftaran peserta yang mudah, cepat, dan real-time
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card text-center">
                            <div class="feature-icon">
                                <i class="bi bi-tags"></i>
                            </div>
                            <h4>Event Tags System</h4>
                            <p class="text-muted">
                                Filter event berdasarkan topik seperti Teknologi, Bisnis, Leadership
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Events Preview -->
            <div class="events-preview">
                <h2 class="text-center mb-5">Event Terpopuler</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card event-card">
                            @foreach ($featuredEvents as $event)
                                <div class="event-card">
                                    <h4>{{ $event->title }}</h4>
                                    <p>
                                        {{ $event->description }}
                                    </p>
                                    <span class="event-date">
                                        {{ \Carbon\Carbon::parse($event->start_date)->translatedFormat('d F Y') }}
                                    </span>
                                    <a href="{{ route('eventDetail', $event->id) }}" class="btn btn-primary mt-2">
                                        Detail
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics -->
            <div class="stats-section text-center">
                <h3 class="mb-5">Dampak Sistem Kami</h3>
                <div class="row">
                    <div class="col-md-3 col-6 mb-4">
                        <div class="stat-number">50+</div>
                        <p class="text-muted mb-0">Event Terkelola</p>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="stat-number">2K+</div>
                        <p class="text-muted mb-0">Pengguna Aktif</p>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="stat-number">95%</div>
                        <p class="text-muted mb-0">Kepuasan Peserta</p>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="stat-number">15</div>
                        <p class="text-muted mb-0">Kampus Mitra</p>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-5">
                <h4 class="mb-3">Siap mengelola event kampus Anda?</h4>
                <p class="text-muted mb-4">Bergabung dengan sistem kami untuk pengalaman manajemen event yang lebih baik
                </p>
                <a href="{{ url('/about') }}" class="btn btn-primary px-4">
                    <i class="bi bi-info-circle me-2"></i>Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </main>

    @include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Animation for stat counters
        document.addEventListener('DOMContentLoaded', function() {
            const statNumbers = document.querySelectorAll('.stat-number');
            statNumbers.forEach(stat => {
                const target = parseInt(stat.textContent);
                let current = 0;
                const increment = target / 30;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        stat.textContent = target + '+';
                        clearInterval(timer);
                    } else {
                        stat.textContent = Math.floor(current) + '+';
                    }
                }, 40);
            });
        });
    </script>
</body>

</html>
