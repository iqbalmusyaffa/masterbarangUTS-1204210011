@extends('layouts.app')

@section('content')
      <div class="container mt-5">
      <hr>
      <div class="d-flex align-content-center py-2 px-4 bg-white rounded-3 border">
        <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0">Selamat Datang Di Halaman {{ $halamanJudul }}.</h4>
      </div>
    </div>

    <div class="container-sm mt-5">
        <form action="{{ route('datasatuans.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show">
                               {{ $error }}
                               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif

                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Tambah Data Satuan</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="kode_satuan" class="form-label">Kode Satuan</label>
                            <input class="form-control" type="text" name="kode_satuan" id="kode_satuan" value="{{ old('kode_satuan') }}" placeholder="Enter kode Satuan">
                            @error('kode_satuan')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="nama_satuan" class="form-label">Nama Satuan</label>
                            <input class="form-control" type="text" name="nama_satuan" id="nama_satuan" value="{{ old('nama_satuan') }}" placeholder="Enter nama barang">
                            @error('nama_satuan')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="dekripsi"  name="dekripsi" id="dekripsi" style="height: 100px" >{{ old('dekripsi') }}</textarea>
                            <label for="dekripsi">Deskripsi Barang</label>
                            @error('dekripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('datasatuans.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
