<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public $social;
    public function index(){
        return view('admin.social.show',[
            'categories'=> Social::latest()->get(),
        ]);
    }

    public function create(){
        return view('admin.social.index');
    }

    public function store(Request $request){
        $social = new Social();
        $social->social_title = $request->social_title;
        $social->social_icon = $request->social_icon;
        $social->social_link = $request->social_link;
        $social->save();
        return redirect()->back()->with('success', 'Social Links Created Successfully');
    }

    public function edit($id){
        return view('admin.social.edit',[
            'social'=>Social::find($id),
        ]);
    }
    public function update(Request $request){
        $social = Social::find($request->id);
        $social->social_title = $request->social_title;
        $social->social_icon = $request->social_icon;
        $social->social_link = $request->social_link;
        $social->save();
        return redirect()->back()->with('success', 'Updated Successfully');
    }

    public function delete($id){
        $this->social = Social::find($id);
        $this->social->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
