@extends('admin.home')
@section('content')
    <h1 class="text-center display-5">
        Edit Bukti Kepuasan Klien
    </h1>
    <form class="mt-5" action="{{ route('feedback.update', $feedback->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="nama">
                <h5>Nama Klien</h5>
            </label>
            <input type="text" class="form-control" name="nama" value="{{ $feedback->nama }}">
        </div>
        <div class="form-group mb-3">
            <label for="Keterangan">
                <h5>Keterangan</h5>
            </label>
            <textarea name="keterangan" class="form-control" rows="5">{{ $feedback->keterangan }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success"> Update </button>
            <a href="/feedback" class="btn btn-warning"> Batal</a>
        </div>
    </form>
@endsection
