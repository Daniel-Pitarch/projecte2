<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 12 CRUD - Techsolutionstuff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <nav class="mb-4 d-flex justify-content-end">
            @auth
                <span class="me-2">{{ Auth::user()->username ?? Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button class="btn btn-link p-0">Logout</button>
                </form>
            @else
                <a class="me-2" href="{{ route('login.form') }}">Login</a>
                <a href="{{ route('register.form') }}">Register</a>
            @endauth
        </nav>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>
</body>
</html>