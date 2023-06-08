@extends('layouts.app')
@section('content')



  
<div class="container">
    <div class="row mt-5">
        <div class="mb-4 icon">
            <a class="link-offset-2 link-underline link-underline-opacity-0 text-secondary" href="{{ route('admin.posts.index') }}"><i class="fa-solid fa-circle-chevron-left text-secondary"></i></a>
        </div>
        <div class="mb-3">
            <h3>Aggiungi nuovi progetti</h3>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item">-{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <div class="col-6">
            <form action="{{ route('admin.posts.store') }}" enctype="multipart/form-data" method="POST" >
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Name/Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="emailHelp" value="{{ old('title') }}">
                </div>
                <div class="mb-3">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" value="{{ old('description') }}">
                </div>
                <div class="mb-3">
                    <label for="programming_language" class="form-label">Programming language</label>
                    <input type="text" class="form-control @error('programming_language') is-invalid @enderror" name="programming_language" id="programming_language" value="{{ old('programming_language') }}">
                </div>
                <div class="mb-3">
                    <label for="difficulty" class="form-label">Difficulty</label>
                    <input type="text" class="form-control" name="difficulty" id="difficulty" value="{{ old('difficulty') }}">
                </div>

                <div class="mb-3">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                        <option value="">Seleziona categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <p>Seleziona i Tag:</p>
                        @foreach ($tags as $tag)
                            <div>
                                <label for="form-check-label">{{ $tag->name }}</label>
                               
                                <input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="form-check-input" {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }}>
                            </div>
                        @endforeach
                        @error('tags')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>


@endsection