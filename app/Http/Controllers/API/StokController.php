<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Stok;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StokController extends Controller
{
    public function index()
    {
        $stok = Stok::all();

        if ($stok->isEmpty()) {
            $response['message'] = 'Tidak ada stok yang ditemukan.';
            $response['success'] = false;
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }

        $response['success'] = true;
        $response['message'] = 'stok ditemukan.';
        $response['data'] = $stok;
        return response()->json($response, Response::HTTP_OK);
        // atau
        // return response()->json($response, 200);
    }

    public function store(Request $request)
    {
        $val = $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required|max:50',
            'stok_barang' => 'required|max:50',
            'harga_satuan' => 'required',
            'produk' => 'required'
        ]);

        $stok = Stok::create($val);
        if ($stok) {
            $response['success'] = true;
            $response['message'] = 'Stok berhasil ditambahkan.';
            return response()->json($response, Response::HTTP_CREATED);
        }
    }

    public function update(Request $request, $id)
    {
        $val = $request->validate([
            'kode_barang' => 'required|max:50',
            'nama_barang' => 'required|max:50',
            'stok_barang' => 'required|max:50',
            'harga_satuan' => 'required',
            'produk' => 'required'
        ]);

        Stok::where('id', $id)->update($val);
        $response['success'] = true;
        $response['message'] = 'Stok berhasil diperbarui.';
        return response()->json($response, Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $stok = Stok::where('id', $id);
        if (count($stok->get())) {
            $stok->delete();
            $response['success'] = true;
            $response['message'] = 'Stok berhasil dihapus.';
            return response()->json($response, Response::HTTP_OK);
        } else {
            $response['success'] = false;
            $response['message'] = 'Stok tidak ditemukan.';
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }
    }
}
