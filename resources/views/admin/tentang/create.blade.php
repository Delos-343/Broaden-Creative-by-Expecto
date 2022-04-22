@extends('admin.home')
@section('content')
@if (count($errors) > 0)
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
</ul>
@endif
<h1 class="text-center display-5">Form Tentang Page</h1>
<form class="mt-5" action="{{ route('tentang.store') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group mb-3">
    <label for="Deskripsi"> <h5>Deskripsi</h5> </label>
    <textarea name="deskripsi" class="form-control" name="deskripsi" rows="5"></textarea>
</div>
<div class="form-group mb-3">
    <label for="foto"> <h5>Foto</h5> </label>
    <input type="file" class="form-control" name="foto">
</div>
<button type="submit" class="btn btn-success">Simpan</button>
<button type="/admin.home" class="btn btn-warning">Batal</button>
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