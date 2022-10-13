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
    @include('partial.home.home-rooms')

    <!-- ========== SERVICES ========== -->
    @include('partial.home.home-services')

    <!-- ========== GALLERY ========== -->
    @include('partial.home.home-gallery')

    <!-- ========== TESTIMONIALS ========== -->
    @include('partial.home.home-reviews')

    <!-- ========== RESTAURANT ========== -->
    @include('partial.home.home-restaurant')

    <!-- ========== NEWS ==========-->
    @include('partial.home.home-news')

    <!-- ========== VIDEO ========== -->
    @if ($count_ad != 0)
        @include('partial.home.home-ads')
    @endif

    <!-- ========== CONTACT V2 ========== -->
    @include('partial.home.home-contact')
@endsection
