@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row mt-5">
        <div class="mb-4 icon">
            <a class="link-offset-2 link-underline link-underline-opacity-0 text-secondary" href="{{ route('admin.categories.index') }}"><i class="fa-solid fa-circle-chevron-left text-secondary"></i></a>
        </div>
        <div class="mb-3">
            <h3>Crea una nuova categoria</h3>
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
            <form action="{{ route('admin.categories.store') }}" method="POST" >
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Categoria</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="emailHelp" value="{{ old('name') }}">
                </div>
                
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>
  
 


@endsection