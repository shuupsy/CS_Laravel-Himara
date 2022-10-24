@extends('layouts.app')

@section('content')
    <!-- Categories -->
    <div class="my-6 sm:px-6 lg:px-8">
        <h1 class="text-[#D7D8D9] text-6xl font-bold uppercase leading-tight">Categories</h1>

        @include('partial.backoffice.errors')

        <div class="p-6 bg-white flex flex-col gap-4">

            <form action="/admin/gallerycategory" method='post'>
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
                @foreach ($cat_notNull as $category)
                    <div class='flex items-baseline'>
                        <form action="/admin/gallerycategory/{{ $category->id }}" method='post'>
                            @csrf
                            @method('patch')

                            <div class='flex'>
                                <input
                                    class="shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block w-40 capitalize"
                                    type="text" name="category" value="{{ $category->category }}" required autofocus />

                                <button class='bg-[#D7D8D9] p-2 text-white hover:bg-[#222222]'>Update</button>
                            </div>
                        </form>
                        <form action="/admin/gallerycategory/{{ $category->id }}" method='post'>
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
        @include('partial.backoffice.errors')
        @include('partial.backoffice.b-gallery-add')
    </div>


    {{-- Gallery --}}
    <div class="my-6 sm:px-6 lg:px-8">
        <div class="grid grid-cols-3 gap-4">
            {{-- Classement des photos par catégories --}}
            @foreach ($categories as $category)
                <div class='p-6 bg-white'>
                    <h1 class='text-2xl text-[#D8BA8D] my-1 uppercase font-semibold'>
                        {{ $category->id == 1 ? 'No category' : $category->category }}</h1>
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
                            <a href="/admin/gallerycategory/{{ $category->id }}">
                                <div
                                    class='w-28 h-28 object-cover border-[1px] border-slate-200 hover:border-slate-500 hover:text-slate-800 flex flex-col justify-center items-center cursor-pointer'>
                                    <p>SHOW ALL</p>
                                    <p>({{ count($category->photos) }})</p>
                                </div>
                            </a>
                        @elseif (count($category->photos) == 1)
                            <a href="/images/gallery/{{ $category->photos[0]->photo }}">
                                <img src="/images/gallery/{{ $category->photos[0]->photo }}"
                                    alt="{{ $category->photos[0]->title }}"
                                    class='w-28 h-28 object-cover border-[1px] border-black'>
                            </a>
                            <a href="/admin/gallerycategory/{{ $category->id }}">
                                <div
                                    class='w-28 h-28 object-cover border-[1px] border-slate-200 hover:border-slate-500 hover:text-slate-800 flex flex-col justify-center items-center cursor-pointer'>
                                    <p>SHOW ALL</p>
                                    <p>({{ count($category->photos) }})</p>
                                </div>
                            </a>
                        @else
                            <p>empty!</p>
                        @endif


                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection
