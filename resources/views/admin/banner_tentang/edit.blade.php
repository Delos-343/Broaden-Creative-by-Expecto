@extends('admin.home')
@section('content')
    <h1 class="text-center display-5">
        Edit Banner Tentang Page
    </h1>
    <form class="mt-5" action="{{ route('bannertentang.update', $bannertentang->id) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="judul_banner_tentang">
                <h5>Judul</h5>
            </label>
            <input type="text" class="form-control" name="judul_banner_tentang"
                value="{{ $bannertentang->judul_banner_tentang }}">
        </div>
        <div class="form-group mb-3">
            <label>
                <h5>Foto</h5>
            </label>
            <br><img src="{{ asset('thumb/' . $bannertentang->foto) }}" style="width: 100px">
        </div>
        <div class="form-group mb-3">
            <label for="foto">
                <h5>Ganti Foto</h5>
            </label>
            <input type="file" class="form-control" name="foto">
            <label>*) Jika foto tidak diganti,kosongkan saja</label>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success"> Update </button>
                <a href="/admin.home" class="btn btn-warning"> Batal</a>
            </div>
    </form>
@endsection
