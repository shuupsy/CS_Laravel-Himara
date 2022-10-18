@extends('layouts.app')

@section('content')
    <div class="my-6 sm:px-6 lg:px-8">
        <h1 class="text-[#D7D8D9] text-6xl font-bold uppercase leading-tight">Update</h1>
        <div class="p-6 border-b bg-white border-gray-200">
            <h1 class='text-2xl text-[#D8BA8D] my-1 font-semibold'>ROOM : {{ $room->name }}</h1>
        </div>
    </div>
@endsection
