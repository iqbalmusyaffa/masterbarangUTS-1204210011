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
        <form action="{{ route('databarangs.store') }}" method="POST">
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
                        <h4>Tambah Data Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input class="form-control" type="text" name="kode_barang" id="kode_barang" value="{{ old('kode_barang') }}" placeholder="Enter kode barang">
                            @error('kode_barang')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input class="form-control" type="text" name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}" placeholder="Enter nama barang">
                            @error('nama_barang')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga_barang" class="form-label">Harga Barang</label>
                            <input class="form-control" type="number" name="harga_barang" id="harga_barang" value="{{ old('harga_barang') }}" placeholder="Enter harga_barang" type-currency="IDR">
                            @error('harga_barang')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="deskripsi_barang"  name="deskripsi_barang" id="deskripsi_barang" style="height: 100px" >{{ old('deskripsi_barang') }}</textarea>
                            <label for="deskripsi_barang">Deskripsi Barang</label>
                            @error('deskripsi_barang')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                          <div class="col-md-12 mb-3">
                            <label for="satuan" class="form-label">Satuan</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @foreach ($satuans as $satuan)
                                <option value="{{ $satuan->id }}" {{ old('satuan') == $satuan->id ?'selected' : '' }}>{{ $satuan->kode_satuan.' -'.$satuan->nama_satuan }}</option>
                                @endforeach
                            </select>
                            @error('satuan')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('databarangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
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
