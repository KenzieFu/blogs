@extends('layouts.template')
@section('content')
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                    @guest
                        @if(!Auth::check())
                        <h4>Welcome to {{ $user->name }}'s Blogs</h4>
                        @endif
                        @else
                        <h4>Welcome to {{ $user->name }}'s Blogs</h4>
                        @if(auth()->user()->id ===$user->id)
                        <h2>see all the posts you made!</h2>
                        @endif
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Banner Ends Here -->
<section style="margin-bottom:50px;" class="blog-posts grid-system">
    
    <div class="container">
        <div>
            <ul style="display: flex;gap:20px;align-items:center;color:gray;font-size:20px;font-weight:bold;">
                <li style="border: 2px solid gray;
                border-radius: 40px;
                padding: .45rem .75rem;
                color: darken(gray, 25%);"><a style=" color: darken(gray, 25%);" href="/following/{{ $user->id }}">{{ countUserFollowing($user->id) }} Following</a></li>
                <li style="border: 2px solid gray;
                border-radius: 40px;
                padding: .45rem .75rem;
                color: darken(gray, 25%);"><a href="/followers/{{ $user->id }}">{{ countUserFollowers($user->id) }} Followers</a></li>
                <li style="border: 2px solid gray;
                border-radius: 40px;
                padding: .45rem .75rem;
                color: darken(gray, 25%);"><a href="/about/{{ $user->id }}">{{ countUserPost($user->id) }} Posts</a></li>
           
           
            </ul>
        </div>
        <h1>Followers</h1>
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                   <div>
                    <div class="following-box">

                        @foreach($followers as $follower)
                        <div class="follow-unfollow-box">
                            <div class="follow-unfollow-inner">
                                
                                <div class="follow-person-button-img mt-2">
                                    <div class="follow-person-img mr-4"> 
                                         <img src="/storage/{{ $follower->image }}"/>
                                    </div>
                                    <div class="follow-person-name mt-2">
                                        <a href="/about/{{ $follower->id }}">{{ $follower->name }}</a>
                                    </div>
                                   
                                    <div class="follow-person-button">
                                        
                                         {!! followBtn($follower->id, Auth::user()->id, Auth::user()->id) !!}
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                        @endforeach


                        
                    </div>


                    

                   </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card " style="width: 18rem;">
                                <div class="card-header">
                                    Profile
                                </div>
                                <div class="row mt-3">
                                    <div class="col-2 col-lg-3"></div>
                                    <div class="col-8 col-lg-6">
                                        <img src="/storage/{{ $user->image }}" class="img-fluid" alt="...">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $user->name }}</h5> <!-- Nama -->
                                    <p class="card-text">Email: {{ $user->email }}</p> <!-- Email -->
                                    @if(Auth::check())
                                        @if(auth()->user()->id == $user->id)
                                    <div class="mt-2">
                                        <a href="/profile" class="card-link fa fa-cogs" style="color: #f48840;"></a>
                                        <a href="/profile" style="color: #f48840;">Edit Profile</a>
                                    </div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
