<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- ========== SEO ========== -->
    <title>Hotel {{ $hotel -> name }} - Hotel HTML Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="images/favicon-apple.png" />
    <link rel="icon" href="images/favicon.png">
    <!-- ========== STYLESHEETS ========== -->
    @include('partial.stylesheet-links')
    <!-- ========== ICON FONTS ========== -->
    <link href="/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="/fonts/flaticon.css" rel="stylesheet">
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700"
        rel="stylesheet">
</head>

<body>
    <!-- ========== MOBILE MENU ========== -->
    <nav id="mobile-menu"></nav>

    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
        <!-- ========== TOP MENU ========== -->
        @include('partial.topbar')

        <!-- ========== HEADER ========== -->
        @include('partial.header')

        <!-- ========== PAGE TITLE ========== -->
        @if (!request()->routeIs('home'))
            @include('partial.pagetitle')
        @endif

        <!-- ========== MAIN ========== -->
        @yield('content')

        <!-- ========== FOOTER ========== -->
        @include('partial.footer')
    </div>


    <!-- ========== BACK TO TOP ========== -->
    @include('partial.backtotop')

    <!-- ========== JAVASCRIPT ========== -->
    @include('partial.script-js')
</body>

</html>
