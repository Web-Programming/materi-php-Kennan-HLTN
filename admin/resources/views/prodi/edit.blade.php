@extends('layout.master')

@section('title', 'Edit Program Studi')

@section('content')
<!--begin::App Content Header-->
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6"><h3 class="mb-0">Program Studi</h3></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url('/prodi') }}">Program Studi</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--end::App Content Header-->

<!--begin::App Content-->
<div class="app-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Card -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Program Studi</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" title="Collapse">
                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
              </button>
              <button type="button" class="btn btn-tool" data-lte-toggle="card-remove" title="Remove">
                <i class="bi bi-x-lg"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <!-- Form Start -->
            <form method="POST" action="{{ url('/prodi/' . $prodi->id) }}">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Prodi</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama', $prodi->nama) }}" class="form-control @error('nama') is-invalid @enderror" required>
                @error('nama')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="kode_prodi" class="form-label">Kode Prodi</label>
                <input type="text" id="kode_prodi" name="kode_prodi" value="{{ old('kode_prodi', $prodi->kode_prodi) }}" class="form-control @error('kode_prodi') is-invalid @enderror" required>
                @error('kode_prodi')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
              <a href="{{ url('/prodi') }}" class="btn btn-secondary">Batal</a>
            </form>
            <!-- Form End -->
          </div>
          <div class="card-footer text-muted">Silakan perbarui data program studi dengan benar.</div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end::App Content-->
@endsection
