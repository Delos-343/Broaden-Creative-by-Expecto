@extends('admin.home')
@section('content')
    <h1 class="text-center display-5">Form Footer</h1>
    <form class="mt-5" action="{{ route('kontak.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="Nomor Kontak">
                <h5>Nomor Kontak</h5>
            </label>
            <input type="text" class="form-control" name="no_kontak">
        </div>
        <div class="form-group mb-3">
            <label for="Email">
                <h5>Email</h5>
            </label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group mb-3">
            <label for="alamat">
                <h5>Alamat</h5>
            </label>
            <textarea name="alamat" class="form-control" name="alamat"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </form>
@endsection
