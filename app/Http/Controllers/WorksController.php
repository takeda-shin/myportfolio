<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Work;

class WorksController extends Controller
{
    public function index ($id) {
        $post = Post::findOrFail($id);
        return view('works.index')->with('post', $post);
    }

    public function create ($id) {
        $post = Post::findOrFail($id);
        return view('works.create')->with('post', $post);
    }

    public function store (Request $request, Post $post) {

        $this->validate($request,[
            'image' => 'file|image|mimes:jpg,jpeg,png'
        ]);

        $filename = $request->image->store('public/image');
        $post->image = basename($filename);

        $work = new Work([
            'title' => $request->title,
            'introduction' => $request->introduction,
            'language' => $request->language,
            'image' => $post->image,
            'link' => $request->link,
            'github' => $request->github
        ]);
        $post->works()->save($work);
        return redirect()->action('PostsController@show', $post);
    }

    public function edit ($id) {
        $work = Work::findOrFail($id);
        $post = Post::findOrFail($work['post_id']);
        $params = [
            'post' => $post,
            'work' => $work,
        ];
        return view('works.edit', $params);
    }

    public function update (Request $request, Work $work) {
        $this->validate($request,[
            'image' => 'file|image|mimes:jpg,jpeg,png'
        ]);

        $filename = $request->image->store('public/image');
        $work->image = basename($filename);

        $post = Post::findOrFail($work['post_id']);

        $work->title = $request->title;
        $work->introduction = $request->introduction;
        $work->language = $request->language;
        $work->link = $request->link;
        $work->github = $request->github;
        $post->works()->save($work);
        return redirect()->action('PostsController@show', $post);
    }
}