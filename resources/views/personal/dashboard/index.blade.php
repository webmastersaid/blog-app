@extends('personal.layouts.main')
@section('content')
<div class="container scroll-y">
    @include('personal.dashboard.includes.header')
    <div class="container">
        <div class="row">
            <div class="card bg-success-subtle col-3 m-1">
                <div class="card-body">
                    <div class="card-title fs-1">{{$data['commentsCount']}}</div>
                    <div class="card-subtitle mb-2 text-body-secondary fs-2">Comments</div>
                    <a href="{{route('personal.comment.index')}}" class="card-link">View</a>
                </div>
            </div>
            <div class="card bg-danger-subtle col-2 m-1">
                <div class="card-body">
                    <div class="card-title fs-1">{{$data['likesCount']}}</div>
                    <div class="card-subtitle mb-2 text-body-secondary fs-2">Likes</div>
                    <a href="{{route('personal.like.index')}}" class="card-link">View</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection