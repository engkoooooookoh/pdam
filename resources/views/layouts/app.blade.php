<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta tags dan link CSS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Impor CSS kustom -->
    @vite(['resources/css/style.css'])

    <!-- Custom CSS for Navbar Transparency -->
    <style>
        /* Default transparent navbar */
        .navbar {
            background-color: transparent;
            transition: background-color 0.3s ease-in-out;
        }

        /* Solid background when scrolled */
        .navbar.scrolled {
            background-color: #007bff; /* PDAM Garut Theme Color */
        }

        /* Ubah semua warna teks di navbar menjadi hitam */
        .navbar-brand, .navbar-nav .nav-link, .dropdown-item {
            color: black !important;
            font-size: 1.2rem; /* Memperbesar ukuran font */
        }

        /* Hover color tetap kuning emas */
        .navbar-nav .nav-link:hover, .dropdown-item:hover {
            color: #ffc107 !important;
        }

        /* Pastikan link yang aktif tetap hitam */
        .navbar-nav .active {
            color: black !important; /* Tetap hitam meskipun active */
        }

        /* Dropdown menu styling */
        .dropdown-menu {
            background-color: #007bff;
            border: none;
        }

        .dropdown-menu .dropdown-item {
            color: black !important; /* Warna teks di dropdown juga hitam */
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #0056b3; /* Background dropdown saat hover */
        }

        /* Memperbesar teks navbar */
        .navbar-nav .nav-link {
            font-size: 1.2rem; /* Ukuran font diperbesar */
        }
        header div p {
            color:black
        }
        header div h1{
            color: black
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <!-- Transparent Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark sticky-top">
            <div class="container">
                <!-- Navbar Brand -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    PDAM Garut
                </a>

                <!-- Navbar Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Content -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <!-- Kosong karena menu dipindah ke kanan -->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Memindahkan Beranda, Profil PDAM, Layanan Online, dan Kontak Kami ke kanan -->
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profil.pdam') }}">Profil PDAM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('layanan.online') }}">Layanan Online</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('kontak.kami') }}">Kontak Kami</a>
                        </li>

                        <!-- Tampilkan menu Daftar Pelanggan hanya jika user adalah admin -->
                        @if (Auth::check() && Auth::user()->role === 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pelanggan.index') }}">Daftar Pelanggan</a>
                            </li>
                        @endif

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Bootstrap JS (opsional jika diperlukan) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AgiA2QgQYRV5y+6mJ6t9O7MQ04u+xE1rXuBMZ7YdYm70BhlNfLMQXeflBx0K"
            crossorigin="anonymous"></script>

    <!-- Script to make navbar transparent on scroll -->
    <script>
        // Function to toggle navbar transparency
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
      <!-- Konten halaman -->
      @vite(['resources/js/script.js']) <!-- Impor JS kustom -->
</body>
</html>
