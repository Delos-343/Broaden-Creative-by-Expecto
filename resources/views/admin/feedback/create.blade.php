@extends('admin.home')
@section('content')
    <h1 class="text-center display-5">
        Form Bukti Kepuasan Klien
    </h1>
    <form class="mt-5" action="{{ route('feedback.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="Nama Client">
                <h5>Nama Klien</h5>
            </label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group mb-3">
            <label for="keterangan">
                <h5>Keterangan</h5>
            </label>
            <textarea name="keterangan" class="form-control" name="keterangan" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </form>
@endsection
