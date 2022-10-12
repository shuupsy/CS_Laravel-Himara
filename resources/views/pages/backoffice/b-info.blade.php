@extends('layouts.app')

@section('preview')
    @include('partial.topbar')
    @include('partial.header')
@endsection

@section('update')
    <div class='flex gap-10'>
        {{-- Update -- Info --}}
        <div class="p-6 border-b bg-white border-gray-200">
            <h1 class='text-2xl my-1 uppercase font-semibold'>Hotel information</h1>
            <form action="/admin/info/{{ $hotel->id }}" method='post'>
                @csrf
                @method('patch')

                <div class='grid grid-cols-2 gap-3 items-center my-6'>
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />

                        <x-text-input id="name" class="block mt-1 w-72" type="text" name="name" :value="$hotel->name"
                            required autofocus />
                    </div>

                    <!-- Address -->
                    <div>
                        <x-input-label for="address" :value="__('Address')" />

                        <x-text-input id="address" class="block mt-1 w-72" type="text" name="address" :value="$hotel->address"
                            required autofocus />
                    </div>

                    <!-- Phone -->
                    <div>
                        <x-input-label for="phone" :value="__('Phone')" />

                        <x-text-input id="phone" class="block mt-1 w-72" type="text" name="phone" :value="$hotel->phone"
                            required autofocus />
                    </div>

                    <!-- Email -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />

                        <x-text-input id="email" class="block mt-1 w-72" type="text" name="email" :value="$hotel->email"
                            required autofocus />
                    </div>

                    <!-- Fax -->
                    <div>
                        <x-input-label for="fax" :value="__('Fax')" />

                        <x-text-input id="fax" class="block mt-1 w-72" type="text" name="fax" :value="$hotel->fax"
                            required autofocus />
                    </div>

                    <!-- Url -->
                    <div>
                        <x-input-label for="url" :value="__('Website')" />

                        <x-text-input id="url" class="block mt-1 w-72" type="text" name="url"
                            :value="$hotel->url" required autofocus />
                    </div>

                </div>

                <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222]'>Update</button>
            </form>

            {{-- Logos --}}
            <div class='flex justify-center items-center'>
                <div class='flex justify-center my-6 p-6'>
                    <img src="/images/logos/{{ $hotel->logo }}" alt="Hotel {{ $hotel->name }}">
                </div>
                <div class='flex justify-center my-6 p-6'>
                    <img src="/images/logos/{{ $hotel->big_logo }}" alt="Hotel {{ $hotel->name }}">
                </div>
            </div>
        </div>

        {{-- Update -- Logos --}}
        <div class='flex flex-col gap-5'>

            {{-- Small Logo --}}
            <div class='p-6 pb-1 border-b bg-white border-gray-200'>
                <h1 class='text-2xl my-1 uppercase font-semibold'>Small Logo</h1>

                <div class='flex justify-center border my-6 p-6'>
                    <img src="/images/logos/{{ $hotel->logo }}" alt="Hotel {{ $hotel->name }}">
                </div>

                <form action="/admin/info/{{ $hotel->id }}/update1" method='post' enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="file" name='logo'>
                    <br>
                    <button class='bg-[#444444] p-2 my-3 text-white rounded-sm hover:bg-[#222222]'>Update</button>
                </form>
            </div>

            {{-- Form Big Logo --}}
            <div class='p-6 pb-1 border-b bg-white border-gray-200'>
                <h1 class='text-2xl my-1 uppercase font-semibold'>Big Logo</h1>

                <div class='flex justify-center border my-6 p-6'>
                    <img src="/images/logos/{{ $hotel->big_logo }}" alt="Hotel {{ $hotel->name }}">
                </div>

                {{-- Form --}}
                <form action="/admin/info/{{ $hotel->id }}/update2" method='post' enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="file" name='big_logo'>
                    <br>
                    <button class='bg-[#444444] p-2 my-3 text-white rounded-sm hover:bg-[#222222]'>Update</button>
                </form>
            </div>
        </div>


    </div>
@endsection
