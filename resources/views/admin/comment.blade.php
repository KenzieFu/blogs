@extends('admin.layouts.adminpanel')
@section('admincontent')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Table Comments</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Comment</th>
                                <th>Users</th>
                                <th>Post_title</th>
                                <th>Parent</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comments as $comment)
                            <tr class="alert" role="alert">
                                <th scope="row">{{$comment ->id}}</th>
                                
                                <td>{{$comment ->comment}}</td>
                                <td>{{$comment ->user->name}}</td>
                                <td>{{$comment ->post->title}}</td>
                                <td>{{$comment ->parent}}</td>
                                <td><a href = "/delcomadmin/{{ $comment->id }}" class ="btn btn-danger">Delete</a>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $comments->links() }}
        </div>
    </div>
</section>

@endsection