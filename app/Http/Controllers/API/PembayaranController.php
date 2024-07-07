<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::all();

        if ($pembayaran->isEmpty()) {
            $response['message'] = 'Tidak ada Pembayaran yang ditemukan.';
            $response['success'] = false;
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }

        $response['success'] = true;
        $response['message'] = 'Pembayaran ditemukan.';
        $response['data'] = $pembayaran;
        return response()->json($response, Response::HTTP_OK);
        // atau
        // return response()->json($response, 200);
    }

    public function store(Request $request)
    {
        $val = $request->validate([
            'stok_id' => 'nullable',
            'customer_id' => 'nullable',
            'jumlah' => 'required|max:50'
        ]);

        $pembayaran = Pembayaran::create($val);
        if ($pembayaran) {
            $response['success'] = true;
            $response['message'] = 'Pembayaran berhasil ditambahkan.';
            return response()->json($response, Response::HTTP_CREATED);
        }
    }

    public function update(Request $request, $id)
    {
        $val = $request->validate([
            'stok_id' => 'nullable',
            'customer_id' => 'nullable',
            'jumlah' => 'required|max:50'
        ]);

        Pembayaran::where('id', $id)->update($val);
        $response['success'] = true;
        $response['message'] = 'Pembayaran berhasil diperbarui.';
        return response()->json($response, Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $pembayaran = Pembayaran::where('id', $id);
        if (count($pembayaran->get())) {
            $pembayaran->delete();
            $response['success'] = true;
            $response['message'] = 'Pembayaran berhasil dihapus.';
            return response()->json($response, Response::HTTP_OK);
        } else {
            $response['success'] = false;
            $response['message'] = 'Pembayaran tidak ditemukan.';
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }
    }
}
