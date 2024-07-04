@extends('layout.main')

@section('title', 'customer')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-dark" style="font-weight: bold;">Tambah Data customer</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('customer.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama" class="form-label text-dark">Nama</label>
                                <input type="text" class="form-control" id="nama" name='nama' placeholder="masukan nama customer" />
                                @Error('nama')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin" class="form-label text-dark">Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name='jenis_kelamin' placeholder="masukan jenis kelamin">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @Error('jenis_kelamin')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="nomor_telepon" class="form-label text-dark">Nomor Telepon</label>
                                <input type="text" class="form-control" id="nomor_telepon" name='nomor_telepon' placeholder="masukan nomor telepon" />
                                @Error('nomor_telepon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="alamat" class="form-label text-dark">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"  placeholder="masukan alamat" />
                                @Error('alamat')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir" class="form-label text-dark">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="masukan tempat lahir" />
                                @Error('tempat_lahir')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir" class="form-label text-dark">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="masukan tanggal lahir" />
                                @Error('tanggal_lahir')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="url_customer" class="form-label text-dark">Foto</label>
                                <input type="file" class="form-control" id="url_customer" name='url_customer' placeholder="masukan foto" />
                                @Error('url_customer')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="jenis_motor" class="form-label text-dark">Jenis Motor</label>
                                <input type="text" class="form-control" id="jenis_motor" name="jenis_motor" placeholder="masukan jenis motor" />
                                @Error('jenis_motor')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="plat_kendaraan" class="form-label text-dark">Plat Kendaraan</label>
                                <input type="text" class="form-control" id="plat_kendaraan" name="plat_kendaraan"  placeholder="masukan plat kendaraan" />
                                @Error('plat_kendaraan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="keluhan_servis" class="form-label text-dark">Keluhan Servis</label>
                                <input type="text" class="form-control" id="keluhan_servis" name="keluhan_servis" placeholder="masukan keluhan servis" />
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
