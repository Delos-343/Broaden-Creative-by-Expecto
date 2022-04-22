@extends('admin.home')
@section('content')
    <h1 class="text-center display-5">Tabel Footer</h1>
    @if (Session::has('pesan'))
        <div class="alert alert-success">
            {{ Session::get('pesan') }}</div>
    @endif
    <div class="table-responsive mt-5"></div>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nomor Kontak</th>
                <th>Keterangan</th>
                <th>Alamat</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kontak as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->no_kontak }} </td>
                    <td>{{ $data->email }} </td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->created_at }} </td>
                    <td>{{ $data->updated_at }} </td>
                    <td>
                        <form action="{{ route('kontak.destroy', $data->id) }}" method="POST">@csrf
                            <a href="{{ route('kontak.edit', $data->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i> Edit </a>
                            <button class="btn btn-danger" onClick="return confirm('Yakin Mau Dihapus?')">
                                <i class="fa fa-times"></i>Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
