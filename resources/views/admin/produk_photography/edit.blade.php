@extends('admin.home')
@section('content')
<h1 class="text-center display-5">
    Edit Photography
</h1>
<form class="mt-5" action="{{ route('produkphotography.update', $produkphotography->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
    <label for="Nama Produk"> <h5>Judul</h5> </label>
    <input type="text" class="form-control" name="nama_produk_photography" value="{{$produkphotography->nama_produk_photography}}">
</div>
<div class="form-group mb-3">
    <label for="Keterangan"> <h5>Keterangan</h5> </label>
    <textarea name="keterangan" class="form-control" rows="5">{{$produkphotography->keterangan}}</textarea>
</div>
<div class="form-group mb-3">
    <label>Foto</label>
    <br><img src="{{ asset('thumb/'.$produkphotography->foto) }}" style="width: 100px">
</div>
<div class="form-group mb-3">
    <label for="foto"> <h5>Ganti Foto</h5> </label>
    <input type="file" class="form-control" name="foto">
    <label>*) Jika foto tidak diganti,kosongkan saja</label>
    <div class="form-group mt-3">
        <button type="submit" class="btn btn-success"> Update </button>
        <a href="/" class="btn btn-warning"> Batal</a>
</div>
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
@endsection