<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Website Bonto Tiro</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.webmanifest" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('pages/assets/img/logo.ico') }}" />

    @include('includes.resources.css')
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('pages/assets/img/logo/logo.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    @include('includes.header')

    @yield('content')
    @include('includes.footer')

    <!-- JS here -->

    @include('includes.resources.js')
</body>

</html>
