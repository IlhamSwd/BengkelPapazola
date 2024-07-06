@extends('layout.main')

@section('title', 'stok')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6">  
            <div class="card">
                <div class="card-header text-dark" style="font-weight: bold;">Edit Stok</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('stok.update', $stok['id']) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="kode_barang" class="form-label text-dark">Kode Barang</label>
                            <input type="text" class="form-control" id="kode_barang" name='kode_barang' value="{{ old('kode_barang') ? old('kode_barang') : $stok["kode_barang"] }}">
                            @Error('kode_barang')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kode_barang" class="form-label text-dark">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name='nama_barang' value="{{ old('nama_barang') ? old('nama_barang') : $stok["nama_barang"] }}">
                            @Error('nama_barang')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="produk" class="form-label text-dark">Produk Barang</label>
                            <select class="form-control" id="produk" name='produk'>
                                <option value="Honda" {{ (old('produk') ? old('produk') : $stok['produk']) == 'Honda' ? 'selected' : '' }}>Honda</option>
                                <option value="Yamaha" {{ (old('produk') ? old('produk') : $stok['produk']) == 'Yamaha' ? 'selected' : '' }}>Yamaha</option>
                                <option value="Suzuki" {{ (old('produk') ? old('produk') : $stok['produk']) == 'Suzuki' ? 'selected' : '' }}>Suzuki</option>
                                <option value="Kawasaki" {{ (old('produk') ? old('produk') : $stok['produk']) == 'Kawasaki' ? 'selected' : '' }}>Kawasaki</option>
                            </select>

                            @Error('produk')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="stok_barang" class="form-label text-dark">Stok Barang</label>
                            <input type="number" class="form-control" id="stok_barang" name='stok_barang' value="{{ old('stok_barang') ? old('stok_barang') : $stok["stok_barang"] }}">
                            @Error('stok_barang')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="harga_satuan" class="form-label text-dark">Harga Satuan</label>
                            <input type="number" class="form-control" id="harga_satuan" name="harga_satuan" value="{{ old('harga_satuan') ? old('harga_satuan') : $stok["harga_satuan"] }}">
                            @Error('harga_satuan')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-dark">Simpan</button>
                        <a href="{{ url('stok') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection