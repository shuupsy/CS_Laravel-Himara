@extends('layouts.app')

@section('preview')
    <section class="services">
        <div class="row">
            {{-- Carousel - Images --}}
            <div class="col-lg-7 col-12">
                <div data-slider-id="services" class="services-owl owl-carousel">
                    @foreach ($services as $service)
                        <figure class="gradient-overlay">
                            <img src="{{ $service->image }}" class="img-fluid" alt="Image">
                            <figcaption>
                                <h4>{{ $service->title }}</h4>
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
                                <i class="{{ $service->logo->logo }}"></i>
                            </span>
                            <div class="media-body">
                                <h5>{{ $service->title }}</h5>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </section>
@endsection

@section('new')
@endsection

@section('update')
@endsection
