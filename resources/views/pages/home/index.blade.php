@extends('layouts.app')

@section('content')
    <main>
        <!-- slider Area Start-->
        <div class="slider-area">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider hero-overly slider-height d-flex align-items-center"
                    data-background="{{ asset('pages/assets/img/hero/heromain.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <center>
                                <div class="col-xl-9 col-lg-9 col-md-9">
                                    <div class="hero__caption">
                                        <h1>
                                            Selamat Datang di Website
                                            Bonto Tiro !
                                        </h1>
                                    </div>
                                </div>
                            </center>
                        </div>
                        <!-- Search Box -->
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <a href="">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="single-services text-center mb-30">
                                                    <div class="services-ion">
                                                        <center>
                                                            <img src="{{ asset('pages/assets/img/icon/map.png') }}"
                                                                style="
                                                                        width: 50%;
                                                                    "
                                                                alt="" />
                                                        </center>
                                                    </div>
                                                    <div class="services-cap">
                                                        <h5>Peta Desa</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <a href="">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="single-services text-center mb-30">
                                                    <div class="services-ion">
                                                        <center>
                                                            <img src="{{ asset('pages/assets/img/icon/baggage.png') }}"
                                                                style="
                                                                        width: 50%;
                                                                    "
                                                                alt="" />
                                                        </center>
                                                    </div>
                                                    <div class="services-cap">
                                                        <h5>
                                                            Destinasi Wisata
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <a href="">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="single-services text-center mb-30">
                                                    <div class="services-ion">
                                                        <center>
                                                            <img src="{{ asset('pages/assets/img/icon/speaker.png') }}"
                                                                style="
                                                                        width: 50%;
                                                                    "
                                                                alt="" />
                                                        </center>
                                                    </div>
                                                    <div class="services-cap">
                                                        <h5>Pengaduan</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <a href="">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="single-services text-center mb-30">
                                                    <div class="services-ion">
                                                        <center>
                                                            <img src="{{ asset('pages/assets/img/icon/newspaper.png') }}"
                                                                style="
                                                                        width: 50%;
                                                                    "
                                                                alt="" />
                                                        </center>
                                                    </div>
                                                    <div class="services-cap">
                                                        <h5>Berita Terbaru</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Blog Area Start -->
        <div class="favourite-place place-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Informasi terbaru tentang Bonto Tiro</span>
                            <h2>Berita Desa</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="">
                            <div class="single-place mb-30">
                                <div class="place-img">
                                    <img src="{{ asset('pages/assets/img/service/services1.jpg') }}" alt="" />
                                </div>
                                <div class="place-cap">
                                    <div class="place-cap-top">
                                        <!-- <span
                                                    ><i class="fas fa-star"></i
                                                    ><span>8.0 Superb</span>
                                                </span> -->
                                        <h3>
                                            <a href="#">Peletakan batu pertama
                                                untuk masjid SDN 32
                                                Bulukumba
                                            </a>
                                        </h3>
                                        <p class="dolor">
                                            <span>Camat yang sekaligus
                                                didampingi oleh bapak
                                                Sulaiman S.Pd melakukan
                                                peletakan batu pertama
                                            </span>
                                        </p>
                                        <a href="">
                                            <p class="dolor">
                                                Baca Selengkapnya...
                                            </p>
                                        </a>
                                    </div>
                                    <div class="place-cap-bottom">
                                        <ul>
                                            <!-- <li>
                                                        <i class="far fa-clock"></i
                                                        >3 Days
                                                    </li> -->
                                            <li>
                                                <i class="fas fa-comment"></i>10 Komentar
                                            </li>
                                            <li>
                                                <i class="fas fa-user"></i>Admin
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="">
                            <div class="single-place mb-30">
                                <div class="place-img">
                                    <img src="{{ asset('pages/assets/img/service/services1.jpg') }}" alt="" />
                                </div>
                                <div class="place-cap">
                                    <div class="place-cap-top">
                                        <!-- <span
                                                    ><i class="fas fa-star"></i
                                                    ><span>8.0 Superb</span>
                                                </span> -->
                                        <h3>
                                            <a href="#">Peletakan batu pertama
                                                untuk masjid SDN 32
                                                Bulukumba
                                            </a>
                                        </h3>
                                        <p class="dolor">
                                            <span>Camat yang sekaligus
                                                didampingi oleh bapak
                                                Sulaiman S.Pd melakukan
                                                peletakan batu pertama
                                            </span>
                                        </p>
                                        <a href="">
                                            <p class="dolor">
                                                Baca Selengkapnya...
                                            </p>
                                        </a>
                                    </div>
                                    <div class="place-cap-bottom">
                                        <ul>
                                            <!-- <li>
                                                        <i class="far fa-clock"></i
                                                        >3 Days
                                                    </li> -->
                                            <li>
                                                <i class="fas fa-comment"></i>10 Komentar
                                            </li>
                                            <li>
                                                <i class="fas fa-user"></i>Admin
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="">
                            <div class="single-place mb-30">
                                <div class="place-img">
                                    <img src="{{ asset('pages/assets/img/service/services1.jpg') }}" alt="" />
                                </div>
                                <div class="place-cap">
                                    <div class="place-cap-top">
                                        <!-- <span
                                                    ><i class="fas fa-star"></i
                                                    ><span>8.0 Superb</span>
                                                </span> -->
                                        <h3>
                                            <a href="#">Peletakan batu pertama
                                                untuk masjid SDN 32
                                                Bulukumba
                                            </a>
                                        </h3>
                                        <p class="dolor">
                                            <span>Camat yang sekaligus
                                                didampingi oleh bapak
                                                Sulaiman S.Pd melakukan
                                                peletakan batu pertama
                                            </span>
                                        </p>
                                        <a href="">
                                            <p class="dolor">
                                                Baca Selengkapnya...
                                            </p>
                                        </a>
                                    </div>
                                    <div class="place-cap-bottom">
                                        <ul>
                                            <!-- <li>
                                                        <i class="far fa-clock"></i
                                                        >3 Days
                                                    </li> -->
                                            <li>
                                                <i class="fas fa-comment"></i>10 Komentar
                                            </li>
                                            <li>
                                                <i class="fas fa-user"></i>Admin
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
        <!-- Favourite Places Start -->
        <div class="favourite-place place-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Kunjungi Destinasi Wisata</span>
                            <h2>Potensi Bonto Tiro</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="">
                            <div class="single-place mb-30">
                                <div class="place-img">
                                    <img src="{{ asset('pages/assets/img/service/services1.jpg') }}" alt="" />
                                </div>
                                <div class="place-cap">
                                    <div class="place-cap-top">
                                        <!-- <span
                                                    ><i class="fas fa-star"></i
                                                    ><span>8.0 Superb</span>
                                                </span> -->
                                        <h3>
                                            <a href="#">The Dark Forest
                                                Adventure</a>
                                        </h3>
                                        <p class="dolor">
                                            <span>Tempat yang cocok untuk
                                                camping dan buat api
                                                unggun</span>
                                        </p>
                                        <hr />
                                        <div class="row">
                                            <p class="text-info ml-1" style="font-weight: bolder">
                                                #Pantai
                                            </p>
                                            <p class="text-info ml-1" style="font-weight: bolder">
                                                #CagarBudaya
                                            </p>
                                        </div>
                                    </div>

                                    <div class="place-cap-bottom">
                                        <ul>
                                            <!-- <li>
                                                        <i class="far fa-clock"></i
                                                        >3 Days
                                                    </li> -->
                                            <li>
                                                <i class="fas fa-comment"></i>10 Komentar
                                            </li>
                                            <li>
                                                <i class="fas fa-user"></i>Admin
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="">
                            <div class="single-place mb-30">
                                <div class="place-img">
                                    <img src="{{ asset('pages/assets/img/service/services1.jpg') }}" alt="" />
                                </div>
                                <div class="place-cap">
                                    <div class="place-cap-top">
                                        <!-- <span
                                                    ><i class="fas fa-star"></i
                                                    ><span>8.0 Superb</span>
                                                </span> -->
                                        <h3>
                                            <a href="#">The Dark Forest
                                                Adventure</a>
                                        </h3>
                                        <p class="dolor">
                                            <span>Tempat yang cocok untuk
                                                camping dan buat api
                                                unggun</span>
                                        </p>
                                        <hr />
                                        <div class="row">
                                            <p class="text-info ml-1" style="font-weight: bolder">
                                                #Pantai
                                            </p>
                                            <p class="text-info ml-1" style="font-weight: bolder">
                                                #CagarBudaya
                                            </p>
                                        </div>
                                    </div>

                                    <div class="place-cap-bottom">
                                        <ul>
                                            <!-- <li>
                                                        <i class="far fa-clock"></i
                                                        >3 Days
                                                    </li> -->
                                            <li>
                                                <i class="fas fa-comment"></i>10 Komentar
                                            </li>
                                            <li>
                                                <i class="fas fa-user"></i>Admin
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="">
                            <div class="single-place mb-30">
                                <div class="place-img">
                                    <img src="{{ asset('pages/assets/img/service/services1.jpg') }}" alt="" />
                                </div>
                                <div class="place-cap">
                                    <div class="place-cap-top">
                                        <!-- <span
                                                    ><i class="fas fa-star"></i
                                                    ><span>8.0 Superb</span>
                                                </span> -->
                                        <h3>
                                            <a href="#">The Dark Forest
                                                Adventure</a>
                                        </h3>
                                        <p class="dolor">
                                            <span>Tempat yang cocok untuk
                                                camping dan buat api
                                                unggun</span>
                                        </p>
                                        <hr />
                                        <div class="row">
                                            <p class="text-info ml-1" style="font-weight: bolder">
                                                #Pantai
                                            </p>
                                            <p class="text-info ml-1" style="font-weight: bolder">
                                                #CagarBudaya
                                            </p>
                                        </div>
                                    </div>

                                    <div class="place-cap-bottom">
                                        <ul>
                                            <!-- <li>
                                                        <i class="far fa-clock"></i
                                                        >3 Days
                                                    </li> -->
                                            <li>
                                                <i class="fas fa-comment"></i>10 Komentar
                                            </li>
                                            <li>
                                                <i class="fas fa-user"></i>Admin
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Favourite Places End -->
        <!-- Video Start Arera -->
        <!-- <div
                    class="video-area video-bg pt-200 pb-200"
                    data-background="assets/img/service/video-bg.jpg"
                >
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="video-caption text-center">
                                    <div class="video-icon">
                                        <a
                                            class="popup-video"
                                            href="https://www.youtube.com/watch?v=1aP-TXUpNoU"
                                            tabindex="0"
                                            ><i class="fas fa-play"></i
                                        ></a>
                                    </div>
                                    <p class="pera1">
                                        Love where you're going in the perfect time
                                    </p>
                                    <p class="pera2">
                                        Tripo is a World Leading Online
                                    </p>
                                    <p class="pera3">Tour Booking Platform</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- Video Start End -->
        <!-- Support Company Start-->
        <div class="support-company-area support-padding fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img mb-50">
                            <img src="{{ asset('pages/assets/img/service/kepala-desa.jpg') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2">
                                <span>Sambutan Kepala Camat Bonto Tiro</span>
                                <h2>Ahmad Sulaiman S.Pd</h2>
                            </div>
                            <div class="support-caption">
                                <p>
                                    Saya berharap desa ini bisa meningkat
                                    dan stabil
                                </p>

                                <a href="#" class="btn border-btn">Tentang Desa Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Company End-->
        <!-- Testimonial Start -->
    </main>
@endsection
