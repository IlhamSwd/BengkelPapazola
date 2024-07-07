@extends('layout.main')

@section('title', 'pembayaran')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-dark" style="font-weight: bold;">Edit pembayaran</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pembayaran.update', $pembayaran['id']) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="stok_id" class="form-label text-dark">Kode Barang</label>
                                <select class="form-control" id="stok_id" name='stok_id'>
                                    @foreach ($stok as $item)
                                        <option value="{{ $item['id'] }}">
                                            {{$item['kode_barang']}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="customer_id" class="form-label text-dark">Customer</label>
                                <select class="form-control" id="customer_id" name='customer_id'>
                                    @foreach ($customer as $item)
                                        <option value="{{ $item['id'] }}">
                                            {{$item['nama']}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="stok_id" class="form-label text-dark">Produk Barang</label>
                                <select class="form-control" id="stok_id" name='stok_id'>
                                    @foreach ($stok as $item)
                                        <option value="{{ $item['id'] }}">
                                            {{$item['produk']}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="harga" class="form-label text-dark">Harga Barang</label>
                                <select class="form-control" id="stok_id" name='stok_id'>
                                    @foreach ($stok as $item)
                                        <option value="{{ $item['id'] }}">
                                            {{$item['harga_satuan']}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jumlah" class="form-label text-dark">Jumlah Barang</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="masukan jumlah"/>
                                @Error('jumlah')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-dark">Simpan</button>
                            <a href="{{ url('pembayaran') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
