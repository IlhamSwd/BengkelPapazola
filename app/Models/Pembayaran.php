<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $fillable = ['stok_id', 'customer_id', 'jumlah'];

    public function stok(){
        return $this->belongsTo(Stok::class, 'stok_id');
    }
    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
