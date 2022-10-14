@extends('layouts.app')

@section('preview')
    <div class="services h-96 p-6 border-b bg-white border-gray-200">
        <div class="grid grid-cols-2 h-max">
            {{-- Carousel - Images --}}
            <div data-slider-id="services" class="services-owl owl-carousel">
                @foreach ($services as $service)
                    <figure class="gradient-overlay">
                        <img src="/images/services/{{ $service->image }}" class="img-fluid" alt="Image">
                        <figcaption>
                            <h4>{{ $service->title }}</h4>
                        </figcaption>
                    </figure>
                @endforeach
            </div>

            {{-- Carousel - Description --}}
            <div class="owl-thumbs" data-slider-id="services">
                @foreach ($services as $service)
                    <div class="owl-thumb-item">
                        <span class="media-left">
                            <i class="{{ $service->logo->logo }}"></i>
                        </span>
                        <div class="media-body">
                            <h5>{{ $service->title }}</h5>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection

@section('new')
    ALLO
@endsection

@if ($count != 0)
    @section('update')
        <div class='flex flex-col gap-10'>
            @foreach ($services as $service)
                <div class="p-6 border-b bg-white border-gray-200">
                    <h1 class='text-2xl text-[#D8BA8D] my-1 uppercase font-semibold'>
                        Service {{ $loop->index + 1 }} : {{ $service->title }}
                    </h1>
                    <form action="/admin/services/{{ $service->id }}" method='post' enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class='flex gap-6 items-between'>
                            <img src="/images/services/{{ $service->image }}" alt="Service Photo" width='420'>

                            <!-- Choix de Logo -->
                            <div>
                                <x-input-label for="logo" :value="__('Logo')" />
                                <div class='flex flex-wrap gap-3'>
                                    @foreach ($logos as $logo)
                                        <label class='flex flex-col items-center gap-1'>
                                            <i class="{{ $logo->logo }} m-0 text-[#D8BA8D] text-4xl border px-2"></i>

                                            <input type="radio" name="logo" value="{{ $logo->id }}" id="logo" {{ $service->logo->id == $logo->id ? 'checked' : '' }}>
                                        </label>
                                    @endforeach
                                </div>

                            </div>

                            <div class='flex flex-col gap-4'>
                                <!-- Title-->
                                <div>
                                    <x-input-label for="title" :value="__('Title')" />

                                    <x-text-input id="title" class="block mt-1 w-72" type="text" name="title"
                                        :value="$service->title" required autofocus />
                                </div>

                                <!-- Description -->
                                <div>
                                    <x-input-label for="description" :value="__('Description')" />

                                    <textarea id="description"
                                        class="block mt-1 w-72 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="description" value="{{ old('description') }}" required autofocus>{{ $service->description }}</textarea>
                                </div>
                            </div>

                        </div>
                        <!-- Image -->
                        <x-text-input id="image" type="file" name="image" autofocus />

                        <br>

                        <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222] mt-3'>Update</button>
                    </form>

                    <form action="/admin/services/{{ $service->id }}" method='post'>
                        @csrf
                        @method('delete')
                        <button class='text-red-600 rounded-sm p-2 hover:underline'>delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    @endsection
@endif

@include('partial.script-js')
