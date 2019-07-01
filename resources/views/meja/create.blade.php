@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Meja</h3>
                    </div>
                    <div class="card-body">
                        <!-- MENAMPILKAN ERROR APABILA TERDAPAT FLASH MESSAGE ERROR -->
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ url('/meja') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Meja</label>
                                <input type="text" name="produk" class="form-control" placeholder="Masukkan nama meja">
                            </div>
                            <div class="form-group">
                                <label for="">Penjelasan Barang</label>
                                <textarea name="penjelasan_barang" cols="10" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="number" name="harga" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Persediaan</label>
                                <input type="number" name="stok" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger btn-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection