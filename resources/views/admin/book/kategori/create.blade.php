@extends('admin.layout.main')

@section('container')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Input Data Buku Baru</h5>

<form method="post" action="/admin/buku/kategori">
    @csrf
      <!-- Floating Labels Form -->
      <form class="row g-3">

        <div class="col-10 mt-3">
          <label for="kelas" class="form-label">Kategori Buku</label>
          <input type="text" class="form-control @error('kelas') is-invalid"
              
          @enderror id="kelas" name="kelas" placeholder="Kategori Buku" value="{{ old('kelas') }}">
          @error('kelas')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mt-3">
          <button type="submit" class="btn btn-primary">Input Data</button>
        </div>
      </form><!-- End floating Labels Form -->
    </div>

    </div>

@endsection