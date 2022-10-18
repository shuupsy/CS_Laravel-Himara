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
                                        <a href="rooms/{{ $room->id }}"><img src="{{ $room->photo }}"
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
                                        <a href="/rooms/{{ $room->id }}" class='a-description'>
                                            <p>{{ substr($room->room_descriptions->description1a, 0, 51) . ' ...' }}</p>
                                        </a>

                                        {{-- Room option --}}
                                        <div class="room-services">
                                            @foreach ($room->room_options as $option)
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
                                        <a href="#">{{ $cat->category }} Room<span
                                                class="posts-num">{{ $cat->rooms_count }}</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                {{-- Liste de Tags --}}
                                @foreach ($room_tags as $tag)
                                    <a href="#">
                                        <span class="tag">{{ $tag->tag }}</span></a>
                                @endforeach
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div>{{ $rooms->links() }}</div>
        </div>
    </main>
@endsection
