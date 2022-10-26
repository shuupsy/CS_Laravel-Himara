@extends('layouts.index')

@section('content')
    <!-- ========== PRELOADER ========== -->
    {{-- Pour ne pas afficher le pre-loader si pagination --}}
    @if (!request()->fullUrlIs('http://127.0.0.1:8000/?page=*'))
        @include('partial.preloader')
    @endif

    <div class="slider">
        <!-- ========== REVOLUTION SLIDER ========== -->
        @include('partial.home.home-sliders')
        <!-- ========== BOOKING FORM ========== -->
        @include('partial.home.home-booking')
    </div>

    <!-- ========== ABOUT ========== -->
    @include('partial.home.home-about')

    <!-- ========== ROOMS ========== -->
    @if ($count_rooms != 0)
        @include('partial.home.home-rooms')
    @endif

    <!-- ========== SERVICES ========== -->
    @if ($count_services != 0)
        @include('partial.home.home-services')
    @endif

    <!-- ========== GALLERY ========== -->
    @if ($count_photos != 0)
        @include('partial.home.home-gallery')
    @endif

    <!-- ========== TESTIMONIALS ========== -->
    @if ($count_reviews != 0)
        @include('partial.home.home-reviews')
    @endif

    <!-- ========== RESTAURANT ========== -->
    @if ($count_dish != 0)
        @include('partial.home.home-restaurant')
    @endif

    <!-- ========== NEWS ==========-->
    @if ($count_articles != 0)
        @include('partial.home.home-news')
    @endif

    <!-- ========== VIDEO ========== -->
    @if ($count_ad != 0)
        @include('partial.home.home-ads')
    @endif

    <!-- ========== CONTACT V2 ========== -->
    @include('partial.home.home-contact')
@endsection
