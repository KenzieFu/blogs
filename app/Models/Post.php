<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class,"comments",'post_id','user_id')->withTimestamps()->withPivot(['parent','comment','id']);
    }
}