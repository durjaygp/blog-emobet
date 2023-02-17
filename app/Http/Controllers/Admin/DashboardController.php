<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $post = Post::all()->count();
        $user = User::all()->count();
        $comment = Comment::all()->count();
        $category = Category::all()->count();

        return view('admin.dashboard.index',compact('post','comment','user','category'),[
            'blogs'=> Post::with('category','image')->latest()->get(),
        ]);
    }

}
