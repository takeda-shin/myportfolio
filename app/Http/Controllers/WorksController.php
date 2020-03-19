<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class WorksController extends Controller
{
    public function index ($id) {
        $post = Post::findOrFail($id);
        return view('works.index')->with('post', $post);
    }
}