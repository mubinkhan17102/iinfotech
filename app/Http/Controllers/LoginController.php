<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('student');
    }
    public function login(Request $req){
        $username = $req->input('username');
        $password = $req->input('password');
        $user = User::where('username',$username)->first();
        if($user){
            if(Hash::check($password, $user->password)){
                $id = $user->id;
                Auth::loginUsingId(1);
                if(Auth::check())
                    return redirect('/studentlist');
            }
        }
        return redirect('/login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
