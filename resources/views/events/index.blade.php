@extends('layouts.app')

@section('content')
    <h1>Daftar Event</h1>

    @foreach ($events as $event)
        <p>{{ $event->title }}</p>
    @endforeach
@endsection
