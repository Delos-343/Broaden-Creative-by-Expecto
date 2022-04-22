@extends('admin.home')
@section('content')
    <h1 class="text-center display-5">
        Form Edit Produk
    </h1>
    <form class="mt-5" action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="Nama Produk"> <p class="lead">Nama Produk</p> </label>
            <input type="text" class="form-control" name="nama_produk" value="{{ $produk->nama_produk }}">
        </div>
        <div class="form-group mb-3">
            <label for="Keterangan"> <p class="lead">Keterangan</p> </label>
            <textarea name="keterangan" class="form-control" rows="5">{{ $produk->keterangan }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label> <p class="lead">Foto</p> </label>
            <br><img src="{{ asset('thumb/' . $produk->foto) }}" style="width: 100px">
        </div>
        <div class="form-group mb-3">
            <label for="foto"> <p class="lead">Ganti Foto</p> </label>
            <input type="file" class="form-control" name="foto">
            <label>*) Jika foto tidak diganti,kosongkan saja</label>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success"> Update </button>
                <a href="/produk" class="btn btn-warning"> Batal</a>
            </div>
    </form>
@endsection
