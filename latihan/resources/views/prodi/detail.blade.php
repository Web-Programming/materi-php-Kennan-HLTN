@extends('layout.master')

@section('title', "Detail Program Studi")

@section('content')
<!--begin::App Content Header-->
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6"><h3 class="mb-0">Detail Program Studi</h3></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url("/prodi") }}">Program Studi</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detail</li>
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
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Informasi Program Studi</h3>
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
            <table class="table table-bordered">
              <tr>
                <th>ID Prodi</th>
                <td>{{ $detailprodi->id }}</td>
              </tr>
              <tr>
                <th>Nama Prodi</th>
                <td>{{ $detailprodi->nama }}</td>
              </tr>
              <tr>
                <th>Kode Prodi</th>
                <td>{{ $detailprodi->kode_prodi }}</td>
              </tr>
              <tr>
                <th>Tanggal Buat</th>
                <td>{{ $detailprodi->created_at }}</td>
              </tr>
              <tr>
                <th>Tanggal Update</th>
                <td>{{ $detailprodi->updated_at }}</td>
              </tr>
            </table>
          </div>
          <div class="card-footer">
            <a href="{{ url('prodi') }}" class="btn btn-secondary">Kembali</a>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</div>
<!--end::App Content-->
@endsection