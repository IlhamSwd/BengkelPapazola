@extends('layout.main')

@section('title', 'montir')

@section('content')
  <div class="col-lg-12">
    <div class="card bg-default">
      <div class="card-header bg-transparant">
        <h3 class="card-title text-dark mb-0">Data Montir</h3>
        <br>
        {{-- Tomboh tambah --}}
        @can('create', App\Montir::class)
          <a href="{{ route('montir.create') }}" class="btn btn-white mb-3 btn-rounded">Tambah Data Montir</a>
        @endcan
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
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($montir as $item)
                <tr>
                  <td class="text-center"><img src="{{ url('fotomontir/'.$item['url_montir'])}}" style="max-width: 50px"></td>
                  <td class="text-center">{{ $item['nama'] }}</td>
                  <td class="text-center">{{ $item['jenis_kelamin'] }}</td>
                  <td class="text-center">{{ $item['nomor_telepon'] }}</td>
                  <td class="text-center">{{ $item['alamat'] }}</td>
                  <td class="t-extcenter">{{ $item['tempat_lahir'] }}</td>
                  <td class="text-center">{{ $item['tanggal_lahir'] }}</td>
                  <td class="text-center">
                    @can('delete', $item)
                      <form method="POST" action="{{ route('montir.destroy', $item['id']) }}" style="display:inline-block">
                        @method('DELETE')
                        @csrf
                        <button type="submit"
                          class="btn btn-sm btn-rounded btn-danger show_confirm"
                          data-name={{ $item['nama'] }}>Hapus
                        </button>
                      </form> 
                    @endcan
                    @can('update', $item)
                      <a href="{{ route('montir.edit', $item['id']) }}" class="btn btn-rounded btn-warning">
                        <i class="menu-icon mdi mdi-pencil"></i>
                        <span class="menu-title">Edit</span>
                      </a>
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