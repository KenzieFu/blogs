@extends('admin.layouts.adminpanel')
@section('admincontent')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Table Posting</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href ="{{ route('createpost') }}" class ="btn btn-dark">Create Post </a>
                <div class="table-wrap">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>User ID</th>
                                <th>Category ID</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $p)
                            <tr class="alert" role="alert">
                                <th scope="row">{{$p ->id}}</th>
                               <a href="/blog/{{ $p->id }}"> <td>{{$p -> title}}</td></a>
                                <td>{{$p -> user_id}}</td>
                                <td>{{$p -> category_id}}</td>                                     
                                <td><a href = "/delpost/{{ $p->id }}" class ="btn btn-danger">Delete</a>
                            </tr>
                            @endforeach
                        </tbody>
                       
                    </table>
                  
                </div>
            </div>
            {{ $posts->links() }}
        </div>
    </div>        
</section>

@endsection