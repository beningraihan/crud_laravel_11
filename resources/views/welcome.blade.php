<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Laravel</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    {{-- bawah dari chat gpt --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1 class="text-center mt-3">Selamat Datang di Aplikasi Crud Laravel 11</h1>

    <div class="text-center">
        <a href="{{ route('siswa.tampil') }}" class="btn btn-primary">Kelola Siswa</a>
    </div>
</body>
</html>