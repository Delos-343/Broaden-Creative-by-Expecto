@extends('admin.home')
@section('content')
    <h1 class="text-center display-5">
        Edit Banner Portofolio
    </h1>
    <form class="mt-5" action="{{ route('bannerprotofolio.update', $bannerportofolio->id) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="judul_banner">
                <h5>Judul</h5>
            </label>
            <input type="text" class="form-control" name="judul_banner_portofolio"
                value="{{ $bannerportofolio->judul_banner_portofolio }}">
        </div>
        <div class="form-group mb-3">
            <label>
                <h5>Foto</h5>
            </label>
            <br><img src="{{ asset('thumb/' . $bannerportofolio->foto) }}" style="width: 100px">
        </div>
        <div class="form-group mt-3">
            <label for="foto">
                <h5>Ganti Foto</h5>
            </label>
            <input type="file" class="form-control" name="foto">
            <label>*) Jika foto tidak diganti,kosongkan saja</label>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success"> Update </button>
                <a href="/bannerportofolio" class="btn btn-warning"> Batal</a>
            </div>
    </form>
@endsection
