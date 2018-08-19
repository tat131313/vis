<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class AdminController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function showAdminPage()
    {
        $comments = Comment::select('id', 'name', 'email', 'comment')
                        -> latest()
                        ->get();
        return view('adminPage', ['comments' => $comments]);
    }

    public function deleteComment(Request $request)
    {
        if(isset($request->delete)) {
            Comment::where('id', $request->delete)
                        ->delete();
        }
        return redirect()->back();
    }
}
