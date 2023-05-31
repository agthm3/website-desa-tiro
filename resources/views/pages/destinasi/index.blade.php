@extends('layouts.app')

@section('content')
    <main>
        <!-- slider Area Start-->
        <div class="slider-area">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center"
                data-background="{{ asset('pages/assets/img/hero/contact_hero.png') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2 class="text-dark">Potensi Eka Tiro</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Favourite Places Start -->
        <div class="favourite-place place-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Kunjungi wisata religi, alam dan Budaya di
                                Bonto Tiro
                            </span>
                            <h2>Potensi Desa</h2>
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
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Favourite Places End -->

        <!-- Pagination-area Start -->
        <div class="pagination-area pb-100 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span
                                                class="flaticon-arrow roted left-arrow"></span></a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">01</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">02</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">03</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span
                                                class="flaticon-arrow right-arrow"></span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination-area End -->
    </main>
@endsection
