@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Daftar Pelanggan</h1>

    <!-- Tombol Tambah Pelanggan -->
    <div class="d-flex justify-content-between mb-4">
        <a href="{{ route('pelanggan.create') }}" class="btn btn-success btn-lg">
            <i class="bi bi-person-plus"></i> Tambah Pelanggan
        </a>
    </div>

    <!-- Tabel Pelanggan -->
    <div class="table-responsive">
        <table class="table table-hover align-middle table-striped">
            <thead class="table-primary text-center">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelanggans as $pelanggan)
                <tr>
                    <td class="text-center">{{ $pelanggan->id }}</td>
                    <td>{{ $pelanggan->nama }}</td>
                    <td>{{ $pelanggan->alamat }}</td>
                    <td>{{ $pelanggan->no_telepon }}</td>
                    <td class="text-center">
                        <a href="{{ route('pelanggan.edit', $pelanggan) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="{{ route('pelanggan.destroy', $pelanggan) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pelanggan ini?')">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Custom CSS -->
<style>
    .table-responsive {
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        background-color: #f8f9fa;
    }

    .table th, .table td {
        vertical-align: middle;
        padding: 15px;
    }

    .table th {
        font-size: 1.1rem;
    }

    .btn {
        font-size: 1rem;
    }

    .btn i {
        margin-right: 5px;
    }
</style>
@endsection
