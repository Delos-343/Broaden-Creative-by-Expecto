@extends('admin.home')
@section('content')
    <h1 class="text-center display-5">
        Edit Content Marketing
    </h1>
    <form class="mt-5" action="{{ route('produkcontentmarketing.update', $produkkontenmarketing->id) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="Nama Produk">
                <h5>Judul</h5>
            </label>
            <input type="text" class="form-control" name="nama_produk_contentmarketing"
                value="{{ $produkkontenmarketing->nama_produk_contentmarketing }}">
        </div>
        <div class="form-group mb-3">
            <label for="Keterangan">
                <h5>Keterangan</h5>
            </label>
            <textarea name="keterangan" class="form-control" rows="5">{{ $produkkontenmarketing->keterangan }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label>
                <h5>Foto</h5>
            </label>
            <br><img src="{{ asset('thumb/' . $produkkontenmarketing->foto) }}" style="width: 100px">
        </div>
        <div class="form-group mb-3">
            <label for="foto">
                <h5>Ganti Foto</h5>
            </label>
            <input type="file" class="form-control" name="foto">
            <label>*) Jika foto tidak diganti,kosongkan saja</label>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success"> Update </button>
                <a href="/" class="btn btn-warning"> Batal</a>
            </div>
    </form>
@endsection
