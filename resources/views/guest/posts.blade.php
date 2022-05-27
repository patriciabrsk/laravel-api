@extends('layouts.app')

@section('content')
    <div class="container-fluid w-75 mx-auto">

        @foreach ($posts as $post)
            <div class="row ">
                <div class="col-12 p-2 mb-2">
                    <h1 class="title">
                        {{ $post->title }}
                    </h1>
                    <h4 class="card-subtitle">
                        {{ $post->user->name }}
                    </h4>
                    <h4 class="card-subtitle fs-6">
                        {{ $post->created_at }}
                    </h4>
                    @foreach ($post->categories as $category)
                        <span class="badge rounded-pill" style="background-color: {{$category->color}}" >
                            {{$category->name}}
                        </span>
                    @endforeach
                </div>
                <div class="col-6 p-2 mb-2">
                    <img class="rounded w-100" src="{{ $post->image_url }}" alt="image of {{$post->title}}">
                </div>
                <div class="col-6 p-2">
                    <div class="card-text">
                        {{ $post->content }}
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12">
                {{$posts->links()}}
            </div>
    </div>
@endsection
