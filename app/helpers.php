<?php

use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use Illuminate\Support\Facades\DB;


 function check_likes($user_id, $post_id){
    /* $data= Like::where("likeBy",'=',$user_id); */
    $data=DB::table('likes')->where('likeBy','=',$user_id)->where('likeOn','=',$post_id)->count()>0;
    return $data;
   /*  $stmt = $this->pdo->prepare("SELECT * FROM `likes` WHERE `likeBy` = :user_id AND `likeOn` = :tweet_id"); */
   /*  $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
    $stmt->bindParam(":tweet_id", $tweet_id, PDO::PARAM_INT);
    $stmt->execute(); */
    /* return $stmt->fetch(PDO::FETCH_ASSOC); */
}

function countUserPost($user_id)
{
    $data=DB::table('posts')->where('user_id','=',$user_id)->count();
    return $data;
}
function countUserFollowing($user_id)
{
    $data=DB::table('follows')->where('sender','=',$user_id)->count();
    return $data;
}

function countUserFollowers($user_id)
{
    $data=DB::table('follows')->where('receiver','=',$user_id)->count();
    return $data;
}

function countLikes($post_id)
{
    $data=DB::table('likes')->where('likeOn','=',$post_id)->count();
    return $data;
}

 function checkFollow($followerID, $user_id){
    $data=DB::table('follows')->where('sender','=',$user_id)->where('receiver','=',$followerID)->first();
    return $data;

}


function followBtn($profileID, $user_id, $followID){
    $data = checkFollow($profileID, $user_id);
 
    if(Auth::check()){

        if($profileID != $user_id){
            if(isset($data->receiver) && $data->receiver === $profileID){
                //Following btn
                return "<button class='f-btn following-btn follow-btn' data-follow='".$profileID."' data-profile='".$followID."' style='outline:none;'>Following</button>";
            }else{
                //Follow button
                return "<button class='f-btn follow-btn' data-follow='".$profileID."' data-profile='".$followID."' style='outline:none;'><i class='fa fa-user-plus'></i>Follow</button>";
            }
        }else{
            //edit button
            return "<button class='new-btn' onclick=location.href='/editprofile' style='outline:none;'>Edit Profile</button>";
        }
    }else{
        return "<button style='outline:none;' class='f-btn' onclick=location.href='/login'><i class='fa fa-user-plus'></i>Follow</button>";
    }
}




?>