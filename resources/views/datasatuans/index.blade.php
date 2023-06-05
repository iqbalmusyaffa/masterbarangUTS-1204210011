@extends('layouts.app')

@section('content')
      <div class="container mt-5">
      <hr>
      <div class="d-flex align-content-center py-2 px-4 bg-white rounded-3 border">
        <div class="bi bi-box-fill me-3 fs-1"></div>
            <h4 class="mb-0">Selamat Datang Di Halaman {{ $halamanJudul }}.</h4>
      </div>
    </div>
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('datasatuans.create') }}" class="btn btn-primary">Tambah Data Satuan</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-hover table-fixed">
                <thead>
                    <tr>
                        <th>Kode Satuan</th>
                        <th>Nama Satuan</th>
                        <th>Deskripsi Satuan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($satuans as $datasatuan)
                    <tr>
                        <td>{{ $datasatuan->kode_satuan }}</td>
                        <td>{{ $datasatuan->nama_satuan }}</td>
                        <td>{{ $datasatuan->dekripsi }}</td>
                        <td>@include('datasatuans.actions')</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
