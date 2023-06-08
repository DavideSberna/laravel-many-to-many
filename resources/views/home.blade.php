@extends('layouts.app')
@section('content')



<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Benvenuto!</h1>
            <p class="lead mb-0">Registrati o accedi per modificare i contenuti!</p>
        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                @foreach ( $posts as $post)
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}" /></a>
                        <div class="card-body">
                            <h2 class="card-title h4">{{$post->title}}</h2>
                            <div class="small text-muted">{{$post->created_at}}</div>
                            <p class="card-text">{{$post->description}}</p>
                            <a class="btn btn-primary" href="{{ route('show', $post->slug) }}">Leggi di più</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Pagination-->

        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">

            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="{{ route('home') }}">
                                        All Posts
                                    </a>
                                </li>
                                @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('home', ['category_id' => $category->id]) }}">
                                        {{ $category->name }}
                                    </a>
                                </li>
                                @endforeach
                                    
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection