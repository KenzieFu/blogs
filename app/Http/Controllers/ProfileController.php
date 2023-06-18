<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories=Category::all();
        if(Auth::check())
        {
            return view('blog.profile',compact('categories'));
        }
        return redirect('/');
    }

    public function edit()
    {
        $categories=Category::all();
        if(Auth::check())
        {
            
            return view('Blog.editprofile',compact('categories'));
        }
        return redirect('/');
    }

    public function editprofile(Request $request)
    {
        $validateData=$request->validate(
        [
            'name'=>'required',
            'image'=>'image|file|max:1024'
        ],
        [
            'image.image'=>"Hanya menerima gambar"
        ]
    );
        $user=User::findorFail(auth()->user()->id);
        if($request->file('image')!=NULL)
        {
        $newImageName= time().'.'.$request->image->extension();
        $request->image->move(public_path('storage/images'),$newImageName);
        $validatedData['image']="images/".$newImageName;
        $user->name=$validateData['name'];
        $user->image=$validatedData['image'];
        $user->save();
        }
        else
        {
            $user->name=$validateData['name'];
            $user->image=auth()->user()->image;
            $user->save();
        }
        return redirect()->back()->with('success','Profile Telah di Update');

    }
}
