@extends('layouts.app')
@section('content')


 

    <div class="container">
        <div class="row mt-5">
            <div class="mb-4 icon">
                <a class="link-offset-2 link-underline link-underline-opacity-0 text-secondary" href="{{ route('admin.categories.index') }}"><i class="fa-solid fa-circle-chevron-left text-secondary"></i></a> 
            </div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="col">
                <div class="">
                    <div class="card-body">
                        <h5 class="card-title p-0 mb-1">{{$category->name}}</h5>
                        <p class="">Post che hanno questa categoria:</p>
                        
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Categoria</th> 
                                    <th>Numero post</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td>{{$postCount}}</td>
                                </tr>
                            </tbody>
                        </table>
                      @if(isset($posts))
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Difficulty</th>
                                    <th>Languages</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td><img class="post-img-size" src="{{ $post->image }}" alt="{{ $post->title }}"></td>
                                    <td>{{ $post->difficulty }}</td>
                                    <td>{{ $post->programming_language }}</td>
                                    <td>{{ $post->category ? $post->category->name : 'Senza categoria' }}</td>
                                    <td>
                                        <div>
                                            <span class="badge text-bg-primary"><a class="link-offset-2 link-underline link-underline-opacity-0 text-white" href="{{ route('admin.posts.show', $category->slug) }}">show</a></span>
                                        </div>
                                        <div>
                                            <span class="badge text-bg-success"><a class="link-offset-2 link-underline link-underline-opacity-0 text-white" href="{{ route('admin.categories.edit', $category->slug) }}">Edit</a></span>
                                        </div>
                                        <form action="{{ route('admin.categories.destroy', $category->slug) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type='submit' class="delete-button btn btn-danger text-white" data-item-title="{{ $post->slug }}"> <i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif

                    </div>
                </div>
                @if (isset($message))
                    <div class="alert alert-info">
                        {{ $message }}
                    </div>
                @endif
            </div>
        </div>
    </div> 


@endsection