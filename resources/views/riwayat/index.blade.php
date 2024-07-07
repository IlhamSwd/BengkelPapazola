@extends('layout.main')

@section('title', 'riwayat')

@section('content')
  <div class="col-lg-12">
    <div class="card bg-default">
      <div class="card-header bg-transparent">
        <h3 class="card-title text-white mb-0">Riwayat Servis</h3>
        <br>
        {{-- Tombol tambah --}}
        @can('create', App\Riwayat::class)
          <a href="{{ route('riwayat.create') }}" class="btn btn-white mb-3 btn-rounded">Tambah Penjualan</a>
        @endcan
        <div class="table-responsive">
          <table class="table align-items-center text-white table-bordered">
            <thead>
              <tr>
                <th class="text-center">Kode Barang</th>
                {{-- <th class="text-center">Nama Barang</th> --}}
                <th class="text-center">Produk Barang</th>
                <th class="text-center">Customer</th>
                <th class="text-center">Jumlah Barang</th>
                <th class="text-center">Montir</th>
                <th class="text-center">Total</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($riwayat as $item)
                <tr>
                  <td class="text-center">{{ $item['stok']['kode_barang'] }}</td>
                  <td class="text-center">{{ $item['stok']['produk'] }}</td>
                  <td class="text-center">{{ $item['customer']['nama'] }}</td>
                  <td class="text-center">{{ $item['pembayaran']['jumlah'] }}</td>
                  <td class="text-center">{{ $item['montir']['nama'] }}</td>
                  <td class="text-center">{{ $item['pembayaran']['jumlah'] * $item['stok']['harga_satuan'] }}</td>
                  <td class="text-center">
                    @can('update', $item)
                      <a href="{{ route('riwayat.edit', $item['id']) }}" class="btn btn-rounded btn-warning">
                        <i class="menu-icon mdi mdi-pencil"></i>
                        <span class="menu-title">Edit</span>
                      </a>
                    @endcan
                    @can('delete', $item)
                      <form method="POST" action="{{ route('riwayat.destroy', $item['id']) }}" style="display:inline-block">
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
