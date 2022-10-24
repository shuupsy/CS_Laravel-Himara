<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hotel {{ $hotel->name }} || backoffice</title>

    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="images/favicon-apple.png" />
    <link rel="icon" href="/images/favicon.png">
    <!-- ========== STYLESHEETS ========== -->
    @include('partial.stylesheet-links')
    <!-- ========== ICON FONTS ========== -->
    <link href="/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="/fonts/flaticon.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="min-h-screen bg-[#F5F3EF] flex">
        {{-- Header --}}
        <div class='flex-none w-1/6 mx-auto'>
            @include('partial.backoffice.b-nav')
        </div>

        <main class='flex-auto'>

            @include('partial.backoffice.validation')

            @hasSection('preview')
                <div class="my-6 sm:px-6 lg:px-8">
                    <h1 class="text-[#D7D8D9] text-6xl font-bold uppercase leading-tight">Preview</h1>
                    @yield('preview')
                </div>
                <hr>
            @endif


            @hasSection('new')
                <div class="my-6 sm:px-6 lg:px-8">
                    <h1 class="text-[#D7D8D9] text-6xl font-bold uppercase leading-tight">Add</h1>
                    @yield('new')
                </div>
            @endif


            @hasSection('update')
                <hr>
                <div class="my-6 sm:px-6 lg:px-8">
                    <h1 class="text-[#D7D8D9] text-6xl font-bold uppercase leading-tight">Update</h1>
                    @yield('update')
                </div>
            @endif

            @hasSection('content')
                @yield('content')
            @endif

        </main>
    </div>

</body>

</html>
