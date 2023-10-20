@extends('main.layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Blog page</h1>
            @foreach ($posts as $post)
                <div class="card" style="width: 18rem;">
                    <a href="{{ route('main.blog.show', $post->id) }}" class="link-dark">
                        <img src="{{ Storage::url($post->preview_image) }}" class="card-img-top" alt="{{ $post->title }}">
                    </a>
                    <div class="card-body">
                        <p class="card-text">
                            <a href="{{ route('main.blog.index', $post->id) }}"
                                class="link-dark">
                                {{ $post->category->title }}
                            </a>
                        </p>
                        <a href="{{ route('main.blog.show', $post->id) }}"
                            class="link-dark link-offset-1 link-offset-2-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                            <h5 class="card-title">{{ $post->title }}</h5>
                        </a>
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
