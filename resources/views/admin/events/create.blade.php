<!DOCTYPE html>
<html>

<head>
    <title>Create Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    @include('layout.navigation')

    <div class="container my-5">
        <h3>Create Event</h3>

        @if ($errors->any())
            <div class="alert alert-danger mb-4">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form method="POST" action="{{ route('admin.events.store') }}">
            @csrf

            <input class="form-control mb-2" name="title" placeholder="Event Title">
            <textarea class="form-control mb-2" name="description" placeholder="Description"></textarea>

            <input type="date" class="form-control mb-2" name="start_date">
            <input type="time" class="form-control mb-2" name="start_time">

            <input class="form-control mb-2" name="location" placeholder="Location">
            <input class="form-control mb-2" name="speaker_name" placeholder="Speaker (optional)">
            <div class="mb-3">
                <label class="form-label">Kategori Event</label>
                <select name="event_category_id" class="form-select" required>
                    <option value=""> Pilih Kategori </option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('event_category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <input class="form-control mb-2" name="price" placeholder="Price">

            <label>
                <input type="checkbox" name="is_featured"> Featured Event
            </label>

            <button type="submit" class="btn btn-success">Save Event</button>
        </form>
    </div>

    @include('layout.footer')

</body>

</html>
