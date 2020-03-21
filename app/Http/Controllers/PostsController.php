<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//認証ユーザー取得に必要 
use App\Post;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    public function index () {
        $authUser = Auth::user();
        $posts = Post::latest()->get();
        $params = [
            'authUser' => $authUser,
            'post' => $posts,
        ];
        // dd($posts->toArray()); //dump die
        return view('posts.index', $params);
    }

    public function show ($id) {
        $authUser = Auth::user(); // 認証ユーザー取得
        $post = Post::find($id);
        $params = [
            'authUser' => $authUser,
            'post' => $post,
        ];
        return view('posts.show', $params);
    }

    public function create() {
        $authUser = Auth::user(); // 認証ユーザー取得
        // $items = Post::with('user')->get();
        $params = [
            'authUser' => $authUser,
            // 'items' => $items,
        ];
        return view('posts.create', $params); 
    }

    public function store (PostRequest $request) {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = $request->user_id;
        $post->save();
        return view('posts.show')->with('post', $post);
    }

    public function edit ($id) {
        $post = Post::findOrFail($id);
        return view('posts.edit')->with('post', $post);
    }

    public function update (PostRequest $request, Post $post) {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return view('posts.show')->with('post', $post);
    }

    public function destroy($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/');
    }

}
