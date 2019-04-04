<?php

namespace App\Http\Controllers;

use App\Mail\UserWelcome;
use Illuminate\Http\Request;
use App\User;
use Mail;



class UserController extends Controller
{

    public function edit($id) 
    {
        $user = User::find($id);
        

        return view('updateName', compact('user'));
    }

    public function update(Request $request) 
    {
        $user = User::find($request->userId);
        $user->update(['name' => $request->name]);
        return view('home')->with('user', $user);
    }
}
