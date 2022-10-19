@extends('layouts.app')

@section('content')
{{--  --}}
    <div class="my-6 sm:px-6 lg:px-8">
        <h1 class="text-[#D7D8D9] text-6xl font-bold uppercase leading-tight">Room Update</h1>
        <div class="p-6 border-b bg-white border-gray-200">
            <h1 class='text-2xl text-[#D8BA8D] my-1 font-semibold'>Main Information</h1>

            <form action="/admin/rooms/{{ $room->id }}" method='post' enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class='flex flex-col gap-3 my-6'>
                    <!-- Main Photo -->
                    <div>
                        <x-input-label for="image" :value="__('Main Photo')" />
                        <div class='w-2/6 object-cover border'>
                            <img src="/images/rooms/{{ $room -> photo}}" alt="">
                        </div>

                        <x-text-input id="image" type="file" name="image" required autofocus />
                    </div>

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />

                        <x-text-input id="name" class="block mt-1 w-72" type="text" name="name"
                            value="{{ $room->name }}" required autofocus />
                    </div>


                    <!-- Nb persons max -->
                    <div>
                        <x-input-label for="nb_persons" :value="__('Number of persons max')" />

                        <div class="flex flex-col text-center range-slider mt-2">
                            <span id="rs-bullet" class="text-xl">2</span>
                            <input id="rs-range-line" type="range" name="nb_persons" min="1" step="1"
                                max="6" value="{{ $room->nb_persons }}">
                        </div>

                    </div>

                    <!-- Surface -->
                    <div>
                        <x-input-label for="surface" :value="__('Surface')" />

                        <x-text-input id="surface" class="block mt-1 w-72" type="text" name="surface"
                            value="{{ $room->surface }}" required autofocus />
                    </div>

                    <!-- Price -->
                    <div>
                        <x-input-label for="price" :value="__('Price')" />

                        <x-text-input id="price" class="block mt-1 w-72" type="text" name="price"
                            value="{{ $room->price }}" required autofocus />
                    </div>

                    <!-- Catégorie -->
                    <div>
                        <x-input-label for="category" :value="__('Category :')" />

                        <select name="category" id="category"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 capitalize">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" class='capitalize'
                                    @if ($room->room_category_id == $category->id) selected @endif>
                                    {{ $category->category }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Tags -->
                    <div class='room-tags'>
                        <x-input-label :value="__('Tags')" />
                        @foreach ($tags as $tag)
                            <label>
                                <input class='hidden' type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                    @if ($room->tag->contains($tag->id))
                                        checked
                                    @endif
                                    >
                                <span class='w-20 p-2 rounded-lg cursor-pointer uppercase'>{{ $tag->tag }}</span>
                            </label>
                        @endforeach
                    </div>

                    <!-- Options -->
                    <div>
                        <x-input-label :value="__('Options')" />
                        @foreach ($options as $option)
                            <div>
                                <input type="checkbox" name="options[]" value="{{ $option->id }}"
                                @if ($room->option_room->contains($option->id))
                                    checked
                                @endif
                                >
                                <span
                                    class='w-20 p-2 rounded-lg cursor-pointer uppercase'>{{ $option->option_name }}</span>
                            </div>
                        @endforeach
                    </div>

                </div>

                <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222]'>Update</button>
            </form>

        </div>
    </div>

    <hr>
    <div class="my-6 sm:px-6 lg:px-8">
        <h1 class="text-[#D7D8D9] text-6xl font-bold uppercase leading-tight">Descriptions</h1>

    </div>

    <hr>
    <div class="my-6 sm:px-6 lg:px-8">
        <h1 class="text-[#D7D8D9] text-6xl font-bold uppercase leading-tight">Gallery</h1>

    </div>

    <hr>
    <div class="my-6 sm:px-6 lg:px-8">
        <h1 class="text-[#D7D8D9] text-6xl font-bold uppercase leading-tight">Reviews</h1>

    </div>
    <script src="/js/room.js"></script>
@endsection
