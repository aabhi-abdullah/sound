<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        $roles = Role::all();

        return view('dashboard/user/index',['Users'=> $data],['roles'=> $roles]);
    }
    public function create()
    {
        $roles = Role::all();

        return view('dashboard/user.create',['roles'=> $roles]);
    }

    public function submit(Request $req)
    {
        $u = new User; //object User
        $u->name=$req->name;
        $u->email=$req->email;
        $u->phone= $req->phone;
        $u->address= $req->address;
        $u->password= $req->password;
        if($req->profile_photo_path)
        {
            $u->profile_photo_path = $req->profile_photo_path->store('profile_photo_path','public');
        }
        if($u->save())
        {
            // Attach the selected role to the user
            $role = Role::find($request->input('role'));
            $u->roles()->attach($role); 

            return redirect('dashboard/user/index');
        }
        else
        {
            return view('dashboard/user/create');
        }
    }
    public function delete($id){
        $data = User::find($id);
        $data->delete();
     return redirect('dashboard/user/index');
     }
     public function edit($id)
    {
        $roles = Role::all();
        $user = User::findOrFail($id);
        return view('dashboard/user/update',['Users' => $user, 'roles' => $roles]);
    }
     public function update(Request $req)
    {
        $u = User::find($req->id);
        $u->name=$req->name;
        $u->email=$req->email;
        $u->phone= $req->phone;
        $u->address= $req->address;
        if($req->profile_photo_path)
        {
            $u->profile_photo_path = $req->profile_photo_path->store('profile_photo_path','public');
        }
        $u->save();

            // Detach existing roles and attach the selected role to the user
            $u->roles()->detach();
            $role = Role::find($req->input('role'));
            $u->roles()->attach($role);

        return redirect('dashboard/user/index');
    }
}
