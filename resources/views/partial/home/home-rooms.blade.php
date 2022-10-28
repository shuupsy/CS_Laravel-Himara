<section class="rooms gray">
    <div class="container">
        <div class="section-title">
            <h4>OUR <span class="text-himara">ROOMS</span></h4>
            <p class="section-subtitle">Our favorite rooms</p>
            <a href="/rooms" class="view-all">View all rooms</a>
        </div>

        <div class="row">
            <!-- Liste de rooms -->
            @foreach ($rooms as $room)
                <div class="col-md-4">
                    <div class="room-grid-item">
                        <figure class="gradient-overlay-hover link-icon">
                            <a href="/rooms/{{ $room->id }}">
                                <img src="/images/rooms/{{ $room->photo }}" class="img-fluid" alt="Image">
                            </a>
                            <div class="room-services">
                                {{-- Options --}}
                                @foreach ($room->option_room as $option)
                                    {{-- Option - Breakfast --}}
                                    @if ($option->id == 4)
                                        <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover"
                                            data-placement="right" data-trigger="hover"
                                            data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                    @endif
                                    {{-- Option - Wifi --}}
                                    @if ($option->id == 3)
                                        <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover"
                                            data-placement="right" data-trigger="hover" data-content="Free WiFi"
                                            data-original-title="WiFi"></i>
                                    @endif
                                    {{-- Option - TV --}}
                                    @if ($option->id == 7)
                                        <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                            data-trigger="hover" data-content="Plasma TV with cable channels"
                                            data-original-title="TV"></i>
                                    @endif
                                @endforeach
                            </div>

                            {{-- Price --}}
                            <div class="room-price">
                               
                                @if ($room->in_Sale != null)
                                    <span class='promo'>€{{ $room->price }}</span>
                                    <span class='promo-on'>€{{ $room->price * (1 - $room->in_Sale / 100) }}</span>
                                    @else
                                    €{{ $room->price }}
                                @endif
                                / night
                            </div>
                        </figure>

                        {{-- Category --}}

                        <div class="room-info">
                            <h2 class="room-title">
                                <a href="/rooms/{{ $room->id }}">{{ $room->room_category->category }} Room</a>
                            </h2>
                            <p>Enjoy our {{ $room->room_category->category }} room</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
