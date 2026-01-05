<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Campus Events')</title>

    <!-- GLOBAL CSS -->
    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}">

    {{-- Page specific CSS --}}
    @stack('styles')
</head>
<body>

    {{-- Navigation --}}
    @include('layout.navigation')

    {{-- Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layout.footer')

</body>
</html>
