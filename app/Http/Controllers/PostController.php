<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function loadFirstPost(){
		$post = Post::first();
    	// ["SELECT * TOP 1 FROM posts"];
    	return $post;
    }

    public function getIdOfOne(){
    	$post = Post::where("id", 1)->get();
    	// ["SELECT * FROM posts WHERE id = 1"]
    	return $post;
    }

    public function getAll(){
    	$posts = Post::all();
    	// ["SELECT * FROM posts"];
    	return view('posts', compact('posts'));
    }

    public function createPost(){
    	return view('create_post');
    }

    public function insertPost(Request $request){
    	$post = new Post();
    	$post->post_name = $request->name;
    	$post->post_title = $request->title;
    	$post->post_content = $request->content;
    	$post->save();
    	return "SUCCESS";
    }

    public function deletePost(Request $request, $id){
    	$post = Post::findOrfail($id);
    	$post->delete();
    	return back();
    }

    public function getPost(Request $request, $id){
        $post = Post::findOrfail($id);
        return view('update_post', compact('post'));
    }

    public function updatePost(Request $request, $id){
        $post = Post::findOrfail($id);
        $post->post_name = $request->post_name;
        $post->post_title = $request->post_title;
        $post->post_content =$request->post_content;
        $post->save();
        return redirect('/posts');
    }
}
