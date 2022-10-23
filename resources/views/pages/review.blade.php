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
        <div class='w-7/12 mx-auto p-6 bg-white rounded-lg shadow-md flex flex-col gap-10'>
            <h1 class="text-xl">Qu'avez-vous pensé de votre expérience à notre Hotel {{ $hotel->name }} ?</h1>
            <div class='flex justify-evenly gap-6'>
                <img src="/images/logos/{{ $hotel->big_logo }}" alt="Logos Hotel">
                <form action="/review" method='post' class='flex flex-col gap-6'>
                    @csrf

                    {{-- Choix du séjour --}}
                    <div class='flex items-center gap-3'>
                        <label for="booking">Séjour concerné :</label>
                        <select name="booking">
                            @foreach ($bookings as $booking)
                                <option value="{{ $booking->id }}">
                                    {{ $booking->room->name }} - {{ $booking->created_at->format('F d, Y') }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Note --}}
                    <div class='flex gap-3 items-center'>
                        <x-input-label class='text-base' for="rating" :value="__('Note :')" />
                        <p class='text-sm text-slate-600'>Pas bien</p>
                        @for ($i=1; $i<6; $i++)
                            <label class='flex flex-col text-center'>
                                <span>{{ $i }}</span>
                                <input type="radio" name='rating' value="{{ $i }}">
                            </label>
                        @endfor
                        <p class='text-sm text-slate-600'>Très bien</p>
                    </div>

                    <!-- Commentaire -->
                    <div>
                        <x-input-label class='text-base' for="review" :value="__('Votre commentaire')" />

                        <textarea id="review"
                            class="block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="review" value="{{ old('review') }}" required autofocus></textarea>
                    </div>

                    <button
                        class='bg-[#444444] p-2 my-2 text-white rounded-sm hover:bg-[#222222] uppercase'>Send</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
