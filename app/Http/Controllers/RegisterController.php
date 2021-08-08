<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {

        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate(
            [
                'username' => 'required|min:4|unique:users,username',
                'name' => 'required|min:4',
                'email' => 'required|email|unique:users,email',
                'password' => 'required'
            ]
        );
        $attributes['password'] = bcrypt($attributes['password']);
        $user = User::create($attributes);
        // session()->flash('success', 'Your account has been created');
        // return redirect('/');
        // same as above
        auth()->login($user);
        return redirect('/')->with('success', 'Your account has been created');
    }
}
