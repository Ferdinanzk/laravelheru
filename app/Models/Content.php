<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable =['user_id','name'];

    public function user(){
        return $this->belongsto(User::class);
    }
    
    public function tags(){
        return $this->belongstomany(Tag::class);
    }

}
