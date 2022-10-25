@extends('layouts.app')


@section('preview')
    @include('partial.backoffice.errors')
    <div class="restaurant-menu-item">
        <div class='flex gap-2 w-7/12 mx-auto bg-slate-50'>
            <div class="w-1/3">
                <figure>
                    @if (Str::startsWith($example->photo, 'https:'))
                        <img src="{{ $example->photo }}" class="img-fluid" alt="Image" width='640'>
                    @else
                        <img src="/images/restaurant/{{ $example->photo }}" class="img-fluid" alt="Image">
                    @endif

                </figure>
            </div>
            <div class="">
                <div class="info p-2">
                    <div class="border-b-2 border-dotted flex justify-between">
                        <span class="name">{{ $example->title }}</span>
                        <span class="price">
                            <span class="amount">€{{ $example->price }}</span>
                        </span>
                    </div>
                    <p class='py-2'>{{ $example->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('new')
    <div class="p-6 border-b bg-white border-gray-200">
        <div class='flex gap-6 items-center'>
            <div class='w-3/6 flex gap-6'>
                <img src="/images/restaurant/dish-example.png">
            </div>

            <form action="/admin/restaurant" method='post' enctype="multipart/form-data">
                @csrf

                <div class='flex flex-col gap-3 my-6'>
                    <!-- Image -->
                    <div>
                        <x-input-label for="image" :value="__('Image')" />

                        <x-text-input id="image" type="file" name="image" required autofocus />
                    </div>

                    <!-- Title -->
                    <div>
                        <x-input-label for="title" :value="__('Title')" />

                        <x-text-input id="title" class="block mt-1 w-72" type="text" name="title" :value="old('title')"
                            required autofocus />
                    </div>

                    <!-- Description -->
                    <div>
                        <x-input-label for="description" :value="__('Description')" />

                        <textarea id="description"
                            class="block mt-1 w-72 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="description" value="{{ old('description') }}" required autofocus></textarea>
                    </div>

                    <!-- Price -->
                    <div>
                        <x-input-label for="price" :value="__('Price')" />

                        <x-text-input id="price" class="block mt-1 w-72" type="text" name="price" :value="old('price')"
                            required autofocus />
                    </div>

                </div>

                <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222] uppercase'>Add</button>
            </form>

        </div>

    </div>
@endsection

@section('update')
    <div class='grid grid-cols-3 gap-10' id='food-update'>
        @foreach ($dishes as $dish)
            <div class="p-6 border-b bg-white border-gray-200">
                <h1 class='text-2xl text-[#D8BA8D] my-1 uppercase font-semibold'>{{ $dish->title }}</h1>
                <div class='flex flex-col gap-1'>
                    <div class='object-fit flex justify-center'>
                        @if (Str::startsWith($dish->photo, 'https:'))
                            <img src="{{ $dish->photo }}">
                        @else
                            <img src="/images/restaurant/{{ $dish->photo }}">
                        @endif
                    </div>

                    <form action="/admin/restaurant/{{ $dish->id }}" method='post' enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class='flex flex-col gap-3 my-6'>
                            <!-- Image -->
                            <div>
                                <x-input-label for="image" :value="__('Image')" />

                                <x-text-input id="image" type="file" name="image" autofocus />
                            </div>

                            <!-- Title -->
                            <div>
                                <x-input-label for="title" :value="__('Title')" />

                                <x-text-input id="title" class="block mt-1 w-72" type="text" name="title"
                                    :value="$dish->title" required autofocus />
                            </div>

                            <!-- Description -->
                            <div>
                                <x-input-label for="description" :value="__('Description')" />

                                <textarea id="description"
                                    class="block mt-1 w-72 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    type="text" name="description" value="{{ old('description') }}" required autofocus>{{ $dish->description }}</textarea>
                            </div>

                            <!-- Price -->
                            <div>
                                <x-input-label for="price" :value="__('Price')" />

                                <x-text-input id="price" class="block mt-1 w-72" type="text" name="price"
                                    :value="$dish->price" required autofocus />
                            </div>

                        </div>

                        <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222]'>Update</button>
                    </form>

                    <form action="/admin/restaurant/{{ $dish->id }}" method='post'>
                        @csrf
                        @method('delete')
                        <button class='text-red-600 rounded-sm p-2 hover:underline'>delete</button>
                    </form>


                </div>

            </div>
        @endforeach
    </div>
    <div>{{ $dishes->links() }} </div>
@endsection
