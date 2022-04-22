@extends('admin.home')
@section('content')
    @if (count($errors) > 0)
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <h1 class="text-center display-5">
        Form Produk
    </h1>
    <form class="mt-5" action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="Nama Produk">
                <p class="lead">Nama Produk</p>
            </label>
            <input type="text" class="form-control" name="nama_produk">
        </div>
        <div class="form-group mb-3">
            <label for="keterangan">
                <p class="lead">Keterangan</p>
            </label>
            <textarea name="keterangan" class="form-control" name="keterangan" rows="5"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="foto">
                <p class="lead">Foto</p>
            </label>
            <input type="file" class="form-control" name="foto">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="/produk" class="btn btn-warning">Batal</button>
    </form>
@endsection
