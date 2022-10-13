@extends('layouts.app')

@section('preview')
    <div class='mx-auto'>
        @include('partial.home.home-sliders')
    </div>
@endsection

@section('update')
    <div class='flex flex-col gap-10'>
        @foreach ($sliders as $slider)
            <div class="p-6 border-b bg-white border-gray-200 relative">
                <h1 class='text-2xl text-[#E4E4E4] my-1 uppercase font-semibold'>Slider {{ $slider->id }}</h1>
                <div class='w-3/6 flex gap-6'>
                    <img src="/images/slider/{{ $slider->background_img }}">
                    <form action="/admin/sliders/{{$slider->id}}" method='post' enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class='flex flex-col gap-3 my-6'>
                            <!-- Heading -->
                            <div>
                                <x-input-label for="layer1" :value="__('Heading')" />

                                <x-text-input id="layer1" class="block mt-1 w-72" type="text" name="layer1"
                                    :value="$slider->layer1" required autofocus />
                            </div>

                            <!-- Subheading -->
                            <div>
                                <x-input-label for="layer2" :value="__('Subheading')" />

                                <x-text-input id="layer2" class="block mt-1 w-72" type="text" name="layer2"
                                    :value="$slider->layer2" required autofocus />
                            </div>

                            <!-- Image -->
                            <div>
                                <x-input-label for="image" :value="__('Image')" />

                                <x-text-input id="image"  type="file" name="image"
                                autofocus />
                            </div>


                        </div>

                        <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222]'>Update</button>
                    </form>
                </div>

            </div>
        @endforeach
    </div>
@endsection

@include('partial.script-js')
