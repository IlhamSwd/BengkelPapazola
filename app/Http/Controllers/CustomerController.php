<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->role == 'U') {
            $customer = Customer::where('user_id', auth()->user()->id)->get();
            //select * from mahasiswas where user_id = 1
        } else {
        $customer = Customer::all();
        
        }
        
        return view('customer.index')
                ->with('customer', $customer);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->user()->cannot('create', Customer::class)) {
            abort(403);
        }
        
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
        $val['user_id'] = auth()->user()->id;

         // simpan tabel fakultas
         Customer::create($val);
 
         // // radirect ke halaman list fakultas
         return redirect()->route('customer.index')->with('success', $val['nama']. ' berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit')->with('customer', $customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $customer)
    {
        if ($request->user()->cannot('create', Customer::class)) {
            abort(403);
        }

        if ($request->url_customer){
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
         
        }else{
            $val = $request->validate([
                //'url_customer'=> 'required|url',
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
        }
        //simpan tabel montir
            $customer = Customer::find($customer);
            Customer::where('id', $customer['id'])->update($val);
  
            //redirect ke halaman list montir
            return redirect()->route('customer.index')->with('success', $val['nama']. ' berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($customer)
    {
        $customer = Customer::find($customer);
        $customer->DELETE();
        return redirect()->route('customer.index')->with('success', 'berhasil di Hapus');
    }
}
