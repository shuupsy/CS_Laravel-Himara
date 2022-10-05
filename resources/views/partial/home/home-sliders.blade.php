<div class="slider">
    <div id="rev-slider-1" class="rev_slider gradient-slider" style="display:none" data-version="5.4.5">
        <ul>
            @foreach ($sliders as $slider)
                <!-- SLIDE NR. 1 -->
                <li data-transition="crossfade">
                    <!-- MAIN IMAGE -->
                    <img src="{{ $slider->background_img }}" alt="Image" title="Image" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                        data-no-retina="">
                    <!-- LAYER NR. 1 -->
                    <h1 class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="320" data-voffset=""
                        data-responsive_offset="on" data-fontsize="['80','50','40','30']"
                        data-lineheight="['60','50','40','30']" data-whitespace="nowrap"
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 5; color: #fff; font-weight: 900;">
                        {{ $slider->layer1 }}</h1>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="410" data-voffset=""
                        data-responsive_offset="on" data-fontsize="16" data-lineheight="16" data-whitespace="nowrap"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 6; color: #fff;">
                        {{ $slider->layer2 }} {{ $hotel->name }}</div>


                        <!-- LAYER NR. 3 -->
                    @if ($slider->layer3 != null)
                    <div class="tp-caption" data-x="center" data-hoffset="-120" data-y="480" data-voffset=""
                        data-responsive_offset="on" data-whitespace="nowrap"
                        data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 11;">
                        <a class="btn" href="/booking-form">
                            <i class="fa fa-calendar"></i>
                            BOOK A ROOM NOW
                        </a>
                    </div>
                    @endif

                    <!-- LAYER NR. 4 -->
                    @if ($slider->layer4 != null)
                        <div class="tp-caption" data-x="center" data-hoffset="128" data-y="480" data-voffset=""
                            data-responsive_offset="on" data-whitespace="nowrap"
                            data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 11;">
                            <a class="btn" href="/contact">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                CONTACT US NOW
                            </a>
                        </div>
                    @endif

                    <!-- LAYER NR. 5 -->
                    @if ($slider->layer5 != null)
                        <div class="tp-caption tp_m_title tp-resizeme" data-x="center" data-hoffset="" data-y="200"
                            data-voffset="" data-responsive_offset="on" data-fontsize="['18','18','16','16']"
                            data-lineheight="['18','18','16','16']" data-whitespace="nowrap"
                            data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="color: #fff">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>'
                        </div>
                    @endif

                    <!-- LAYER NR. 6 -->
                    @if ($slider->layer6 != null)
                        <div class="tp-caption tp_m_title tp-resizeme" data-x="center" data-hoffset="" data-y="240"
                            data-voffset="" data-responsive_offset="on" data-fontsize="['25','25','18','18']"
                            data-lineheight="['25','25','18','18']" data-whitespace="nowrap"
                            data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="color: #fff">
                            {!! $slider->layer6 !!}
                        </div>
                    @endif
                </li>
            @endforeach

            {{-- <!-- SLIDE NR. 2 -->
            <li data-transition="crossfade">
                <!-- MAIN IMAGE -->
                <img src="images/slider/slider3.jpg" alt="Image" title="Image" data-bgposition="center center"
                    data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                    data-no-retina="">
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="320" data-voffset=""
                    data-responsive_offset="on" data-fontsize="['70','50','40','25']"
                    data-lineheight="['60','50','40','25']" data-whitespace="nowrap"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                    style="z-index: 5; color: #fff; font-weight: 900;">WHERE DREAMS COME TRUE
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="410" data-voffset=""
                    data-responsive_offset="on" data-fontsize="16" data-lineheight="16" data-whitespace="nowrap"
                    data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                    style="z-index: 6; color: #fff;">You'll Never Forget Your Stay
                </div>
            </li>
            <!-- SLIDE NR. 3 -->
            <li data-transition="crossfade">
                <!-- MAIN IMAGE -->
                <img src="images/slider/slider13.jpg" alt="Image" title="Image" data-bgposition="center center"
                    data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                    data-no-retina="">
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="305" data-voffset=""
                    data-responsive_offset="on" data-fontsize="['80','70','60','40']"
                    data-lineheight="['80','70','60','40']" data-whitespace="nowrap"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                    style="z-index: 5; color: #fff; font-weight: 900;">ENJOY YOUR HOLIDAYS
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="410" data-voffset=""
                    data-responsive_offset="on" data-fontsize="16" data-lineheight="16" data-whitespace="nowrap"
                    data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                    style="z-index: 6; color: #fff;">Family Room from €89 per night
                </div>
            </li> --}}
        </ul>
    </div>
    <!-- ========== BOOKING FORM ========== -->
    <div class="horizontal-booking-form">
        <div class="container">
            <div class="inner box-shadow-007">
                <!-- ========== BOOKING NOTIFICATION ========== -->
                <div id="booking-notification" class="notification"></div>
                <form id="booking-form">
                    <!-- NAME -->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Name
                                    <a href="#" title="Your Name" data-toggle="popover" data-placement="top"
                                        data-trigger="hover" data-content="Please type your first name and last name">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <input class="form-control" name="booking-name" type="text" data-trigger="hover"
                                    placeholder="Write Your Name">
                            </div>
                        </div>
                        <!-- EMAIL -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Email
                                    <a href="#" title="Your Email" data-toggle="popover" data-placement="top"
                                        data-trigger="hover" data-content="Please type your email adress">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <input class="form-control" name="booking-email" type="email"
                                    placeholder="Write your Email">
                            </div>
                        </div>
                        <!-- ROOM TYPE -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Room Type
                                    <a href="#" title="Room Type" data-toggle="popover" data-placement="top"
                                        data-trigger="hover" data-content="Please select room type">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <select class="form-control" name="booking-roomtype" title="Select Room Type"
                                    data-header="Room Type">
                                    <option value="Single">Single Room</option>
                                    <option value="Double">Double Room</option>
                                    <option value="Deluxe">Deluxe Room</option>
                                </select>
                            </div>
                        </div>
                        <!-- DATE -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Check-In/Out
                                    <a href="#" title="Check-In / Check-Out" data-toggle="popover"
                                        data-placement="top" data-trigger="hover"
                                        data-content="Please select check-in and check-out date <br>*Check In from 11:00am">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <input type="text" class="datepicker form-control" name="booking-date"
                                    placeholder="Arrival & Departure" readonly="readonly">
                            </div>
                        </div>
                        <!-- GUESTS -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Guests
                                    <a href="#" title="Guests" data-toggle="popover" data-placement="top"
                                        data-trigger="hover" data-content="Please Select Adults / Children">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <div class="panel-dropdown">
                                    <div class="form-control guestspicker">Guests
                                        <span class="gueststotal"></span>
                                    </div>
                                    <div class="panel-dropdown-content">
                                        <div class="guests-buttons">
                                            <label>Adults
                                                <a href="#" title="" data-toggle="popover"
                                                    data-placement="top" data-trigger="hover"
                                                    data-content="18+ years" data-original-title="Adults">
                                                    <i class="fa fa-info-circle"></i>
                                                </a>
                                            </label>
                                            <div class="guests-button">
                                                <div class="minus"></div>
                                                <input type="text" name="booking-adults" class="booking-guests"
                                                    value="0">
                                                <div class="plus"></div>
                                            </div>
                                        </div>
                                        <div class="guests-buttons">
                                            <label>Cildren
                                                <a href="#" title="" data-toggle="popover"
                                                    data-placement="top" data-trigger="hover"
                                                    data-content="Under 18 years" data-original-title="Children">
                                                    <i class="fa fa-info-circle"></i>
                                                </a>
                                            </label>
                                            <div class="guests-button">
                                                <div class="minus"></div>
                                                <input type="text" name="booking-children" class="booking-guests"
                                                    value="0">
                                                <div class="plus"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- BOOKING BUTTON -->
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-book">BOOK A ROOM</button>
                            <div class="advanced-form-link">
                                <a href="booking-form.html">
                                    Advanced Booking Form
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
