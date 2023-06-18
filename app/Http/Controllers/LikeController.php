<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Like;
class LikeController extends Controller
{

   public function ajaxLike(Request $request)
    {
       
        $new_like=new Like;
        $new_like->likeBy=$request->user_id;
        $new_like->likeOn=$request->post_id;
        $new_like->save();
    }
   public function ajaxUnlike(Request $request)
    {
       
        $likedPost=Like::where('likeBy','=',$request->user_id)->where('likeOn','=',$request->post_id);
        $likedPost->delete();
    }
 
}
?>