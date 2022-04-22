@extends('admin.home')
@section('content')
    <h1 class="text-center display-5">
        Edit Footer
    </h1>
    <form class="mt-5" action="{{ route('kontak.update', $kontak->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="No Telp"> <h5>Nomor Kontak</h5> </label>
            <input type="text" class="form-control" name="no_kontak" value="{{ $kontak->no_kontak }}">
        </div>
        <div class="form-group mb-3">
            <label for="Email"> <h5>Email</h5> </label>
            <input type="text" class="form-control" name="email" value="{{ $kontak->email }}">
        </div>
        <div class="form-group mb-3">
            <label for="Alamat"> <h5>Alamat</h5> </label>
            <textarea name="alamat" class="form-control">{{ $kontak->alamat }}</textarea>
        </div>
        <div class="form-group mb-3">
            <button type="submit" class="btn btn-success"> Update </button>
            <a href="/feedback" class="btn btn-warning"> Batal</a>
        </div>
    </form>
@endsection
