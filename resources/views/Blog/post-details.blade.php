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
                        <h4>Post Details</h4>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Banner Ends Here -->

<section class="blog-posts grid-system">
    <button onclick="history.back()">Back</button>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blog-post-02.jpg" alt="">
                                </div>
                                <div style="width: 100%" class="down-content">
                                    <a href="/searchcate/{{ $post->category->id }}"><span>{{ $post->category->name
                                            }}</span></a>
                                    
                                        <h4>{{ $post->title }}</h4>
                                    
                                    <ul class="post-info">
                                        <li><a href="/about/{{ $post->user->id }}">{{ $post->user->name }}</a></li>
                                        <li><a href="#">{{ $post->created_at }}</a></li>
                                        {{-- <li><a href="#">10 Comments</a></li> --}}
                                    </ul>
                                    <div>
                                        {!! $post->content !!}
                                    </div>
                            
                                </div>
                            </div>
                        </div>

                        @if(Auth::check())
                        <div class="col-lg-12">
                            <div class="sidebar-item submit-comment">
                                <div class="sidebar-heading">
                                    <h2>Your comment</h2>
                                </div>
                                <div class="content">
                                    <form id="comment" action="{{ route('send') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input name="postId" hidden value="{{ $post->id }}">
                                                <fieldset>
                                                    <textarea name="comment" rows="6" id="message"
                                                        placeholder="Type your comment" required=""></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <button type="submit" id="form-submit"
                                                        class="main-button">Submit</button>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="col-lg-12">
                            <div class="sidebar-item comments">
                                <div class="content mb-5">
                                    <ul>
                                        @foreach ($post->users as $comment)
                                        @if($comment->pivot->parent == 0)
                                        <li class="mt-5">
                                            <div class="col-lg-12">
                                                <div class="author-thumb">
                                                    <img src="/storage/{{ $comment->image }}" alt="....">
                                                </div>
                                              
                                                <div class="right-content">
                                                    <h4><a href="/about/{{ $comment->id }}">{{ $comment->name }}</a><span>{{ $comment->pivot->created_at
                                                            }}</span>
                                                    @if(Auth::check())
                                                        @if(auth()->user()->id == $comment->id)
                                                        <a href="/delcom/{{ $comment->pivot->id }}"><span class="fa fa-lg fa-trash" style="color: red;"></span></a>
                                                    @endif
                                                @endif
                                                    </h4>
                                                    {{ $comment->pivot->comment }}
                                                </div>
                                            </div>
                                        </li>

                                        @if(Auth::check())
                                        <div class="sidebar-item submit-comment">
                                            <div class="row mb-5">
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-8">
                                                    <div class="sidebar-heading">
                                                        <h2>Reply</h2>
                                                    </div>
                                                    <div class="content">
                                                        <form id="comment" action="{{ route('reply') }}" method="POST">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <input name="postId" hidden value="{{ $post->id }}">
                                                                    <input name="commentId" hidden
                                                                        value="{{ $comment->pivot->id }}">
                                                                    <fieldset>
                                                                        <textarea name="comment" rows="6" id="message"
                                                                            placeholder="Type your comment"
                                                                            required=""></textarea>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <fieldset>
                                                                        <button type="submit" id="form-submit"
                                                                            class="main-button">Submit</button>
                                                                    </fieldset>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                        @foreach($comments as $com)
                                        @if($comment->pivot->id == $com->parent )
                                        <li class="replied">
                                            <div class="author-thumb">
                                                <img src="/storage/{{ $com->user->image }}" alt="">
                                            </div>
                                            <div class="right-content">
                                                <h4><a href="/about/{{ $com->user->id }}">{{ $com->user->name }}</a><span>{{ $com->created_at }}</span>
                                                    @if(Auth::check())
                                                        @if(auth()->user()->id == $com->user->id)
                                                    <a href="/delcom/{{ $com->id }}"><span class="fa fa-lg fa-trash" style="color: red;"></span></a></h4>
                                                    @endif
                                                @endif
                                                <p>{{ $com->comment }}</p>
                                            </div>
                                        </li>
                                        @endif
                                        @endforeach
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Let's make your version post</h5>
                        <p class="card-text">Interested in making a post that helps a lot of people?</p>
                        <a href="{{ route('createpost') }}" class="btn btn-warning btn-block mt-2" role="button"
                            style="background-color: #f48840; color: white;">Create A
                            Post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
