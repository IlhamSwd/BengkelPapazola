<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Montir extends Model
{
    use HasFactory;
    protected $fillable = ['url_montir', 'nama', 'jenis_kelamin', 'nomor_telepon', 'alamat', 'tempat_lahir', 'tanggal_lahir'];
}
