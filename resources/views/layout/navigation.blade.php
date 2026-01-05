<nav class="navbar navbar-expand-lg custom-nav">
    <div class="container">
        <a class="navbar-brand text-white fw-bold" href="{{ url('/') }}">Campus Events</a>

        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/events') }}">Events</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold" href="{{ route('login') }}">
                            Login
                        </a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link text-white fw-bold">
                                Logout
                            </button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<link rel="stylesheet" href="/css/navigation.css">