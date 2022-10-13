@extends('layouts.app')

@section('new')
@endsection

@section('update')
    <div class='flex flex-col gap-10'>
        @foreach ($dishes as $dish)
            <div class="p-6 border-b bg-white border-gray-200">
                <h1 class='text-2xl text-[#E4E4E4] my-1 uppercase font-semibold'>{{ $dish->title }}</h1>
                <div class='w-3/6 flex gap-6'>
                    <div class='w-2/4 object-fit'>
                        @if (Str::startsWith($dish->photo, 'https:'))
                            <img src="{{ $dish->photo }}">
                        @else
                            <img src="/images/restaurant/{{ $dish->photo }}">
                        @endif
                    </div>

                    <div>
                        <form action="/admin/dishs/{{ $dish->id }}" method='post' enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                            <div class='flex flex-col gap-3 my-6'>
                                <!-- Title -->
                                <div>
                                    <x-input-label for="title" :value="__('Title')" />

                                    <x-text-input id="title" class="block mt-1 w-72" type="text" name="title"
                                        :value="$dish->title" required autofocus />
                                </div>

                                <!-- Description -->
                                <div>
                                    <x-input-label for="description" :value="__('Description')" />

                                    <textarea id="description" class="block mt-1 w-72" type="text" name="description" value="{{ old('description') }}"
                                        required autofocus>{{ $dish->description }}</textarea>
                                </div>

                                <!-- Image -->
                                <div>
                                    <x-input-label for="image" :value="__('Image')" />

                                    <x-text-input id="image" type="file" name="image" autofocus />
                                </div>


                            </div>

                            <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222]'>Update</button>
                        </form>

                        <form action="/admin/dishs/{{ $dish->id }}" method='post'>
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
