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
                                    <a href="https://maps.app.goo.gl/64CseewtdcTpAZEY7">
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
                                    <a href="{{ route('destinasi.index') }}">
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
                                    <a href="{{ route('umkm.index') }}">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="single-services text-center mb-30">
                                                    <div class="services-ion">
                                                        <center>
                                                            <img src="{{ asset('pages/assets/img/icon/shop.png') }}"
                                                                style="
                                                                        width: 50%;
                                                                    "
                                                                alt="" />
                                                        </center>
                                                    </div>
                                                    <div class="services-cap">
                                                        <h5>UMKM</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <a href="{{ route('berita.index') }}">
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
                    @foreach ($news as $item)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <a href="{{ route('pages.news.show', $item) }}">
                                <div class="single-place mb-30">
                                    <div class="place-img">
                                        <img class="card-img rounded-0" src="{{ url('storage/' . $item->image) }}">
                                    </div>
                                    <div class="place-cap">
                                        <div class="place-cap-top">
                                            <h3>
                                                <a href="#">{{ $item->title }}
                                                </a>
                                            </h3>
                                            <p class="dolor">
                                                <span>{!! Str::limit($item->article, 100) !!}
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
                                                <li>
                                                    <i class="fas fa-comment"></i>{{ $item->comments_count }} Komentar
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
                    @endforeach
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
                    @foreach ($destinations as $item)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <a href="{{ route('pages.destination.show', $item) }}">
                                <div class="single-place mb-30">
                                    <div class="place-img">
                                        <img class="card-img rounded-0" src="{{ url('storage/' . $item->image) }}">
                                    </div>
                                    <div class="place-cap">
                                        <div class="place-cap-top">
                                            <!-- <span
                                                                                                                                                                                                                                                                    ><i class="fas fa-star"></i
                                                                                                                                                                                                                                                                    ><span>8.0 Superb</span>
                                                                                                                                                                                                                                                                </span> -->
                                            <h3>
                                                <a
                                                    href="{{ route('pages.destination.show', $item) }}">{{ $item->title }}</a>
                                            </h3>
                                            <p class="dolor">
                                                <span>{!! Str::limit($item->article, 100) !!}</span>
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

                                                <li>
                                                    <i class="fas fa-comment"></i>{{ $item->destination_comments_count }}
                                                    Komentar
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
                    @endforeach
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
