<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CreatePostController extends Controller
{
    
  public function __construct()
  {
    $this->middleware('auth');
  }

    public function index()
    {
        $categories=Category::all();
        return view('Blog.createpost',compact('categories'));
    }
    public function createpost(Request $request)
    {
        
      $validatedData =$request->validate([
        'title'=>'required|max:255|unique:posts',
        'category_id'=>'required',
        'thumb'=>'image|file|max:1024',
        'content'=>'required'

      ],
    [
        'title.max'=>"Judul maksimal terdiri atas 255 kata",
        'title.unique'=>"Judul Telah Dipakai",
        'thumb.image'=>"Hanya menerima gambar"
    ]);

    if($request->file('thumb'))
    {
      $newImageName= time().'.'.$request->thumb->extension();
      $request->thumb->move(public_path('storage/images'),$newImageName);
      $validatedData['thumb']="images/".$newImageName;
        
    }

      $validatedData['user_id']=auth()->user()->id;

      Post::create($validatedData);

      return redirect()->back()->with('success','Post Berhasil dibuat');
    }

    public function hapus($id)
    {
      DB::table('posts') ->where('id',$id) -> delete();
      return redirect('/');
    }

}
