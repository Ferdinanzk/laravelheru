<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(){
        // $post = new Post;
        // $post->title="sebuah judul baru ";
        // $post->body="sebuah body baru ";
        // $post->category="buku";
        // $post->user_id="1";
        // $post->save();

        Post::create([
            'title'=>'ini contoh judul pake eloquent',
            'body' => 'ini contoh body',
            'category'=>'buku',
            'user_id'=>2
        ]);
    }

    public function index(){
        $tampils = Post::latest()->get();
        return view('product.posting', compact('tampils'));
        
    }

    public function show($id){
        $details=Post::find($id);
        dd($details);
    }
    
    public function update(Request $request, $id){
        

        $this->validate($request, [
            'title'=>'required',
            'body'=>'required',
            'category'=>'required']);
        
            $tampils = Post::find($id);
            $tampils->title = $request->get('title');
            $tampils->body = $request->get('body');
            $tampils->category = $request->get('category');
            // dd($tampils);
            
            $tampils->save();
            return
                redirect()->route('posts.index')->with('success','Data Berhasil Diubah');
        }

        public function edit($id){
            $tampils = Post::find($id);
            return view('product.edit',compact('tampils'));
        }

        public function destroy($id){
            $tampils = Post::find($id);
            $tampils->delete();
            return redirect()->route('posts.index')->with('success', '
            berhasil dihapus');
        }
    }

