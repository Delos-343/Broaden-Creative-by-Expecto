@extends('admin.home')
@section('content')
    <h1 class="text-center display-5">Tabel Hubungi Kami</h1>
    @if (Session::has('pesan'))
        <div class="alert alert-success">
            {{ Session::get('pesan') }}</div>
    @endif
    <div class="table-responsive mt-5">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor Telp</th>
                    <th>Pesan</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hubunginkami as $data)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $data->nama }} </td>
                        <td>{{ $data->email }} </td>
                        <td>{{ $data->nomor_telp }} </td>
                        <td>{{ $data->pesan }} </td>
                        <td>{{ $data->created_at }} </td>
                        <td>{{ $data->updated_at }} </td>
                        <td>
                            <form action="{{ route('hubunginkami.destroy', $data->id) }}" method="POST">@csrf

                                <button class="btn btn-danger" onClick="return confirm('Yakin Mau Dihapus?')">
                                    <i class="fa fa-times"></i>Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div style="float: right">{{ $hubunginkami->links() }}</div>
@endsection
