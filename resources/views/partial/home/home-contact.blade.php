<section class="contact-v2 gray">
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
                        <a href="mailto:info@site.com">c{{ $hotel->email }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <div class="section-title">
                    <h4>CONTACT US</h4>
                    <p class="section-subtitle">Say hello</p>
                </div>
                <form id="contact-form" name="contact-form">
                    <div class="form-group">
                        <input class="form-control" name="name" placeholder="Your Name" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" type="email" placeholder="Your Email Address">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                    </div>
                    <button class="btn" type="submit">
                        <i class="fa fa-location-arrow"></i>Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
