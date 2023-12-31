@extends('admin.layouts.main')
@section('content')
<div class="container scroll-y">
    @include('admin.category.includes.header')
    <div class="row">
        <form action="{{ route('admin.category.store') }}" method="post">
            @csrf
            <input type="text" name="title" placeholder="Title" required><br>
            <br>
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{route('admin.category.index')}}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection