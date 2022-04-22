<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GenB Data Collection</title>
    <link rel="icon" href="{{ asset('frontend/img/logoblue.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body{
            font-family: 'Poppins';
        }
        section{
            background: linear-gradient(137.23deg, rgba(20, 20, 20, 0.9) 25%, #000000 75%);
            color: white;
            min-height: 100vh;
        }
    </style>
</head>

<body>
    <section id="landingpage">
        <div class="d-flex align-items-center justify-content-center flex-column" style="padding: 50px 25px 50px 25px">
            <img src="{{ asset('frontend/img/logo.png') }}" class="mb-5" width="200" alt="">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="p-4">
                        <h1 class="my-3">GenB Data Collection</h1>
                        <p class="my-3">Hello Broaders Fellow, kami ingin mengajak kamu mengisi survei Data Collection Customer yang bertujuan untuk kebutuhan Tim Data kami sebagai bentuk referensi customer lebih dalam lagi. Setiap pengisisan survei ini akan ada hadiah menarik dari kami bagi responden yang beruntung .</p>
                        <button id="btnMulai" class="btn w-100 btn-warning my-3 py-3">Mulai Sekarang</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <img src="{{ asset('frontend/img/landing.jpg') }}" style="border-radius: 20px;" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
    <form id="frmDataCollection" action="{{ route('datacollection.store') }}" method="post">

    @csrf
        <section id="firstform">
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
                    
                </div>
            </div>
        </section>

        <section id="secondform">
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
                    
                </div>
            </div>
        </section>

        <section id="thirdform">
            <div class="container d-flex align-items-center justify-content-center flex-column" style="padding: 50px 25px 50px 25px">
                <img src="{{ asset('frontend/img/logo.png') }}" class="mb-5" width="200" alt="">
                <div class="progress w-100 mb-5">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
                <div class="row w-100">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="form-group">
                            <label class="lead">Pekerjaan</label>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="optMahasiswa" name="pekerjaan" class="custom-control-input" value="Mahasiswa">
                                <label class="custom-control-label" for="optMahasiswa">Mahasiswa</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="optIbuRumahTangga" name="pekerjaan" class="custom-control-input" value="Ibu Rumah Tangga">
                                <label class="custom-control-label" for="optIbuRumahTangga">Ibu Rumah Tangga</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="optKaryawanSwasta" name="pekerjaan" class="custom-control-input" value="Karyawan Swasta">
                                <label class="custom-control-label" for="optKaryawanSwasta">Karyawan Swasta</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="optASN" name="pekerjaan" class="custom-control-input">
                                <label class="custom-control-label" for="optASN">ASN</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="optKaryawanBUMN" name="pekerjaan" class="custom-control-input" value="Karyawan BUMN">
                                <label class="custom-control-label" for="optKaryawanBUMN">Karyawan BUMN</label>
                                <small class="invalid-feedback">Pekerjaan tidak boleh kosong</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="form-group">
                            <label class="lead">Pengeluaran per Bulan</label>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="opt<1jt" name="pengeluaranperbulan" class="custom-control-input" value="< Rp 1,000,000">
                                <label class="custom-control-label" for="opt<1jt">Dibawah Rp 1,000,000</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="opt1jt-2jt" name="pengeluaranperbulan" class="custom-control-input" value="Rp 1,000,000 - Rp 5,000,000">
                                <label class="custom-control-label" for="opt1jt-2jt">Rp 1,000,000 - Rp 5,000,000</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="opt2jt-5jt" name="pengeluaranperbulan" class="custom-control-input" value="Rp 5,000,000 - Rp 10,000,000">
                                <label class="custom-control-label" for="opt2jt-5jt">Rp 5,000,000 - Rp 10,000,000</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="opt5jt-10jt" name="pengeluaranperbulan" class="custom-control-input" value="Rp 10,000,000 - Rp 50,000,000">
                                <label class="custom-control-label" for="opt5jt-10jt">Rp 10,000,000 - Rp 50,000,000</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="opt10jt-20jt" name="pengeluaranperbulan" class="custom-control-input" value="> Rp 50,000,000">
                                <label class="custom-control-label" for="opt10jt-20jt">Diatas Rp 50,000,000</label>
                                <small class="invalid-feedback">Pengeluaran per Bulan tidak boleh kosong</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="form-group">
                            <label class="lead">Sosial Media yang Digunakan (Multiple)</label>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" id="optInstagram" name="sosialmedia" class="custom-control-input" value="Instagram">
                                <label class="custom-control-label" for="optInstagram">Instagram</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" id="optWhatsapp" name="sosialmedia" class="custom-control-input" value="Whatsapp">
                                <label class="custom-control-label" for="optWhatsapp">Whatsapp</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" id="optFacebook" name="sosialmedia" class="custom-control-input" value="Facebook">
                                <label class="custom-control-label" for="optFacebook">Facebook</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" id="optSnapchat" name="sosialmedia" class="custom-control-input" value="Snapchat">
                                <label class="custom-control-label" for="optSnapchat">Snapchat</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" id="optTikTok" name="sosialmedia" class="custom-control-input" value="Tiktok">
                                <label class="custom-control-label" for="optTikTok">TikTok</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" id="optYoutube" name="sosialmedia" class="custom-control-input" value="Youtube">
                                <label class="custom-control-label" for="optYoutube">Youtube</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" id="optTwitter" name="sosialmedia" class="custom-control-input" value="Twitter">
                                <label class="custom-control-label" for="optTwitter">Twitter</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" id="optLine" name="sosialmedia" class="custom-control-input" value="Line">
                                <label class="custom-control-label" for="optLine">Line</label>
                                <small class="invalid-feedback">Sosial Media yang Digunakan tidak boleh kosong</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-6"><button id="btnKembaliThird" class="btn w-100 btn-secondary">Kembali</button></div>
                            <div class="col-6"><button class="btn w-100 btn-success"type="submit">Selesai</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    </section>

    <section id="finishpage" >
        <div class="container d-flex align-items-center justify-content-center flex-column" style="padding: 50px 25px 50px 25px">
            <img src="{{ asset('frontend/img/logo.png') }}" class="mb-5" width="200" alt="">
            <div class="progress w-100 mb-5">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="p-4">
                        <p class="mb-5">Kami ucapkan Terima Kasih bagi teman-teman yang telah bersedia meluangkan waktu untuk mengisi survei yang Broaden Creative Agency adakan. Semoga kamu salah satu dari responden yang beruntung mendapatkan hadiah ,See ya ~</p>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-3">
                                <button id="btnUlangSurvey" class="btn w-100 btn-outline-info">Ulang Survey</button>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="btn w-100 btn-warning" href="https://www.broadencreative.com">Check Website Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <img src="{{ asset('frontend/img/finish.jpg') }}" style="border-radius: 20px;" width="100%" alt="">
                </div>
            </div>
            
            
        </div>
    </section>

    <footer style="background-color: #2C2C2C;">
        <h6 class="text-center text-white py-3 mb-0" style="border-top: 1px solid rgb(255,255,255)">© 2021 GenB
            Creative. All Rights Reserved</h6>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('.numberonly').keypress(function (e) {
                var charCode = (e.which) ? e.which : event.keyCode
                if (String.fromCharCode(charCode).match(/[^0-9]/g))
                    return false;
            })

            // LANDING PAGE
            $('#btnMulai').click(() => {
                $('#firstform').removeClass('d-none')
                $('#secondform').addClass('d-none')
                $('#thirdform').addClass('d-none')
                $('#landingpage').addClass('d-none')
                $('#finishpage').addClass('d-none')
            })

            // FIRST FORM
            $('input[name="tgllahir"]').val(new Date(new Date() - new Date().getTimezoneOffset() * 60000).toISOString().split('T')[0])
            $('input[name="tgllahir"]').attr('max', new Date(new Date() - new Date().getTimezoneOffset() * 60000).toISOString().split('T')[0])

            $('#btnKembaliFirst').click(e => {
                e.preventDefault()
                $('#firstform').addClass('d-none')
                $('#secondform').addClass('d-none')
                $('#thirdform').addClass('d-none')
                $('#landingpage').removeClass('d-none')
                $('#finishpage').addClass('d-none')
            })
            $('#btnLanjutFirst').click(e => {
                e.preventDefault()
                var valid = true
                if(!$('input[name="namalengkap"]').val()) {
                    $('input[name="namalengkap"]').addClass('is-invalid')
                    valid = false
                } if(!$('input[name="tgllahir"]').val()) {
                    $('input[name="tgllahir"]').addClass('is-invalid')
                    valid = false
                } if(!$('input[name="email"]').val() || !$('input[name="email"]')[0].checkValidity()) {
                    $('input[name="email"]').addClass('is-invalid')
                    valid = false
                } if(!$('input[name="nomortelp"]').val()) {
                    $('input[name="nomortelp"]').addClass('is-invalid')
                    valid = false
                } if(!$('input[name="jeniskelamin"]:checked').val()) {
                    $('input[name="jeniskelamin"]').addClass('is-invalid')
                    valid = false
                } if(valid) {
                    $('input[name="namalengkap"]').removeClass('is-invalid')
                    $('input[name="tgllahir"]').removeClass('is-invalid')
                    $('input[name="email"]').removeClass('is-invalid')
                    $('input[name="nomortelp"]').removeClass('is-invalid')
                    $('input[name="jeniskelamin"]').removeClass('is-invalid')

                    $('#firstform').addClass('d-none')
                    $('#secondform').removeClass('d-none')
                    $('#thirdform').addClass('d-none')
                    $('#landingpage').addClass('d-none')
                    $('#finishpage').addClass('d-none')
                }
            })

            // SECOND FORM
            $.ajax({
                url: 'https://dev.farizdotid.com/api/daerahindonesia/provinsi',
                type: 'GET',
                success: async function(response) {
                    $.each(response.provinsi, function(index, value) {
                        $('select[name="provinsi"]').append(
                            `<option value="${value.nama}" data-id=${value.id}>${value.nama}</option>`
                        )
                    })
                    await populateKota()
                    await populateKecamatan()
                    await populateKelurahan()
                }
            })

            async function populateKota() {
                var provinsiID = $('select[name="provinsi"]').find(":selected").data('id')
                await $.ajax({
                    url: `https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=${provinsiID}`,
                    type: 'GET',
                    success: async function(response) {
                        $('select[name="kotakabupaten"]').html('')
                        $.each(response.kota_kabupaten, function(index, value) {
                            $('select[name="kotakabupaten"]').append(
                                `<option value="${value.nama}" data-id=${value.id}>${value.nama}</option>`
                            )
                        })
                        await populateKecamatan()
                        await populateKelurahan()
                    }
                })
            }
            $('select[name="provinsi"]').change(populateKota)

            async function populateKecamatan() {
                var kotaID = $('select[name="kotakabupaten"]').find(":selected").data('id')
                await $.ajax({
                    url: `https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=${kotaID}`,
                    type: 'GET',
                    success: async function(response) {
                        $('select[name="kecamatan"]').html('')
                        $.each(response.kecamatan, function(index, value) {
                            $('select[name="kecamatan"]').append(
                                `<option value="${value.nama}" data-id="${value.id}">${value.nama}</option>`
                            )
                        })
                        await populateKelurahan()
                    }
                })
            }
            $('select[name="kotakabupaten"]').change(populateKecamatan)

            async function populateKelurahan() {
                var kecamatanID = $('select[name="kecamatan"]').find(":selected").data('id')
                await $.ajax({
                    url: `https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=${kecamatanID}`,
                    type: 'GET',
                    success: function(response) {
                        $('select[name="kelurahan"]').html('')
                        $.each(response.kelurahan, function(index, value) {
                            $('select[name="kelurahan"]').append(
                                `<option value="${value.nama}" data-id="${value.id}">${value.nama}</option>`
                            )
                        })
                    }
                })
            }
            $('select[name="kecamatan"]').change(populateKelurahan)

            $('#btnKembaliSecond').click(e => {
                e.preventDefault()
                $('#firstform').removeClass('d-none')
                $('#secondform').addClass('d-none')
                $('#thirdform').addClass('d-none')
                $('#landingpage').addClass('d-none')
                $('#finishpage').addClass('d-none')
            })
            $('#btnLanjutSecond').click(e => {
                e.preventDefault()
                var valid = true
                if(!$('select[name="provinsi"]').find(':selected').val()) {
                    $('select[name="provinsi"]').addClass('is-invalid')
                    valid = false
                } if(!$('select[name="kotakabupaten"]').find(':selected').val()) {
                    $('select[name="kotakabupaten"]').addClass('is-invalid')
                    valid = false
                } if(!$('select[name="kecamatan"]').find(':selected').val()) {
                    $('select[name="kecamatan"]').addClass('is-invalid')
                    valid = false
                } if(!$('select[name="kelurahan"]').find(':selected').val()) {
                    $('select[name="kelurahan"]').addClass('is-invalid')
                    valid = false
                } if(valid) {
                    $('select[name="provinsi"]').removeClass('is-invalid')
                    $('select[name="kotakabupaten"]').removeClass('is-invalid')
                    $('select[name="kecamatan"]').removeClass('is-invalid')
                    $('select[name="kelurahan"]').removeClass('is-invalid')

                    $('#firstform').addClass('d-none')
                    $('#secondform').addClass('d-none')
                    $('#thirdform').removeClass('d-none')
                    $('#landingpage').addClass('d-none')
                    $('#finishpage').addClass('d-none')
                }
            })

            
            // FINISH PAGE
            $('#btnUlangSurvey').click(() => {
                location.reload()
            })
        })
    </script>
</body>

</html>