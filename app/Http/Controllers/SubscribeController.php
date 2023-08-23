<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public $subscribe;
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:subscribes'
            ]);
        $this->subscribe = new Subscribe();
        $this->subscribe->name = $request->name;
        $this->subscribe->email = $request->email;
        $this->subscribe->save();
        return redirect()->back()->with('success','Thanks for Subscribe');
    }

    public function index(){
        return view('admin.comments.subscriber',[
            'subscribers'=>Subscribe::latest()->get(),
        ]);
    }
    public $sub;
    public function destroy($id){
        $this->sub = Subscribe::find($id);
        $this->sub->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
