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
                        <label for="kode_barang" class="form-label">Kode Barang</label>
                        <h5>{{ $databarang->kode_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <h5>{{ $databarang->nama_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="harga_barang" class="form-label">Harga Barang</label>
                        <h5>{{ $databarang->harga_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                        <h5>{{ $databarang->deskripsi_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="satuan" class="form-label">satuan</label>
                        <h5>{{ $databarang->satuan->nama_satuan }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('databarangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
