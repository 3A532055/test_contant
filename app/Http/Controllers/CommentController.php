<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments=Comment::orderBy('id','DESC')->get();
        $data=['comments'=>$comments];
        return view('welcome',$data);
    }

    public function store(CommentRequest $request)
    {
        Comment::create($request-> all());
        return redirect()->route('/');
    }


}
