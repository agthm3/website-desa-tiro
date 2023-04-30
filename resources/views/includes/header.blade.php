    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header">
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="logo">
                                        <a href="{{ route('home') }}"><img
                                                src="{{ asset('pages/assets/img/logo/logo-navbar-01.png') }}"
                                                alt="" style="width: 40vh" /></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-9 col-lg-10 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li>
                                                <a href="{{ route('home') }}">Home</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('profil.index') }}">Layanan Desa</a>
                                                <ul class="submenu">

                                                    <li>
                                                        <a href="{{ route('profil.index') }}">Profil Desa</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('pemerintah.index') }}">Pemerintah
                                                            Desa</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('maintenance.index') }}">Persuratan</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('maintenance.index') }}">Pengaduan</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('berita.index') }}">Berita</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('pengumuman.index') }}">Pengumuman</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('destinasi.index') }}">Destinasi Wisata</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('kontak.index') }}">Kontak Kami</a>
                                            </li>


                                            @auth
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">

                                                        {{ Auth::user()->name }}

                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <form method="post" action="{{ route('logout') }}">@csrf
                                                            <button class="form-control" type="submit">Logout</button>
                                                        </form>

                                                    </div>
                                                </li>
                                            @endauth
                                            @if (!Auth::check())
                                                <li>
                                                    <a href="{{ route('login') }}"><strong>Login/Register</strong></a>
                                                </li>
                                            @endif



                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
