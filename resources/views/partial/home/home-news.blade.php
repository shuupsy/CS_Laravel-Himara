<section class="news">
    <div class="container">
        <div class="section-title">
            <h4 class="title">LATEST NEWS</h4>
            <p class="section-subtitle">Check out our latest news</p>
        </div>
        <div class="row">
            {{-- Liste de blogs --}}
            @foreach ($articles as $article)
                <div class="col-md-4">
                    <div class="news-grid-item">
                        <figure class="gradient-overlay-hover link-icon">
                            <a href="/blog/{{ $article -> id }}">
                                <img src="{{ $article -> image }}" class="img-fluid" alt="Image">
                            </a>
                        </figure>
                        <div class="news-info">
                            <h4 class="title">
                                <a href="/blog/{{ $article -> id }}">{{ $article -> title }}</a>
                            </h4>
                            <p>{{ $article -> text }}</p>
                            <div class="post-meta">
                         {{--        <span class="author">
                                    <a href="#"><img src="{{ $article -> user -> profile_pic }}" width="16" alt="Image">
                                       {{ $article -> user -> name }}</a>
                                </span> --}}
                                <span class="date">
                                    <i class="fa fa-clock-o"></i>
                                   {{--  {{ $article -> created_at->format('F d, Y') }} --}}
                                </span>
                                <span class="comments">
                                    <a href="#">
                                        <i class="fa fa-commenting-o"></i>
                                        1 Comment</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
