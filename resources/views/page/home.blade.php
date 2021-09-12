@extends('layout.main')
@section('content')
    <div class="container">
        <div class="row align-items-center py-4">
            <div class="col-12 col-md-6">
                <div class="title1 f-bold">
                    PHP Hosting
                </div>
                <div class="subtitle1 mt-1 f-light">
                    Cepat, handal, penuh dengan <br/>
                    modul PHP yang Anda butuhkan
                </div>
                <div class="mt-3">
                    <ul class="check1">
                        @foreach($php_hosting_features AS $feature)
                        <li>
                            <i class="fa fa-check-circle"></i>
                            {{$feature}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/svg/illustration banner PHP hosting-01.svg') }}" style="width: 100%" />
            </div>
        </div>
    </div>
    <hr style="background-color: rgba(0,0,0,.3)"/>
    <div class="container overflow-auto py-4 text-center text-nowrap">
        <div class="d-inline-block mx-5">
            <embed src="{{ asset('assets/svg/illustration-banner-PHP-zenguard01.svg') }}" style="width: 160px; height: 160px;" />
            <div class="text-gray mt-2">PHP Zend Guard Loader</div>
        </div>
        <div class="d-inline-block mx-5">
            <embed src="{{ asset('assets/svg/icon-composer.svg') }}" style="width: 160px; height: 160px;" />
            <div class="text-gray mt-2">PHP Composer</div>
        </div>
        <div class="d-inline-block mx-5">
            <embed src="{{ asset('assets/svg/icon-php-hosting-ioncube.svg') }}" style="width: 160px; height: 160px;" />
            <div class="text-gray mt-2">PHP ionCube Loader</div>
        </div>
    </div>
    <div class="container">
        <div class="title2 text-center mt-5 f-bold">
            Paket Hosting Singapura yang Tepat
        </div>
        <div class="text-center subtitle2 f-light">
            Diskon 40% Domain dan SSL Gratis untuk Anda
        </div>
    </div>
    <div class="container">
        <div class="row mx-1 mt-4">
            @foreach($packages AS $package)
            <div class="col-12 col-sm-6 col-md-3 p-0">
                <div class="package-item-container text-center mt-4 {{ $package['active'] ? 'active' : '' }}">
                    @if($package['active'])
                    <div class="package-item-active-label-container">
                        <div class="py-2 px-5 package-item-active-label">
                            BEST SELLER!
                        </div>
                    </div>
                    @endif
                    <div class="package-item-title f-bold">
                        {{$package['title']}}
                    </div>
                    <div class="pt-2 package-item-price-container">
                        <div>
                            <strike>Rp {{number_format($package['strike_price'], 0, ',', '.')}}</strike>
                        </div>
                        <div class="package-item-price pb-2">
                            @php
                                $prices = explode('.', number_format($package['price'], 0, ',', '.'))
                            @endphp
                            Rp &nbsp;<span class="price f-bold"><span class="price-large">{{$prices[0]}}</span>.{{$prices[1]}}</span>/bln
                        </div>
                    </div>
                    <div class="price-registered py-2">
                        <strong>{{number_format($package['registered'], 0, ',', '.')}}</strong> Pengguna Terdaftar
                    </div>
                    <div class="px-2 py-3 price-feature">
                        @foreach($package['features'] AS $feature)
                            <div class="f-light mb-2"><span class="f-regular">{{$feature['bold']}}</span> {{$feature['text']}}</div>
                        @endforeach
                    </div>
                    <div class="mt-5 mb-5">
                        <a href="#" class="{{ $package['active'] ? 'm-btn' : 'm-btn2' }}">
                            {{ $package['discount'] ? 'Diskon ' . $package['discount'] : 'Pilih Sekarang' }}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="subtitle1 text-center mt-5 f-light">
            Powerfull dengan Limit PHP yang Lebih Besar
        </div>
        <div class="row mt-4">
            <div class="col-12 col-md-6">
                <table class="m-table">
                    <tr>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td>max execution time 300s</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td>max execution time 300s</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td>php memory limit 1024 MB</td>
                    </tr>
                </table>
            </div>
            <div class="col-12 col-md-6">
                <table class="m-table">
                    <tr>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td>post max size 128 MB</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td>upload max filesize 128 MB</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td>max input vars 2500</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <div style="width: 90px; background-color: whitesmoke; height: 5px;"></div>
    </div>
    <div class="container">
        <div class="subtitle1 text-center mt-5 f-light">
            Semua Paket Hosting Sudah Termasuk
        </div>
        <div class="row mt-5">
            <div class="col-12 col-sm-6 col-md-4 text-center all-package-container mb-5">
                <img src="{{ asset('assets/svg/icon PHP Hosting_PHP Semua Versi.svg') }}" style="width: 60px;" />
                <div class="all-package-title mt-3">
                    PHP Semua Versi
                </div>
                <div class="all-package-subtitle">
                    Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 text-center all-package-container mb-5">
                <img src="{{ asset('assets/svg/icon PHP Hosting_My SQL.svg') }}" style="width: 60px;" />
                <div class="all-package-title mt-3">
                    MySQL Versi 5.6
                </div>
                <div class="all-package-subtitle">
                    Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 text-center all-package-container mb-5">
                <img src="{{ asset('assets/svg/icon PHP Hosting_CPanel.svg') }}" style="width: 60px;" />
                <div class="all-package-title mt-3">
                    Panel Hosting cPanel
                </div>
                <div class="all-package-subtitle">
                    Kelola website dengan panel canggih yang familiar di hati Anda.
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 text-center all-package-container mb-5">
                <img src="{{ asset('assets/svg/icon PHP Hosting_garansi uptime.svg') }}" style="width: 60px;" />
                <div class="all-package-title mt-3">
                    Garansi Uptime 99.9%
                </div>
                <div class="all-package-subtitle">
                    Data center yang mendukung kelangsungan website Anda 24/7.
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 text-center all-package-container mb-5">
                <img src="{{ asset('assets/svg/icon PHP Hosting_InnoDB.svg') }}" style="width: 60px;" />
                <div class="all-package-title mt-3">
                    Database InnoDB Unlimited
                </div>
                <div class="all-package-subtitle">
                    Jumlah dan ukuran database yang tumbuh sesuaai kebutuhan Anda.
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 text-center all-package-container mb-5">
                <img src="{{ asset('assets/svg/icon PHP Hosting_My SQL remote.svg') }}" style="width: 60px;" />
                <div class="all-package-title mt-3">
                    Wilcard Remote MySQL
                </div>
                <div class="all-package-subtitle">
                    Mendukung s/d 25 max_user_connections dan 100 max_connections.
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div style="width: 90px; background-color: whitesmoke; height: 5px;"></div>
    </div>
    <div class="container">
        <div class="subtitle1 text-center mt-5 f-light">
            Mendukung Penuh Framework Laravel
        </div>
        <div class="row mt-4">
            <div class="col-12 col-md-6 mb-4">
                <div class="caption1 f-light">
                    Tak perlu menggunakan dedicated server ataupun VPS yang mahal.
                    Layanan PHP Hosting murah kami mendukung penuh framework favorit Anda
                </div>
                <div class="mt-3">
                    <ul class="check2">
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Install Laravel <strong>1 Klik</strong> dengan Softaculous Installer.
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Mendukung ektensi <strong>PHP MCrypt, phar, mbstring, json, </strong> dan <strong>fileinfo.</strong>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Tersedia <strong>Composer</strong> dan <strong>SSH</strong> untuk menginstall package pilihan Anda.
                        </li>
                    </ul>
                </div>
                <div class="note1 mt-4">
                    Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis
                </div>
                <div class="mt-4">
                    <a href="#" class="m-btn">
                        Pilih Hosting Anda
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/svg/illustration banner support laravel hosting.svg') }}" style="width: 100%" />
            </div>
        </div>
    </div>
    <hr style="background-color: rgba(0,0,0,.3); margin: 0;"/>
    <div class="container">
        <div class="subtitle1 text-center mt-5 f-light">
            Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.
        </div>
        <div class="mt-5 row modules">
            <div class="col-6 col-md-3">
                <div>IcePHP</div>
                <div>apc</div>
                <div>apcu</div>
                <div>apm</div>
                <div>ares</div>
                <div>bcmath</div>
                <div>bcompiler</div>
                <div>big_int</div>
                <div>bitset</div>
                <div>bloomy</div>
                <div>bz2_filter</div>
                <div>clamav</div>
                <div>coin_acceptor</div>
                <div>crack</div>
                <div>dba</div>
            </div>
            <div class="col-6 col-md-3">
                <div>http</div>
                <div>huffman</div>
                <div>idn</div>
                <div>igbinary</div>
                <div>imagick</div>
                <div>imap</div>
                <div>included</div>
                <div>inotify</div>
                <div>interbase</div>
                <div>intl</div>
                <div>ioncube_loader</div>
                <div>ioncube_loader_4</div>
                <div>jsmin</div>
                <div>json</div>
                <div>ldap</div>
            </div>
            <div class="col-6 col-md-3">
                <div>nd_pdo_mysql</div>
                <div>oauth</div>
                <div>oci8</div>
                <div>odbc</div>
                <div>opcache</div>
                <div>pdf</div>
                <div>pdo</div>
                <div>pdo_dblib</div>
                <div>pdo_firebird</div>
                <div>pdo_mysql</div>
                <div>pdo_odbc</div>
                <div>pdo_pgsql</div>
                <div>pdo_sqlite</div>
                <div>pgsql</div>
                <div>phalcon</div>
            </div>
            <div class="col-6 col-md-3">
                <div>stats</div>
                <div>stem</div>
                <div>stomp</div>
                <div>suhosin</div>
                <div>sybase_cf</div>
                <div>sysvmsg</div>
                <div>sysvsem</div>
                <div>sysvshm</div>
                <div>tidy</div>
                <div>timezonedb</div>
                <div>trader</div>
                <div>translit</div>
                <div>uploadprogress</div>
                <div>uri_template</div>
                <div>uuid</div>
            </div>
        </div>
        <div class="mt-5 text-center mb-5">
            <a href="#" class="m-btn2">
                Selengkapnya
            </a>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <div class="subtitle1 f-light">
                    Linux Hosting yang stabil dengan Teknologi LVE
                </div>
                <div class="caption2 mt-3 f-light">
                    SuperMicro <strong>Intel Xeon 24-Cores</strong> sever dengan RAM <strong>128 GB</strong> dan
                    teknologi <strong>LVE CloudLinux</strong> untuk stabilitas server Anda. Dilengkapi dengan
                    <strong>SSD</strong> untuk kecepatan <strong>MySQL</strong> dan caching, Apache load balancer
                    berbasis LiteSpeed Technologies, <strong>CageFS</strong> security, <strong>Raid-10</strong>
                    protection dan auto backup untuk keamanan website PHP Anda.
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/images/Image support.png') }}" style="width: 100%" />
            </div>
        </div>
    </div>
    <div class="share-container">
        <div class="container d-flex justify-content-between py-3">
            <div>Bagikan jika Anda menyukai halaman ini.</div>
            <div class="d-flex gap-3">
                <div>
                    <i class="fa fa-facebook-square" style="color: #4267B2;"></i>
                    <span style="border: 1px solid gray; color: gray; font-size: 14px;" class="px-2 py-1">80K</span>
                </div>
                <div>
                    <i class="fa fa-twitter-square" style="color: #1DA1F2;"></i>
                    <span style="border: 1px solid gray; color: gray; font-size: 14px;" class="px-2 py-1">80K</span>
                </div>
                <div>
                    <i class="fa fa-google-plus-square" style="color: #FF0000;"></i>
                    <span style="border: 1px solid gray; color: gray; font-size: 14px;" class="px-2 py-1">80K</span>
                </div>
            </div>
        </div>
    </div>
    <div class="help-container">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <div class="help-title">
                Perlu <strong>BANTUAN?</strong> Hubungi Kami : <strong>0274-5305505</strong>
            </div>
            <div class="d-none d-lg-block" style="width: 1px; height: 50px; background-color: rgba(255, 255, 255, .2)"></div>
            <div class="mt-4 mt-lg-0">
                <a href="#" class="m-btn3">
                    <i class="fa fa-comments" style="margin-right: 5px;"></i>
                    Live Chat
                </a>
            </div>
        </div>
    </div>
@endsection
