@extends('admin.layouts.adminpanel')
@section('admincontent')
<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Category</h1>
            <a class="badge bg-dark text-white ms-2" href="/addcategory">
                Add Category
            </a>
        </div>
        <div class="row">
            @foreach($categories as $c)
            <div class="col-6 col-md-4">
                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title mb-0">{{$c -> name}}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"></p>
                        <a href="/makecategory/edit/{{$c->id}}" class="card-link">Edit</a>
                        <a href="/makecategory/hapus/{{$c->id}}" class="card-link">Delete</a>
                        <p class="mx-3">{{$c -> created_at}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{$categories->links()}}
</main>
@endsection
