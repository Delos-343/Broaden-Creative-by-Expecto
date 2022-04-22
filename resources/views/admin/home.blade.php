<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GenB Admin</title>
        <link href="{{ asset('frontend/styles.css') }}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand" style="background-color: rgb(20,20,20)">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3 text-white" href="index.html">GenB Admin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 text-white" id="sidebarToggle" href="#!"><i class="fas fa-bars fa-2x"></i></button>
            <!-- Navbar-->
            <a href="/" class="btn btn-primary ms-auto me-0 me-md-3 my-2 my-md-0" style="white-space: nowrap;">Website <i class="fas fa-globe"></i></a>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading text-white">Landing Page</div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBannerLandingPage" aria-expanded="false" aria-controls="collapseBannerLandingPage">
                                <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                                Banner Landing Page
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseBannerLandingPage" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('bannerhome.create') }}">Form Banner Landing Page</a>
                                    <a class="nav-link" href="{{ route('bannerhome.index') }}">Tabel Banner Landing Page</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseKlien" aria-expanded="false" aria-controls="collapseKlien">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Klien
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseKlien" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('klien.create') }}">Form Klien</a>
                                    <a class="nav-link" href="{{ route('klien.index') }}">Tabel Klien</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBuktiKepuasanKlien" aria-expanded="false" aria-controls="collapseBuktiKepuasanKlien">
                                <div class="sb-nav-link-icon"><i class="fas fa-comment"></i></div>
                                Bukti Kepuasan Klien
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseBuktiKepuasanKlien" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('feedback.create') }}">Form Bukti Kepuasan Klien</a>
                                    <a class="nav-link" href="{{ route('feedback.index') }}">Tabel Bukti Kepuasan Klien</a>
                                </nav>
                            </div>
        
                            <a class="nav-link" href="{{ route('hubunginkami.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                                Hubungi Kami
                            </a>

                            <div class="sb-sidenav-menu-heading text-white">Produk dan Jasa Page</div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBannerProdukdanJasaPage" aria-expanded="false" aria-controls="collapseBannerProdukdanJasaPage">
                                <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                                Banner Produk dan Jasa Page
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseBannerProdukdanJasaPage" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('bannerproduk.create') }}">Form Banner Produk dan Jasa Page</a>
                                    <a class="nav-link" href="{{ route('bannerproduk.index') }}">Tabel Banner Produk dan Jasa Page</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSocialMediaHandling" aria-expanded="false" aria-controls="collapseSocialMediaHandling">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Social Media Handling
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseSocialMediaHandling" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('produksosialmedia.create') }}">Form Social Media Handling</a>
                                    <a class="nav-link" href="{{ route('produksosialmedia.index') }}">Tabel Social Media Handling</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseContentMarketing" aria-expanded="false" aria-controls="collapseContentMarketing">
                                <div class="sb-nav-link-icon"><i class="fas fa-bullhorn"></i></div>
                                Content Marketing
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseContentMarketing" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('produkcontentmarketing.create') }}">Form Content Marketing</a>
                                    <a class="nav-link" href="{{ route('produkcontentmarketing.index') }}">Tabel Content Marketing</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBrandingandDesign" aria-expanded="false" aria-controls="collapseBrandingandDesign">
                                <div class="sb-nav-link-icon"><i class="fas fa-copyright"></i></div>
                                Branding and Design
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseBrandingandDesign" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('produkbrandingdesign.create') }}">Form Branding and Design</a>
                                    <a class="nav-link" href="{{ route('produkbrandingdesign.index') }}">Tabel Branding and Design</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePhotography" aria-expanded="false" aria-controls="collapsePhotography">
                                <div class="sb-nav-link-icon"><i class="fas fa-camera"></i></div>
                                Photography
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePhotography" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('produkphotography.create') }}">Form Photography</a>
                                    <a class="nav-link" href="{{ route('produkphotography.index') }}">Tabel Photography</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading text-white">Portofolio Page</div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBannerPortofolioPage" aria-expanded="false" aria-controls="collapseBannerPortofolioPage">
                                <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                                Banner Portofolio Page
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseBannerPortofolioPage" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('bannerportofolio.create') }}">Form Banner Portofolio Page</a>
                                    <a class="nav-link" href="{{ route('bannerportofolio.index') }}">Tabel Banner Portofolio Page</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePortofolio" aria-expanded="false" aria-controls="collapsePortofolio">
                                <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                                Portofolio
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePortofolio" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('portofolio.create') }}">Form Portofolio</a>
                                    <a class="nav-link" href="{{ route('portofolio.index') }}">Tabel Portofolio</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading text-white">Tentang Page</div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBannerTentangPage" aria-expanded="false" aria-controls="collapseBannerTentangPage">
                                <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                                Banner Tentang Page
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseBannerTentangPage" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('bannertentang.create') }}">Form Banner Tentang Page</a>
                                    <a class="nav-link" href="{{ route('bannertentang.create') }}">Tabel Banner Tentang Page</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBannerTentang" aria-expanded="false" aria-controls="collapseBannerTentang">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                                Tentang
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseBannerTentang" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('tentang.create') }}">Form Tentang</a>
                                    <a class="nav-link" href="{{ route('tentang.index') }}">Tabel Tentang</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading text-white">Other</div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFooter" aria-expanded="false" aria-controls="collapseFooter">
                                <div class="sb-nav-link-icon"><i class="fas fa-shoe-prints"></i></div>
                                Footer
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseFooter" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('kontak.create') }}">Form Footer</a>
                                    <a class="nav-link" href="{{ route('kontak.index') }}">Tabel Footer</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-footer mt-5">
                                <div class="small">Logged in as:</div>
                                Admin
                            </div>
                        </div>  
                    </div>
                </nav>
                
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container my-5">
                        @yield('content')
                    </div>
                    
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script>
            window.addEventListener('DOMContentLoaded', event => {
                const sidebarToggle = document.body.querySelector('#sidebarToggle');
                if (sidebarToggle) {
                    sidebarToggle.addEventListener('click', event => {
                        event.preventDefault();
                        document.body.classList.toggle('sb-sidenav-toggled');
                    });
                }
            });
        </script>
    </body>
</html>
