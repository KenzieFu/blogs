<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\comment;
use App\Models\Category;
use App\Models\Post;

class setCategory extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');
    }

   public function add()
   {
       if(auth()->user()->level == 'member')
       {
           return redirect('/');
       }

       return view('admin.addcategory');
   }

   public function post(Request $request)
    {
        if(auth()->user()->level == 'member')
        {
            return redirect('/');
        }

        $categories = DB::table('categories')->insert([
            'name' => $request->category_name
        ]);

        return redirect('/addcategory')->with('success','Kategori berhasil ditambah!');
    }

    public function showcategory()
    {
        if(auth()->user()->level == 'member')
        {
            return redirect('/');
        }

        $categories = DB::table('categories')->paginate(3);
        return view('admin.makecategory',['categories' => $categories]);
    }

    public function edit($id)
    {
        if(auth()->user()->level == 'member')
        {
            return redirect('/');
        }

        $categories = DB::table('categories')->where('id',$id)->get();
        return view('admin.editcategory',['categories'=>$categories]);
    }

    public function update(Request $request)
    {
        if(auth()->user()->level == 'member')
        {
            return redirect('/');
        }

        $categories = DB::table('categories')->where('id',$request->id) -> update([
            'name' => $request->category_name
        ]);
        return redirect('/makecategory');
    }

    public function hapuscategory($id)
    {
        if(auth()->user()->level == 'member')
        {
            return redirect('/');
        }

        DB::table('categories')->where('id',$id) ->delete();
        return redirect('/makecategory')->with('success','Delete successfully');
    }

    public function selectcategory()
    {
        if(auth()->user()->level == 'member')
        {
            return redirect('/');
        }

        $posts = DB::table('posts')->paginate(10);
        return view('admin.makepost',['posts'=> $posts]);
    }

    public function deladminpost($id)
    {
        if(auth()->user()->level == 'member')
        {
            return redirect('/');
        }

        $post=Post::find($id);
        $post->delete();
        return redirect()->back()->with('success','Delete successfully');
    }

    public function viewcom()
    { 
        if(auth()->user()->level == 'member')
       {
           return redirect('/');
       }

        $comments=comment::paginate(5);
        return view('admin.comment',compact('comments'));
    }

    public function delcomadmin($id)
    {
        if(auth()->user()->level == 'member')
        {
            return redirect('/');
        }
        
        $comment=comment::findorFail($id);
        $comment->delete();
        return redirect()->back()->with('success','Delete successfully');
    }
}


