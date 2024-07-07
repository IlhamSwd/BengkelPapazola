@extends('layout.main')

@section('title', 'riwayat')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-dark" style="font-weight: bold;">Tambah riwayat Servis</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('riwayat.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="stok_id" class="form-label text-dark">Kode Barang</label>
                                <select class="form-control" id="stok_id" name='stok_id' placeholder="Masukan kode barang">
                                    @foreach ($stok as $item)
                                        <option value="{{ $item['id'] }}">
                                            {{$item['kode_barang']}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="customer_id" class="form-label text-dark">Customer</label>
                                <select class="form-control" id="customer_id" name='customer_id' placeholder="Masukan nama Customer">
                                    @foreach ($customer as $item)
                                        <option value="{{ $item['id'] }}">
                                            {{$item['nama']}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="stok_id" class="form-label text-dark">Produk Barang</label>
                                <select class="form-control" id="stok_id" name='stok_id' placeholder="Masukan Produk">
                                    @foreach ($stok as $item)
                                        <option value="{{ $item['id'] }}">
                                            {{$item['produk']}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pembayaran_id" class="form-label text-dark">Jumlah Barang</label>
                                <select class="form-control" id="pembayaran_id" name='pembayaran_id' placeholder="Masukan Jumlah">
                                    @foreach ($pembayaran as $item)
                                        <option value="{{ $item['id'] }}">
                                            {{$item['jumlah']}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="montir_id" class="form-label text-dark">Montir</label>
                                <select class="form-control" id="montir_id" name='montir_id' placeholder="Masukan nama Montir">
                                    @foreach ($montir as $item)
                                        <option value="{{ $item['id'] }}">
                                            {{$item['nama']}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-dark">Simpan</button>
                            <a href="{{ url('riwayat') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
