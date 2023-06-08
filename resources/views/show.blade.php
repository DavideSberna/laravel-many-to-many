@extends('layouts.app')
@section('content')





<div class="container">
    <div class="row">
        <h3 class="mt-5">{{$post->title}}</h3>
        <div class="col pt-3">
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">{{$post->created_at}}</div>
                    <p class="card-text">{{$post->description}}</p>
                    <a class="btn btn-primary" href="#">Acquista</a>
                </div>
            </div>
            <div>
                <p>{{$post->description}}</p>
            </div>
        </div>  
    </div>
</div>


@endsection