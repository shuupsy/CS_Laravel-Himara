@extends('layouts.index')

@section('content')
    <main class="gallery-page">
        <!-- FILTERS -->
        <div class="container">
            <div class="gallery-filters">
                <a href="#" data-filter="*" class="filter active">ALL</a>
                @foreach ($categories as $category)
                    @if (count($category->photos) != 0)
                        <a href="#" data-filter=".filter-{{ str_replace(' ', '', strtolower($category->category)) }}"
                            class="filter uppercase">{{ $category->category }}</a>
                    @endif
                @endforeach
            </div>
        </div>
        <!-- GALLERY -->
        <div class="container">
            <div class="grid image-gallery row">
                {{-- Liste de photos --}}
                @foreach ($photos as $photo)
                    <div class="gallery-item filter-{{ str_replace(' ', '', strtolower($photo->gallery_category->category)) }} col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href="/images/gallery/{{ $photo->photo }}">
                                <img src="/images/gallery/{{ $photo->photo }}" class="img-fluid"
                                    alt="Image {{ $photo->title }}">
                            </a>
                            <figcaption>{{ $photo->title }}</figcaption>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
