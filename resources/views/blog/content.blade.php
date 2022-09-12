<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!-- molla/index-17.html  22 Nov 2019 10:00:25 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ setting('site.title') }} - {{ setting('site.description') }}</title>

    <meta name="keywords" content="{{ setting('site.title') }}">
    <meta name="description" content="{{ setting('site.title') }} - {{ setting('site.description') }}">
    <meta name="author" content="{{ setting('site.title') }}">

    @foreach ($data as $meta)
        <!-- META UNTUK FACEBOOK -->
        <meta property="og:title" content="{{ $meta->title }}">
        <meta property="og:description" content="{{ $meta->body }}">
        <meta property="og:image" content="{{ Voyager::image($meta->image) }}">
        <meta property="og:url" content="https://antukna.com/">
        {{-- <meta content='https://www.facebook.com/106660612706164' property='article:author'/>
<meta content='https://www.facebook.com/106660612706164' property='article:publisher'/> --}}


        <!-- META UNTUK TWITTER -->
        <meta name="twitter:title" content="{{ $meta->title }}">
        <meta name="twitter:description" content="{{ $meta->body }}">
        <meta name="twitter:image" content="{{ Voyager::image($meta->image) }}">
        <meta name="twitter:card" content="summary_large_image">
    @endforeach

    {{-- <meta content='Indonesia' name='geo.placename' />
    <meta content='Kata Kunci1, Kata Kunci2, Kata Kunci3' name='news_keywords' /> --}}

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/icons/icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/icons/icon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/icons/icon.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/icons/site.html') }}">
    <link rel="mask-icon" href="{{ asset('assets/images/icons/safari-pinned-tab.svg') }}" color="#666666">
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/icon.png') }}">
    <meta name="apple-mobile-web-app-title" content="Berita">
    <meta name="application-name" content="Berita">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{ asset('assets/images/icons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css') }}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup/magnific-popup.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skins/skin-demo-17.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demos/demo-17.css') }}">
</head>

<body>
    @include('blog.head')

    @yield('content')

    @include('blog.footer')


    <!-- Plugins JS File -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/superfish.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-input-spinner.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/demos/demo-17.js') }}"></script>
</body>


<!-- molla/index-17.html  22 Nov 2019 10:00:41 GMT -->

</html>
