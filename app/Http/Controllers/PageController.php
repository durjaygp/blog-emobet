<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Str;
class PageController extends Controller
{
    public $page;
    public function index(){
        return view('admin.pages.index');
    }

    public function store(Request $request){
        $this->page = new Page();
        $this->page->page_title = $request->page_title;
        $this->page->slug = Str::slug($request->page_title,'-');
        $this->page->page_description = $request->page_description;
        $this->page->page_link = $request->page_link;
        $this->page->page_image = $this->saveImage($request);
        $this->page->save();
        return redirect()->back()->with('success','Page Created Successfully');
    }

    public $image, $imageName, $imageUrl, $directory;
    public function saveImage($request)
    {
        $this->image = $request->file('page_image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'upload/pages/';
        $this->imageUrl = $this->directory . $this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imageUrl;
    }

    public function show(){
        return view('admin.pages.show',[
            'pages'=> Page::latest()->get(),
        ]);
    }

    public function edit($id){
        return view('admin.pages.edit',[
            'pages' => Page::find($id),
        ]);
    }

    public function update(Request $request){
        $this->page = Page::find($request->id);

        $this->page->page_title = $request->page_title;
        $this->page->slug = Str::slug($request->page_title,'-');
        $this->page->page_description = $request->page_description;
        $this->page->page_link = $request->page_link;
       // $this->page->page_image = $this->saveImage($request);

        if($request->file('page_image')){
            if(file_exists($this->page->page_image)){
                unlink($this->page->page_image);
            }
            $this->page->page_image = $this->saveImage($request);
        }

        $this->page->save();
        return redirect()->back()->with('success','Page Updated Successfully');
    }

    public function delete($id){
        $this->blog = Blog::find($id);
        if($this->blog->image){
            if(file_exists($this->blog->image)){
                unlink($this->blog->image);
            }
            // $this->blog->image = $this->saveImage($request);
        }
        $this->blog->delete();
        return redirect()->back()->with('success', 'Blog Has been deleted.');
    }
}
