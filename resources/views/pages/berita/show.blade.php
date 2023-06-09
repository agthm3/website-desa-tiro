@extends('layouts.app')

@section('content')
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img src="{{ url('storage/' . $news->image) }}" style="width: 100%" alt="post">
                        </div>
                        <div class="blog_details">
                            <h2>
                                {{ $news->title }}
                            </h2>
                            {{-- <ul class="blog-info-link mt-3 mb-4">
                                <li>
                                    <a href="#"><i class="fa fa-user"></i> Travel,
                                        Lifestyle</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-comments"></i> 03
                                        Comments</a>
                                </li>
                            </ul> --}}

                            {!! $news->article !!}


                        </div>
                    </div>
                    <div class="navigation-top">

                        <div class="navigation-area">
                            <div class="row">
                                <div
                                    class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/preview.png" alt="" />
                                        </a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#">
                                            <span class="lnr text-white ti-arrow-left"></span>
                                        </a>
                                    </div>
                                    <div class="detials">
                                        <p>Berita Sebelumnya</p>
                                        {{-- <a href="#">
                                            <h4>
                                                {{ $previousNews->title }}
                                            </h4>
                                        </a> --}}
                                        @if (!empty($previousNews))
                                            <a href="{{ route('pages.news.show', $previousNews->id) }}">
                                                <h4>{{ $previousNews->title }}</h4>
                                            </a>
                                        @else
                                            Belum ada Artikel selanjutnya
                                        @endif
                                    </div>
                                </div>
                                <div
                                    class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Berita Selanjutnya</p>
                                        {{-- <a href="#">
                                            <h4>{{ $nextNews->title }}</h4>
                                        </a> --}}
                                        @if (!empty($nextNews))
                                            <a href="{{ route('pages.news.show', $nextNews->id) }}">
                                                <h4> {{ $nextNews->title }}</h4>
                                            </a>
                                        @else
                                            Belum ada Artikel selanjutnya
                                        @endif

                                    </div>
                                    <div class="arrow">
                                        <a href="#">
                                            <span class="lnr text-white ti-arrow-right"></span>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/next.png" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h4>{{ $totalComment }} Komentar</h4>
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
                                                        {{ $item->created_at->format('d M Y ') }}
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
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h4>Leave a Reply</h4>
                        <form class="form-contact comment_form" action="{{ route('komentar.berita.store') }}"
                            id="commentForm" method="POST">
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
                                <input type="hidden" value="{{ $news->id }}" name="news_id">
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
                        {{-- <aside class="single_sidebar_widget post_category_widget">
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
                        </aside> --}}
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Pengumuman Terbaru</h3>
                            @foreach ($newsAll as $item)
                                <div class="media post_item">
                                    <img src="{{ url('storage/' . $item->image) }}" style="width: 30%" alt="post">
                                    <div class="media-body">
                                        <a href="{{ route('pages.news.show', $item) }}">
                                            <h3>{{ $item->title }}</h3>
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
