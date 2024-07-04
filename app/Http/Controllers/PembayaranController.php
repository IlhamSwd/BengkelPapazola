<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Pembayaran;
use App\Models\Stok;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->role != 'A') {
            //redirect or show 403 forbidden page
            abort(403, 'Kamu Tidak Memiliki Akses');
        }else {
            $pembayaran = Pembayaran::all();
        }
        return view('pembayaran.index')
                ->with('pembayaran', $pembayaran);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stok = Stok::all();
        $customer = Customer::all();
        return view('pembayaran.create')->with('stok', $stok)->with('customer', $customer);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->user()->cannot('create', Pembayaran::class)) {
            abort(403);
        }

        $val = $request->validate([
            'stok_id' => 'nullable',
            'customer_id' => 'nullable',
            'jumlah' => 'required|max:50'
        ]);

         // simpan tabel fakultas
         Pembayaran::create($val);
 
         // // radirect ke halaman list fakultas
         return redirect()->route('pembayaran.index')->with('success', ' pembayaran telah dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembayaran $pembayaran)
    {
        $stok = Stok::all();
        $customer = Customer::all();
        return view('pembayaran.edit')->with('stok', $stok)->with('customer', $customer)->with('pembayaran', $pembayaran);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $pembayaran)
    {
        $val = $request->validate([
            'stok_id' => 'nullable',
            'customer_id' => 'nullable',
            'jumlah' => 'required|max:50'
        ]);

        $pembayaran = Pembayaran::find($pembayaran);
        Pembayaran::where('id', $pembayaran['id'])->update($val);
 
         // // radirect ke halaman list fakultas
         return redirect()->route('pembayaran.index')->with('success', ' pembayaran berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran->delete();
        return redirect()->route('pembayaran.index')->with('success', 'berhasil di Hapus');
    }
}
