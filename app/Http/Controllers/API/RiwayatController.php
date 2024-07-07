<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RiwayatController extends Controller
{
    public function index()
    {
        $riwayat = Riwayat::all();

        if ($riwayat->isEmpty()) {
            $response['message'] = 'Tidak ada riwayat yang ditemukan.';
            $response['success'] = false;
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }

        $response['success'] = true;
        $response['message'] = 'Riwayat ditemukan.';
        $response['data'] = $riwayat;
        return response()->json($response, Response::HTTP_OK);
        // atau
        // return response()->json($response, 200);
    }

    public function store(Request $request)
    {
        $val = $request->validate([
            'stok_id' => 'nullable',
            'customer_id' => 'nullable',
            'montir_id' => 'nullable',
            'pembayaran_id' => 'nullable'
        ]);

        $riwayat = Riwayat::create($val);
        if ($riwayat) {
            $response['success'] = true;
            $response['message'] = 'Riwayat berhasil ditambahkan.';
            return response()->json($response, Response::HTTP_CREATED);
        }
    }

    public function update(Request $request, $id)
    {
        $val = $request->validate([
            'stok_id' => 'nullable',
            'customer_id' => 'nullable',
            'montir_id' => 'nullable',
            'pembayaran_id' => 'nullable'
        ]);

        Riwayat::where('id', $id)->update($val);
        $response['success'] = true;
        $response['message'] = 'Riwayat berhasil diperbarui.';
        return response()->json($response, Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $riwayat = Riwayat::where('id', $id);
        if (count($riwayat->get())) {
            $riwayat->delete();
            $response['success'] = true;
            $response['message'] = 'Riwayat berhasil dihapus.';
            return response()->json($response, Response::HTTP_OK);
        } else {
            $response['success'] = false;
            $response['message'] = 'Riwayat tidak ditemukan.';
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }
    }
}
