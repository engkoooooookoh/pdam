@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row align-items-center">
        <!-- Kolom untuk gambar -->
        <div class="col-md-6">
            <img src="https://pdam.tirtaintan.co.id/po-content/po-upload/medium/medium_uji_kopetensi1.jpg" class="img-fluid rounded shadow" alt="Sejarah PDAM">
        </div>

        <!-- Kolom untuk teks sejarah -->
        <div class="col-md-6 d-flex align-items-center">
            <div>
                <h1 class="mb-4 text-center">Sejarah PDAM Garut</h1>
                <p class="lead">
                    PDAM Garut didirikan dengan tujuan untuk menyediakan layanan air bersih kepada masyarakat di wilayah Garut. 
                    Sejak awal berdirinya, PDAM Garut telah berkembang menjadi penyedia layanan air bersih yang andal dan berkomitmen terhadap pelayanan masyarakat.
                </p>
                <p class="lead">
                    Seiring waktu, PDAM Garut terus melakukan inovasi dan pengembangan untuk meningkatkan kualitas air, memperluas cakupan layanan, 
                    serta memastikan bahwa air bersih dapat diakses oleh seluruh masyarakat Garut dengan harga yang terjangkau.
                </p>
            </div>
        </div>
    </div>

    <!-- Bagian tambahan dengan card -->
    <div class="row mt-5" id="more-info">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Inovasi Layanan</h5>
                    <p class="card-text">
                        Kami terus berinovasi untuk memberikan layanan terbaik kepada masyarakat Garut. PDAM Garut berkomitmen untuk selalu berada di garis depan dalam menyediakan air bersih.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Peningkatan Kualitas</h5>
                    <p class="card-text">
                        Kami berupaya meningkatkan kualitas air yang didistribusikan ke seluruh pelanggan kami, dengan menggunakan teknologi modern dan proses penyaringan yang ketat.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Jangkauan Layanan</h5>
                    <p class="card-text">
                        PDAM Garut memperluas jangkauan layanan untuk menjangkau seluruh masyarakat, terutama di daerah yang sulit mendapatkan akses air bersih.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
