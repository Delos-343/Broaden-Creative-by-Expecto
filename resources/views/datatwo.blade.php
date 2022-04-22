@extends('default')

@section('content')
<section>
<form action="{{ route('datacollection.storetwo') }}" method="POST">
            <div class="container d-flex align-items-center justify-content-center flex-column" style="padding: 50px 25px 50px 25px">
                <img src="{{ asset('frontend/img/logo.png') }}" class="mb-5" width="200" alt="">
                <div class="progress w-100 mb-5">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                </div>
                <div class="row w-100">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="lead">Provinsi</label>
                            <select class="custom-select mr-sm-2" name="provinsi">

                            </select>
                            <small class="invalid-feedback">Provinsi tidak boleh kosong</small>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="lead">Kota/Kabupaten</label>
                            <select class="custom-select mr-sm-2" name="kotakabupaten">

                            </select>
                            <small class="invalid-feedback">Kota/Kabupaten tidak boleh kosong</small>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="lead">Kecamatan</label>
                            <select class="custom-select mr-sm-2" name="kecamatan">

                            </select>
                            <small class="invalid-feedback">Kecamatan tidak boleh kosong</small>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="form-group">
                            <label class="lead">Kelurahan</label>
                            <select class="custom-select mr-sm-2" name="kelurahan">

                            </select>
                            <small class="invalid-feedback">Kelurahan tidak boleh kosong</small>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-6"><button id="btnKembaliSecond" class="btn w-100 btn-secondary">Kembali</button></div>
                            <div class="col-6"><button id="btnLanjutSecond" class="btn w-100 btn-warning">Lanjut</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection