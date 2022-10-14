@extends('layouts.app')

@if ($count != 0)
    @section('preview')
        @include('partial.home.home-ads')
    @endsection
@endif


@section('new')
    <div class="p-6 border-b bg-white border-gray-200">
        <div class='flex flex-col gap-10'>
            <div class='w-3/6 flex gap-6'>
                <img src="/images/video/background-example.png">
                <div>
                    <form action="/admin/ads" method='post' enctype="multipart/form-data">
                        @csrf

                        <div class='flex flex-col gap-3'>
                            <!-- Image -->
                            <div>
                                <x-input-label for="image" :value="__('Background image')" />

                                <x-text-input id="image" type="file" name="image" required autofocus />
                            </div>

                            <!-- Youtube link -->
                            <div>
                                <x-input-label for="video_link" :value="__('Video Link (youtube)')" />

                                <x-text-input id="video_link" class="block mt-1 w-72" type="text" name="video_link"
                                    :value="old('video_link')" required autofocus />
                            </div>
                        </div>

                        <button
                            class='bg-[#444444] p-2 my-2 text-white rounded-sm hover:bg-[#222222] uppercase'>Add</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection

@if ($count != 0)
    @section('update')
        <div class='flex flex-col gap-10'>
            @foreach ($ads as $a)
                <div class="p-6 border-b bg-white border-gray-200">
                    @if (!$a->created_at == null)
                        <h1 class='text-2xl text-[#E4E4E4] my-1 uppercase font-semibold'>
                            {{ $a->created_at->format('F d, Y') }}
                        </h1>
                    @endif
                    <div class='w-3/6 flex gap-6'>
                        <img src="/images/video/{{ $a->background_img }}" alt="Ads Background">
                        <div>
                            <form action="/admin/ads/{{ $a->id }}" method='post' enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class='flex flex-col gap-3 my-6'>

                                    <!-- Youtube link -->
                                    <div>
                                        <x-input-label for="video_link" :value="__('Video Link')" />

                                        <x-text-input id="video_link" class="block mt-1 w-72" type="text"
                                            name="video_link" :value="$a->video_link" required autofocus />
                                    </div>

                                    <!-- Image -->
                                    <div>
                                        <x-input-label for="image" :value="__('Image')" />

                                        <x-text-input id="image" type="file" name="image" autofocus />
                                    </div>

                                    {{-- Make it live --}}
                                    <div>
                                        <label for="is_Main" class='flex items-center gap-1'>
                                            <input id="is_Main" type="checkbox" name="is_Main"
                                                {{ $a->is_Main == true ? 'checked' : '' }} value=true>
                                            <span class='font-medium text-sm text-gray-700'>Current advertisement</span>
                                        </label>


                                    </div>

                                </div>

                                <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222]'>Update</button>
                            </form>

                            <form action="/admin/ads/{{ $a->id }}" method='post'>
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
@endif

@include('partial.script-js')