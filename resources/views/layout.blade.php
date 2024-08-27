<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Laravel</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-5.3.3-dist/css/bootstrap.css') }}">
    {{-- bawah dari chat gpt --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
</head>
<body>
    <h1 class="text-center mt-3"> HAII </h1>

    @if (Auth::check())
    <div class="text-center">
        <b>Halo {{ Auth::user()->name }}, Anda berhasil Login</b>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="btn btn-danger btn-sm">Logout</button>
        </form>
    </div>
    @endif

    <div class="mt-3 container">
        @yield('konten')
    </div>
</body>
</html>