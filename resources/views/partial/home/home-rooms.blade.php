<section class="rooms gray">
    <div class="container">
        <div class="section-title">
            <h4>OUR <span class="text-himara">ROOMS</span></h4>
            <p class="section-subtitle">Our favorite rooms</p>
            <a href="/rooms" class="view-all">View all rooms</a>
        </div>
        <div class="row">
            <!-- ITEM -->
            @foreach ($rooms as $room)
                <div class="col-md-4">
                    <div class="room-grid-item">
                        <figure class="gradient-overlay-hover link-icon">
                            <a href="room.html">
                                <img src="{{ $room -> mainphoto_path }}" class="img-fluid" alt="Image">
                            </a>
                            <div class="room-services">
                                <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right"
                                    data-trigger="hover" data-content="Breakfast Included"
                                    data-original-title="Breakfast"></i>
                                <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right"
                                    data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                                <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                    data-trigger="hover" data-content="Plasma TV with cable channels"
                                    data-original-title="TV"></i>
                            </div>
                            <div class="room-price">€{{ $room->price }} / night</div>
                        </figure>
                        <div class="room-info">
                            <h2 class="room-title">
                                <a href="room.html">{{ $room -> category -> category }} Room</a>
                            </h2>
                            <p>Enjoy our {{ $room -> category -> category }} room</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
