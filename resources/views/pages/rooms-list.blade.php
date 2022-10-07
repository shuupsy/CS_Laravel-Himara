@extends('layouts.index')

@section('content')
    <main class="rooms-list-view">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    {{-- Liste de chambres --}}
                    @foreach ($rooms as $room)
                        <div class="room-list-item">
                            <div class="row">
                                <div class="col-lg-5">
                                    <figure class="gradient-overlay-hover link-icon">
                                        <a href="/rooms/{{ $room->id }}"><img src="{{ $room->mainphoto_path }}"
                                                class="img-fluid" alt="Image {{ $room->name }}"></a>
                                    </figure>
                                </div>
                                <div class="col-lg-5">
                                    <div class="room-info">
                                        <h3 class="room-title">
                                            <a href="/rooms/{{ $room->id }}">{{ $room->name }}</a>
                                        </h3>
                                        {{-- Rating --}}
                                        <span class="room-rates">
                                            @if ($room->rating > 0)
                                                {{-- Mettre le nombre d'étoiles correspondantes à la note --}}
                                                @for ($i = $room->rating; $i > 0; $i--)
                                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                                @endfor

                                                {{-- Si la note est inférieure à 5, rajouter étoile(s) grise(s) --}}
                                                @if ($room->rating < 5)
                                                    @for ($i = $room->rating; $i < 5; $i++)
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    @endfor
                                                @endif
                                            @endif
                                            <a href="room.html#room-reviews">{{ $room->rating }} Based on 3 Ratings</a>
                                        </span>
                                        {{-- Description --}}
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                                        {{-- Room option --}}
                                        <div class="room-services">
                                            @foreach ($room->options as $option)
                                                {{-- Option - Breakfast --}}
                                                @if ($option->id == 4)
                                                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top"
                                                        data-trigger="hover" data-content="Breakfast Included"
                                                        data-original-title="Breakfast"></i>
                                                @endif
                                                {{-- Option - Wifi --}}
                                                @if ($option->id == 3)
                                                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top"
                                                        data-trigger="hover" data-content="Free WiFi"
                                                        data-original-title="WiFi"></i>
                                                @endif
                                                {{-- Option - TV --}}
                                                @if ($option->id == 7)
                                                    <i class="fa fa-television" data-toggle="popover" data-placement="top"
                                                        data-trigger="hover" data-content="Plasma TV with cable channels"
                                                        data-original-title="TV"></i>
                                                @endif
                                            @endforeach


                                            <span>Beds: 1 King</span>
                                            <span>Max Guests: {{ $room->nb_persons }}</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="room-price">
                                        <span class="price">€{{ $room->price }} / night</span>
                                        <a href="/rooms/{{ $room->id }}" class="btn btn-sm">view <br> details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- PAGINATION -->
                    <nav class="pagination">
                        <ul>
                            <li class="prev-pagination">
                                <a href="#">
                                    &nbsp;<i class="fa fa-angle-left"></i>
                                    Previous &nbsp;</a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>...</li>
                            <li>
                                <a href="#">7</a>
                            </li>
                            <li>
                                <a href="#">8</a>
                            </li>
                            <li>
                                <a href="#">9</a>
                            </li>
                            <li class="next_pagination">
                                <a href="#">
                                    &nbsp; Next
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="sidebar">
                        <aside class="widget noborder">
                            <div class="search">
                                <form class="widget-search">
                                    <input type="search" placeholder="Search">
                                    <button class="btn-search" id="searchsubmit" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget">
                            <h4 class="widget-title">CATEGORIES</h4>
                            <ul class="categories">

                                {{-- Liste de catégories --}}
                                @foreach ($room_cats as $cat)
                                    <li>
                                        <a href="#">{{ $cat -> category }} Room<span class="posts-num">{{ $cat->rooms_count }}</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                <a href="#">
                                    <span class="tag">Red</span></a>
                                <a href="#">
                                    <span class="tag">Dark</span></a>
                                <a href="#">
                                    <span class="tag">Yellow</span></a>
                                <a href="#">
                                    <span class="tag">Blue</span></a>
                                <a href="#">
                                    <span class="tag">Pink</span></a>
                                <a href="#">
                                    <span class="tag">Green</span></a>
                                <a href="#">
                                    <span class="tag">Gray</span></a>
                                <a href="#">
                                    <span class="tag">Brown</span></a>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
