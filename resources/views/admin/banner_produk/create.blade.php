@extends('admin.home')
@section('content')
    <h1 class="text-center display-5">
        Form Banner Produk dan Jasa Page
    </h1>
    <form class="mt-5" action="{{ route('bannerproduk.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="judul_banner_produk">
                <h5>Judul Banner Produk</h5>
            </label>
            <input type="text" class="form-control" name="judul_banner_produk">
        </div>
        <div class="form-group mb-3">
            <label for="foto">
                <h5>Foto</h5>
            </label>
            <input type="file" class="form-control" name="foto">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </form>
@endsection
