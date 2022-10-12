@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="">
            {{-- Preview --}}
            <div class="my-6 sm:px-6 lg:px-8">
                <h1 class="text-[#D7D8D9] text-6xl font-bold uppercase leading-tight">Preview</h1>
                @include('partial.topbar')
                @include('partial.header')
            </div>

            <hr>

            <div class="my-6 sm:px-6 lg:px-8">
                <h1 class="text-[#D7D8D9] text-6xl font-bold uppercase leading-tight">Update</h1>
                <div class='flex gap-10'>
                    <div class="p-6 border-b bg-white border-gray-200">
                        <h1 class='text-2xl my-3'>Hotel information</h1>
                        <form action="/admin/info/{{ $hotel->id }}" method='post'>
                            @csrf
                            @method('patch')

                            <div class='grid grid-cols-2 gap-3 items-center'>
                                <!-- Name -->
                                <div>
                                    <x-input-label for="name" :value="__('Name')" />

                                    <x-text-input id="name" class="block mt-1 w-72" type="text" name="name"
                                        :value="$hotel->name" required autofocus />
                                </div>

                                <!-- Address -->
                                <div>
                                    <x-input-label for="address" :value="__('Address')" />

                                    <x-text-input id="address" class="block mt-1 w-72" type="text" name="address"
                                        :value="$hotel->address" required autofocus />
                                </div>

                                <!-- Phone -->
                                <div>
                                    <x-input-label for="phone" :value="__('Phone')" />

                                    <x-text-input id="phone" class="block mt-1 w-72" type="text" name="phone"
                                        :value="$hotel->phone" required autofocus />
                                </div>

                                <!-- Email -->
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />

                                    <x-text-input id="email" class="block mt-1 w-72" type="text" name="email"
                                        :value="$hotel->email" required autofocus />
                                </div>

                                <!-- Fax -->
                                <div>
                                    <x-input-label for="fax" :value="__('Fax')" />

                                    <x-text-input id="fax" class="block mt-1 w-72" type="text" name="fax"
                                        :value="$hotel->fax" required autofocus />
                                </div>

                                <!-- Url -->
                                <div>
                                    <x-input-label for="url" :value="__('Website')" />

                                    <x-text-input id="url" class="block mt-1 w-72" type="text" name="url"
                                        :value="$hotel->url" required autofocus />
                                </div>

                            </div>

                            <button class='bg-[#444444] p-2 my-3 text-white rounded-sm hover:bg-[#222222]'>Update</button>
                        </form>
                    </div>

                    <div class='flex flex-col gap-10'>

                        <div class='p-6 border-b bg-white border-gray-200'>
                            <h1 class='text-2xl my-1'>Small Logo</h1>
                            <img src="/{{ $hotel->logo }}" alt="Hotel {{ $hotel->name }}">
                            <button class='bg-[#444444] p-2 my-3 text-white rounded-sm hover:bg-[#222222]'>Update</button>
                        </div>
                        <div class='p-6 border-b bg-white border-gray-200'>
                            <h1 class='text-2xl my-1'>Big Logo</h1>
                            <img src="/{{ $hotel->big_logo }}" alt="Hotel {{ $hotel->name }}">
                            <button class='bg-[#444444] p-2 my-3 text-white rounded-sm hover:bg-[#222222]'>Update</button>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    @endsection
