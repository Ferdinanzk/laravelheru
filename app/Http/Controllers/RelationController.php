<?php

namespace App\Http\Controllers;
use App\Models\Content;
use App\Models\User;
use App\Models\Order;


use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function index(){
        // $content =  new Content;
        // $content->user_id="2";
        // $content->name="ini posting 2 by user ";
        // $content->save();

        // $user = User::Find(1);
        $content = User::find(1)->content;

        return view('relation.index',compact('content'));
    }

    public function order(){

        // $product =  new Order;
        // $product->user_id="2";
        // $product->product="Orange";
        // $product->save();

        $order = User::find(1)->order;

        return view('relation.index',compact('order'));

    }

}
