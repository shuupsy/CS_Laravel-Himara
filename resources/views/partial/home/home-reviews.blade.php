<section class="testimonials gray">
    <div class="container">
        <div class="section-title">
            <h4>OUR GUESTS LOVE US</h4>
            <p class="section-subtitle">What our guests are saying about us</p>
        </div>

        {{-- Carousel - reviews --}}
        <div class="owl-carousel testimonials-owl">
            @foreach ($reviews as $review)
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                             <img alt="Image" class="img-fluid" src="/images/users/{{ $review->booking->user->profile_pic}}"> 
                        </div>

                        <div class="author">
                            <h4 class="name">
                                {{ $review->booking->user->first_name }}
                                {{ $review->booking->user->last_name }}
                            </h4>

                            
                            <div class="location">
                                @if ($review->booking->user->city != null)
                                    {{ $review->booking->user->city }} /
                                @endif
                                    {{ $review->booking->user->country}}
                            </div>
                        </div>
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
                        <p>{{ $review->review }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
