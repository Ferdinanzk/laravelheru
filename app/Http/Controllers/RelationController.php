<?php

namespace App\Http\Controllers;
use App\Models\Content;
use App\Models\User;
use App\Models\Order;
use App\Models\Tag;
use App\Models\Mahkuliah;
use App\Models\Matkuliah;



use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function index(){
        // $content =  new Content;
        // $content->user_id="2";
        // $content->name="ini posting 2 by user ";
        // $content->save();

        // $user = User::Find(1);
        // $content = User::find(1)->content;

        // return view('relation.index',compact('content'));
        // $content = new Content;
        // $content->user_id=1;
        // $content->name='ini postingan user 3 By User ID=1';
        // $content->save();

        // // $tag = Tag::find(1);
        //  $tag1=1;
        //  $tag2=2;
        //  $tag3=3;

        // $content->tags()->attach([$tag1,$tag2,$tag3]);

        $tags = Tag::with('contents')->get();
        // return ($contents);
        return view('relation.index',compact('tags'));

    }

    public function order(){

        // $product =  new Order;
        // $product->user_id="2";
        // $product->product="Orange";
        // $product->save();

        $order = User::find(1)->order;

        return view('relation.index',compact('order'));

    }
  
    public function mahasiswa(){
        // $a = Mahkuliah::find(3);
        // $b1 = 1;
        // $b2 = 2;
        // $b3 = 3;
        // $b4 = 4;
        // $b5 = 5;
        // $a->matkuliahs()->attach([$b1,$b2,$b3,$b4,$b5]);

        $baca = Matkuliah::with('mahkuliahs')->get();
        return view('relation.mahasiswa',compact('baca'));
    }


}
