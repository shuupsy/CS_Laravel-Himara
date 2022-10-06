<section class="restaurant image-bg parallax gradient-overlay op5" data-src="images/restaurant.jpg" data-parallax="scroll"
    data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0" id='restaurant'>
    <div class="container">
        <div class="section-title">
            <h4>{{ $hotel->name }}. RESTAURANT</h4>
            <p class="section-subtitle">Live a gourmet dining experience</p>
        </div>

        {{-- Liste de plats --}}
        <div class="row">
            @foreach ($dishes as $dish)
                <div class="col-md-6 col-sm-6 col-6">
                    <div class="restaurant-menu-item">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <figure>
                                    <img src="{{ $dish->photo }}" class="img-fluid " alt="Image">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-12">
                                <div class="info">
                                    <div class="title">
                                        <span class="name">{{ $dish -> title }}</span>
                                        <span class="price">
                                            <span class="amount">€{{ $dish->price }}</span>
                                        </span>
                                    </div>
                                    <p>{{ $dish->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

        </div>
        <div class="d-flex justify-content-center">{!! $dishes ->links() !!}</div>
    </div>
</section>
