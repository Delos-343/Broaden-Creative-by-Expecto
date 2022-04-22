@extends('admin.home')
@section('content')
@if(count($data_saran))
<div class="container">
    <div>ditemukan {{ count($data_saran) }} data dengan kata: {{ $cari }}</div>
<form action="{{ route('hubunginkami.search') }}" method="get">@csrf
    <input type="text" name="kata" placeholder="Pencarian Data By Nama">
</form>
<div class="card-body">
            @if(Session::has('pesan'))
            <div class="alert alert-success">
                {{Session::get('pesan')}}</div>
            @endif
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                <th>no</th>
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
                <td>{{++$no}}</td>
                <td>{{ $data->nama }} </td>
                <td>{{ $data->email }} </td>
                <td>{{ $data->nomor_telp }} </td>
                <td>{{ $data->pesan }} </td>
                <td>{{ $data->created_at }} </td>
                <td>{{ $data->updated_at }} </td>
                <td><form action="{{ route('hubunginkami.destroy', $data->id) }}" method="POST">@csrf
                    
                        <button class="btn btn-danger" onClick="return confirm('Yakin Mau Dihapus?')">
                            <i class="fa fa-times"></i>Hapus</button>
        </form>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        <div style="float: right">{{$hubunginkami->links()}}</div>
        </div>
        </div>
@endsection