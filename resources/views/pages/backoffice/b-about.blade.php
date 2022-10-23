@extends('layouts.app')

@section('preview')
    <div class="bg-white py-12 px-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h4 class="text-uppercase mb-2">Hotel {{ $hotel->name }}. <span class="text-himara"> since
                                1992</span></h4>
                        <p class="section-subtitle pb-4">{{ $about->subheading }}</p>
                    </div>
                    <div class="info-branding">
                        <p>{{ $about->big_description }}</p>
                        <div class="providers flex items-center gap-2">
                            <span>Recommended on:</span>
                            <!-- ITEM -->
                            <div class="item">
                                <a href="#">
                                    <img src="/images/providers/provider-1.png" alt="Image">
                                </a>
                            </div>
                            <!-- ITEM -->
                            <div class="item">
                                <a href="#">
                                    <img src="/images/providers/provider-2.png" alt="Image">
                                </a>
                            </div>
                            <!-- ITEM -->
                            <div class="item">
                                <a href="#">
                                    <img src="/images/providers/provider-3.png" alt="Image">
                                </a>
                            </div>
                            <!-- ITEM -->
                            <div class="item">
                                <a href="#">
                                    <img src="/images/providers/provider-4.png" alt="Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="brand-info" style="background-image:url('/images/about/{{ $about->background_img }}')">
                        <div class="inner">
                            <div class="content flex flex-col items-center justify-center">
                                <img src="/images/logos/{{ $hotel->big_logo }}" width="100" alt="Image">
                                <div class="stars">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <h5 class="title font-semibold text-lg">{{ $about->small_title }}</h5>
                                <p class="mt20">{{ $about->small_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('update')
    <div class="bg-white py-12 px-3">
        <div class="container">
            <form action="/admin/about/{{ $about -> id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="row">
                    {{-- LEFT --}}
                    <div class="col-lg-8">
                        <div class="section-title">
                            <h4 class="text-uppercase mb-2">Hotel {{ $hotel->name }}. <span class="text-himara"> since
                                    1992</span></h4>

                            {{-- Subheading --}}
                            <x-text-input class="block mt-1 w-full mb-4" type="text" name="subheading"
                                value="{{ $about->subheading }}" required autofocus />
                        </div>
                        <div class="info-branding">
                            {{-- Long description --}}
                            <textarea id="big_description"
                                class="block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="big_description" value="{{ old('big_description') }}" required autofocus>{{ $about->big_description }}</textarea>
                            {{-- Brands --}}
                            <div class="providers flex items-center gap-2">
                                <span>Recommended on:</span>
                                <!-- ITEM -->
                                <div class="item">
                                    <a href="#">
                                        <img src="/images/providers/provider-1.png" alt="Image">
                                    </a>
                                </div>
                                <!-- ITEM -->
                                <div class="item">
                                    <a href="#">
                                        <img src="/images/providers/provider-2.png" alt="Image">
                                    </a>
                                </div>
                                <!-- ITEM -->
                                <div class="item">
                                    <a href="#">
                                        <img src="/images/providers/provider-3.png" alt="Image">
                                    </a>
                                </div>
                                <!-- ITEM -->
                                <div class="item">
                                    <a href="#">
                                        <img src="/images/providers/provider-4.png" alt="Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class='d-flex items-center gap-3'>
                            <x-input-label for="image" class='m-0' :value="__('Background Image :')" />
                            <input id="image" type="file" name="image" class='my-2' autofocus />
                        </div>

                    </div>

                    {{-- RIGHT --}}
                    <div class="col-lg-4">
                        <div class="brand-info" style="background-image:url('/images/about/{{ $about->background_img }}')">
                            <div class="inner">
                                <div class="content flex flex-col items-center justify-center">
                                    <img src="/images/logos/{{ $hotel->big_logo }}" width="100" alt="Image">
                                    <div class="stars">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <input id="small_description"
                                        class="block w-full my-2 text-center rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="small_title" value="{{ $about->small_title }}" required
                                        autofocus>
                                    {{-- Small description --}}
                                    <textarea id="small_description"
                                        class="w-full text-center rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="small_description" value="{{ old('small_description') }}" required autofocus>{{ $about->small_description }}</textarea>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222]'>Update</button>
            </form>
        </div>
    </div>
@endsection


@section('content')
@endsection
