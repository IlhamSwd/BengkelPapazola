<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stok = Stok::all();
        return view('stok.index')
                ->with('stok', $stok);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stok.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->user()->cannot('create', Stok::class)) {
            abort(403);
        }

        $val = $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required|max:50',
            'stok_barang' => 'required|max:50',
            'harga_satuan' => 'required',
            'produk' => 'required'
        ]);

         // simpan tabel fakultas
         Stok::create($val);
 
         // // radirect ke halaman list fakultas
         return redirect()->route('stok.index')->with('success', $val['nama_barang']. ' berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stok $stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stok $stok)
    {
        return view('stok.edit')->with('stok', $stok);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $stok)
    {
        $val = $request->validate([
            'kode_barang' => 'required|max:50',
            'nama_barang' => 'required|max:50',
            'stok_barang' => 'required|max:50',
            'harga_satuan' => 'required',
            'produk' => 'required'
        ]);
        $stok = Stok::find($stok);
        Stok::where('id', $stok['id'])->update($val);

        return redirect()->route('stok.index')->with('success', $val['nama_barang']. ' berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stok $stok)
    {
        $stok->DELETE();
        return redirect()->route('stok.index')->with('success', 'berhasil di Hapus');
    }
}
