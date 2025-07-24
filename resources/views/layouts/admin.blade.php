<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - Warung Zura</title>
    {{-- Menggunakan Bootstrap 5 dari CDN untuk styling halaman admin --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .card { margin-top: 2rem; }
        .table-actions { display: flex; gap: 0.5rem; }
        .img-thumbnail-small { max-width: 100px; height: auto; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('admin.menu.index') }}">Admin Warung Zura</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.menu.index') }}">Kelola Menu</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" target="_blank">Lihat Website</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer class="text-center mt-5 mb-3">
        <p>Warung Zura Admin Panel</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
