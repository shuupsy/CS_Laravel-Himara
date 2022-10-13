<div id="rev-slider-1" class="rev_slider gradient-slider" style="display:none" data-version="5.4.5">
    <ul>
        @foreach ($sliders as $slider)
            <li data-transition="crossfade">
                <!-- MAIN IMAGE -->
                <img src="/images/slider/{{ $slider->background_img }}" alt="Image" title="Image"
                    data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                    class="rev-slidebg" data-no-retina="">
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
                            {{ $slider->layer3 }}
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
    </ul>
</div>
