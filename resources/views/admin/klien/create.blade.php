@extends('admin.home')
@section('content')
    <h1 class="text-center display-5">
        Form Klien
    </h1>
    <form class="mt-5" action="{{ route('klien.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="keterangan"> <h5>Keterangan</h5> </label>
            <textarea name="keterangan" class="form-control" name="keterangan"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="foto"> <h5>Foto/Logo</h5> </label>
            <input type="file" class="form-control" name="foto">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </form>
@endsection
