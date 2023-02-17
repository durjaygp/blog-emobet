<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showBlog(Post $blog){

        $blog = Post::withCount('comments')->find($blog->id);

        $recent_posts = Post::latest()->withCount('comments')->take(5)->get();

        $categories = Category::latest()->withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();

        $tags = Tag::latest()->take(15)->get();
        $person = Admin::find(1);

        return view('frontEnd.blog.details',[
            'post' => $blog,
            'recent_posts' => $recent_posts,
            'cates' => $categories,
            'tags' => $tags,
            'person'=>$person,
        ]);
    }

    public function addComment(Request $request, Post $post)
    {

        $request->validate([
            'the_comment' => 'required|min:10|max:300'
        ]);

        //$attributes['user_id'] = auth()->id();
        $comment= new Comment();
        $comment->the_comment = $request->the_comment;
        $comment->user_id = auth()->user()->id;
        $comment->post_id = $post->id;
        $comment->save();
       // $comment = $post->comments()->create($attributes);

        return redirect()->back()->with('success', 'Thanks for your Comment');
    }
}
