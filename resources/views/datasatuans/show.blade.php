@extends('layouts.app')

@section('content')
      <div class="container mt-5">
      <hr>
      <div class="d-flex align-content-center py-2 px-4 bg-white rounded-3 border">
        <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0">Selamat Datang Di Halaman {{ $halamanJudul }}.</h4>
      </div>
    </div>
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Detail Data Barang</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="kode_satuan" class="form-label">Kode Satuan</label>
                        <h5>{{ $satuans->kode_satuan }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="nama_satuan" class="form-label">Nama Satuan</label>
                        <h5>{{ $satuans->nama_satuan }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <h5>{{ $satuans->dekripsi }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('datasatuans.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
