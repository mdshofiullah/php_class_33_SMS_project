<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user;
    private $users;

    public function index()
    {
        return view('admin.user.add');
    }
    public function create(Request $request)
    {
//        we can do this this is a process to use this go to User model class
//        $this->user = new User();
//        $this->user->newUser($request);

        User::newUser($request);

        return redirect('/add-user')->with('message', 'User Info Created Successfully');
    }
    public function manage()
    {
        $this->users = User::all();

        return view('admin.user.manage',['users'=> $this->users]);
    }

    public function edit($id)
    {
        $this->user = User::find($id);
        return view('admin.user.edit', ['user'=>$this->user]);
    }
    public function update(Request $request,$id)
    {
        User::updateUser($request,$id);

        return redirect('/manage-user')->with('message', 'Info Updated Successfully');
    }
    public function delete($id)
    {

    }

}
