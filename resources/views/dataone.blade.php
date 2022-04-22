@extends('default')

@section('content')
<section>
<form action="{{ route('datacollection.storeone') }}" method="POST">
            <div class="container d-flex align-items-center justify-content-center flex-column" style="padding: 50px 25px 50px 25px">
                <img src="{{ asset('frontend/img/logo.png') }}" class="mb-5" width="200" alt="">
                <div class="progress w-100 mb-5">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
                <div class="row w-100">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="lead">Nama Lengkap</label>
                            <input type="text" name="namalengkap" class="form-control">
                            <small class="invalid-feedback">Nama Lengkap tidak boleh kosong</small>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="lead">Tanggal Lahir</label>
                            <input type="date" name="tgllahir" class="form-control">
                            <small class="invalid-feedback">Tanggal Lahir tidak boleh kosong</small>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="lead">Email</label>
                            <input type="email" name="email" class="form-control">
                            <small class="invalid-feedback">Email tidak boleh kosong dan harus valid</small>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="lead">Nomor Telepon</label>
                            <input type="tel" name="nomortelp" class="form-control numberonly">
                            <small class="invalid-feedback">Nomor Telepon tidak boleh kosong</small>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="form-group">
                            <label class="lead">Jenis Kelamin</label>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="optLakiLaki" name="jeniskelamin" class="custom-control-input" value="Laki-Laki">
                                <label class="custom-control-label" for="optLakiLaki">Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="optPerempuan" name="jeniskelamin" class="custom-control-input" value="Perempuan">
                                <label class="custom-control-label" for="optPerempuan">Perempuan</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="optTransLakiLaki" name="jeniskelamin" class="custom-control-input" value="Trans Laki-Laki">
                                <label class="custom-control-label" for="optTransLakiLaki">Trans Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="optTransPerempuan" name="jeniskelamin" class="custom-control-input" value="Trans Perempuan">
                                <label class="custom-control-label" for="optTransPerempuan">Trans Perempuan</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="optNonBiner" name="jeniskelamin" class="custom-control-input" value="Non Biner/Genderqueer">
                                <label class="custom-control-label" for="optNonBiner">Non Biner/Genderqueer</label>
                                <small class="invalid-feedback">Jenis Kelamin tidak boleh kosong</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-6"><button id="btnKembaliFirst" class="btn w-100 btn-secondary">Kembali</button></div>
                            <div class="col-6"><button id="btnLanjutFirst" class="btn w-100 btn-warning">Lanjut</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection