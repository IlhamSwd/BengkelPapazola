@extends('layout.main')

@section('title', 'customer')

@section('content')
  <div class="col-lg-12">
    <div class="card bg-default">
      <div class="card-header bg-transparant">
        <h3 class="card-title text-dark mb-0">Menambahkan Data Customer</h3>
        <p class="card-description">Silahkan tambah Data Customer</p>
        {{-- Tomboh tambah --}}
        <a href="{{ route('customer.create') }}" class="btn btn-white mb-3 btn-rounded">Tambah Data Customer</a>
        <div class="table-responsive">
          <table class="table align-items-center text-dark table-bordered">
            <thead>
              <tr>
                <th class="text-center">Foto</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Jenis Kelamin</th>
                <th class="text-center">Nomor Telepon</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Tempat Lahir</th>
                <th class="text-center">Tanggal Lahir</th>
                <th class="text-center">Jenis Motor</th>
                <th class="text-center">Plat Kendaraan</th>
                <th class="text-center">Keluhan Servis</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($customer as $item)
                <tr>
                  <td class="text-center"><img src="{{ url('fotocustomer/'.$item['url_customer']) }}" style="max-width: 50px"></td>
                  <td class="text-center">{{ $item['nama'] }}</td>
                  <td class="text-center">{{ $item['jenis_kelamin'] }}</td>
                  <td class="text-center">{{ $item['nomor_telepon'] }}</td>
                  <td class="text-center">{{ $item['alamat'] }}</td>
                  <td class="t-extcenter">{{ $item['tempat_lahir'] }}</td>
                  <td class="text-center">{{ $item['tanggal_lahir'] }}</td>
                  <td class="t-extcenter">{{ $item['jenis_motor'] }}</td>
                  <td class="t-extcenter">{{ $item['plat_kendaraan'] }}</td>
                  <td class="text-center">{{ $item['keluhan_servis'] }}</td>
                  <td class="text-center">
                    @can('update', $item)
                      <a href="{{ route('customer.edit', $item['id']) }}" class="btn btn-rounded btn-warning">
                        <i class="menu-icon mdi mdi-pencil"></i>
                        <span class="menu-title">Edit</span>
                      </a>
                    @endcan
                    @can('delete', $item)
                    <form method="POST"  action="{{ route('customer.destroy', $item['id']) }}" style="display:inline-block">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-rounded btn-warning show_confirm">
                        <i class="menu-icon mdi-eraser-variant"></i>
                        <span class="menu-title">Hapus</span>
                      </button>
                    </form> 
                  @endcan
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @if (session('success'))
    <script>
      Swal.fire({
        title: "Good job!",
        text: "{{ session('success') }}",
        icon: "success"
      });
    </script>
  @endif
  <script type="text/javascript">
    $('.show_confirm').click(function(event) {
    var form = $(this).closest("form");
    var name = $(this).data("name");
    event.preventDefault();
    Swal.fire({
      title: "Yakin mau ngapus?",
      text: "Setelah di hapus akan hilang ini!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Ya, Hapus!"
    })
    .then((willDelete) => {
      if (willDelete.isConfirmed) {
        form.submit();
      }
    });
    }); 
  </script>
@endsection