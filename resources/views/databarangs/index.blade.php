@extends('layouts.app')

@section('content')
      <div class="container mt-5">
        <h3>{{ $halamanJudul }}</h3>
      <hr>
      <div class="d-flex align-content-center py-2 px-4 bg-white rounded-3 border">
        <div class="bi bi-box2-fill me-3 fs-1"></div>
            <h4 class="mb-0">Selamat Datang Di Halaman {{ $halamanJudul }}.</h4>
      </div>
    </div>
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('databarangs.create') }}" class="btn btn-primary">Tambah Data Barang</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-hover table-fixed">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Satuan Barang</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($databarangs as $databarang)
                    <tr>
                        <td>{{ $databarang->kode_barang }}</td>
                        <td>{{ $databarang->nama_barang }}</td>
                        <td>{{ 'Rp'.'.'.($databarang->harga_barang) }}</td>
                        <td>{{ $databarang->deskripsi_barang }}</td>
                        <td>{{ $databarang->satuan->nama_satuan }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('databarangs.show', ['databarang'=>$databarang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                <a href="{{ route('databarangs.edit', ['databarang'=>$databarang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="{{ route('databarangs.destroy',['databarang' =>$databarang->id]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
