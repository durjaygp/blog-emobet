<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $blog;
    public function index(){
        $slider = Post::with('category')->where('post_status',1)->where('post_type', 1)->latest()->withCount('comments')->take(5)->get();
        $featured = Post::with('category')->where('post_status',1)
            ->where('post_type', 2)->latest()->withCount('comments')->take(6)->get();

        $latest = Post::with('category')->latest()->withCount('comments')->take(10)->get();

        $last = Post::with('category')->orderBy('created_at', 'asc')->take(5)->get();

        return view('homePage.home.index',compact('slider','featured', 'latest', 'last'));
    }

    public function post(Post $blog){
        $blog = Post::withCount('comments')->find($blog->id);

        $recent_posts = Post::latest()->withCount('comments')->take(3)->get();

        $categories = Category::latest()->withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();

        $tags = Tag::latest()->take(15)->get();
        $person = Admin::find(1);

        $shareComponent = \Share::page(
            route('post.single',$blog->slug)
        )
            ->facebook(route('post.single',$blog->slug))
            ->twitter(route('post.single',$blog->slug))
            ->linkedin(route('post.single',$blog->slug))
            ->telegram(route('post.single',$blog->slug))
            ->whatsapp(route('post.single',$blog->slug))
            ->reddit(route('post.single',$blog->slug));

        return view('homePage.blog.single',[
            'post' => $blog,
            'recent_posts' => $recent_posts,
            'cates' => $categories,
            'tags' => $tags,
            'person'=>$person,
            'shareComponent'=>$shareComponent
        ]);

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

    public function category(Category $category)
    {
        //$blogs = Post::latest()->withCount('comments')->paginate(10);
        $recent_posts = Post::latest()->take(5)->get();
        $cates = Category::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $tags = Tag::latest()->take(50)->get();

        return view('homePage.category.category', [
            'category' => $category,
            'blogs' => $category->posts()->withCount('comments')->paginate(12),
            'recent_posts' => $recent_posts,
            //'blogs'=>$blogs,
            'cates' => $cates,
            'tags' => $tags
        ]);
    }


     public function search(Request $request){
         $search = $request->search;
         $blogs = Post::where('title','like','%'.$request->search.'%')->where('body','like','%'.$request->search.'%')->paginate(9);
            return view('homePage.search.search',compact('blogs','search'));

     }

     public function page($slug){
         $page = Page::find($slug);
        return view('homePage.page.index', compact('page'));
     }







}






