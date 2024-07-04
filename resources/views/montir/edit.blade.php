@extends('layout.main')

@section('title', 'montir')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-dark" style="font-weight: bold;">Edit Data Montir</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('montir.update', $montir['id']) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama" class="form-label text-dark">Nama</label>
                                <input type="text" class="form-control" id="nama" name='nama'
                                    value="{{ old('nama') ? old('nama') : $montir['nama'] }}" />
                                @Error('nama')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin" class="form-label text-dark">Jenis kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name='jenis_kelamin'
                                    value="{{ old('nama') ? old('jenis_kelamin') : $montir['jenis_kelamin'] }}"
                                    placeholder="Masukan jenis kelamin">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @Error('jenis_kelamin')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nomor_telepon" class="form-label text-dark">Nomor Telepon</label>
                                <input type="text" class="form-control" id="nomor_telepon" name='nomor_telepon'
                                    value="{{ old('nomor_telepon') ? old('nomor_telepon') : $montir['nomor_telepon'] }}"
                                    placeholder="Masukan nomor telepon" />
                                @Error('nomor_telepon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="form-label text-dark">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    value="{{ old('alamat') ? old('alamat') : $montir['alamat'] }}"
                                    placeholder="Masukan Alamat" />
                                @Error('alamat')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir" class="form-label text-dark">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name='tempat_lahir'
                                    value="{{ old('tempat_lahir') ? old('tempat_lahir') : $montir['tempat_lahir'] }}"
                                    placeholder="Masukan tempat lahir" />
                                @Error('tempat_lahir')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir" class="form-label text-dark">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name='tanggal_lahir'
                                    value="{{ old('tanggal_lahir') ? old('tanggal_lahir') : $montir['tanggal_lahir'] }}"
                                    placeholder="Masukan tanggal lahir" />
                                @Error('tanggal_lahir')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="url_montir" class="form-label text-dark">Foto</label>
                                <input type="file" class="form-control" id="url_montir" name='url_montir'
                                    value="{{ old('url_montir') ? old('url_montir') : $montir['url_montir'] }}" />
                                @Error('url_montir')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-dark">Simpan</button>
                            <a href="{{ url('montir') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
