@extends('layouts.app')
@section('content')



 
  
 <div class="container">
        <div class="mt-5 d-flex align-items-center"> 
            <h3 class="m-0 me-3">Tabella Tags</h3>
            <a class="link-offset-2 link-underline link-underline-opacity-0 text-secondary icon" href="{{ route('admin.tags.create') }}"><i class="fa-solid fa-circle-plus"></i></a>
        </div>
        <div class="mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th>Id</th>
                        <th>Name</th>
                        <th>Updated</th>
                        <th>Action</th>
                        
                         
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        <td>{{ $tag->updated_at }}</td>
                        <td>
                            <div>
                                <span class="badge text-bg-primary"><a class="link-offset-2 link-underline link-underline-opacity-0 text-white" href="{{ route('admin.tags.show', $tag->slug ) }}">Show</a></span>
                            </div>
                            <div>
                                <span class="badge text-bg-success"><a class="link-offset-2 link-underline link-underline-opacity-0 text-white" href="{{ route('admin.tags.edit', $tag->slug) }}">Edit</a></span>
                            </div>
                            <form action="{{ route('admin.tags.destroy', $tag->slug) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="delete-button btn btn-danger text-white" data-item-title="{{ $tag->slug }}"> <i class="fa-solid fa-trash"></i></button>
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