@extends('layouts.app')
@section('content')



 
  
 <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="mt-5 d-flex align-items-center"> 
            <h3 class="m-0 me-3">Tabella Category</h3>
            <a class="link-offset-2 link-underline link-underline-opacity-0 text-secondary icon" href="{{ route('admin.categories.create') }}"><i class="fa-solid fa-circle-plus"></i></a>
        </div>
        <div class="mt-3">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>
                        <div>
                            <span class="badge text-bg-primary"><a class="link-offset-2 link-underline link-underline-opacity-0 text-white" href="{{ route('admin.categories.show', $category->slug ) }}">Show</a></span>
                        </div>
                        <div>
                            <span class="badge text-bg-success"><a class="link-offset-2 link-underline link-underline-opacity-0 text-white" href="{{ route('admin.categories.edit', $category->slug) }}">Edit</a></span>
                        </div>
                        <form action="{{ route('admin.categories.destroy', $category->slug) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type='submit' class="delete-button btn btn-danger text-white"
                                data-item-title=""> <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
        </div>
        @include('partials.modal-delete')
    </div>
@endsection