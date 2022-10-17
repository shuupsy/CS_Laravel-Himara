@extends('layouts.app')

@section('content')
    <div class="my-6 sm:px-6 lg:px-8">
        <h1 class='text-[#D7D8D9] text-6xl font-bold uppercase leading-tight'>
            {{ $category->id == 1 ? 'No category' : $category->category }}</h1>

        <div class='flex flex-col gap-3'>
            @include('partial.backoffice.b-gallery-add')

            <div class='grid grid-cols-3 gap-10' id='gallery-cat'>

                {{-- Liste de gallery --}}
                @foreach ($category->photos as $photo)
                    <div class="p-6 border-b bg-white border-gray-200">
                        <h1 class='text-2xl text-[#c9c9c9] my-1 uppercase'>{{ $photo->title }}</h1>

                        <div class='flex flex-col gap-1'>
                            <div class='gallery-item flex justify-center my-2'>
                                    @if (Str::startsWith($photo->photo, 'https:'))
                                    <img src="{{ $photo->photo }}" class='w-7/12 object-fit '>
                                @else
                                    <img src="/images/gallery/{{ $photo->photo }}" class='w-7/12 object-fit '>
                                @endif

                            </div>

                            <form action="/admin/gallery/{{ $photo->id }}" method='post' enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class='flex flex-col gap-3 my-6'>
                                    <!-- Title -->
                                    <div>
                                        <x-input-label for="title" :value="__('Title')" />

                                        <x-text-input id="title" class="block mt-1 w-72" type="text" name="title"
                                            :value="$photo->title" required autofocus />
                                    </div>


                                    <!-- Change Catégorie -->
                                    <div class='flex items-center gap-2'>
                                        <label for="category" class='font-medium text-sm text-gray-700 m-0'>Category
                                            :</label>

                                        <select name="category" id="category"
                                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 capitalize">
                                            <option value="null" class='capitalize'>
                                            </option>
                                            @foreach ($categories as $cat)
                                                <option value="{{ $cat->id }}" class='capitalize'
                                                    {{ $photo->gallery_category_id == $cat->id ? 'selected' : '' }}>
                                                    {{ $cat->category }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>


                                </div>

                                <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222]'>Update</button>
                            </form>

                            <form action="/admin/gallery/{{ $photo->id }}" method='post'>
                                @csrf
                                @method('delete')
                                <button class='text-red-600 rounded-sm p-2 hover:underline'>delete</button>
                            </form>


                        </div>

                    </div>
                @endforeach
            </div>
        </div>

        {{--  <div>{{ $photos->links() }} </div> --}}

    </div>
@endsection
