<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class MakeAdminController extends Controller
{
    public $user;
    public function index(){
        return view('admin.admin.show',[
           'admins'=> User::latest()->get(),
        ]);
    }
    public function create(){
        return view('admin.admin.create',[
            'roles'=>Role::all(),
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required',
            'role_id'=>'required',
        ]);
        $this->user = new User();
        $this->user->name = $request->name;
        $this->user->email = $request->email;
        $this->user->password = bcrypt($request->password);
        $this->user->role_id = $request->role_id;
        $this->user->save();
        return redirect()->back()->with('success','New Admin Created Successfully');
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.admin.edit_admin',compact('user'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users,email',
        ]);
        $this->user = User::find($id);
        $this->user->name = $request->name;
        $this->user->email = $request->email;
        $this->user->user_description = $request->user_description;
        $this->user->user_title = $request->user_title;
        $this->user->password = bcrypt($request->password);

        if($request->file('user_image')){
            if(file_exists($this->user->user_image)){
                unlink($this->user->user_image);
            }
            $this->user->user_image = $this->saveImage($request);
        }

        $this->user->save();
        return redirect()->back()->with('success','Admin Data Updated');

    }

    public function delete($id){
        $this->user = User::find($id);
        $this->user->delete();
        return redirect()->back()->with('success','Admin Deleted Successfully');
    }

    public $image, $imageName, $imageUrl, $directory;
    public function saveImage($request)
    {
        $this->image = $request->file('user_image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'upload/user/';
        $this->imageUrl = $this->directory . $this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imageUrl;
    }
}
