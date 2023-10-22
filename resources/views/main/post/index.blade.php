@extends('main.layouts.main')
@section('content')
    <div class="container pt-5">
        <h1>Blog</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 pt-4">
            @foreach ($posts as $post)
                <div class="col">
                    <div class="card shadow-sm">
                        @if ($post->preview_image)
                            <img src="{{ Storage::url($post->preview_image) }}" alt="{{ $post->title }}" width="100%"
                                height="225">
                        @else
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                        @endif
                        <div class="card-body">
                            <h3 class="card-title">{{ $post->title }}</h3>
                            <p class="card-text">{{ $post->content }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('main.post.show', $post->id) }}" type="button"
                                        class="btn btn-sm btn-outline-secondary">View</a>
                                </div>
                                <small class="text-body-secondary">{{ $post->parseDate() }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
