<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['url_customer', 'nama', 'jenis_kelamin', 'nomor_telepon', 'alamat', 
                            'tempat_lahir', 'tanggal_lahir', 'jenis_motor' ,'plat_kendaraan', 'keluhan_servis','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
                            
}
