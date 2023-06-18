<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Follow;
class FollowController extends Controller
{

 function ajaxFollow(Request $request)
 {
    $new=new Follow;
    $new->sender=$request->profile;
    $new->receiver=$request->follow;
    $new->save();
 }

 function ajaxUnfollow(Request $request)
 {
    $follow=Follow::where('sender','=',$request->profile)->where('receiver','=',$request->unfollow);
    $follow->delete();

 }
 
}
?>