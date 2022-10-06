<section class="gallery">
    <div class="container">
        <div class="section-title">
            <h4>{{ $hotel->name }}. <span class="text-himara">GALLERY</span></h4>
            <p class="section-subtitle">Check out our image gallery</p>
            <a href="/gallery" class="view-all">View gallery images</a>
        </div>

        {{-- Carousel - Photos --}}
        <div class="gallery-owl owl-carousel image-gallery">
            @foreach ($gallery as $photo)
                <div class="gallery-item">
                    <figure class="gradient-overlay image-icon">
                        <a href="{{ $photo -> photo }}">
                            <img src="{{ $photo -> photo }}" alt="{{ $photo -> title }} Image">
                        </a>
                        <figcaption>{{ $photo -> title }}</figcaption>
                    </figure>
                </div>
            @endforeach
        </div>

    </div>
</section>
