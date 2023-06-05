@extends('layouts.app')

@section('content')
      <div class="container mt-5">
        <h3>{{ $halamanJudul }}</h3>
        <hr>
        <div class="d-flex align-content-center py-2 px-4 bg-white rounded-3 border">
            <div class="bi bi-person-circle me-3 fs-1"></div>
                <h4 class="mb-0">Selamat Datang Di Halaman {{ $halamanJudul }}.</h4>
          </div>
          <br>

          <div class="d-flex justify-content-center py-4 px-4 bg-white rounded-3 border ">
            <div class="card" style="width: 25rem;">
                <img src="{{Vite::asset('resources/images/bg2.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Biodata Saya</h5>
                  <p class="card-text">saya seorang yang menyukai tentang teknologi</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Nama : Iqbal Musyaffa Yusa Bbih Lillah</li>
                  <li class="list-group-item">Nim : 1204210011</li>
                  <li class="list-group-item">Prodi : Sistem Informasi</li>
                </ul>
                <div class="card-body">
                    <a class="icon-link" href="#">
                        <i class="bi bi-instagram me-3 fs-1"></i>
                      </a>
                      <a class="icon-link" href="#">
                        <i class="bi bi-github me-3 fs-1"></i>
                      </a>
                </div>
              </div>
        </div>
      </div>


@endsection
