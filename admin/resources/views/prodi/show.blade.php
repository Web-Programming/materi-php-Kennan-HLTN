@extends('layout.master')

@section('title', 'Detail Program Studi')

@section('content')
    <h3>Detail Program Studi</h3>
    <div class="card">
        <div class="card-body">
            <p><strong>Nama Prodi:</strong> {{ $prodi->nama }}</p>
            <p><strong>Kode Prodi:</strong> {{ $prodi->kode_prodi }}</p>
            <p><strong>tgl buat: </strong> {{ $prodi->created_at }}</p>
            <p><strong>tgl update: </strong> {{ $prodi->updated_at }}</p>
            <a href="{{ url('/prodi') }}" class="btn btn-secondary">Kembali</a>
           
            
        </div>
    </div>
@endsection
