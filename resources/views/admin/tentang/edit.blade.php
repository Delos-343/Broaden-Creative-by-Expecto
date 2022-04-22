@extends('admin.home')
@section('content')
    <h1 class="text-center display-5">Edit Tentang Page</h1>
    <form class="mt-5" action="{{ route('tentang.update', $tentang->id) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="Deskripsi">
                <h5>Deskripsi</h5>
            </label>
            <textarea name="deskripsi" class="form-control" rows="5">{{ $tentang->deskripsi }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label>
                <h5>Foto</h5>
            </label>
            <br><img src="{{ asset('thumb/' . $tentang->foto) }}" style="width: 100px">
        </div>
        <div class="form-group mb-3">
            <label for="foto">Ganti Foto</label>
            <input type="file" class="form-control" name="foto">
            <label>*) Jika foto tidak diganti,kosongkan saja</label>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success"> Update </button>
                <a href="/admin" class="btn btn-warning"> Batal</a>
            </div>
    </form>
@endsection
