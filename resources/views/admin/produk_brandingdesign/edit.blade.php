@extends('admin.home')
@section('content')
    <h1 class="text-center display-5">
        Edit Branding and Design
    </h1>
    <form class="mt-5" action="{{ route('produkbrandingdesign.update', $produkbrandingdesign->id) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="Nama Produk">
                <h5>Judul</h5>
            </label>
            <input type="text" class="form-control" name="nama_produk_brandingdesign"
                value="{{ $produkbrandingdesign->nama_produk_brandingdesign }}">
        </div>
        <div class="form-group mb-3">
            <label for="Keterangan">
                <h5>Keterangan</h5>
            </label>
            <textarea name="keterangan" class="form-control" rows="5">{{ $produkbrandingdesign->keterangan }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label>Foto</label>
            <br><img src="{{ asset('thumb/' . $produkbrandingdesign->foto) }}" style="width: 100px">
        </div>
        <div class="form-group mb-3">
            <label for="foto">Ganti Foto</label>
            <input type="file" class="form-control" name="foto">
            <label>*) Jika foto tidak diganti,kosongkan saja</label>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success"> Update </button>
                <a href="/produk" class="btn btn-warning"> Batal</a>
            </div>
    </form>
@endsection
