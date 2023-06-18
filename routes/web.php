<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CreatePostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\LikeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/blogs',[BlogController::class,'blog'])->name('myblogs');
Route::get('/deletepost/{id}',[BlogController::class,'deletepost']);


Route::get('/profile',[ProfileController::class,'index']);

Route::get('/editprofile',[ProfileController::class,'edit']);
Route::post('/editprofile',[ProfileController::class,'editprofile'])->name('edit');



// admin (not completed)
Route::get('/admin-panel', function () {
    if(auth()->user()->level =="member")
    {
        return redirect('/');
    }
    return view('admin.index');
});

// Route::get('/approvepost', function () {
//     return view('admin.approvepost');
// });

use App\Http\Controllers\UsersController;
Route::get('/users',[UsersController::class,'show']);

use App\Http\Controllers\setCategory;
use App\Models\Follow;

Route::get('/addcategory',[setCategory::class,'add']);
Route::post('/addcategory/post',[setCategory::class,'post']);
Route::get('/makecategory',[setCategory::class,'showcategory']);
Route::get('/makecategory/edit/{id}',[setCategory::class,'edit']);
Route::post('/makecategory/update',[setCategory::class,'update']);
Route::get('/makecategory/hapus/{id}',[setCategory::class,'hapuscategory']);
Route::get('/makepost',[setCategory::class,'selectcategory']);
Route::get('/delpost/{id}',[setCategory::class,'deladminpost']);
Route::get('/cekkomentar',[setCategory::class,'viewcom']);
Route::get('/delcomadmin/{id}',[setCategory::class,'delcomadmin']);

// Route::get('/pagesprofile', function () {
//     return view('admin.pages-profile');
// });

// Route::get('/trashcomment',function(){
//     return view('admin.trashcomment');
// });


// end of admin (not completed)

Auth::routes();

Route::get('/about/{id}',[BlogController::class,'about']);
Route::get('/followers/{id}',[BlogController::class,'followerList']);
Route::get('/following/{id}',[BlogController::class,'followingList']);

Route::get('/blog/{id}',[BlogController::class,'find']);

Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/search',[HomeController::class,'search'])->name('search');

Route::get('/searchcate/{id}',[HomeController::class,'searchcate'])->name('searchcate');

Route::get('/create',[CreatePostController::class,'index'])->name('createpost');

Route::post('/create',[CreatePostController::class,'createpost'])->name('createpost');
Route::get('/userpost/hapus/{id}',[CreatePostController::class,'hapus']);

Route::post('/send',[CommentController::class,'send'])->name('send');
Route::post('/reply',[CommentController::class,'reply'])->name('reply');

Route::get('/delcom/{id}',[CommentController::class,'delcom'])->name('delcom');


Route::get('/berita', function () {
    $ujian = '<strong>Ujian Akhir Semester</strong><em>Pemrograman Web Lanjutan</em>';
    $jurusan = 'S1-Teknologi Informasi';
    return view('berita', compact('ujian','jurusan'));                                     
});


//ajax Route
Route::post('ajaxLike',[LikeController::class,'ajaxLike'])->name('ajaxLike');
Route::post('ajaxUnlike',[LikeController::class,'ajaxUnlike'])->name('ajaxUnlike');
Route::post('ajaxFollow',[FollowController::class,'ajaxFollow'])->name('ajaxFollow');
Route::post('ajaxUnfollow',[FollowController::class,'ajaxUnfollow'])->name('ajaxUnfollow');


