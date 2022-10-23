<section class="about mt100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title">
                    <h4 class="text-uppercase">Hotel {{ $hotel->name }}. <span class="text-himara"> since
                            1992</span></h4>
                    <p class="section-subtitle">{{ $about -> subheading }}</p>
                </div>
                <div class="info-branding">
                    <p>{{ $about -> big_description }}</p>
                    <div class="providers">
                        <span>Recommended on:</span>
                        <!-- ITEM -->
                        <div class="item">
                            <a href="#">
                                <img src="/images/providers/provider-1.png" alt="Image">
                            </a>
                        </div>
                        <!-- ITEM -->
                        <div class="item">
                            <a href="#">
                                <img src="/images/providers/provider-2.png" alt="Image">
                            </a>
                        </div>
                        <!-- ITEM -->
                        <div class="item">
                            <a href="#">
                                <img src="/images/providers/provider-3.png" alt="Image">
                            </a>
                        </div>
                        <!-- ITEM -->
                        <div class="item">
                            <a href="#">
                                <img src="/images/providers/provider-4.png" alt="Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="brand-info"
                style="background-image:url('/images/about/{{ $about -> background_img }}')">
                    <div class="inner">
                        <div class="content">
                            <img src="/images/logos/{{ $hotel -> big_logo }}" width="100" alt="Image">
                            <div class="stars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <h5 class="title">{{ $about -> small_title }}</h5>
                            <p class="mt20">{{ $about -> small_description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
