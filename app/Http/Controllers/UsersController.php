<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UsersController extends Controller
{
    function login(Request $request)
    {
        $user = User::where(['email' => $request->email])->first();
        if(!$user || !Hash::check($request->password, $user->password))
        {
            return " Not match email or password";
        }else{
            $request->session()->put('user', $user);
            return redirect('/products');
        }
    }
}
