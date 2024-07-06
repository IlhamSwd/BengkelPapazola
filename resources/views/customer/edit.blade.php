@extends('layout.main')

@section('title','customer')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-dark" style="font-weight: bold;">Edit Data customer</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('customer.update', $customer['id']) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama" class="form-label text-dark">Nama</label>
                                <input type="text" class="form-control" id="nama" name='nama' value="{{ old('nama') ? old('nama') : $customer["nama"] }}"/>
                                @Error('nama')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin" class="form-label text-dark">Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name='jenis_kelamin'>
                                    <option value="Laki-Laki" {{ (old('jenis_kelamin') ? old('jenis_kelamin') : $customer['jenis_kelamin']) == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                    <option value="Perempuan" {{ (old('jenis_kelamin') ? old('jenis_kelamin') : $customer['jenis_kelamin']) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                                @Error('jenis kelamin')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nomor_telepon" class="form-label text-dark">Nomor Telepon</label>
                                <input type="text" class="form-control" id="nomor_telepon" name='nomor_telepon' value="{{ old('nomor_telepon') ? old('nomor_telepon') : $customer["nomor_telepon"] }}"/>
                                @Error('nomor_telepon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="form-label text-dark">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') ? old('alamat') : $customer["alamat"] }}"/>
                                @Error('alamat')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir" class="form-label text-dark">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') ? old('tempat_lahir') : $customer["tempat_lahir"] }}"/>
                                @Error('tempat_lahir')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir" class="form-label text-dark">Tanggal Lahir</label>a
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') ? old('tanggal_lahir') : $customer["tanggal_lahir"] }}"/>
                                @Error('tanggal_lahir')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="url_customer" class="form-label text-dark">Foto</label>
                                <input type="url" class="form-control" id="url_customer" name='url_customer' value="{{ old('url_customer') ? old('url_customer') : $customer["url_customer"] }}"/>
                                @Error('url_customer')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jenis_motor" class="form-label text-dark">Jenis Motor</label>
                                <input type="text" class="form-control" id="jenis_motor" name="jenis_motor" value="{{ old('jenis_motor') ? old('jenis_motor') : $customer["jenis_motor"] }}"/>
                                @Error('jenis_motor')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="plat_kendaraan" class="form-label text-dark">Plat Kendaraan</label>
                                <input type="text" class="form-control" id="plat_kendaraan" name="plat_kendaraan" value="{{ old('plat_kendaraan') ? old('plat_kendaraan') : $customer["plat_kendaraan"] }}"/>
                                @Error('plat_kendaraan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="keluhan_servis" class="form-label text-dark">Keluhan Servis</label>
                                <input type="text" class="form-control" id="keluhan_servis" name="keluhan_servis" value="{{ old('keluhan_servis') ? old('keluhan_servis') : $customer["keluhan_servis"] }}"/>
                                @Error('keluhan_servis')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                    
                            <button type="submit" class="btn btn-dark">Simpan</button>
                            <a href="{{ url('customer') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection