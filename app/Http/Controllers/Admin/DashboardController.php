<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Page;
use App\Models\Post;
use App\Models\Social;
use App\Models\Subscribe;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $post = Post::all()->count();
        $user = User::all()->count();
        $comment = Comment::all()->count();
        $category = Category::all()->count();
        $page = Page::all()->count();
        $subscriber = Subscribe::all()->count();
        $social = Social::all()->count();
        $admin = User::all()->where('role_id',2)->count();


        return view('admin.dashboard.index',compact('admin','post','comment','user','category','page','social','subscriber'),[
            'blogs'=> Post::with('category','image')->latest()->get(),
        ]);
    }

}
