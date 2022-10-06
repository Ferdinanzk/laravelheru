<?php

namespace App\Http\Controllers;
use App\Models\Content;
use App\Models\User;


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
}
