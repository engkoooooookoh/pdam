<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan (optional, jika tidak sesuai dengan konvensi)
    protected $table = 'pelanggans';

    // Kolom yang dapat diisi massal
    protected $fillable = ['nama', 'alamat', 'no_telepon'];
}
