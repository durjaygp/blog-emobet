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
    public function store(Request $request)
    {
        $validated = $request->validate($this->rules);
        $validated['user_id'] = auth()->id();
        $validated['slug'] = Str::slug($request->title,'-');
        $post = Post::create($validated);

        if($request->has('thumbnail'))
        {
            $thumbnail = $request->file('thumbnail');

            $file_extension = $thumbnail->getClientOriginalExtension();
            // $path = $thumbnail->store('/uploads/images', 'public');
            $filename = time().'.'.$file_extension;
            $destiantion = "uploads/images";
            $path = $thumbnail->move($destiantion,$filename);


            $post->image()->create([
                'name' => $filename,
                'extension' => $file_extension,
                'path' => $path
            ]);
        }

        return redirect()->back()->with('success', 'Blog Created Successfully');


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
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->slug = Str::slug($request->title,'-');
        $post->category_id = $request->category_id;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;

        if($request->has('thumbnail'))
        {
            $thumbnail = $request->file('thumbnail');

            $file_extension = $thumbnail->getClientOriginalExtension();
            $filename = time().'.'.$file_extension;
            $destiantion = "uploads/images";
            $path = $thumbnail->move($destiantion,$filename);


            $post->image()->update([
                'name' => $filename,
                'extension' => $file_extension,
                'path' => $path
            ]);
        }

        if($post->save()){
            return redirect()->back()->with('success', 'Blog Update Successfully');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->image()->delete();
        $post->delete();
        return redirect()->back()->with('success', 'Blog Delete Successfully');
    }
}
