<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $rules = [
      'title'=>'required|max:255',
      'excerpt'=>'required|max:255',
      'category_id'=>'required',
      'thumbnail'=>'required|file|mimes:jpg,png,webp,svg,jpeg',
      'body'=>'required',
    ];
    public function index()
    {
        return view('admin.post.show',[
            'blogs'=> Post::with('category','image')->latest()->get(),
        ]);
    }


    public function create()
    {

        return view('admin.post.create',[
            'categories'=>Category::pluck('name','id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public $blog;
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|unique:posts',
            'excerpt'=>'required',
            'body'=>'required',
            'post_image'=>'required',
            'category_id'=>'required',
        ]);

       $this->blog = new Post();
       $this->blog->title = $request->title;
       $this->blog->slug = Str::slug($request->title,'-');
       $this->blog->excerpt = $request->excerpt;
       $this->blog->body = $request->body;
       $this->blog->post_image = $this->saveImage($request);
       $this->blog->user_id = auth()->id();
       $this->blog->category_id = $request->category_id;
       $this->blog->post_status = $request->post_status;
       $this->blog->post_type = $request->post_type;
       $this->blog->post_meta_tags = $request->post_meta_tags;
       $this->blog->post_meta_title = $request->post_meta_title;
       $this->blog->save();
       return redirect()->back()->with('success', 'Blog Created Successfully');
    }

    public $image, $imageName, $imageUrl, $directory;
    public function saveImage($request)
    {
        $this->image = $request->file('post_image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'upload/blogs/';
        $this->imageUrl = $this->directory . $this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imageUrl;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.post.edit',[
            'blogs'=> Post::with('category','image')->find($id),'categories'=>Category::pluck('name','id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public $post;
    public function update(Request $request, $id)
    {

        $this->post = Post::find($id);
        $this->post->title = $request->title;
        $this->post->slug = Str::slug($request->title,'-');
        $this->post->category_id = $request->category_id;
        $this->post->excerpt = $request->excerpt;
        $this->post->body = $request->body;
        $this->post->user_id = auth()->id();
        $this->post->post_status = $request->post_status;
        $this->post->post_type = $request->post_type;
        $this->post->post_meta_tags = $request->post_meta_tags;
        $this->post->post_meta_title = $request->post_meta_title;

        if($request->file('post_image')){
            if(file_exists($this->post->post_image)){
                unlink($this->post->post_image);
            }
            $this->post->post_image = $this->saveImage($request);
        }
        $this->post->save();
        return redirect()->back()->with('success', 'Blog Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy( $id){
        $this->post = Post::find($id);
        if($this->post->post_image){
            if(file_exists($this->post->post_image)){
                unlink($this->post->post_image);
            }
        }
        $this->post->delete();
        return redirect()->back()->with('success', 'Blog Deleted Successfully');
    }
}
