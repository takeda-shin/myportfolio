<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//認証ユーザー取得に必要 
use App\Post;
use App\Work;
use App\User;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    public function index () {
        $authUser = Auth::user();
        $id = Auth::id();
        $user_post = Post::where('user_id', $id)->first();

        $posts = Post::latest()->get();
        $params = [
            'authUser' => $authUser,
            'post' => $posts,
            'user_post' => $user_post,
        ];
        return view('posts.index', $params);
    }

    public function show ($id) {
        $authUser = Auth::user(); // 認証ユーザー取得
        $post = Post::orderBy('created_at', 'desc')->find($id);
        $posts = Post::withCount('works')->get();
        $admin_id = Auth::id();

        foreach($posts as $work_counts) {
          $works_count = $work_counts->works_count;
        }
        $params = [
            'authUser' => $authUser,
            'post' => $post,
            'works_count' => $works_count,
            'admin_id' => $admin_id,
        ];
        return view('posts.show', $params);
    }

    public function create() {
        $authUser = Auth::user(); // 認証ユーザー取得
        // $items = Post::with('user')->get();
        $user_id = Auth::id();
        $params = [
            'authUser' => $authUser,
            'user_id' => $user_id,
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
        return redirect()->action('PostsController@show', $post);
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
