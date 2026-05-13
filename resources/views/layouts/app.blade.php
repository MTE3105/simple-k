<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Simpel-K</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #e9ecef;
            /* abu-abu muda */
        }

        .navbar-brand {
            font-weight: bold;
            letter-spacing: 1px;
        }

        .footer {
            background: #fff;
            padding: 20px 0;
            margin-top: 50px;
            border-top: 1px solid #dee2e6;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">SIMPEL-K</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/lurah') }}">Profil Lurah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/sekretaris') }}">Sekretaris</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <span class="text-muted">&copy; 2026 Pemerintah Kelurahan Maju Jaya</span>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>