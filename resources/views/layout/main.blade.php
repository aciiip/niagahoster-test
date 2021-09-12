<!doctype html>
<html lang="id">
<head>
    <title>Niagahoster Test</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <div class="container d-flex align-items-center justify-content-end justify-content-md-between">
        <div class="ads1 d-none d-md-block">
            Gratis EBook 9 Cara Cerdas Meggunakan Domain [x]
        </div>
        <div class="d-flex gap-3 f-light banner1 py-2">
            <div>
                <a href="#">
                    <i class="fa fa-phone"></i>
                    0724-5305505
                </a>
            </div>
            <div>
                <a href="#">
                    <i class="fa fa-comments"></i>
                    Live Chat
                </a>
            </div>
            <div>
                <a href="#">
                    <i class="fa fa-user-circle"></i>
                    Member Area
                </a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <div>
                <a href="/">
                    <img src="{{ asset('assets/images/niagahoster-logo.png') }}" style="width: 180px;" />
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-lg-end" id="navbar-menu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Hosting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Domain</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Server</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Website</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Afiliasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="f-regular mb-4 footer-label mt-5">
                    HUBUNGI KAMI
                </div>
                <div class="footer-link-container">
                    <div>0724-5305505</div>
                    <div>Senin-Minggu</div>
                    <div>24 Jam Nonstop</div>
                    <div class="mt-3">Jl. Selokan Mataram Monjali Karangjati MT l/304 Sinduadi, Mlati, Sleman Yogyakarta 55284</div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="f-regular mb-4 footer-label mt-5">
                    LAYANAN
                </div>
                <div class="footer-link-container">
                    <ul>
                        <li>
                            <a href="#">Domain</a>
                        </li>
                        <li>
                            <a href="#">Shared Hosting</a>
                        </li>
                        <li>
                            <a href="#">Cloud VPS Hosting</a>
                        </li>
                        <li>
                            <a href="#">Web Builder</a>
                        </li>
                        <li>
                            <a href="#">Keamanan Pembuatan Website</a>
                        </li>
                        <li>
                            <a href="#">Program Affiliasi</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="f-regular mb-4 footer-label mt-5">
                    SERVICE HOSTING
                </div>
                <div class="footer-link-container">
                    <ul>
                        <li>
                            <a href="#">Hosting Murah</a>
                        </li>
                        <li>
                            <a href="#">Hosting Indonesia</a>
                        </li>
                        <li>
                            <a href="#">Hosting Singapura SG</a>
                        </li>
                        <li>
                            <a href="#">Hosting PHP</a>
                        </li>
                        <li>
                            <a href="#">Hosting Wordpress</a>
                        </li>
                        <li>
                            <a href="#">Hosting Laravel</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="f-regular mb-4 footer-label mt-5">
                    TUTORIAL
                </div>
                <div class="footer-link-container">
                    <ul>
                        <li>
                            <a href="#">Knowledgebase</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Cara Pembayaran</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="f-regular mb-4 footer-label mt-5">
                    TENTANG KAMI
                </div>
                <div class="footer-link-container">
                    <ul>
                        <li>
                            <a href="#">Tim Niagahoster</a>
                        </li>
                        <li>
                            <a href="#">Karir</a>
                        </li>
                        <li>
                            <a href="#">Events</a>
                        </li>
                        <li>
                            <a href="#">Penawaran & Promo Spesial</a>
                        </li>
                        <li>
                            <a href="#">Kontak Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="f-regular mb-4 footer-label mt-5">
                    KENAPA PILUH NIAGAHOSTER?
                </div>
                <div class="footer-link-container">
                    <ul>
                        <li>
                            <a href="#">Support Terbaik</a>
                        </li>
                        <li>
                            <a href="#">Garansi Harga Termurah</a>
                        </li>
                        <li>
                            <a href="#">Domain Gratis Selamanya</a>
                        </li>
                        <li>
                            <a href="#">Datacenter Hosting Terbaik</a>
                        </li>
                        <li>
                            <a href="#">Review Pelanggan</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="f-regular mb-4 footer-label mt-5">
                    NEWSLETTER
                </div>
                <div class="footer-link-container">
                    <div class="input-group mb-1 p-1 rounded-pill overflow-hidden" style="background-color: white">
                        <input type="text" class="form-control newsletter-input" placeholder="Email">
                        <button class="btn p-1 rounded-pill" type="button" style="background-color: #16a6f3; color: white;">Berlangganan</button>
                    </div>
                    <div style="color: rgba(255, 255, 255, .3)">
                        Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div style="font-size: 50px; margin-top: 90px;" class="d-flex justify-content-evenly align-items-center">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-google-plus"></i>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="f-regular footer-label">
                    PEMBAYARAN
                </div>
                <div></div>
            </div>
        </div>
        <hr style="border-bottom: 1px solid black"/>
        <div class="row" style="font-size: 13px;">
            <div class="col-12 col-md-8 mb-2">
                <div>
                    Copyright &copy;2016 Niagahoster | Hosting powered by PHP 7, CloudLinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta
                </div>
                <div>
                    Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology
                </div>
            </div>
            <div class="col-12 col-md-4 d-md-flex justify-content-end">
                Syarat dan Ketentuan | Kebijakan Privasi
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
