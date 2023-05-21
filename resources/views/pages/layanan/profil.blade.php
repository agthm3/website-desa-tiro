@extends('layouts.app')

@section('content')
    <!-- slider Area Start-->
    <div class="slider-area">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center"
            data-background="{{ asset('pages/assets/img/hero/contact_hero.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2 class="text-dark">Profil Desa</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="card-img rounded-0" src="{{ url('storage/' . $profil->image) }}">
                        </div>
                        <div class="blog_details">
                            <h2>
                                {{ $profil->title }}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li>
                                    <a href="#"><i class="fa fa-user"></i> Travel,
                                        Lifestyle</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-comments"></i> 03
                                        Comments</a>
                                </li>
                            </ul>
                            <p class="excert">
                                {!! Str::limit($profil->article, 100) !!}
                            </p>
                            <div class="quote-wrapper">
                                <div class="quotes">
                                    MCSE boot camps have its supporters and
                                    its detractors. Some people do not
                                    understand why you should have to spend
                                    money on boot camp when you can get the
                                    MCSE study materials yourself at a
                                    fraction of the camp price. However, who
                                    has the willpower to actually sit
                                    through a self-imposed MCSE training.
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <p class="like-info">
                                <span class="align-middle"><i class="fa fa-heart"></i></span>
                                Lily and 4 people like this
                            </p>
                            <div class="col-sm-4 text-center my-2 my-sm-0">
                                <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                            </div>
                            <ul class="social-icons">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h4>{{ $commentCount }} Komentar</h4>
                        @foreach ($comments as $item)
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="assets/img/comment/comment_1.png" alt="" />
                                        </div>
                                        <div class="desc">
                                            <p class="comment">
                                                {{ $item->comment }}
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        {{ $item->user->name }}
                                                    </h5>
                                                    <p class="date">
                                                        {{ $item->created_at->format('d M Y') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="comment-form">
                        <h4>Tulis Komentar</h4>
                        <form class="form-contact comment_form" action="{{ route('komentar.profil.store') }}" method="POST"
                            id="commentForm">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                            placeholder="Tulis Komentar"></textarea>
                                    </div>
                                </div>

                            </div>
                            <p>
                                <input type="hidden" value="{{ $profil->id }}" name="profil_id">
                            </p>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">
                                    Kirim
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search Keyword"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'" />
                                        <div class="input-group-append">
                                            <button class="btns" type="button">
                                                <i class="ti-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">
                                    Search
                                </button>
                            </form>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Resaurant food</p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Travel news</p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Modern technology</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Product</p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Inspiration</p>
                                        <p>(21)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Health Care</p>
                                        <p>(21)</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Pengumuman Terbaru</h3>
                            @foreach ($announcements as $item)
                                <div class="media post_item">
                                    <img class="card-img rounded-0" src="{{ url('storage/' . $item->image) }}">
                                    <div class="media-body">
                                        <a href="single-blog.html">
                                            <h3>{{ $item->titel }}</h3>
                                        </a>
                                        <p>{{ $item->created_at->format('d M Y') }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->
@endsection
