<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use App\Post;
use App\User;

class ContactController extends Controller
{
    public function send(Request $request, $id) {
        $rules = [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required'
        ];
        $this->validate($request, $rules);

        $post = Post::findOrFail($id);
        $user = User::find($post->user_id);
        $email = $user->email;
        $name = $user->name;
     
        $to = [
            ['email' => $email, 'name' => $name]
        ];
     
        $data = $request->only('name', 'email', 'message');
        Mail::to($to)->send(new Contact($data));
     
        return redirect()->route('contact.result');
    }

    public function result() {
        return view('contact.result');
    }
}
