<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Montir;
use Carbon\Month;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MontirController extends Controller
{
    public function index()
    {
        $montir = Montir::all();

        if ($montir->isEmpty()) {
            $response['message'] = 'Tidak ada Montir yang ditemukan.';
            $response['success'] = false;
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }

        $response['success'] = true;
        $response['message'] = 'Montir ditemukan.';
        $response['data'] = $montir;
        return response()->json($response, Response::HTTP_OK);
        // atau
        // return response()->json($response, 200);
    }

    public function store(Request $request)
    {
        $val = $request->validate([
            'url_montir'=> 'required|url',
            'nama' => 'required|max:50',
            'jenis_kelamin' => 'required|max:50',
            'nomor_telepon' => 'required|max:50',
            'alamat' => 'required|max:50',
            'tempat_lahir' => 'required|max:50',
            'tanggal_lahir' => 'required|max:50'
        ]);

        $montir = Montir::create($val);
        if ($montir) {
            $response['success'] = true;
            $response['message'] = 'Montir berhasil ditambahkan.';
            return response()->json($response, Response::HTTP_CREATED);
        }
    }

    public function update(Request $request, $id)
    {
        $val = $request->validate([
            'url_montir'=> 'required|url',
            'nama' => 'required|max:50',
            'jenis_kelamin' => 'required|max:50',
            'nomor_telepon' => 'required|max:50',
            'alamat' => 'required|max:50',
            'tempat_lahir' => 'required|max:50',
            'tanggal_lahir' => 'required|max:50'
        ]);

        Montir::where('id', $id)->update($val);
        $response['success'] = true;
        $response['message'] = 'Montir berhasil diperbarui.';
        return response()->json($response, Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $montir = Montir::where('id', $id);
        if (count($montir->get())) {
            $montir->delete();
            $response['success'] = true;
            $response['message'] = 'Montir berhasil dihapus.';
            return response()->json($response, Response::HTTP_OK);
        } else {
            $response['success'] = false;
            $response['message'] = 'Montir tidak ditemukan.';
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }
    }
}
