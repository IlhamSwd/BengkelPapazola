<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
        $pembayaranproduk = DB::select(" SELECT stoks.produk, COUNT(*) as jumlah 
            FROM pembayarans
            JOIN stoks ON pembayarans.stok_id = stoks.id
            GROUP BY stoks.produk ");   
        return view('dashboard')->with('pembayaranproduk', $pembayaranproduk);
    }
}
