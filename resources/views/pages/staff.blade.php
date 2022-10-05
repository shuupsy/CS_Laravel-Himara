@extends('layouts.index')

@section('content')
    <main class="location-page">
        <div class="container">
            <div class="row">
                <!-- CEO -->
                <div class="col-lg-3 col-md-6">
                    <div class="staff-item">
                        <figure>
                            <img src="images/staff/staff1.jpg" class="img-fluid" alt="Image">
                            <div class="position">{{ $boss -> job }}</div>
                        </figure>
                        <div class="details">
                            <h5>{{ $boss -> first_name }} {{ $boss-> last_name }}</h5>
                            <p>{{ $boss -> description}}</p>
                        </div>
                    </div>
                </div>
                <!-- Members -->
                @foreach ($staffmembers as $member)
                <div class="col-lg-3 col-md-6">
                    <div class="staff-item">
                        <figure>
                            <img src="images/staff/staff1.jpg" class="img-fluid" alt="Image">
                            <div class="position">{{ $member -> job }}</div>
                        </figure>
                        <div class="details">
                            <h5>{{ $member -> first_name }} {{ $member-> last_name }}</h5>
                            <p>{{ $member -> description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </main>
@endsection
