@extends('layouts.app')

@section('new')
    <a href="/admin/rooms/create">
        <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222] uppercase'>Add</button>
    </a>
@endsection

@section('content')
    <hr>
    <div class="my-6 sm:px-6 lg:px-8">
        <h1 class="text-[#D7D8D9] text-6xl font-bold uppercase leading-tight">List of rooms</h1>

        <div class='flex flex-col gap-6'>
            @foreach ($rooms as $room)
                <div class="p-6 border-b bg-white border-gray-200 {{ $room->is_Published ? '' : 'opacity-60' }}">
                    <h1 class='text-2xl text-[#D8BA8D] my-1 font-semibold'>{{ $room->name }} {!! $room->is_Published ? '' : '<span class="text-gray-300">(en attente de confirmation)</span>' !!}</h1>

                    <div class='flex justify-between items-center'>
                        {{-- Main photo --}}
                        <div class='w-1/6 object-cover border'>
                            <img src="/images/rooms/{{ $room->photo }}" alt="">
                        </div>

                        {{-- Infos importantes --}}
                        <div class='flex gap-3 items-center'>
                            <p>Nb persons: <span class='font-bold text-slate-600'>{{ $room->nb_persons }}</span></p>

                            <p class='text-[#D8BA8D]'>|</p>

                            <p class='flex items-center gap-1.5'>Is available ? :
                                @if ($room->is_Available == true)
                                    <i class='bx bxs-check-square text-xl text-green-500'></i>
                                @else
                                    <i class='bx bxs-x-square text-xl text-red-500'></i>
                                @endif
                            </p>

                            <p class='text-[#D8BA8D]'>|</p>

                            <p><span class='font-bold'>{{ $room->price }}</span>€ / night</p>

                            <p class='text-[#D8BA8D]'>|</p>

                            <p class='flex items-center gap-1.5'>Promo :
                                @if ($room->in_Sale == true)
                                    <i class='bx bxs-check-square text-xl text-green-500'></i>
                                @else
                                    <i class='bx bxs-x-square text-xl text-red-500'></i>
                                @endif
                            </p>
                        </div>

                        <div class='flex gap-3'>
                             {{-- Bouton MORE --}}
                             <a href="/admin/rooms/{{ $room->id }}">
                                <button
                                    class='border-[1px] p-2 text-slate-400 hover:text-white hover:bg-zinc-700 rounded-sm transition duration-150 ease-out hover:ease-in'>more</button>
                            </a>
                            
                            @can('high')
                                @if ($room->is_Published == false)
                                    {{-- Bouton Publish --}}
                                    <form action="/admin/rooms/{{ $room->id }}/publish2" method='post'>
                                        @csrf
                                        @method('put')

                                        <button
                                            class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222] uppercase'>Publish</button>
                                    </form>
                                @endif
                                {{-- Bouton DELETE --}}
                                <form action="/admin/rooms/{{ $room->id }}" method='post'>
                                    @csrf
                                    @method('delete')

                                    <button class='bg-red-300 p-2 text-white hover:bg-red-500'>Delete</button>
                                </form>
                            @endcan

                            @if ($room->is_Published == false && auth()->user()->role_id == 3)
                                <button class='bg-gray-300 p-2 text-white'>pending</button>
                            @endif
                        </div>
                    </div>


                </div>
            @endforeach
        </div>


    </div>
@endsection
