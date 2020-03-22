<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\About;

class AboutsController extends Controller
{

    public function index(){
        return view('abouts.index');
    }

    public function create ($id) {
        $post = Post::findOrFail($id);
        return view('abouts.create')->with('post', $post);
    }

    public function edit ($id) {
        $post = Post::findOrFail($id);
        return view('abouts.edit')->with('post', $post);
    }

    public function store (Request $request, Post $post) {

        $this->validate($request,[
            'image' => 'file|image|mimes:jpg,jpeg,png'
        ]);

        $filename = $request->image->store('public/image');
        $post->image = basename($filename);

        $about = new About([
            'family_name' => $request->family_name,
            'first_name' => $request->first_name,
            'family_name_eng' => $request->family_name_eng,
            'first_name_eng' => $request->first_name_eng,
            'base' => $request->base,
            'email' => $request->email,
            'performance' => $request->performance,
            'image' => $post->image,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'message' => $request->message
        ]);
        $post->abouts()->save($about);
        return redirect()->action('PostsController@show', $post);
    }

    public function update (Request $request, About $about) {
        $this->validate($request,[
            'image' => 'file|image|mimes:jpg,jpeg,png'
        ]);

        $filename = $request->image->store('public/image');
        $about->image = basename($filename);

        $post = Post::findOrFail($about['post_id']);

        $about->family_name = $request->family_name;
        $about->first_name = $request->first_name;
        $about->family_name_eng = $request->family_name_eng;
        $about->first_name_eng = $request->first_name_eng;
        $about->base = $request->base;
        $about->email = $request->email;
        $about->performance = $request->performance;
        $about->twitter = $request->twitter;
        $about->facebook = $request->facebook;
        $about->instagram = $request->instagram;
        $about->message = $request->message;
        $post->abouts()->save($about);
        return redirect()->action('PostsController@show', $post);
    }

}
