@extends('layouts.index')

@section('content')
    <main class="room">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <!-- ROOM SLIDER -->
                    <div class="room-slider">
                        <div id="room-main-image" class="owl-carousel image-gallery">
                            <!-- ITEM -->
                            @foreach ($room->room_photos as $photo)
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href="/images/rooms/{{ $photo->photo_path }}">
                                            <img class="img-fluid" src="/images/rooms/{{ $photo->photo_path }}"
                                                alt="Image">
                                        </a>
                                    </figure>
                                </div>
                            @endforeach

                        </div>

                        <div id="room-thumbs" class="room-thumbs owl-carousel">
                            <!-- ITEM -->
                            @foreach ($room->room_photos as $photo)
                                <div class="item"><img class="img-fluid" src="images/rooms/{{ $photo->photo_path }}"
                                        alt="Image">
                                </div>

                            @endforeach

                        </div>
                    </div>
                    {{-- Description 1a --}}
                    <p class="dropcap">{!! $room->room_descriptions->description1a !!}
                    </p>
                    {{-- Description 1b --}}
                    <p>
                        {!! $room->room_descriptions->description1b !!}
                    </p>
                    <div class="section-title sm">
                        <h4>ROOM SERVICES</h4>
                        <p class="section-subtitle">{{ $room->name }} Includes</p>
                    </div>
                    {{-- Lsite - OPTIONS --}}
                    <div class="room-services-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="list-unstyled">
                                    {{-- Type de lit --}}
                                    <li>
                                        <i class="fa fa-check"></i>Double Bed
                                    </li>
                                    {{-- Surface --}}
                                    <li>
                                        <i class="fa fa-check"></i>{{ $room->surface }} Sq mt
                                    </li>
                                    {{-- Nombre personnes --}}
                                    <li>
                                        <i class="fa fa-check"></i>{{ $room->nb_persons }} Persons
                                    </li>

                                    @foreach ($options as $option)
                                        {!! $room->room_options->contains($option->id)
                                            ? '<li><i class="fa fa-check"></i>'
                                            : '<li class="no"><i class="fa fa-times"></i>' !!}
                                        {{ $option->option_name }}
                                        </li>
                                    @endforeach


                                    <li>
                                        <i class="fa fa-check"></i>Free Internet
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fa fa-check"></i>Free Wi-Fi
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>Breakfast Include
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>Private Balcony
                                    </li>
                                    <li class="no">
                                        <i class="fa fa-times"></i>Free Newspaper
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    {{-- Description 2a --}}
                    <p>{!! $room->room_descriptions->description2a !!}
                    </p>
                    {{-- Description 2b --}}
                    <p>{!! $room->room_descriptions->description2b !!}
                    </p>
                    <!-- ROOM REVIEWS -->
                    <div id="room-reviews" class="room-reviews">
                        <div class="section-title sm">
                            <h4>ROOM REVIEWS</h4>
                            <p class="section-subtitle">What our guests are saying about us</p>
                        </div>
                        <div class="rating-details">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="review-summary">
                                        <div class="average">4.9</div>
                                        <div class="rating">
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <small>Based on 3 ratings</small>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <!-- ITEM -->
                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">5 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 91%"
                                                        aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">91%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">4 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">3 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-2 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 8%"
                                                        aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">8%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">2 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">1 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-box">
                            <figure class="review-author">
                                <img src="images/users/user1.jpg" alt="Image">
                            </figure>
                            <div class="review-contentt">
                                <div class="rating">
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="review-info">
                                    Marlene Simpson – February 03, 2018
                                </div>
                                <div class="review-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quis rem esse
                                        quaerat eius labore repellendus, odit officia, quas provident reprehenderit magnam
                                        adipisci inventore quibusdam est architecto nisi.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End review-box -->
                        <div class="review-box clearfix">
                            <figure class="review-author">
                                <img src="images/users/user2.jpg" alt="Image">
                            </figure>
                            <div class="review-contentt">
                                <div class="rating">
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                </div>
                                <div class="review-info">
                                    Brad Knight – January 17, 2018
                                </div>
                                <div class="review-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium omnis, eius
                                        impedit cum. Necessitatibus illum veritatis, consequatur quia itaque tenetur
                                        recusandae nostrum quod aperiam.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End review-box -->
                        <div class="review-box clearfix">
                            <figure class="review-author">
                                <img src="images/users/user3.jpg" alt="Image">
                            </figure>
                            <div class="review-contentt">
                                <div class="rating">
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                </div>
                                <div class="review-info">
                                    Daryl Phillips – August 16, 2017
                                </div>
                                <div class="review-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim id, facere porro.
                                        Ipsum quia maxime atque adipisci inventore dolor nesciunt, molestias voluptatum, ab
                                        dignissimos! Alias.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="similar-rooms">
                        <div class="section-title sm">
                            <h4>SIMILAR ROOMS</h4>
                            <p class="section-subtitle">Leave your review</p>
                        </div>
                        <div class="row">
                            <!-- ITEM -->
                            <div class="col-lg-4">
                                <div class="room-grid-item">
                                    <figure class="gradient-overlay-hover link-icon">
                                        <a href="room.html">
                                            <img src="images/rooms/single/single1.jpg" class="img-fluid" alt="Image">
                                        </a>
                                        <div class="room-services">
                                            <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover"
                                                data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover" data-content="Free WiFi"
                                                data-original-title="WiFi"></i>
                                            <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                                data-trigger="hover" data-content="Plasma TV with cable channels"
                                                data-original-title="TV"></i>
                                        </div>
                                        <div class="room-price">€89 / night</div>
                                    </figure>
                                    <div class="room-info">
                                        <h2 class="room-title">
                                            <a href="room.html">Tanger</a>
                                        </h2>
                                        <p>Enjoy our single room</p>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM -->
                            <div class="col-lg-4">
                                <div class="room-grid-item">
                                    <figure class="gradient-overlay-hover link-icon">
                                        <a href="room.html">
                                            <img src="images/rooms/double/double.jpg" class="img-fluid" alt="Image">
                                        </a>
                                        <div class="room-services">
                                            <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover"
                                                data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover" data-content="Free WiFi"
                                                data-original-title="WiFi"></i>
                                            <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                                data-trigger="hover" data-content="Plasma TV with cable channels"
                                                data-original-title="TV"></i>
                                        </div>
                                        <div class="room-price">€129 / night</div>
                                    </figure>
                                    <div class="room-info">
                                        <h2 class="room-title">
                                            <a href="room.html">Paris</a>
                                        </h2>
                                        <p>Enjoy our double room</p>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM -->
                            <div class="col-lg-4">
                                <div class="room-grid-item">
                                    <figure class="gradient-overlay-hover link-icon">
                                        <a href="room.html">
                                            <img src="images/rooms/deluxe/deluxe.jpg" class="img-fluid" alt="Image">
                                        </a>
                                        <div class="room-services">
                                            <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover"
                                                data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                            <i class="fa fa-bath" data-toggle="popover" data-placement="right"
                                                data-trigger="hover" data-content="2 Bathrooms"
                                                data-original-title="Bathroom"></i>
                                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover" data-content="Free WiFi"
                                                data-original-title="WiFi"></i>
                                            <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                                data-trigger="hover" data-content="Plasma TV with cable channels"
                                                data-original-title="TV"></i>
                                        </div>
                                        <div class="room-price">€189 / night</div>
                                    </figure>
                                    <div class="room-info">
                                        <h2 class="room-title">
                                            <a href="room.html">Tokyo</a>
                                        </h2>
                                        <p>Enjoy our delux room</p>
                                    </div>
                                </div>
                            </div>
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
                                    <form id="booking-form">
                                        <!-- EMAIL -->
                                        <div class="form-group">
                                            <input class="form-control" name="booking-email" type="email"
                                                placeholder="Your Email Address"
                                                @auth
value="{{ auth()->user()->email }}" disabled @endauth>
                                        </div>
                                        <!-- ROOM TYPE -->
                                        <div class="form-group">
                                            <select class="form-control" name="booking-roomtype" title="Select Room Type"
                                                data-header="Room Type" disabled="disabled">
                                                <option value="Single" selected="selected">Single Room</option>
                                                <option value="Double">Double Room</option>
                                                <option value="Deluxe">Deluxe Room</option>
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
                                        <button type="submit" class="btn btn-dark btn-fw mt20 mb20">BOOK A ROOM</button>
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
