<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    // protected $table="posts";
// protected $fillable=['title','body','category','user_id'];
protected $guarded=[];

}