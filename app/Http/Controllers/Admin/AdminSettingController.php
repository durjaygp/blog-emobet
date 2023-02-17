<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
    public $user;
    public function index(){
        return view('admin.user.user_list',[
            'users'=>User::latest()->get(),
        ]);
    }

    public function delete($id){
        $this->user = User::find($id);
        $this->user->delete();
        return redirect()->back()->with('success','User Deleted Successfully');
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.user.edit_user',compact('user'));
    }
    public function update(Request $request){
        $this->user = User::find(auth()->user()->id);
        $this->user->name = $request->name;
        $this->user->email = $request->email;
        $this->user->password = bcrypt($request->password);
        $this->user->save();
        return redirect()->back()->with('success','User Updated');

    }
}
