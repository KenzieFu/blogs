<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\comment;

class CommentController extends Controller
{
    public function send(Request $request)
    {
        
        $post=Post::findorFail($request->input('postId'));
        $user=auth()->user()->id;
        $post->users()->attach($user,['comment'=>$request->input('comment')]);

        return redirect()->back();
    }

    public function reply(Request $request)
    {
        $post=Post::findorFail($request->input('postId'));
        $user=auth()->user()->id;
        $post->users()->attach($user,['comment'=>$request->input('comment'),'parent'=>$request->input('commentId')]);

        return redirect()->back();

    }

    public function delcom($id)
    {
        $comment=comment::findorFail($id);
        $comment->delete();
        return redirect()->back();
    }
}
