<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $halamanJudul }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-black fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="{{ route('home') }}">BarangKuy</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="{{ route('databarangs.index') }}">Data Barang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="{{ route('datasatuans.index') }}">Data Satuan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="#">Daftar Barang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="{{ route('profil') }}">Profile</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container mt-5">
      <hr>
      <div class="d-flex align-content-center py-2 px-4 bg-white rounded-3 border">
        <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0">Selamat Datang Di Halaman {{ $halamanJudul }}.</h4>
      </div>
    </div>

    <div class="container-sm mt-5">
        <form action="{{ route('datasatuans.store',['satuan' => $satuan->id]) }}" method="POST">
            <input type="hidden" name="satuans_id" id="satuans_id" value="{{ $satuan->satuans_id }}">
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
                            <input class="form-control @error('kode_satuan') is-invalid @enderror" type="text" name="kode_satuan" id="kode_satuan" value="{{ $errors->any() ? old('kode_satuan') : $satuan->kode_satuan }}" placeholder="Enter kode Satuan">
                            @error('kode_satuan')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="nama_satuan" class="form-label">Nama Satuan</label>
                            <input class="form-control @error('nama_satuan') is-invalid @enderror" type="text" name="nama_satuan" id="nama_satuan" value="{{ $errors->any() ? old('nama_satuan'): $satuan->nama_satuan }}" placeholder="Enter nama satuan">
                            @error('nama_satuan')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control @error('dekripsi') is-invalid @enderror" placeholder="dekripsi"  name="dekripsi" id="dekripsi" style="height: 100px" >{{ $errors->any() ? old('dekripsi') : $satuan->dekripsi }}</textarea>
                            <label for="dekripsi">Deskripsi Satuan</label>
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


    @vite('resources/js/app.js')
</body>
</html>
