@extends('layouts.app')

@section('preview')
    <div class='w-11/12 mx-auto grid grid-cols-3 justify-center gap-6'>
        {{-- CEO --}}
        <div class="staff-item">
            <figure>
                @if (Str::startsWith($boss->photo, 'http'))
                    <img src="{{ $boss->photo }}" class="img-fluid" alt="Image">
                @else
                    <img src="/images/staff/{{ $boss->photo }}" class="img-fluid" alt="Image">
                @endif

                <div class="position">{{ $boss->job }}</div>
            </figure>
            <div class="details">
                <h5>{{ $boss->first_name }} {{ $boss->last_name }}</h5>
                <p>{{ $boss->description }}</p>
            </div>
        </div>

        {{-- Other members (random) --}}
        @foreach ($staffmembers as $member)
            <div class="staff-item">
                <figure>
                    @if (Str::startsWith($member->photo, 'http'))
                        <img src="{{ $member->photo }}" class="img-fluid" alt="Image">
                    @else
                        <img src="/images/staff/{{ $member->photo }}" class="img-fluid" alt="Image">
                    @endif
                    <div class="position">{{ $member->job }}</div>
                </figure>
                <div class="details">
                    <h5>{{ $member->first_name }} {{ $member->last_name }}</h5>
                    <p>{{ $member->description }}</p>
                </div>
            </div>
        @endforeach

    </div>
@endsection

@section('new')
    @include('partial.backoffice.errors')
    <div class='w-11/12 mx-auto flex flex-col gap-10' id='staff-update'>
        <div class="p-6 border-b bg-white border-gray-200">
            <div class='flex gap-6'>
                <form action="/admin/staff" method='post' enctype="multipart/form-data">
                    @csrf

                    <div class='flex items-center gap-6'>
                        {{-- Photo --}}
                        <figure>
                            <img src="/images/staff/staff-example.png" class="img-fluid" alt="Image" width='250'>
                        </figure>

                        <div class='flex flex-col gap-2'>
                            <!-- First Name -->
                            <div>
                                <x-input-label for="first_name" :value="__('First Name')" />

                                <x-text-input id="first_name" class="block mt-1 w-72" type="text" name="first_name"
                                    :value="old('first_name')" required autofocus />
                            </div>

                            <!-- Last Name -->
                            <div>
                                <x-input-label for="last_name" :value="__('Last Name')" />

                                <x-text-input id="last_name" class="block mt-1 w-72" type="text" name="last_name"
                                    :value="old('last_name')" required autofocus />
                            </div>

                            <!-- Job -->
                            <div>
                                <x-input-label for="job" :value="__('Job')" />

                                <x-text-input id="job" class="block mt-1 w-72" type="text" name="job"
                                    :value="old('job')" required autofocus />
                            </div>
                        </div>

                        <div class='flex flex-col gap-2'>
                            <!-- Description -->
                            <div>
                                <x-input-label for="description" :value="__('Description')" />

                                <textarea id="description"
                                    class="block mt-1 w-72 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    type="text" name="description" value="{{ old('description') }}" required autofocus></textarea>
                            </div>

                            <!-- Image -->
                            <div>
                                <x-input-label for="image" :value="__('Image')" />

                                <x-text-input id="image" type="file" name="image" autofocus required />
                            </div>
                        </div>

                    </div>

                    <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222] mt-2 uppercase'>Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('update')
    <div class='w-11/12 mx-auto flex flex-col gap-10' id='staff-update'>
        @foreach ($all as $member)
            <div class="p-6 border-b bg-white border-gray-200">
                {{-- Titre --}}
                <h1 class='text-2xl text-[#D8BA8D] my-1 uppercase font-semibold'>{{ $member->first_name }}
                    {{ $member->last_name }} - <span class='text-[#E4E4E4]'>{{ $member->job }}</span></h1>

                <div class='flex gap-6'>

                    <form action="/admin/staff/{{ $member->id }}" method='post' enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class='flex items-center gap-6'>
                            {{-- Photo --}}
                            <figure>
                                @if (Str::startsWith($member->photo, 'http'))
                                    <img src="{{ $member->photo }}" class="img-fluid" alt="Image" width='250'>
                                @else
                                    <img src="/images/staff/{{ $member->photo }}" class="img-fluid" alt="Image"
                                        width='250'>
                                @endif
                            </figure>

                            <div class='flex flex-col gap-2'>
                                <!-- First Name -->
                                <div>
                                    <x-input-label for="first_name" :value="__('First Name')" />

                                    <x-text-input id="first_name" class="block mt-1 w-72" type="text" name="first_name"
                                        :value="$member->first_name" required autofocus />
                                </div>

                                <!-- Last Name -->
                                <div>
                                    <x-input-label for="last_name" :value="__('Last Name')" />

                                    <x-text-input id="last_name" class="block mt-1 w-72" type="text" name="last_name"
                                        :value="$member->last_name" required autofocus />
                                </div>

                                <!-- Job -->
                                <div>
                                    <x-input-label for="job" :value="__('Job')" />

                                    <x-text-input id="job" class="block mt-1 w-72" type="text" name="job"
                                        :value="$member->job" required autofocus />
                                </div>
                            </div>

                            <div class='flex flex-col gap-2'>
                                <!-- Description -->
                                <div>
                                    <x-input-label for="description" :value="__('Description')" />

                                    <textarea id="description"
                                        class="block mt-1 w-72 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="description" value="{{ old('description') }}" required autofocus>{{ $member->description }}</textarea>
                                </div>

                                <!-- Image -->
                                <div>
                                    <x-input-label for="image" :value="__('Image')" />

                                    <x-text-input id="image" type="file" name="image" autofocus />
                                </div>
                            </div>

                        </div>

                        <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222] mt-2'>Update</button>
                    </form>
                </div>

                <form action="/admin/staff/{{ $member->id }}" method='post'>
                    @csrf
                    @method('delete')
                    <button class='text-red-600 rounded-sm p-2 hover:underline'>delete</button>
                </form>

            </div>
        @endforeach
    </div>
    <div>{{ $all->links() }} </div>
@endsection
