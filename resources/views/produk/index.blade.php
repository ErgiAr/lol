@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Produk</h2>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Produk</a>
                                </div>
                                <div class="col-auto">
                                    <input type="text" name="keyword" id="keyword" class="form-control"
                                        placeholder="ketik keyword disini">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-primary">
                                        Cari
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="50px">No</th>
                                        <th>Gambar</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Jumlah Produk</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <img src="{{ asset('AdminLTE-3.2.0/assets/image/brt.jpg') }}" alt="Produk 1"
                                                width="150px">
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <input type="file" name="gambar" id="gambar">
                                                </div>
                                                <div class="col-auto">
                                                    <button class="btn btn-sm btn-primary">Upload</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Kate-1</td>
                                        <td>Blok Set BRT Vixion</td>
                                        <td>8 Produk</td>
                                        <td>
                                            <a href="{{ route('produk.show', 2) }}" class="btn btn-sm btn-primary mr-2 mb-2">Detail</a>
                                            <a href="{{ route('produk.edit', 2) }}" class="btn btn-sm btn-primary mr-2 mb-2">Edit</a>
                                            <button class="btn btn-sm btn-danger mb-2">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <img src="{{ asset('AdminLTE-3.2.0/assets/image/kyb.jpg') }}" alt="Produk 2"
                                                width="150px">
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <input type="file" name="gambar" id="gambar">
                                                </div>
                                                <div class="col-auto">
                                                    <button class="btn btn-sm btn-primary">Upload</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Kate-2</td>
                                        <td>Skok Kayaba 32</td>
                                        <td>3 Produk</td>
                                        <td>
                                            <a href="{{ route('produk.show', 1) }}" class="btn btn-sm btn-primary mr-2 mb-2">Detail</a>
                                            <a href="{{ route('produk.edit', 2) }}" class="btn btn-sm btn-primary mr-2 mb-2">Edit</a>
                                            <button class="btn btn-sm btn-danger mb-2">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <img src="{{ asset('AdminLTE-3.2.0/assets/image/enkei.jpg') }}" alt="Produk 2" width="150px">
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <input type="file" name="gambar" id="gambar">
                                                </div>
                                                <div class="col-auto">
                                                    <button class="btn btn-sm btn-primary">Upload</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Kate-3</td>
                                        <td>Velg Enkei Ring 17</td>
                                        <td>9 Produk</td>
                                        <td>
                                            <a href="{{ route('produk.show', 2) }}" class="btn btn-sm btn-primary mr-2 mb-2">Detail</a>
                                            <a href="{{ route('kategori.edit', 2) }}" class="btn btn-sm btn-primary mr-2 mb-2">Edit</a>
                                            <button class="btn btn-sm btn-danger mb-2">Hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection