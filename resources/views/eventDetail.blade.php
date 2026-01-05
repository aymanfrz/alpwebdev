<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $event->title }} | Campus Events</title>

    <link rel="stylesheet" href="/css/navigation.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/pages.css">

    <link rel="stylesheet" href="/css/event-detail.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    @include('layout.navigation')

    <div class="container my-5">

        <div class="row">
            <div class="col-md-8">

                <h2 class="mb-3">{{ $event->title }}</h2>

                <p class="text-muted">
                    {{ $event->description }}
                </p>

                <hr>

                <div class="event-info mb-4">

                    <p>
                        <strong>Tanggal:</strong>
                        {{ \Carbon\Carbon::parse($event->start_date)->translatedFormat('d F Y') }}
                    </p>

                    <p>
                        <strong>Waktu:</strong>
                        {{ $event->start_time }}
                    </p>

                    <p>
                        <strong>Lokasi:</strong>
                        {{ $event->location }}
                    </p>

                    @if ($event->speaker_name)
                        <p>
                            <strong>Speaker:</strong>
                            {{ $event->speaker_name }}
                        </p>
                    @endif

                </div>

            </div>

            <div class="col-md-4">

                <div class="card shadow-sm">
                    <div class="card-body">

                        <h5 class="card-title">
                            {{ $event->price == 0 ? 'Gratis' : 'Rp ' . number_format($event->price) }}
                        </h5>

                        <hr>


                        @if ($event->price == 0)
                            <p class="text-success">
                                Event ini gratis. Kamu bisa langsung mendaftar.
                            </p>

                            <a href="#" class="btn btn-success w-100">
                                Daftar Event
                            </a>
                        @else
                            <p>
                                <strong>Pembayaran melalui:</strong>
                            </p>

                            @if ($event->bankAccount)
                                <p>
                                    Bank: {{ $event->bankAccount->bank_name }} <br>
                                    No Rekening: {{ $event->bankAccount->account_number }} <br>
                                    Atas Nama: {{ $event->bankAccount->account_holder }}
                                </p>
                            @else
                                <p class="text-danger">
                                    Informasi pembayaran belum tersedia.
                                </p>
                            @endif

                            @if (auth()->check())
                                <<form action="{{ route('events.register', $event->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">
                                        Daftar Event
                                    </button>
                                    </form>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-primary w-100">
                                        Login untuk Daftar
                                    </a>
                            @endif

                        @endif

                    </div>
                </div>

            </div>
        </div>

    </div>

    {{-- Footer --}}
    @include('layout.footer')

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
