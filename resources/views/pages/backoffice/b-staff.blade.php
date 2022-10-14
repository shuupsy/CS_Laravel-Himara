@extends('layouts.app')

@section('preview')
    <div class='w-11/12 mx-auto grid grid-cols-3 justify-center gap-3'>
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
@endsection

@section('update')
@endsection
