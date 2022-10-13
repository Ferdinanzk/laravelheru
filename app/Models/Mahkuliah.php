<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahkuliah extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public function matkuliahs(){
        return $this->belongstomany(Matkuliah::class);
    }
}
