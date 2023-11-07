<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function adduser(){
        return view("adduser");
    }


    public function storeUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
            'mobile' => 'required|integer',
        ]);

        User::create($validatedData);

        return redirect()->route('adduser')->with('success', 'User added successfully');
    }



    public function viewadduser()
{
    $users = User::paginate(5);

    return view('viewadduser', compact('users'));
}

}
