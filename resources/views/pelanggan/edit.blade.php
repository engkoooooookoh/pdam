<!DOCTYPE html>
<html>
<head>
    <title>Edit Pelanggan</title>
</head>
<body>
    <h1>Edit Pelanggan</h1>
    <form action="{{ route('pelanggan.update', $pelanggan) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $pelanggan->nama }}" required>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" value="{{ $pelanggan->alamat }}" required>

        <label for="no_telepon">No Telepon:</label>
        <input type="text" name="no_telepon" id="no_telepon" value="{{ $pelanggan->no_telepon }}" required>

        <button type="submit">Update</button>
    </form>
</body>
</html>
