<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Comment;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        //
    }

    public function show(Category $category)
    {
        //$blogs = Post::latest()->withCount('comments')->paginate(10);
        $recent_posts = Post::latest()->take(5)->get();
        $cates = Category::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $tags = Tag::latest()->take(50)->get();

        return view('frontEnd.category.show', [
            'category' => $category,
            'blogs' => $category->posts()->withCount('comments')->paginate(10),
            'recent_posts' => $recent_posts,
            //'blogs'=>$blogs,
            'cates' => $cates,
            'tags' => $tags
        ]);
    }
}
