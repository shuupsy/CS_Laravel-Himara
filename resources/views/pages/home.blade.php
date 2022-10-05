@extends('layouts.index')

@section('content')
    <!-- ========== PRELOADER ========== -->
    @include('partial.preloader')

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
    @include('partial.home.home-ads')

    <!-- ========== CONTACT V2 ========== -->
    @include('partial.home.home-contact')
@endsection
