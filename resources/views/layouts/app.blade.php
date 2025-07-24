<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    {{-- Judul halaman akan dinamis, dengan 'Warung Zura' sebagai default --}}
    <title>@yield('title', 'Warung Zura')</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    {{-- Menggunakan helper asset() untuk memuat file dari folder /public --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tooplate-crispy-kitchen.css') }}" rel="stylesheet">

</head>
<body>
    
    {{-- Memuat Navbar dari file partial terpisah --}}
    {{-- Ini membuat kode lebih rapi dan mudah dikelola --}}
    @include('layouts.partials.navbar')

    <main>
        {{-- Di sinilah konten unik dari setiap halaman akan ditampilkan --}}
        @yield('content')
    </main>

    {{-- Memuat Footer dari file partial terpisah --}}
    @include('layouts.partials.footer')

    {{-- Memuat Modal Reservasi dari file partial terpisah karena digunakan di banyak halaman --}}
    @include('layouts.partials.modal')


    <!-- JAVASCRIPT FILES -->
    {{-- Menggunakan helper asset() untuk memuat file dari folder /public --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    {{-- Stack untuk script tambahan jika dibutuhkan di halaman tertentu --}}
    @stack('scripts')

</body>
</html>
