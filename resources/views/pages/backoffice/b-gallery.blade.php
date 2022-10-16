@extends('layouts.app')

@section('content')
    <!-- Categories -->
    <div class="my-6 sm:px-6 lg:px-8">
        <h1 class="text-[#D7D8D9] text-6xl font-bold uppercase leading-tight">Categories</h1>
        <div class="p-6 bg-white flex flex-col gap-4">

            <form action="/admin/ads" method='post'>
                @csrf
                <div class='flex'>
                    <input
                        class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block w-40 capitalize placeholder:lowercase placeholder:italic"
                        type="text" name="category" :value="old('category')" required autofocus
                        placeholder="example: cats" />

                    <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222] uppercase'>Add</button>
                </div>
            </form>

            {{-- Liste de catégories --}}
            <div class='grid grid-cols-3 gap-4'>
                @foreach ($categories as $category)
                    <div class='flex items-baseline'>
                        <form action="/admin/ads" method='post'>
                            @csrf
                            <div class='flex'>
                                <input
                                    class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block w-40 capitalize"
                                    type="text" name="category" value="{{ $category->category }}" required autofocus />

                                <button class='bg-[#D7D8D9] p-2 text-white hover:bg-[#222222]'>Update</button>
                            </div>
                        </form>
                        <form action="/admin/ads/{{ $category->id }}" method='post'>
                            @csrf
                            @method('delete')
                            <button class='bg-red-300 p-2 text-white hover:bg-red-500'>delete</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    <!-- Ajout Gallery -->
    <div class="my-6 sm:px-6 lg:px-8">
        <h1 class="text-[#D7D8D9] text-6xl font-bold uppercase leading-tight">Gallery</h1>
        <div class="w-3/6 p-6 bg-white flex flex-col gap-4">

            {{-- Nouvelle photo --}}
            <form action="/gallery" method="post" enctype="multipart/form-data"
                class='p-6 bg-white flex flex-col items-center justify-center gap-3'>
                @csrf
                {{-- Ajout photo --}}
                <label
                    class='w-28 h-28 border-2 my-3 border-slate-500 hover:text-[#D8BA8D] rounded-full flex justify-center items-center cursor-pointer'
                    for="image">
                    <input type="file" name="image" id="image" class='hidden' required>
                    <span class='text-6xl'>+</span>
                </label>

                <!-- Title -->
                <div class='flex items-center gap-3'>
                    <x-input-label class='m-0' for="title" :value="__('Title : ')" />

                    <x-text-input id="title" class="block mt-1 w-72 placeholder:lowercase placeholder:italic"
                        type="text" name="title" :value="old('title')" placeholder='examples: Room View, Beach...' required
                        autofocus />
                </div>

                <!-- Catégorie -->
                <div class='flex items-center gap-3'>
                    <label for="category" class=' mx-auto font-medium text-sm text-gray-700 m-0'>Categories :</label>

                    <select name="category" id="category"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 capitalize">
                        <option value="null" class='capitalize'>
                        </option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" class='capitalize'>{{ $category->category }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222] uppercase'>Add</button>
            </form>

        </div>
    </div>


    {{-- Gallery --}}
    <div class="my-6 sm:px-6 lg:px-8">
        <div class="grid grid-cols-3 gap-4">

            {{-- Photos sans catégories --}}
            <div class='p-6 bg-white'>
                <h1 class='text-2xl text-[#D8BA8D] my-1 uppercase font-semibold'>No category</h1>
                {{-- Prévisualisation photos --}}
                <div class='grid grid-cols-3 gap-2 my-3'>

                    @if (count($photos_nocat) > 1)
                        {{-- Affichage de 2 photos max --}}
                        @for ($i = 0; $i < 2; $i++)
                            <a href="/images/gallery/{{ $photos_nocat[$i]->photo }}">
                                <img src="/images/gallery/{{ $photos_nocat[$i]->photo }}"
                                    alt="{{ $photos_nocat[$i]->title }}" class='w-28 h-28 object-cover'>
                            </a>
                        @endfor
                        {{-- Div show more --}}
                        <div
                            class='w-28 h-28 object-cover border-[1px] border-slate-200 hover:border-slate-500 hover:text-slate-800 flex flex-col justify-center items-center cursor-pointer'>
                            <p>SHOW ALL</p>
                            <p>({{ count($photos_nocat) }})</p>
                        </div>
                    @elseif (count($photos_nocat) == 1)
                        <a href="images/gallery/{{ $photos_nocat[0]->photo }}">
                            <img src="/images/gallery/{{ $photos_nocat[0]->photo }}" alt="{{ $photos_nocat[0]->title }}"
                                class='w-28 h-28 object-cover border-[1px] border-black'>
                        </a>
                        <div
                            class='w-28 h-28 object-cover border-[1px] border-slate-200 hover:border-slate-500 hover:text-slate-800 flex flex-col justify-center items-center cursor-pointer'>
                            <p>SHOW ALL</p>
                            <p>({{ count($photos_nocat) }})</p>
                        </div>
                    @else
                        <p>empty!</p>
                    @endif

                </div>

            </div>

            {{-- Photos avec catégories --}}
            @foreach ($categories as $category)
                <div class='p-6 bg-white'>
                    <h1 class='text-2xl text-[#D8BA8D] my-1 uppercase font-semibold'>{{ $category->category }}</h1>
                    {{-- Prévisualisation photos --}}
                    <div class='grid grid-cols-3 gap-2 my-3'>

                        @if (count($category->photos) > 1)
                            {{-- Affichage de 2 photos max --}}
                            @for ($i = 0; $i < 2; $i++)
                                <a href="/images/gallery/{{ $category->photos[$i]->photo }}">
                                    <img src="/images/gallery/{{ $category->photos[$i]->photo }}"
                                        alt="{{ $category->photos[$i]->title }}" class='w-28 h-28 object-cover'>
                                </a>
                            @endfor
                            {{-- Div show more --}}
                            <div
                                class='w-28 h-28 object-cover border-[1px] border-slate-200 hover:border-slate-500 hover:text-slate-800 flex flex-col justify-center items-center cursor-pointer'>
                                <p>SHOW ALL</p>
                                <p>({{ count($category->photos) }})</p>
                            </div>
                        @elseif (count($category->photos) == 1)
                            <a href="/images/gallery/{{ $category->photos[0]->photo }}">
                                <img src="/images/gallery/{{ $category->photos[0]->photo }}"
                                    alt="{{ $category->photos[0]->title }}"
                                    class='w-28 h-28 object-cover border-[1px] border-black'>
                            </a>
                            <div
                                class='w-28 h-28 object-cover border-[1px] border-slate-200 hover:border-slate-500 hover:text-slate-800 flex flex-col justify-center items-center cursor-pointer'>
                                <p>SHOW ALL</p>
                                <p>({{ count($category->photos) }})</p>
                            </div>
                        @else
                            <p>empty!</p>
                        @endif


                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection
