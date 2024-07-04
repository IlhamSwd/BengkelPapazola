<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;
    protected $fillable = ['kode_barang', 'nama_barang', 'stok_barang', 'harga_satuan', 'produk'];
}
