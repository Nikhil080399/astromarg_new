<?php

namespace App\Http\Controllers;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Contracts\Auth\Authenticatable;

class UserController extends Controller
{
    // public function index()
    // {
        
    //     return view('admin.user.adduser');
    // }

    public function index()
    {
        $permissions = Permission::all();
        return view('admin.user.adduser', compact('permissions'));
    }

    public function register(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|confirmed',
                'role_access' => 'array'
            ]);

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            $user->assignRole('user');
            $user->givePermissionTo($request->role_access);


            return redirect()->back()->with('success', 'User registered successfully.');
        }




    public function show(User $user)
    {
        $userData = User::all();
        return view('admin.user.userlist',compact('userData'));
    }

    public function delete(User $user ,$id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('/userlist')->with('success', 'User deleted successfully.');
    }


}
