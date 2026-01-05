<!DOCTYPE html>
<html lang="en">

<head>
    <title>Events - Campus Event System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/navigation.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/events.css">
</head>

<body class="page-container">

    @include('layout.navigation')

    <main class="content-area">
        <div class="container py-5">
            <!-- Page Header -->
            <div class="page-header mb-5">
                <h1 class="mb-3">Upcoming Campus Events</h1>
                <p class="lead">Berikut adalah beberapa event kampus yang sedang berlangsung:</p>
            </div>

            <!-- Event Filters -->
            <div class="event-filters mb-5">
                <div class="row g-3">
                    <div class="col-md-8">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0">
                                <i class="bi bi-search text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0" placeholder="Cari event...">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select">
                            <option value="">Semua Kategori</option>
                            <option value="technology">Teknologi</option>
                            <option value="business">Bisnis</option>
                            <option value="leadership">Leadership</option>
                            <option value="academic">Akademik</option>
                            <option value="sports">Olahraga</option>
                        </select>
                    </div>
                </div>

                <!-- Active Tags -->
                <div class="mt-3">
                    <span class="badge tag-badge bg-primary me-2 mb-2">
                        <i class="bi bi-tag me-1"></i>Teknologi
                    </span>
                    <span class="badge tag-badge bg-success me-2 mb-2">
                        <i class="bi bi-tag me-1"></i>Gratis
                    </span>
                    <span class="badge tag-badge bg-info me-2 mb-2">
                        <i class="bi bi-tag me-1"></i>Sertifikat
                    </span>
                    <span class="badge tag-badge bg-warning text-dark me-2 mb-2">
                        <i class="bi bi-tag me-1"></i>Bisnis
                    </span>
                    <button class="btn btn-outline-secondary btn-sm mb-2">
                        <i class="bi bi-x-circle me-1"></i>Hapus Filter
                    </button>
                </div>
            </div>

            @auth
                @if (auth()->user()->role_id == 1)
                    <a href="{{ route('admin.events.create') }}" class="btn btn-primary mb-4">
                        + Create Event
                    </a>
                @endif
            @endauth

            <!--Events-->
            <div class="row g-4">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="col-md-4">
                        @foreach ($events as $event)
                            <div class="event-item">

                                <h5>{{ $event->title }}</h5>

                                <p>
                                    {{ $event->description }}
                                </p>

                                <div class="event-meta">
                                    <span>
                                        {{ \Carbon\Carbon::parse($event->start_date)->translatedFormat('d F Y') }}
                                    </span>

                                    <span>
                                        {{ $event->start_time }}
                                    </span>

                                    <span>
                                        {{ $event->location }}
                                    </span>

                                    @if ($event->speaker_name)
                                        <span>
                                            {{ $event->speaker_name }}
                                        </span>
                                    @endif
                                </div>
                                <a href="{{ route('eventDetail', $event->id) }}" class="btn btn-primary mt-2">
                                    Detail
                                </a>
                                @auth
                                    @if (auth()->user()->role_id == 1)
                                        <div class="d-flex gap-2 mt-2">
                                            <a href="{{ route('admin.events.edit', $event->id) }}"
                                                class="btn btn-warning btn-sm">
                                                Edit
                                            </a>

                                            <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST"
                                                onsubmit="return confirm('Yakin hapus event ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                @endauth

                            </div>
                        @endforeach

                    </div>
                @endfor
            </div>

            <!--Pagination-->
            <nav aria-label="Event pagination" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Sebelumnya</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Selanjutnya</a>
                    </li>
                </ul>
            </nav>

            <div class="registration-cta mt-5 p-5 text-center rounded">
                <h3 class="mb-3">Ingin Mengorganisir Event?</h3>
                <p class="mb-4">Daftar sebagai organizer dan mulai kelola event kampus Anda sekarang.</p>
                <a href="#" class="btn btn-light btn-lg px-4">
                    <i class="bi bi-plus-circle me-2"></i>Buat Event Baru
                </a>
            </div>
        </div>
    </main>

    @include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Filter functionality
        document.querySelectorAll('.tag-badge').forEach(badge => {
            badge.addEventListener('click', function() {
                this.classList.toggle('active');
            });
        });
    </script>
</body>

</html>
