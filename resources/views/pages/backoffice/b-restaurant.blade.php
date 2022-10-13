@extends('layouts.app')

@section('new')

@endsection

@section('update')
<div class='flex flex-col gap-10'>
    @foreach ($dishes as $dish)
        <div class="p-6 border-b bg-white border-gray-200">
            <h1 class='text-2xl text-[#E4E4E4] my-1 uppercase font-semibold'>{{ $dish->title }}</h1>
            <div class='w-3/6 flex gap-6'>
                <img src="/images/restaurant/{{ $dish->photo }}">

                <div>
                    <form action="/admin/dishs/{{ $dish->id }}" method='post' enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class='flex flex-col gap-3 my-6'>
                            <!-- Heading -->
                            <div>
                                <x-input-label for="layer1" :value="__('Heading')" />

                                <x-text-input id="layer1" class="block mt-1 w-72" type="text" name="layer1"
                                    :value="$dish->layer1" required autofocus />
                            </div>

                            <!-- Subheading -->
                            <div>
                                <x-input-label for="layer2" :value="__('Subheading')" />

                                <x-text-input id="layer2" class="block mt-1 w-72" type="text" name="layer2"
                                    :value="$dish->layer2" required autofocus />
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
