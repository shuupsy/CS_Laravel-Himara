@extends('layouts.app')

@section('content')
    <div class="my-6 sm:px-6 lg:px-8">
        <h1 class="text-[#D7D8D9] text-6xl font-bold uppercase leading-tight">Users</h1>

        <div class="p-6 border-b grid grid-cols-3 border-gray-200 gap-3">

            @foreach ($users as $user)
                <div class="p-3 border-b bg-white border-gray-200 flex justify-between items-center">
                    <div class='flex items-center gap-3'>
                        <div class='w-16 h-16 object-fit rounded-full border bg-slate-300'>
                            @if ($user->profile_pic != null)
                                <img src="/images/users/{{ $user->profile_pic }}" alt="User profile picture"
                                    class='rounded-full'>
                            @endif
                        </div>
                        <div>
                            <h2 class='capitalize text-slate-600 text-lg'>{{ $user->first_name }} {{ $user->last_name }}
                            </h2>

                            {{-- Changer le rôle d'un membre --}}
                            <form action="/admin/{{ $user->id }}" method="post">
                                @csrf
                                @method('patch')

                                <select name="role" class='capitalize'>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}"
                                            {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->role }}</option>
                                    @endforeach
                                </select>

                        </div>
                    </div>

                    <div class='flex flex-col justify-between gap-1'>
                        <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222]'>Update</button>
                        </form>
                        {{-- Delete --}}
                        <form action="/admin/{{ $user->id }}" method='post' class='text-center'>
                            @csrf
                            @method('delete')
                            <button class='text-red-600 rounded-sm hover:underline'>delete</button>
                        </form>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
