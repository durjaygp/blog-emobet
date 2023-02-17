<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        //
    }

    public function show(Tag $tag)
    {
        //$blogs = Post::latest()->withCount('comments')->paginate(10);
        $recent_posts = Post::latest()->take(5)->get();
        $cates = Category::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $tags = Tag::latest()->take(20)->get();

        return view('frontEnd.tag.show', [
            'tag' => $tag,
            'blogs' => $tag->posts()->withCount('comments')->paginate(10),
            'recent_posts' => $recent_posts,
            //'blogs'=>$blogs,
            'cates' => $cates,
            'tags' => $tags
        ]);
    }
}
