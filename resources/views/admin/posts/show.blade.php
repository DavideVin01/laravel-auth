@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Post #{{ $post->id }}</h1>
        <div><strong>Slug - </strong>{{ $post->slug }}</div>
    </div>
    <hr>
    <div class="row">
        <div class="col-4 mt-5">
            <div class="shadow">
                <img class="img-fluid" src="{{ $post->image }}" alt="Image">
            </div>
        </div>
        <div class="col-8 mt-5">
            <h2><strong>{{ $post->title }}</strong></h2>
            <p>{{ $post->content }}</p>
        </div>
    </div>
@endsection
