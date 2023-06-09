{{-- @extends('layout.main') --}}
@extends('admin.layout.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Permohonan Peminjaman Buku</h5>

      @if ($peminjaman->isEmpty())
        <h6 class="card-text">Belum ada permohonan peminjaman buku</h6>
      @else

 <!-- Default Table -->
 <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Sekolah</th>
        <th scope="col">No PIC</th>
        <th scope="col">Tanggal Pinjam</th>
        <th scope="col">Tanggal Kembali</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($peminjaman as $peminjaman)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $peminjaman->user->instansi }}</td>
        <td>0{{ $peminjaman->user->kontak }}</td>
        <td>{{ \Carbon\Carbon::parse($peminjaman->tgl_pinjam)->format('d M Y') }}</td>
        <td>{{ \Carbon\Carbon::parse($peminjaman->tgl_kembali)->format('d M Y') }}</td>
        <td>
          <a href="/admin/peminjaman/{{ $peminjaman->user_id }}"> 
              <i class="bi bi-eye"></i>
          </a>
          {{-- <form action="/admin/peminjaman/{{ $peminjaman->user_id }}" class="d-inline">
            @method('put')
            @csrf
            <button class="bi bi-eye text-primary border-0"> </button>
          </form> --}}
          <form action="/admin/peminjaman/{{ $peminjaman->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="bi bi-trash text-danger border-0" onclick="return confirm('Apakah anda yakin untuk menghapus data?')"> </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif
  <!-- End Default Table Example -->

    </div>
</div>

@endsection