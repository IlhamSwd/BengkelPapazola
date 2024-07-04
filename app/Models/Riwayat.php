<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;
    protected $fillable = ['stok_id', 'customer_id', 'montir_id', 'pembayaran_id'];

    public function stok(){
        return $this->belongsTo(Stok::class, 'stok_id', 'id');
    }
    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
    public function montir(){
        return $this->belongsTo(Montir::class, 'montir_id', 'id');
    }
    public function pembayaran(){
        return $this->belongsTo(Pembayaran::class, 'pembayaran_id', 'id');
    }
}
