<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class AdminCommentController extends Controller
{
    public $comment;
    public function show(){
        return view('admin.comments.show',[
            'comments'=>Comment::with('user','post')->latest()->get(),
        ]);
    }
    public function delete($id){
        $this->comment = Comment::find($id);
        $this->comment->delete();
        return redirect()->back()->with('success','Comment Has Been Deleted Successfully');
    }
}
