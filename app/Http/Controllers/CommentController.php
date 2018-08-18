<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::select('name', 'comment')
                        -> latest()
                        ->get();
        return view('welcome', ['comments' => $comments]);
    }

    public function AddNewComment(Request $request) 
    {
        $rules = [
            'name' => 'required|max:32',
            'email' => 'required|email',
            'comment' => 'required|max:255',
        ];
    
        $this->validate($request, $rules);

        $comment = new Comment;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->save();
        return back(); 
    }
}
