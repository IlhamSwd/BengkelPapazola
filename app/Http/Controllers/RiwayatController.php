<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Montir;
use App\Models\Pembayaran;
use App\Models\Riwayat;
use App\Models\Stok;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $riwayat = Riwayat::all();
        return view('riwayat.index')
                ->with('riwayat', $riwayat);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stok = Stok::all();
        $customer = Customer::all();
        $montir = Montir::all();
        $pembayaran = Pembayaran::all();
        return view('riwayat.create')->with('stok', $stok)->with('customer', $customer)
                    ->with('montir', $montir)->with('pembayaran', $pembayaran);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->user()->cannot('create', Riwayat::class)) {
            abort(403);
        }

        $val = $request->validate([
            'stok_id' => 'nullable',
            'customer_id' => 'nullable',
            'montir_id' => 'nullable',
            'pembayaran_id' => 'nullable'
        ]);

        Riwayat::create($val);

        return redirect()->route('riwayat.index')->with('success', ' Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Riwayat $riwayat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Riwayat $riwayat)
    {
        $stok = Stok::all();
        $customer = Customer::all();
        $montir = Montir::all();
        $pembayaran = Pembayaran::all();
        return view('riwayat.create')->with('stok', $stok)->with('customer', $customer)
                    ->with('montir', $montir)->with('pembayaran', $pembayaran)->with('riwayat', $riwayat);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $riwayat)
    {
        $val = $request->validate([
            // 'kode' => 'required|max:50',
            // 'nama_barang' => 'required|max:50',
            // 'merk' => 'required|max:50',
            // 'jumlah' => 'required|max:50',
            // 'montir' => 'required|max:50',
            // 'harga' => 'required'
            'stok_id' => 'nullable',
            'customer_id' => 'nullable',
            'montir_id' => 'nullable',
            'pembayaran_id' => 'nullable'
        ]);

        $riwayat = Riwayat::find($riwayat);
        Riwayat::where('id', $riwayat['id'])->update($val);
 
         // // radirect ke halaman list fakultas
         return redirect()->route('riwayat.index')->with('success', ' berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Riwayat $riwayat)
    {
        $riwayat->delete();
        return redirect()->route('riwayat.index')->with('success', 'berhasil di Hapus');
    }
}
