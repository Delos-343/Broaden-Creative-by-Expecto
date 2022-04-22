@extends('admin.home')
@section('content')
<h1 class="text-center">Form Edit Portofolio</h1>
<form class="mt-5" action="{{ route('portofolio.update', $portofolio->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
            <label for="judul_portofolio"> <h5>Judul Portofolio</h5> </label>
            <input type="text" class="form-control" name="judul_portofolio" value="{{$portofolio->judul_portofolio}}">
</div>
<div class="form-group mb-3">
    <label for="Keterangan"> <h5>Keterangan</h5> </label>
    <textarea name="keterangan" class="form-control" rows="5">{{$portofolio->keterangan}}</textarea>
</div>
<div class="form-group mb-3">
    <label> <h5>Foto</h5> </label>
    <br><img src="{{ asset('thumb/'.$portofolio->foto) }}" style="width: 100px">
</div>
<div class="form-group mb-3">
    <label for="foto"> <h5>Ganti Foto</h5> </label>
    <input type="file" class="form-control" name="foto">
    <label>*) Jika foto tidak diganti,kosongkan saja</label>
    <div class="form-group mt-3">
        <button type="submit" class="btn btn-success"> Update </button>
        <a href="/portofolio" class="btn btn-warning"> Batal</a>
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