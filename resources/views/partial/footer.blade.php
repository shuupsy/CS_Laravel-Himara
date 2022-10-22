<footer>
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <!-- WIDGET -->
                <div class="col-md-3">
                    <div class="footer-widget">
                        <img src="/images/logos/{{ $hotel -> logo }}" class="footer-logo" alt="Hotel {{ $hotel -> name }}">
                        <div class="inner">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, velit placeat
                                assumenda incidunt
                                dolorem aliquam!</p>
                            <a href="https://www.tripadvisor.com/" target="_blank">
                                <div class="tripadvisor-banner">
                                    <span class="review">Recommended</span>
                                    <img src="images/icons/tripadvisor.png" alt="Image">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- WIDGET -->
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3>Rooms available</h3>
                        <div class="inner">
                            <ul class="latest-posts">
                                <li>
                                    <a href="/rooms">Rooms left: {{ count($available)}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- WIDGET -->
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3>USEFUL LINKS</h3>
                        <div class="inner">
                            <ul class="useful-links">
                                <li>
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                                <li>
                                    <a href="shop.html">Shop</a>
                                </li>
                                <li>
                                    <a href="gallery.html">{{ $hotel -> name }} Gallery</a>
                                </li>
                                <li>
                                    <a href="location.html">Our Location</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- WIDGET -->
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3>Contact Info</h3>
                        <div class="inner">
                            <ul class="contact-details">
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    {{ $hotel -> address }}
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    Phone: {{ $hotel -> phone }}
                                </li>
                                <li>
                                    <i class="fa fa-fax"></i>
                                    Fax: {{ $hotel -> fax }}
                                </li>
                                <li>
                                    <i class="fa fa-globe"></i>
                                    Web: {{ $hotel -> url }}
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    Email:
                                    <a href="mailto:info@site.com">{{ $hotel -> email }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SUBFOOTER -->
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyrights">&copy; 2018 Hotel {{ $hotel -> name }}. Designed by
                        <a href="https://eagle-themes.com/" target="_blank">Eagle-Themes</a>.
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="social-media">
                        <a class="facebook" data-original-title="Facebook" data-toggle="tooltip"
                            href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="twitter" data-original-title="Twitter" data-toggle="tooltip"
                            href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip"
                            href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip"
                            href="#">
                            <i class="fa fa-pinterest"></i>
                        </a>
                        <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip"
                            href="#">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a class="youtube" data-original-title="Youtube" data-toggle="tooltip"
                            href="#">
                            <i class="fa fa-youtube"></i>
                        </a>
                        <a class="instagram" data-original-title="Instagram" data-toggle="tooltip"
                            href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
