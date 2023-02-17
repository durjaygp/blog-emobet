<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }
    public function blogs(){
        $blogs = Post::with('image')->latest()->withCount('comments')->paginate(10);

        $recent_posts = Post::latest()->withCount('comments')->take(5)->get();

        $categories = Category::latest()->withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();

        $tags = Tag::latest()->take(15)->get();

        return view('frontEnd.blog.blogs',[
            'blogs' => $blogs,
            'recent_posts' => $recent_posts,
            'cates' => $categories,
            'tags' => $tags,
        ]);
    }

    public function arc(){
        return view('frontEnd.pages.arc');
    }
    public function arcguide(){
        return view('frontEnd.pages.arcguide');
    }
    public function oop(){
        return view('frontEnd.pages.oop');
    }
    public function contact(){
        return view('frontEnd.pages.contact');
    }
    public function faq(){
        return view('frontEnd.pages.faq');
    }




}






