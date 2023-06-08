@extends('layouts.app')
@section('content')



<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Benvenuto nel mio blog!</h1>
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
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection