<?php

namespace App\Http\Controllers;

use App\Models\Montir;
use Illuminate\Http\Request;

class MontirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $montir = Montir::all();
        return view('montir.index')
                ->with('montir', $montir);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('montir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->user()->cannot('create', Montir::class)) {
            abort(403);
        }

        $val = $request->validate([
            'url_montir'=> 'required|url',
            'nama' => 'required|max:50',
            'jenis_kelamin' => 'required|max:50',
            'nomor_telepon' => 'required|max:50',
            'alamat' => 'required|max:50',
            'tempat_lahir' => 'required|max:50',
            'tanggal_lahir' => 'required|max:50'
        ]);
        
         // simpan tabel fakultas
         Montir::create($val);
 
         // // radirect ke halaman list fakultas
         return redirect()->route('montir.index')->with('success', $val['nama']. ' berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Montir $montir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Montir $montir)
    {
        return view('montir.edit')->with('montir', $montir);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $montir)
    {
        if ($request->url_montir){
            $val = $request->validate([
                'url_montir'=> 'required|url',
                'nama' => 'required|max:50',
                'jenis_kelamin' => 'required|max:50',
                'nomor_telepon' => 'required|max:50',
                'alamat' => 'required|max:50',
                'tempat_lahir' => 'required|max:50',
                'tanggal_lahir' => 'required|max:50'
            ]);
             // ekstensi file yang di upload
          
             //upload ke dalam folder public/foto
             $request->url_montir->move('fotomontir/', $val['url_montir']);
        }else{
            $val = $request->validate([
                //'url_montir'=> 'required|file|mimes:jpeg,png|max:5000',
                'nama' => 'required|max:50',
                'jenis_kelamin' => 'required|max:50',
                'nomor_telepon' => 'required|max:50',
                'alamat' => 'required|max:50',
                'tempat_lahir' => 'required|max:50',
                'tanggal_lahir' => 'required|max:50'
            ]);
        }
        //simpan tabel montir
            $montir = Montir::find($montir);
            Montir::where('id', $montir['id'])->update($val);

            //redirect ke halaman list montir
            return redirect()->route('montir.index')->with('success', $val['nama']. ' berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Montir $montir)
    {
        $montir->DELETE();
        return redirect()->route('montir.index')->with('success', 'berhasil di Hapus');
    }
}
