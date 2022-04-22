@extends('admin.home')
@section('content')
    <h1 class="text-center display-5">
        Edit Klien
    </h1>
    <form class="mt-5" action="{{ route('klien.update', $klien->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="Keterangan">
                <h5>Keterangan</h5>
            </label>
            <textarea name="keterangan" class="form-control" rows="5">{{ $klien->keterangan }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label>
                <h5>Foto</h5>
            </label>
            <br><img src="{{ asset('thumb/' . $klien->foto) }}" style="width: 100px">
        </div>
        <div class="form-group mb-3">
            <label for="foto">
                <h5>Ganti Foto</h5>
            </label>
            <input type="file" class="form-control" name="foto">
            <label>*) Jika foto tidak diganti,kosongkan saja</label>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success"> Update </button>
                <a href="/klien" class="btn btn-warning"> Batal</a>
            </div>
    </form>
@endsection
