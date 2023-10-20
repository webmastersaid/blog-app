@extends('main.layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <h1>{{ $post->title }}</h1>
            <img src="{{ Storage::url($post->preview_image) }}" alt="{{ $post->title }}">
            <p>{{ $post->content }}</p>
        </div>
    </div>
@endsection
