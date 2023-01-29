@extends('layouts.index')

@section('content')
{{-- {{dd( preg_replace("/\s+/", '+', $hotel->address) )}} --}}
    <main class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-title">
                        <h4>CONTACT US</h4>
                        <p class="section-subtitle">Let’s Talk</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus sit, fugiat at in assumenda
                        corrupti autem iste eveniet eaque vitae beatae tenetur, voluptatem eius. Numquam.</p>
                    <!-- CONTACT FORM -->
                    <form action="/contact" method="post">
                        @csrf
                        {{-- Name --}}
                        <div class="form-group">
                            <input class="form-control" name="name" placeholder="Name" type="text"
                                @auth
value="{{ auth()->user()->last_name }}"
                            readonly
                            @else
                            value="{{ old('name') }}" @endauth>
                        </div>

                        {{-- Email --}}
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="Email" type="email"
                                @auth
value="{{ auth()->user()->email }}"
                            readonly
                            @else
                            value="{{ old('email') }}" @endauth>
                        </div>

                        {{-- Phone --}}
                        <div class="form-group">
                            <input class="form-control" name="phone" placeholder="Phone" type="text">
                        </div>

                        {{-- Subject --}}
                        <div class="form-group">
                            <input class="form-control" name="subject" placeholder="Subject" type="text" required>
                        </div>

                        {{-- Message --}}
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn mt30">SEND YOUR MESSAGE</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="google-map">
                            <div class="toggle-streetview" id="openStreetView">
                                <i class="fa fa-street-view" aria-hidden="true"></i>
                            </div>
                            <div id="map-canvass">
                                <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen
                                    referrerpolicy="no-referrer-when-downgrade"
                                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDAcyvTTVQCy2xkeqTr3VurkWbyz_Lu61M
                                        &q={{preg_replace("/\s+/", '+', $hotel->address)}}">
                                </iframe>
                            </div>
                        </div>
                        <div class="contact-details mt75">
                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <a href="#" class='overflow-hidden'>
                                            <i class="fa fa-map-marker"></i>
                                            <span id='hotel-address'>{{ $hotel->address }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                            {{ $hotel->email }}</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-phone"></i>
                                            {{ $hotel->phone }}</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fax"></i>
                                            {{ $hotel->fax }}</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-globe"></i>
                                            {{ $hotel->url }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="social-media mt50">
                                <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                                <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="#">
                                    <i class="fa fa-youtube"></i>
                                </a>
                                <a class="tripadvisor" data-original-title="Tripadvisor" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-tripadvisor"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
