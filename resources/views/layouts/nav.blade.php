@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md bg-black fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="{{ route('home') }}">BarangKuy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}" class="nav-link @if($currentRouteName == 'home') active @endif">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="{{ route('databarangs.index') }}" class="nav-link @if($currentRouteName == 'databarangs.index') active @endif">Data Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="{{ route('datasatuans.index') }}" class="nav-link @if($currentRouteName == 'datasatuans.index') active @endif">Data Satuan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="{{ route('profil') }}" class="nav-link @if($currentRouteName == 'profil') active @endif">Profile</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
