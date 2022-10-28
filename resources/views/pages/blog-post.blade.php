@extends('layouts.index')

@section('content')
<main class="room">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12">
                <!-- Blog photo -->
                <div>
                    <img src="/images/blog/{{ $article->image }}" alt="Photo Article">
                </div>

                {{-- Article--}}
                <div>
                    <p class="drocap">{{ $article -> text }}</p>
                </div>
                   

            </div>
        </div>
    </div>
</main>
@endsection
