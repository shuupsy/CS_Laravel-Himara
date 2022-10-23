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
                    <div class="brand-info" style="background-image:url('/{{ $about->background_img }}')">
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
    <div class='flex flex-col gap-10'>
        <div class="p-6 border-b bg-white border-gray-200">
            <form action="/admin/ads/{{ $about->id }}" method='post' enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class='grid grid-cols-2 gap-6 my-6'>

                    <div class='flex flex-col gap-6 px-3'>
                        <!-- Subheading -->
                        <div>
                            <x-input-label for="video_link" :value="__('Subheading')" />

                            <x-text-input id="video_link" class="block mt-1 w-72" type="text" name="video_link"
                                value="{{ $about->subheading }}" required autofocus />
                        </div>

                        <!-- Big description -->
                        <div>
                            <x-input-label for="big_description" :value="__('Long description')" />

                            <textarea id="big_description"
                                class="block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="big_description" value="{{ old('big_description') }}" required autofocus>{{ $about->big_description }}</textarea>
                        </div>
                    </div>

                    <div class="brand-info" style="background-image:url('/{{ $about->background_img }}')">
                        <div class="inner">
                            <div class="content flex flex-col gap-4 items-evenly justify-center px-4">
                                <div class='flex justify-center'>
                                    <img src="/images/logos/{{ $hotel->big_logo }}" width="100" alt="Image">
                                </div>
                                <div class="stars">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <!-- Small title -->
                                <div class='mx-10'>
                                    <input id="small_description"
                                        class="block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="small_title" value="{{ $about->small_title }}" required
                                        autofocus>
                                </div>

                                <!-- Small description -->
                                <div class='mx-10'>
                                    <textarea id="small_description"
                                        class="block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="small_description" value="{{ old('small_description') }}" required autofocus>{{ $about->small_description }}</textarea>
                                </div>

                                <!-- Image -->
                                    <x-text-input id="image" type="file" name="image" autofocus />
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
