<!DOCTYPE html>
<html>

<head>
    <title>Pembayaran Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    @include('layout.navigation')

    <div class="container my-5">
        <h3>Pembayaran Event</h3>

        <p><strong>{{ $event->title }}</strong></p>
        <p>Biaya: Rp {{ number_format($event->price) }}</p>

        @if ($event->bankAccount)
            <p>
                Bank: {{ $event->bankAccount->bank_name }} <br>
                No Rekening: {{ $event->bankAccount->account_number }} <br>
                Atas Nama: {{ $event->bankAccount->account_holder }}
            </p>
        @endif

        <form action="{{ route('payments.store', $registration->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">Upload Bukti Transfer</label>
                <input type="file" name="proof" class="form-control" required>
            </div>

            <button class="btn btn-primary">
                Kirim Bukti Pembayaran
            </button>
        </form>
    </div>


    @include('layout.footer')

</body>

</html>
