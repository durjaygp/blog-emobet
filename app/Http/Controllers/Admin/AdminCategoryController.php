<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public $category;
    public function index(){
        return view('admin.category.show',[
            'categories'=> Category::latest()->get(),
        ]);
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name,'-');
        $category->save();
        return redirect()->back()->with('success', 'Category Created Successfully');

    }
    public function edit($id){
        return view('admin.category.edit',[
            'category'=>Category::find($id),
        ]);
    }
    public function update(Request $request){
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name,'-');
        $category->save();
        return redirect()->back()->with('success', 'Category Updated Successfully');

    }
    public function delete($id){
        $category_default_id = Category::where('name','Uncategorized')->first()->id;
        $this->category = Category::find($id);
        if ($this->category-> name === 'Uncategorized')
            abort(404);

        $this->category->posts()->update(['category_id'=>$category_default_id]);        
        $this->category->delete();
        return redirect()->back()->with('success', 'Category Has been deleted.');
    }




}
