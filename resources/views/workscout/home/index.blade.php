@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <div class="col-md-12">
        <div class="sixteen columns">
            <div class="title-page">
                <h3 class="margin-bottom-25">Kategori Pekerja</h3>
                <center><div class="kategoribox"></div></center>
            </div>

            <ul id="popular-categories">
                <li><a href="#"><i class="ln  ln-icon-Bar-Chart"></i> Asisten Rumah Tangga</a></li>
                <li><a href="#"><i class="ln ln-icon-Car"></i> Baby Sitter</a></li>
                <li><a href="#"><i class="ln ln-icon-Worker"></i> Sopir</a></li>
                <li><a href="#"><i class="ln ln-icon-Student-Female"></i>Pelayan</a></li>
                <li><a href="#"><i class="ln  ln-icon-Medical-Sign"></i> Penjaga Toko</a></li>
                <li><a href="#"><i class="ln  ln-icon-Plates"></i> Admin</a></li>
                <li><a href="#"><i class="ln  ln-icon-Globe"></i> Buruh Pabrik</a></li>
                <li><a href="#"><i class="ln  ln-icon-Laptop-3"></i>Satpam</a></li>
                <li><a href="#"><i class="ln  ln-icon-Medical-Sign"></i>Montir</a></li>
                <li><a href="#"><i class="ln  ln-icon-Plates"></i>Kurir</a></li>
                <li><a href="#"><i class="ln  ln-icon-Globe"></i> Juru Masak</a></li>
                <li><a href="#"><i class="ln  ln-icon-Laptop-3"></i>Kuli Bangunan</a></li>
                <li><a href="#"><i class="ln  ln-icon-Medical-Sign"></i>Office Boy / Girl</a></li>
                <li><a href="#"><i class="ln  ln-icon-Plates"></i>Tukang Kayu</a></li>
                <li><a href="#"><i class="ln  ln-icon-Globe"></i>Penjahit</a></li>
                <li><a href="#"><i class="ln  ln-icon-Laptop-3"></i>Pemayet</a></li>
            </ul>

            <div class="clearfix"></div>
            <div class="margin-top-30"></div>

            <a href="browse-categories.html" class="button centered">Lihat Semua Kategori</a>
            <div class="margin-bottom-50"></div>
        </div>
    </div>

    <!-- Categories -->
    <div class="container">

        <div class="title-page">
            <h3 class="margin-bottom-25">Paket Topup</h3>
            <center><div class="kategoribox"></div></center>
        </div>

        <div class="plan color-1 four columns">
            <div class="plan-price">
                <h3>BASIC</h3>
                <span class="plan-currency">Rp </span>
                <span class="value">100,000</span>

            </div>
            <div class="plan-features">
                <ul>
                    <li>20 Kontak</li>
                    <li>Rp 5000 / kontak</li>
                </ul>
                <a class="button" href="#"><i class="fa fa-shopping-cart"></i> BELI SEKARANG</a>
            </div>
        </div>

        <!-- Plan #2 -->
        <div class="plan color-2 four columns">
            <div class="plan-price">
                <h3>BRONZE</h3>
                <span class="plan-currency">Rp </span>
                <span class="value">200,000</span>

            </div>
            <div class="plan-features">
                <ul>
                    <li>80 Kontak</li>
                    <li>Rp 2500 / kontak</li>
                </ul>
                <a class="button" href="#"><i class="fa fa-shopping-cart"></i> BELI SEKARANG</a>
            </div>
        </div>

        <!-- Plan #3 -->
        <div class="plan color-1 four columns">
            <div class="plan-price">
                <h3>SILVER</h3>
                <span class="plan-currency">Rp </span>
                <span class="value">500,000</span>

            </div>
            <div class="plan-features">
                <ul>
                    <li>250 Kontak</li>
                    <li>Rp 2000 / kontak</li>
                </ul>
                <a class="button" href="#"><i class="fa fa-shopping-cart"></i> BELI SEKARANG</a>
            </div>
        </div>

        <!-- Plan #4 -->
        <div class="plan color-1 four columns">
            <div class="plan-price">
                <h3>PLATINUM</h3>
                <span class="plan-currency">Rp </span>
                <span class="value">800,000</span>

            </div>
            <div class="plan-features">
                <ul>
                    <li>600 Kontak</li>
                    <li>Rp 1500 / kontak</li>
                </ul>
                <a class="button" href="#"><i class="fa fa-shopping-cart"></i> BELI SEKARANG</a>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div id="testimonials">
        <!-- Slider -->
        <div class="container">
            <div class="sixteen columns">
                <div class="testimonials-slider">
                    <ul class="slides">
                        <li>
                            <p>Mencari staff untuk bekerja di usaha menengah tidak pernah semudah ini.
                                <span>James Wahab, Pemilik Ayo Futsal</span></p>
                        </li>

                        <li>
                            <p>Saya selama ini kesulitan mencari penjahit yg cocok dan berkualitas. CariPekerja memudahkan saya dalam mencari penjahit yg sesuai dengan keinginan saya.
                                <span>Venezia, Pemilik Kurawa Batik</span></p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Infobox -->
    <div class="infobox">
        <div class="container">
            <div class="sixteen columns">Dapatkan Pekerja Untuk Usaha Anda Segera <a href="{{route('register')}}">Daftar</a></div>
        </div>
    </div>

@endsection