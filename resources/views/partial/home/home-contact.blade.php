<section class="contact-v2 gray" id='home-form'>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-title">
                    <h4>GET IN TOUCH</h4>
                    <p class="section-subtitle">Get in touch</p>
                </div>
                <ul class="contact-details">
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        {{ $hotel->address }}
                    </li>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        Phone: {{ $hotel->phone }}
                    </li>
                    <li>
                        <i class="fa fa-fax"></i>
                        Fax: {{ $hotel->fax }}
                    </li>
                    <li>
                        <i class="fa fa-globe"></i>
                        Web: {{ $hotel->url }}
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        Email:
                        <a href="mailto:info@site.com">{{ $hotel->email }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <div class="section-title">
                    <h4>CONTACT US</h4>
                    <p class="section-subtitle">Say hello</p>
                </div>

                {{-- Formulaire contact rapide --}}
                <form action='/contact' method='POST'>
                    @csrf
                    {{-- Name --}}
                    <div class="form-group">
                        <input class="form-control" name="name" placeholder="Your Name" type="text"
                            @auth
                                value="{{ auth()->user()->last_name }}" readonly
                            @else
                                value="{{ old('name') }}"
                            @endauth>
                    </div>

                    {{-- Email --}}
                    <div class="form-group">
                        <input class="form-control" name="email" type="email" placeholder="Your Email Address"
                        @auth
                        value="{{ auth()->user()->email }}" readonly
                    @else
                        value="{{ old('email') }}"
                    @endauth>
                    </div>

                    {{-- Message --}}
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Your Message" value="{{ old('message') }}"></textarea>
                    </div>

                    <button class="btn" type="submit">
                        <i class="fa fa-location-arrow"></i>Send Message</button>
                </form>

            </div>
        </div>
    </div>
</section>
