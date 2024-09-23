@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Header Section -->
    <header class="text-white text-center py-5 mb-4">
        <div class="container">
            <h1 class="display-4 fw-bolder">Selamat Datang di PDAM Garut</h1>
            <p class="lead">Solusi air bersih terbaik untuk kehidupan yang lebih baik</p>
        </div>
    </header>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4">
                    <div class="card h-100 shadow service-card">
                        <div class="card-body">
                            <i class="fas fa-tint fa-3x text-primary mb-3"></i>
                            <h2 class="h5">Tarif Air</h2>
                            <p class="mb-0">Rp. 5000/m3</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 shadow service-card">
                        <div class="card-body">
                            <i class="fas fa-clock fa-3x text-primary mb-3"></i>
                            <h2 class="h5">Jam Operasional</h2>
                            <p class="mb-0">08:00 - 17:00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 shadow service-card">
                        <div class="card-body">
                            <i class="fas fa-newspaper fa-3x text-primary mb-3"></i>
                            <h2 class="h5">Berita Terkini</h2>
                            <p class="mb-0">Cek website kami untuk informasi terbaru</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Tentang PDAM Garut</h2>
                    <p class="lead">PDAM Garut telah melayani masyarakat Garut dengan penyediaan air bersih selama lebih dari 25 tahun.</p>
                    <a class="btn btn-primary btn-lg" href="#">Pelajari Lebih Lanjut</a>
                </div>
                <div class="col-lg-6 text-center">
                    <img class="img-fluid rounded shadow" src="https://images.unsplash.com/photo-1505236732171-72a5b19c4981?w=600&auto=format&fit=crop&q=60" alt="Tentang PDAM Garut">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center fw-bolder mb-4">Layanan Kami</h2>
            <div class="row text-center">
                <div class="col-lg-3 mb-5">
                    <div class="card h-100 shadow service-card">
                        <div class="card-body">
                            <i class="fas fa-plug fa-3x text-primary mb-3"></i>
                            <h3 class="h5">Koneksi Baru</h3>
                            <p>Proses mudah untuk sambungan air baru ke rumah atau bisnis Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="card h-100 shadow service-card">
                        <div class="card-body">
                            <i class="fas fa-tools fa-3x text-primary mb-3"></i>
                            <h3 class="h5">Perbaikan</h3>
                            <p>Layanan perbaikan cepat untuk masalah jaringan pipa atau sambungan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="card h-100 shadow service-card">
                        <div class="card-body">
                            <i class="fas fa-tachometer-alt fa-3x text-primary mb-3"></i>
                            <h3 class="h5">Pembacaan Meter</h3>
                            <p>Pengukuran penggunaan air Anda secara berkala dan transparan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="card h-100 shadow service-card">
                        <div class="card-body">
                            <i class="fas fa-phone-alt fa-3x text-primary mb-3"></i>
                            <h3 class="h5">Pengaduan</h3>
                            <p>Layanan pelanggan yang siap membantu setiap keluhan Anda 24/7.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bolder mb-4">Apa Kata Pelanggan Kami</h2>
            <div class="row text-center">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <p class="fst-italic">"Layanan PDAM Garut sangat baik, air bersih selalu tersedia di rumah saya."</p>
                            <div class="fw-bold">Budi Setiawan</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <p class="fst-italic">"Sambungan air baru kami diproses dengan cepat dan efisien."</p>
                            <div class="fw-bold">Siti Nurhaliza</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <p class="fst-italic">"Pelayanan pengaduan sangat responsif dan selalu siap membantu."</p>
                            <div class="fw-bold">Andi Kurniawan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-5 bg-primary text-white text-center">
        <div class="container">
            <h2 class="fw-bolder">Butuh Bantuan atau Informasi Lainnya?</h2>
            <p class="lead">Hubungi kami melalui layanan pelanggan atau kunjungi kantor kami untuk bantuan lebih lanjut.</p>
            <a class="btn btn-outline-light btn-lg" href="#">Hubungi Kami</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5 text-center text-white">
            <small>&copy; PDAM Garut 2024. All Rights Reserved.</small>
        </div>
    </footer>
</div>

<!-- Optional JS for Animations and Icon Support -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>
    // Example of adding some interactivity
    document.querySelectorAll('.service-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.classList.add('shadow-lg');
        });
        card.addEventListener('mouseleave', () => {
            card.classList.remove('shadow-lg');
        });
    });
</script>
@endsection
