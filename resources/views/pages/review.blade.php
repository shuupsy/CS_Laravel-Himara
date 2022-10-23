<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hotel {{ $hotel->name }} || Review</title>

    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="images/favicon-apple.png" />
    <link rel="icon" href="/images/favicon.png">

    <!-- ========== ICON FONTS ========== -->
    <link href="/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="/fonts/flaticon.css" rel="stylesheet">
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="min-h-screen bg-[#F5F3EF] flex justify-center items-center">
        <div class='w-7/12 mx-auto p-6 bg-white shadow-md flex flex-col gap-6'>
            <h1 class="text-xl">Qu'avez-vous pensé de votre expérience à notre Hotel {{ $hotel -> name }} ?</h1>
            <div class='flex gap-6'>
                <img src="/images/rooms/{{}}" alt="Photo Room">
                <div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
