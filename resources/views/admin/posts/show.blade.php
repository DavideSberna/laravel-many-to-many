@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row mt-5">
            <div class="mb-4 icon">
                <a class="link-offset-2 link-underline link-underline-opacity-0 text-secondary" href="{{ route('admin.posts.index') }}"><i class="fa-solid fa-circle-chevron-left text-secondary"></i></a> 
            </div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="col">
                <div class="card">
                    <img src="{{ $post->image }}" class="card-img-top" alt="{{$post->title}}">
                    <div class="card-body">
                        <h3 class="card-title">{{$post->title}}</h3>
                        <p class="card-text">Cosa ho fatto: {{$post->description}}</p>
                        <p class="card-text">Linguaggio utilizzato: {{$post->programming_language}}</p>
                        <p class="card-text">Diffioltà: {{$post->difficulty}}</p>
                        <p class="card-text">Category: {{ $post->category ? $post->category->name : 'Senza categoria' }}</p>
                        
                        @if($post->tags && count($post->tags) > 0)
                            @foreach ($post->tags as $tag)
                            <p class="card-text">tag: {{ $tag->name }}</p>
                            @endforeach
                        @endif
                        <div>
                            <span class="btn btn-success"><a class="link-offset-2 link-underline link-underline-opacity-0 text-white" href="{{ route('admin.posts.edit', $post->slug) }}">Edit</a></span>
                            <span class="btn btn-danger"><a class="link-offset-2 link-underline link-underline-opacity-0 text-white" href="">Delete</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    


@endsection