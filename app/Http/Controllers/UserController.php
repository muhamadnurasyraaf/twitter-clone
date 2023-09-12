<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'username' => ['required','min:4','max:20','unique:users'],
            'password' => ['required','min:7','max:20','confirmed'],
        ]);

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        Auth::login($user);

        return redirect('/home');
    }


    public function login(Request $request){
        $data = $request->validate([
            'username' => ['required','string'],
            'password' => ['required']
        ]);

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('error','Login Failed');
    }
}
