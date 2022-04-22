@extends('admin.home')
@section('content')
<h1 class="text-center display-5">Form Portofolio</h1>
<form class="mt-5" action="{{ route('portofolio.store') }}" method="post" enctype="multipart/form-data">
            @csrf
 <div class="form-group mb-3">
    <label for="judul_portofolio"> <h5>Judul</h5> </label>
    <input type="text" class="form-control" name="judul_portofolio">
</div>
<div class="form-group mb-3">
    <label for="keterangan"> <h5>Keterangan</h5> </label>
    <textarea name="keterangan" class="form-control" name="keterangan" rows="5"></textarea>
</div>
<div class="form-group mb-3">
    <label for="foto"> <h5>Foto</h5> </label>
    <input type="file" class="form-control" name="foto">
</div>
<button type="submit" class="btn btn-success">Tambah Portofolio</button>
<button type="reset" class="btn btn-warning">Reset</button>
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