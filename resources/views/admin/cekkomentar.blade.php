@extends('admin.layouts.adminpanel')
@section('admincontent')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Comment</h1>
        </div>
        <div class="row">
            <div class="col-6 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">User-1</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">I love this page</p>
                        <a href="#" class="card-link">Delete</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">User-2</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">I have been try to do this but it's fake</p>
                        <a href="#" class="card-link">Delete</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">User-5</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">I used to do this things before</p>
                        <a href="#" class="card-link">Delete</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">User-3</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">LOL</p>
                        <a href="#" class="card-link">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
