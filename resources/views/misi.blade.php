@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Peta Wilayah Langganan</h1>
    
    <!-- Bagian Deskripsi Umum -->
    <p class="text-center lead">
        Perumda Air Minum Tirta Intan Kabupaten Garut melayani kebutuhan air bersih di wilayah Kabupaten Garut 
        melalui 8 Cabang Perusahaan dan 8 Unit Pelayanan.
    </p>

    <!-- Grid Layout untuk Cabang dan Unit Pelayanan -->
    <div class="row">
        <div class="col-lg-6 mb-4">
            <h4>Cabang I Garut Kota</h4>
            <p>Meliputi wilayah Kecamatan Garut Kota dan Desa Mangkurakyat.</p>
        </div>
        <div class="col-lg-6 mb-4">
            <h4>Cabang II Tarogong Kidul</h4>
            <p>Meliputi wilayah Kecamatan Tarogong Kidul.</p>
        </div>
        <div class="col-lg-6 mb-4">
            <h4>Cabang III Tarogong Kaler</h4>
            <p>Meliputi wilayah Kecamatan Tarogong Kaler.</p>
        </div>
        <div class="col-lg-6 mb-4">
            <h4>Cabang IV Samarang</h4>
            <p>Meliputi wilayah Kecamatan Samarang dan Pasirwangi.</p>
        </div>
        <div class="col-lg-6 mb-4">
            <h4>Cabang V Banyuresmi</h4>
            <p>
                Meliputi wilayah Unit Pelayanan Banyuresmi, Unit Pelayanan Leuwigoong, dan Unit Pelayanan Cibatu.
            </p>
        </div>
        <div class="col-lg-6 mb-4">
            <h4>Cabang VI Karangpawitan</h4>
            <p>
                Meliputi wilayah Unit Pelayanan Perum Cempaka, Unit Pelayanan Karangpawitan, dan Unit Pelayanan Wanaraja.
            </p>
        </div>
        <div class="col-lg-6 mb-4">
            <h4>Cabang VII Cilawu</h4>
            <p>Meliputi wilayah Unit Pelayanan Cilawu.</p>
        </div>
        <div class="col-lg-6 mb-4">
            <h4>Cabang VIII Cikajang</h4>
            <p>
                Meliputi wilayah Unit Pelayanan Cisurupan, Unit Pelayanan Cikajang, Unit Pelayanan Pameungpeuk, dan Unit Pelayanan Cibalong.
            </p>
        </div>
    </div>

    <!-- Statistik Pelanggan -->
    <div class="my-5">
        <h3 class="text-primary">Statistik Pelanggan</h3>
        <p>
            Perumda Air Minum Tirta Intan Kabupaten Garut melayani 23 Kecamatan dan 265 Desa/Kelurahan dari jumlah keseluruhan wilayah kabupaten Garut yang meliputi 42 Kecamatan dengan 442 Desa dan Kelurahan.
        </p>
        <p>
            Sampai dengan 31 Desember 2023, perusahaan memiliki <strong>59.770 pelanggan aktif</strong>, meningkat sebanyak <strong>3.468 pelanggan</strong> dibandingkan 56.302 pelanggan pada 31 Desember 2022.
        </p>
    </div>

    <!-- Tambahan Foto -->
    <div class="row text-center my-5">
        <div class="col-md-4">
            <img src="https://pdam.tirtaintan.co.id/po-content/po-upload/Untitled.jpg" class="img-fluid rounded mb-3" alt="Cabang I">
        </div>
        <div class="col-md-4">
            <img src="https://pdam.tirtaintan.co.id/po-content/po-upload/cakupan_pelayanan.jpg" class="img-fluid rounded mb-3" alt="Cabang II">
        </div>
        <div class="col-md-4">
            <img src="https://pdam.tirtaintan.co.id/po-content/po-upload/daftar_cakupan_wilayah.png" class="img-fluid rounded mb-3" alt="Cabang III">
        </div>
    </div>

    <!-- Pesan Terima Kasih -->
    <div class="text-center my-4">
        <p class="text-muted">Terima kasih,<br>PERUMDA AIR MINUM TIRTA INTAN PDAM KABUPATEN GARUT</p>
    </div>
</div>
@endsection
