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
    <section id="firstform" class="d-none">
    @yield('content')
        </section>
    

    <section id="finishpage" class="d-none">
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

            // THIRD FORM
            $('#btnKembaliThird').click(e => {
                e.preventDefault()
                $('#firstform').addClass('d-none')
                $('#secondform').removeClass('d-none')
                $('#thirdform').addClass('d-none')
                $('#landingpage').addClass('d-none')
                $('#finishpage').addClass('d-none')
            })
            $('#frmDataCollection').on('submit', (function(e) {
                e.preventDefault()
                var valid = true
                if(!$('input[name="pekerjaan"]:checked').val()) {
                    $('input[name="pekerjaan"]').addClass('is-invalid')
                    valid = false
                } if(!$('input[name="pengeluaranperbulan"]:checked').val()) {
                    $('input[name="pengeluaranperbulan"]').addClass('is-invalid')
                    valid = false
                } if(!$('input[name="sosialmedia"]:checked').val()) {
                    $('input[name="sosialmedia"]').addClass('is-invalid')
                    valid = false
                } if(valid) {
                    // STORE FORM DATA
                    var fData = new FormData(this)
                    var loop = []
                    fData.forEach(e => loop.push(e))
                    alert(loop)

                    $('#firstform').addClass('d-none')
                    $('#secondform').addClass('d-none')
                    $('#thirdform').addClass('d-none')
                    $('#landingpage').addClass('d-none')
                    $('#finishpage').removeClass('d-none')
                }
            }))

            // FINISH PAGE
            $('#btnUlangSurvey').click(() => {
                location.reload()
            })
        })
    </script>
</body>

</html>