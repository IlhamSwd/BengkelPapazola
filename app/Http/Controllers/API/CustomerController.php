<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();

        if ($customer->isEmpty()) {
            $response['message'] = 'Tidak ada Customer yang ditemukan.';
            $response['success'] = false;
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }

        $response['success'] = true;
        $response['message'] = 'Customer ditemukan.';
        $response['data'] = $customer;
        return response()->json($response, Response::HTTP_OK);
        // atau
        // return response()->json($response, 200);
    }
    public function store(Request $request)
    {
        $val = $request->validate([
            'url_customer'=> 'required|url',
            'nama' => 'required|max:50',
            'jenis_kelamin' => 'required|max:50',
            'nomor_telepon' => 'required|max:50',
            'alamat' => 'required|max:50',
            'tempat_lahir' => 'required|max:50',
            'tanggal_lahir' => 'required|max:50',
            'jenis_motor' => 'required|max:50',
            'plat_kendaraan' => 'required|max:50',
            'keluhan_servis' => 'required|max:50',

        ]);

        $customer = Customer::create($val);
        if ($customer) {
            $response['success'] = true;
            $response['message'] = 'Customer berhasil ditambahkan.';
            return response()->json($response, Response::HTTP_CREATED);
        }
    }

    public function update(Request $request, $id)
    {
        $val = $request->validate([
            'url_customer'=> 'required|url',
            'nama' => 'required|max:50',
            'jenis_kelamin' => 'required|max:50',
            'nomor_telepon' => 'required|max:50',
            'alamat' => 'required|max:50',
            'tempat_lahir' => 'required|max:50',
            'tanggal_lahir' => 'required|max:50',
            'jenis_motor' => 'required|max:50',
            'plat_kendaraan' => 'required|max:50',
            'keluhan_servis' => 'required|max:50',

        ]);

        Customer::where('id', $id)->update($val);
        $response['success'] = true;
        $response['message'] = 'Customer berhasil diperbarui.';
        return response()->json($response, Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $customer = Customer::where('id', $id);
        if (count($customer->get())) {
            $customer->delete();
            $response['success'] = true;
            $response['message'] = 'Customer berhasil dihapus.';
            return response()->json($response, Response::HTTP_OK);
        } else {
            $response['success'] = false;
            $response['message'] = 'Customer tidak ditemukan.';
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }
    }
}
