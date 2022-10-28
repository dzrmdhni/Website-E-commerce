<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view ('vendors.index')->with('users', $users);
    }

    public function show($user_id)
    {
        $user = User::find($user_id);
        return view ('vendors.view')->with('users', $user);
    }

    public function destroy($user_id)
    {
        User::destroy($user_id);
        return redirect('users')->with('flash_message', 'User deleted!');  
    }
}
