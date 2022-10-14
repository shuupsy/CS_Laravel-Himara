@extends('layouts.index')

@section('content')
    <main class="gallery-page">
        <!-- FILTERS -->
        <div class="container">
            <div class="gallery-filters">
                <a href="#" data-filter="*" class="filter active">ALL</a>
                <a href="#" data-filter=".filter-restaurant" class="filter">RESTAURANT</a>
                <a href="#" data-filter=".filter-swimmingpool" class="filter">SWIMMING POOL</a>
                <a href="#" data-filter=".filter-spa" class="filter">SPA</a>
                <a href="#" data-filter=".filter-roomview" class="filter">ROOM VIEW</a>
            </div>
        </div>
        <!-- GALLERY -->
        <div class="container">
            <div class="grid image-gallery row">
                {{-- Liste de photos --}}
                @foreach ($photos as $photo)
                    <div class="gallery-item filter-{{ str_replace(' ', '', strtolower($photo->title)) }} col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href="/images/gallery/{{ $photo -> photo }}">
                                <img src="/images/gallery/{{ $photo -> photo }}" class="img-fluid" alt="Image {{ $photo -> title }}">
                            </a>
                            <figcaption>{{ $photo -> title }}</figcaption>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
