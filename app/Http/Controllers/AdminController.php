<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class AdminController extends Controller
{
    public function index()
    {
        return view('psw');
    }

    public function enterPassword(Request $request)
    {
        $rules = [
            'password' => 'required',
        ];
    
        $this->validate($request, $rules);

        if($request->password == '1111') {
            return redirect('adminPage');
        } else {
            return back();
        }      
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
        //dump($request);
        if(isset($request->delete)) {
            Comment::where('id', $request->delete)
                        ->delete();
        }
        return redirect('adminPage');
    }
}
