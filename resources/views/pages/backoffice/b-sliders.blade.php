@extends('layouts.app')

@section('preview')
@include('partial.backoffice.errors')
    <div class='mx-auto'>
        @include('partial.home.home-sliders')
    </div>
@endsection

@section('new')
<div class='flex flex-col gap-10'>
    <div class="p-6 border-b bg-white border-gray-200">
        <div class='w-3/6 flex gap-6'>
            <img src="/images/slider/slider-example.png" class='border'>
            <form action="/admin/sliders" method='post' enctype="multipart/form-data">
                @csrf

                <div class='flex flex-col gap-3'>
                    <!-- Heading -->
                    <div>
                        <x-input-label for="layer1" :value="__('Heading')" />

                        <x-text-input id="layer1" class="block mt-1 w-72" type="text" name="layer1" :value="old('layer1')" required
                            autofocus />
                    </div>

                    <!-- Subheading -->
                    <div>
                        <x-input-label for="layer2" :value="__('Subheading')" />

                        <x-text-input id="layer2" class="block mt-1 w-72" type="text" name="layer2" :value="old('layer2')"
                            required autofocus />
                    </div>

                    <!-- Small title -->
                    <div>
                        <label class='block font-medium text-sm text-gray-500 capitalize' for="layer6" value="{{ old('layer6')}}">Small title (optional)</label>

                        <x-text-input id="layer6" class="block mt-1 w-72" type="text" name="layer6" :value="old('layer6')" autofocus />
                    </div>

                    <!-- Image -->
                    <div>
                        <x-input-label for="image" :value="__('Image')" />

                        <x-text-input id="image" type="file" name="image" autofocus />
                    </div>
                </div>

                <button class='bg-[#444444] my-2 p-2 text-white rounded-sm hover:bg-[#222222] uppercase'>Add</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('update')
    <div class='flex flex-col gap-10'>
        @foreach ($sliders as $slider)
            <div class="p-6 border-b bg-white border-gray-200">
                <h1 class='text-2xl text-[#D8BA8D] my-1 uppercase font-semibold'>{{ $slider->order == 1 ? "Main Slider" : ""}}</h1>
                <div class='w-3/6 flex gap-6'>
                    <img src="/images/slider/{{ $slider->background_img }}">

                    <div>
                        <form action="/admin/sliders/{{ $slider->id }}" method='post' enctype="multipart/form-data">
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

                                    <x-text-input id="image" type="file" name="image" autofocus />
                                </div>

                                <label for="is_Main" class='flex items-center gap-1'>
                                    <input id="is_Main" type="checkbox" name="is_Main"
                                        {{ $slider->order == 1 ? 'checked' : '' }} value=true>
                                    <span class='font-medium text-sm text-gray-700'>
                                        Main slider ?</span>
                                </label>


                            </div>

                            <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222]'>Update</button>
                        </form>

                        <form action="/admin/sliders/{{ $slider->id }}" method='post'>
                            @csrf
                            @method('delete')
                            <button class='text-red-600 rounded-sm p-2 hover:underline'>delete</button>
                        </form>
                    </div>

                </div>

            </div>
        @endforeach
    </div>
@endsection

@include('partial.script-js')
