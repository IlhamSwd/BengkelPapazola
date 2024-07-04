@extends('layout.main')

@section('title', 'stok')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-dark" style="font-weight: bold;">Tambah Stok Barang</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('stok.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="kode_barang" class="form-label text-dark">Kode Barang</label>
                                <input type="text" class="form-control" id="kode_barang" name='kode_barang' placeholder="Masukan kode barang"/>
                                @Error('kode_barang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama_barang" class="form-label text-dark">Nama Barang</label>
                                <input type="text" class="form-control" id="nama_barang" name='nama_barang'placeholder="Masukan Nama barang"/>
                                @Error('nama_barang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="stok_barang" class="form-label text-dark">Stok Barang</label>
                                <input type="number" class="form-control" id="stok_barang" name='stok_barang' placeholder="Masukan Stok barang"/>
                                @Error('stok_barang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="produk" class="form-label text-dark">Produk Barang</label>
                                <select class="form-control" id="produk" name='produk' placeholder="masukan produk barang">
                                    <option value="Honda">Honda</option>
                                    <option value="Yamaha">Yamaha</option>
                                </select>
                                @Error('produk')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="harga_satuan" class="form-label text-dark">Harga Satuan</label>
                                <input type="number" class="form-control" id="harga_satuan" name="harga_satuan" placeholder="Masukan harga" />
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
