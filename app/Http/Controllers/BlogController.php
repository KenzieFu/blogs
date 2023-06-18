<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\comment;
use Illuminate\Support\Facades\DB;
use App\Models\Follow;
use Illuminate\Support\Facades\Auth;
class BlogController extends Controller
{

    
    // public function blog()
    // {
    //     return view('Blog.blog');
    // }

    public function about($id)
    {
        $categories=Category::all();
        $user=User::find($id);
        $posts=$user->posts()->paginate(2);
        return view('Blog.about',compact('user','posts','categories'));
    }

    public function deletepost($id)
    {
        $post=Post::findorFail($id);
        $post->delete();
        return redirect()->back();
    }

    public function followerList($id)
    {
        $categories=Category::all();
        $user=User::find($id);
        $followers=DB::table('users')->select('*')->whereIn('users.id',DB::table('follows')->select('sender')->where('receiver','=',$id))->inRandomOrder()->get();
        return view('Blog.followers',compact('user','followers','categories'));
    }
    public function followingList($id)
    {
       
        $user=User::find($id);
        $categories=Category::all();
        $followings=DB::table('users')->select('*')->whereIn('users.id',DB::table('follows')->select('receiver')->where('sender','=',$id))->inRandomOrder()->get();
        return view('Blog.following',compact('user','followings','categories'));
    }


   

  

    public function find($id)
    {
        // $post=Post::findorFail($id);

        $post=Post::with('users')->get()->find($id);
        $categories=Category::all();
        $comments=comment::where('post_id','=',$id)->get();
        return view ('Blog.post-details',compact('post','categories','comments'));
    }

   
}