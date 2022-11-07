<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class PostController extends Controller
{
    public function getPosts(){
        $posts = Post::orderBy('id','DESC')->get();
        return view('Pages.Home')->with(['posts' => $posts]);
    }

    public function getPostForm(){
           
        return view('Pages.Post.AddPost');
    }

    public function getPost($id){
        $post = Post::find($id);
        $comments = $post->comments;
        return view('Pages.Post.Post')->with(['post' => $post, 'comments' => $comments]);
    }

    public function store(Request $request){
        
        $validator = Validator::make($request->all(), [
            'title'   => 'required|unique:posts',
            'content' => 'required',
            'image'   => 'required',
        ]);

        if($validator->fails()){
            return view('Pages.Post.AddPost')->withErrors($validator);
        }

        $post = new Post();

        $post->title     = $request->title;
        $post->content   = $request->content;
        $post->author_id = auth()->user()->id;

        if($request->hasFile('image')){
            $post->image = $request->file('image')->store(
                'images/posts', 'public'
            );
        }

        $post->save();

        return  view('Pages.Post.Post')->with('message','Post Added Successfully');
    }
}
