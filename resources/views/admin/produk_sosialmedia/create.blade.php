@extends('admin.home')
@section('content')
@if (count($errors) > 0)
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
</ul>
@endif
<h1 class="text-center display-5">Form Social Media Handling</h1>
<form class="mt-5" action="{{ route('produksosialmedia.store') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group mb-3">
    <label for="Nama Produk"> <h5>Judul</h5> </label>
    <input type="text" class="form-control" name="nama_produk_sosialmedia">
</div>
<div class="form-group mb-3">
    <label for="keterangan"> <h5>Keterangan</h5> </label>
    <textarea name="keterangan" class="form-control" name="keterangan" rows="5"></textarea>
</div>
<div class="form-group mb-3">
    <label for="foto"> <h5>Foto</h5> </label>
    <input type="file" class="form-control" name="foto">
</div>
<button type="submit" class="btn btn-success">Simpan</button>
<button type="/produk_sosialmedia" class="btn btn-warning">Batal</button>
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