<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $halamanJudul }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">BarangKuy</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="#">Data Barang</a>
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
        <h3>{{ $halamanJudul }}</h3>
        <hr>
        <div class="d-flex align-content-center py-2 px-4 bg-white rounded-3 border">
            <div class="bi-house-fill me-3 fs-1"></div>
                <h4 class="mb-0">Selamat Datang Di Halaman {{ $halamanJudul }}.</h4>
          </div>
          <br>
          <div class="d-flex justify-content-center py-4 px-4 bg-white rounded-3 border ">
            <div class="card " style="width: 20rem;">
                <img src="{{Vite::asset('resources/images/bg2.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Halo Perkenalkan nama saya iqbal musyaffa yusa bbih lillah biasanya dipanggil iqbal saya berumur 21 tahun saya seorang yang menyukai tentang teknologi</p>
                </div>
              </div>
        </div>
      </div>

    @vite('resources/js/app.js')
</body>
</html>
