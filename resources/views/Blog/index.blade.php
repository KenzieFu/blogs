@extends('layouts.template')
@section('content')

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="main-banner header-text">
    <div class="container-fluid">
        <div class="owl-banner owl-carousel">
            @foreach($banners as $banner)

            <div class="item">
                <img src={{ asset('storage/'.$banner->thumb) }} width= "370" height= "340" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                           <a href="/searchcate/{{ $banner->category->id }}"> <span>{{ $banner->category->name }}</span></a>
                        </div>
                        <a href="/blog/{{ $banner->id }}">
                            <h4>{{ $banner->title }}</h4>
                        </a>
                        <ul class="post-info">

                            {{-- <li><a href="#">Admin</a></li> --}}
                            <li><a href="/about/{{ $banner->user->id }}">{{ $banner->user->name }}</a></li>
                            <li><a href="#">{{ $banner->created_at }}</a></li>
                            {{-- <li><a href="#">12 Comments</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

<section class="blog-posts">
    <div class="container">
        <div class="row">
            <div style="border-right:2px solid red"  class="col-lg-8">
                @if(!empty($message))
                   <h4 class="mb-3">Searching for : "{{ $message }}"</h4>
                @elseif(!empty($cate))
                   <h4 class="mb-3">Category : "{{ $cate }}"</h4>
                @endif
                <div class="all-blog-posts">
                    <div class="row">
                        {{ $posts->links() }}
                        @foreach($posts as $post)
                     
                        <div class="col-lg-12">

                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src={{ asset('storage/'.$post->thumb) }} width= "370" height= "340" alt="">
                                </div>
                                <div class="down-content">
                                    <a href="/searchcate/{{ $post->category->id }}"><span>{{ $post->category->name }}</span></a>
                                    <a href="/blog/{{ $post->id }}">
                                        <h4>{{ Str::limit ($post->title,30) }}</h4>
                                    </a>
                                    <ul class="post-info">
                                        <li><a href="/about/{{ $post->user->id }}">{{ $post->user->name }}</a></li>
                                        <li><a href="#">{{ $post->created_at }}</a></li>
                                        {{-- <li><a href="#">12 Comments</a></li> --}}
                                       
                                    </ul>
                                    @if(Auth::check())
                                    @php
                                        $countLikes=countLikes($post->id) ;
                                        $checkLike=check_likes(Auth::user()->id,$post->id);
                                    @endphp
                                    <div style="margin-left: 0" class="t-show-footer">
                                        <div class="t-s-f-right">
                                            <ul>
                                               
                                                <li><button style="outline:none;"><i class="fa fa-comment" aria-hidden="true"></i></button></li>
                                                @if($checkLike)
                                                <li>
                                                    <button class="unlike-btn" data-tweet={{ $post->id }} data-user={{ Auth::user()->id }} style="outline:none;"><i class="fa fa-heart" aria-hidden="true"></i><span class="likesCounter">
                                                        {{ $countLikes>0?$countLikes:'' }}
                                                    </span></button>
                                                </li>
                                                @else
                                                <li>
                                                    <button class="like-btn" data-tweet={{ $post->id }} data-user={{ Auth::user()->id }} style="outline:none;"><i class="fa fa-heart" aria-hidden="true"></i><span class="likesCounter">
                                                        {{ $countLikes>0?$countLikes:'' }}
                                                    </span></button>
                                                </li>
                                                @endif
                                            
                                                {{-- <li>'.((isset($likes['likeOn']) ? $likes['likeOn'] === $tweet->tweetID : '') ? 
                                                    '<button class="unlike-btn" data-tweet="'.$tweet->tweetID.'" data-user="'.$tweet->tweetBy.'" style="outline:none;"><i class="fa fa-heart" aria-hidden="true"></i><span class="likesCounter">'.(($tweet->likesCount > 0) ? $tweet->likesCount : '' ).'</span></button>' : 
                                                    '<button class="like-btn" data-tweet="'.$tweet->tweetID.'" data-user="'.$tweet->tweetBy.'" style="outline:none;"><i class="fa fa-heart-o" aria-hidden="true"></i><span class="likesCounter">'.(($tweet->likesCount > 0) ? $tweet->likesCount : '' ).'</span></button>').'
                                                </li> --}}
                                         
                                          {{-- '.(($tweet->tweetBy === $user_id) ? '
                                                <li>
                                                    <a href="#" class="more"><i class="fa fa-ellipsis-h" aria-hidden="true" style="outline:none;"></i></a>
                                                    <ul>
                                                      <li><label class="deleteTweet" data-tweet="'.$tweet->tweetID.'">Delete Tweet</label></li>
                                                    </ul>
                                                </li>' : '').' --}}
              
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                      
                    </div>
                </div>
            </div>
            
            {{-- //Sidebar --}}
            <div  class="col-lg-4">
                <div class="sidebar">
                    <div class="row">
                     
                        <div class="col-lg-16">
                            <div class="sidebar-item recent-posts">
                                <div class="sidebar-heading">
                                    <h2>Recent Posts</h2>
                                </div>
                                @foreach($recents as $recent)
                                <div class="down-content">
                                    <a href="/searchcate/{{ $recent->category->id }}"><span>{{ $recent->category->name }}</span></a>
                                    <a href="/blog/{{ $recent->id }}">
                                        <h4>{{ Str::limit($recent->title,15)  }}</h4>
                                    </a>
                                    <ul class="post-info">
                                        <li><a href="/about/{{ $recent->user->id }}"><small>{{ $recent->user->name }}</small></a></li>
                                        <li><a href="#"><small>{{ $recent->created_at }}</small></a></li>
                                        {{-- <li><a href="#">12 Comments</a></li> --}}
                                    </ul>
                                    
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @if(Auth::check())
                        <div class="col-lg-12">
                            <div class="trends_container"><div class="trends_box"><div class="trends_header"><p style="color: black">Who to follow</p></div>
                        @foreach ($users as $user) 
                            <div class="follow-body trend">
                                    <div class="follow-img media-inner">
                                      <img src="storage/{{ $user->image??null }}"/>
                                    </div>
                                    <div class="media-inner">
                                        <div class="fo-co-head media-body">
                                            <a href='/about/{{ $user->id }}'>{{ $user->name }}</a></span>
                                        </div>
                                        <!-- FOLLOW BUTTON -->
                                       
                                        {!! followBtn($user->id, Auth::user()->id,Auth::user()->id) !!}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @endif
                        
                        {{-- <div class="col-lg-12">
                            <div class="sidebar-item categories">
                                <div class="sidebar-heading">
                                    <h2>Who to Follow</h2>
                                </div>
                                <div class="content">
                                    <ul>
                                        @foreach($categories as $category)
                                        <li><a href="/searchcate/{{ $category->id }}">- {{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-5"></div>
    </div>
</section>
@endsection
