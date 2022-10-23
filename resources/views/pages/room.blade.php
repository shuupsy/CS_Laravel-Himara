@extends('layouts.index')

@section('title')
    {{ $room->name }}
@endsection

@section('content')
    <main class="room">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <!-- ROOM SLIDER -->
                    <div class="room-slider">
                        <div id="room-main-image" class="owl-carousel image-gallery">
                            <!-- ITEM -->
                            @foreach ($photos as $photo)
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href="/images/rooms/{{ $photo->photo }}">
                                            <img class="img-fluid" src="/images/rooms/{{ $photo->photo }}" alt="Image">
                                        </a>
                                    </figure>
                                </div>
                            @endforeach

                        </div>

                        <div id="room-thumbs" class="room-thumbs owl-carousel">
                            <!-- ITEM -->
                            @foreach ($photos as $photo)
                                <div class="item"><img class="img-fluid" src="/images/rooms/{{ $photo->photo }}"
                                        alt="Image">
                                </div>
                            @endforeach

                        </div>
                    </div>

                    {{-- Description 1 --}}
                    @if ($descriptions != null && $descriptions->description1 != null)
                        <p class="dropcap">{!! $descriptions->description1 !!}
                        </p>
                    @endif

                    {{-- Description 2 --}}
                    @if ($descriptions != null && $descriptions->description2 != null)
                        <p>{!! $descriptions->description2 !!}</p>
                    @endif

                    <div class="section-title sm">
                        <h4>ROOM SERVICES</h4>
                        <p class="section-subtitle">{{ $room->name }} Includes</p>
                    </div>
                    {{-- Liste - OPTIONS --}}
                    <div class="room-services-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="list-unstyled">
                                    @foreach ($options as $option)
                                        {!! $room->option_room->contains($option->id)
                                            ? '<li><i class="fa fa-check"></i>'
                                            : '<li class="no"><i class="fa fa-times"></i>' !!}
                                        {{ $option->option_name }}
                                        </li>

                                        {{-- Si première loop --}}
                                        @if ($loop->first)
                                            <li>
                                                <i class="fa fa-check"></i>
                                                {{ $room->surface }} sq mt
                                            </li>
                                            <li>
                                                <i class="fa fa-check"></i>
                                                {{ $room->nb_persons }} persons
                                            </li>
                                        @endif

                                        @if ($loop->iteration == 2 || $loop->iteration == 6)
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="list-unstyled">
                                    @endif
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>


                    {{-- Description 3 --}}
                    @if ($descriptions != null && $descriptions->description3 != null)
                        <p>{!! $descriptions->description3 !!}</p>
                    @endif

                    {{-- Description 4 --}}
                    @if ($descriptions != null && $descriptions->description4 != null)
                        <p>{!! $descriptions->description4 !!}</p>
                    @endif

                    <!-- ROOM REVIEWS -->
                    @if (count($reviews) != 0)
                        <div id="room-reviews" class="room-reviews">
                            <div class="section-title sm">
                                <h4>ROOM REVIEWS</h4>
                                <p class="section-subtitle">What our guests are saying about us</p>
                            </div>
                            <div class="rating-details">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="review-summary">
                                            <div class="average">{{ round($average, 1) }}</div>
                                            <div class="rating">
                                                @if (floor($average) > 0)
                                                    {{-- Mettre le nombre d'étoiles correspondantes à la moyenne des notes --}}
                                                    @for ($i = floor($average); $i > 0; $i--)
                                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                                    @endfor
                                                @endif
                                            </div>
                                            <small>Based on {{ count($reviews) }} rating(s)</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <!-- ITEM -->
                                        @for ($i = 5; $i > 0; $i--)
                                            <div class="progress-item">
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-2 col-3">
                                                        <div class="progress-stars">{{ $i }} star</div>
                                                    </div>
                                                    <div class="col-lg-9 col-sm-9 col-8">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: {{ round((count($reviews->where('rating', $i)) * 100) / count($reviews), 1) }}%"
                                                                aria-valuenow="{{ round((count($reviews->where('rating', $i)) * 100) / count($reviews), 1) }}"
                                                                aria-valuemin="0" aria-valuemax="100">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1 col-sm-1 col-1">
                                                        <div class="progress-value">
                                                            {{ round((count($reviews->where('rating', $i)) * 100) / count($reviews), 1) }}%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>

                            {{-- Avis détaillés --}}
                            @foreach ($reviews as $review)
                                <div class="review-box">
                                    <figure class="review-author">
                                            <img src="/images/users/{{ $review->booking->user->profile_pic }}"
                                                alt="Profile Picture User">
                                    </figure>
                                    <div class="review-contentt">
                                        <div class="rating">
                                            @if ($review->rating > 0)
                                                {{-- Mettre le nombre d'étoiles correspondantes à la note --}}
                                                @for ($i = $review->rating; $i > 0; $i--)
                                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                                @endfor
                                                {{-- Si la note est inférieure à 5, rajouter étoile(s) grise(s) --}}
                                                @if ($review->rating < 5)
                                                    @for ($i = $review->rating; $i < 5; $i++)
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    @endfor
                                                @endif
                                            @endif

                                        </div>
                                        <div class="review-info">
                                            {{ $review->booking->user->first_name }} {{ $review->booking->user->last_name }} –
                                            {{ $review->created_at->format('F d, Y') }}
                                        </div>
                                        <div class="review-text">
                                            <p>{{ $review->review }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    @endif

                    {{-- Similar rooms --}}
                    <div class="similar-rooms">
                        <div class="section-title sm">
                            <h4>SIMILAR ROOMS</h4>
                            <p class="section-subtitle">Leave your review</p>
                        </div>
                        <div class="row">
                            @foreach ($similar as $s)
                                {{-- 3 Rooms similaires --}}
                                <div class="col-lg-4">
                                    <div class="room-grid-item">
                                        <figure class="gradient-overlay-hover link-icon">
                                            <a href="/rooms/{{$s->id}}">
                                                <img src="/images/rooms/{{ $s->photo }}" class="img-fluid"
                                                    alt="Image">
                                            </a>
                                            {{-- Options --}}
                                            <div class="room-services">
                                                @foreach ($s->option_room as $option)
                                                    {{-- Option - Breakfast --}}
                                                    @if ($option->id == 4)
                                                        <i class="fa fa-coffee" data-toggle="popover" data-placement="top"
                                                            data-trigger="hover" data-content="Breakfast Included"
                                                            data-original-title="Breakfast"></i>
                                                    @endif
                                                    {{-- Option - Wifi --}}
                                                    @if ($option->id == 3)
                                                        <i class="fa fa-wifi" data-toggle="popover" data-placement="top"
                                                            data-trigger="hover" data-content="Free WiFi"
                                                            data-original-title="WiFi"></i>
                                                    @endif
                                                    {{-- Option - TV --}}
                                                    @if ($option->id == 7)
                                                        <i class="fa fa-television" data-toggle="popover"
                                                            data-placement="top" data-trigger="hover"
                                                            data-content="Plasma TV with cable channels"
                                                            data-original-title="TV"></i>
                                                    @endif
                                                @endforeach

                                            </div>
                                            <div class="room-price">€{{ $s->price }} / night</div>
                                        </figure>
                                        <div class="room-info">
                                            <h2 class="room-title">
                                                <a href="room.html">{{ $s->name }}</a>
                                            </h2>
                                            <p>Enjoy our {{ $s->room_category->category }} room</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- SIDEBAR -->
                <div class="col-lg-3 col-12">
                    <div class="sidebar">
                        <!-- WIDGET -->
                        <aside class="widget noborder">
                            <div class="vertical-booking-form">
                                <div id="booking-notification" class="notification"></div>
                                <h3 class="form-title">BOOK YOUR ROOM</h3>
                                <div class="inner">
                                    <form action='/booking-form' method="post">
                                        @csrf

                                        <input name="userid" class='d-none' value="{{ auth()->user()->id }}">
                                        <!-- EMAIL -->
                                        <div class="form-group">
                                            <input class="form-control" name="booking-email" type="email"
                                                placeholder="Your Email Address"
                                                @auth value="{{ auth()->user()->email }}" disabled @endauth>
                                        </div>
                                        <!-- ROOM TYPE -->
                                        <div class="form-group">
                                            <select class="form-control" name="roomtype" title="Select Room Type"
                                                data-header="Room Type" readonly>
                                                <option value="{{ $room->id }}" selected="selected" readonly>
                                                    {{ $room->room_category->category }} Room</option>
                                            </select>
                                        </div>
                                        <!-- DATE -->
                                        <div class="form-group">
                                            <div class="form_date">
                                                <input type="text" class="datepicker form-control"
                                                    name="booking-checkin" placeholder="Slect Arrival & Departure Date"
                                                    readonly="readonly">
                                            </div>
                                        </div>
                                        <!-- GUESTS -->
                                        <div class="form-group">
                                            <div class="panel-dropdown">
                                                <div class="form-control guestspicker">Guests
                                                    <span class="gueststotal"></span>
                                                </div>
                                                <div class="panel-dropdown-content">
                                                    <div class="guests-buttons">
                                                        <label>Adults
                                                            <a href="#" title="" data-toggle="popover"
                                                                data-placement="top" data-trigger="hover"
                                                                data-content="18+ years" data-original-title="Adults">
                                                                <i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </label>
                                                        <div class="guests-button">
                                                            <div class="minus"></div>
                                                            <input type="text" name="booking-adults"
                                                                class="booking-guests" value="0">
                                                            <div class="plus"></div>
                                                        </div>
                                                    </div>
                                                    <div class="guests-buttons">
                                                        <label>Cildren
                                                            <a href="#" title="" data-toggle="popover"
                                                                data-placement="top" data-trigger="hover"
                                                                data-content="Under 18 years"
                                                                data-original-title="Children">
                                                                <i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </label>
                                                        <div class="guests-button">
                                                            <div class="minus"></div>
                                                            <input type="text" name="booking-children"
                                                                class="booking-guests" value="0">
                                                            <div class="plus"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- BOOKING BUTTON -->
                                        <button type="submit" class="btn btn-dark btn-fw mt20 mb20">BOOK A
                                            ROOM</button>
                                    </form>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
