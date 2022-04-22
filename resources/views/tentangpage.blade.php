<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, viewport-fit=cover">
    <title>Tentang | GenB Creative</title>
    <link rel="icon" href="{{ asset('frontend/img/logo.ico') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="/">
            <img id="logo" src="{{ asset('frontend/img/logo.png') }}" width="150px" class="d-inline-block align-top" alt="logo">
        </a>
        <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <img src="{{ asset('frontend/img/hamburger.png') }}" width="30px" alt="hamburger">
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item align-right">
                <a class="nav-link text-white float-right" href="/portofoliopage">Portofolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white float-right" href="/produkpage">Produk dan Jasa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white float-right" href="/tentangpage">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white d-inline-block px-4 float-right" id="btnHubungiKami" href="/#hubungiKami">Hubungi Kami<img src="{{ asset('frontend/img/arrow.png') }}" class="arrow-right" width="20"/></a>
              </li>
            </ul>
        </div>
    </nav>

    <header>
    @foreach($bannertentang as $data)
    <div style="position: relative; background-image: url('{{ asset('thumb/' . $data->foto) }}'); height: calc(80vh - 91.9px); background-size: cover;">
        <div class="position-absolute" style="top: 10%; left: 5%;">
          <div class="container">
            <a class="text-white" href="/"><img src="{{ asset('frontend/img/arrow.png') }}" class="arrow-left" width="20" /> Kembali Ke Awal</a>
          </div>
        </div>
        <div class="position-absolute" style="bottom: 20%; left: 5%;">
          <div class="container">
            <h1 class="font-weight-bold text-white">Tentang Kami</h1>
          </div>
        </div>
      </div>
      @endforeach
    </header>

    <section style="min-height: 650px; background-color: rgb(20,20,20)">
        <div class="container-fluid py-5 text-white">
            <h1 class="text-center font-weight-bold">GenB Creative</h1>
            @foreach ($tentang as $data)
            <div class="row" style="margin-top: 50px;">
                <div class="col-lg-6 px-5 mb-5">
                    <h4 class="font-weight-light">
                    {{ $data->deskripsi }}
                    </h4>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center px-5">
                    <img src="{{ asset('thumb/'.$data->foto) }}" class="rounded" width="100%" alt="">
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section style="min-height: 600px;">
        <div class="container text-center py-5">
            <h1>Lokasi Kami</h1>
            <div id="map">
            
            </div>
        </div>
    </section>

    <footer style="background-color: #2C2C2C;">
      <div class="container-fluid pt-5">
        <div class="row">
          <div class="col-lg-3 text-center mb-5">
            <a href="index.html"><img src="{{ asset('frontend/img/logo.png') }}" width="120px" alt=""></a>
          </div>
          <div class="col-lg-3 col-6 text-left text-white mb-5">
                    <h5 class="font-weight-bold">Ikuti Kami:</h5>
                    <a href="#"><img src="{{ asset('frontend/img/facebook.png') }}" width="50px" alt=""></a>
                    <a href="https://www.instagram.com/genb.creative/"><img src="{{ asset('frontend/img/instagram.png') }}" width="50px" alt=""></a>
                    <a href="https://www.linkedin.com/company/genb-creative/mycompany/"><img src="{{ asset('frontend/img/linkedin.png') }}" width="50px" alt=""></a>
                </div>
          @foreach ($kontak as $data)
          <div class="col-lg-3 col-6 text-left text-white mb-5">
            <h5 class="font-weight-bold">Kontak:</h5>
            <p class="mb-0"><a class="text-white" href="tel:081234567890">{{ $data->no_kontak }}</a></p>
            <p><a class="text-white" href="mailto:sample@mail.com">{{ $data->email }}</a></p>
          </div>
          <div class="col-lg-3 text-left text-white mb-5">
            <h5 class="font-weight-bold">Alamat Kami:</h5>
            <p class="font-weight-light">{{ $data->alamat }}</p>
          </div>
          @endforeach
        </div>
        <h6 class="text-center text-white py-3 mb-0" style="border-top: 1px solid rgb(255,255,255)">© 2021 GenB Creative. All Rights Reserved</h6>
      </div>
    </footer>

    <script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoibHVpc2xpdiIsImEiOiJja3M0a203amExOWJuMnlvNG0zODNvdzU4In0.tszhBEgD3XZHrrqIE4YcWQ';
        var map = new mapboxgl.Map({
            container: 'map',
            center: [106.820804, -6.183859],
            zoom: 9,
            style: 'mapbox://styles/mapbox/streets-v11'
        });
        map.addControl(new mapboxgl.NavigationControl());
        map.scrollZoom.disable();
        const marker = new mapboxgl.Marker({
            color: "#db382c",
            draggable: false
        }).setLngLat([106.820804, -6.183859]).addTo(map);
    </script>
</body>
</html>