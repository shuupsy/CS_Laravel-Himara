<section class="services">
    <div class="container">
        <div class="section-title">
            <h4>{{ $hotel->name }}. <span class="text-himara">SERVICES</span></h4>
            <p class="section-subtitle">Check out our awesome services</p>
        </div>
        <div class="row">
            {{-- Carousel - Images --}}
            <div class="col-lg-7 col-12">
                <div data-slider-id="services" class="services-owl owl-carousel">
                    @foreach ($services as $service)
                        <figure class="gradient-overlay">
                            <img src="/images/services/{{ $service->image }}" class="img-fluid" alt="Image">
                            <figcaption>
                                <h4>{{ $service -> title }}</h4>
                            </figcaption>
                        </figure>
                    @endforeach
                </div>
            </div>

            {{-- Carousel - Description --}}
            <div class="col-lg-5 col-12">
                <div class="owl-thumbs" data-slider-id="services">
                    @foreach ($services as $service)
                        <div class="owl-thumb-item">
                            <span class="media-left">
                                <i class="{{ $service -> logo -> logo }}"></i>
                            </span>
                            <div class="media-body">
                                <h5>{{ $service -> title }}</h5>
                                <p>{{ $service -> description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
