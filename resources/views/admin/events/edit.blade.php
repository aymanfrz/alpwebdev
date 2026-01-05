<!DOCTYPE html>
<html>
<head>
    <title>Edit Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@include('layout.navigation')

<div class="container my-5">
    <h3>Edit Event</h3>

    <form method="POST" action="{{ route('admin.events.update', $event->id) }}">
        @csrf
        @method('PUT')

        <input class="form-control mb-2" name="title" value="{{ $event->title }}">
        <textarea class="form-control mb-2" name="description">{{ $event->description }}</textarea>

        <input type="date" class="form-control mb-2" name="start_date" value="{{ $event->start_date }}">
        <input type="time" class="form-control mb-2" name="start_time" value="{{ $event->start_time }}">

        <input class="form-control mb-2" name="location" value="{{ $event->location }}">
        <input class="form-control mb-2" name="speaker_name" value="{{ $event->speaker_name }}">
        <input class="form-control mb-2" name="price" value="{{ $event->price }}">

        <button class="btn btn-primary mt-3">Update Event</button>
    </form>
</div>

@include('layout.footer')

</body>
</html>