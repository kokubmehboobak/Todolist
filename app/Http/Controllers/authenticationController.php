<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class authenticationController extends Controller
{
    public function loginpage()
    {
        return view('authentication\login');
    }
    public function login(Request $request)
    {
        $credentials = $request -> validate([
            'email'=> 'required|string|email',
            'password'=> 'required|string',
        ]);

        if(Auth::attempt($credentials, $request->remember))
        {
            return redirect()->intended(route('newtask.add'));
        }
        else
        {
            return redirect()->back()->withErrors(['email'=>'Invalid credentials']);
        }
    }

    public function signuppage()
    {
        return view('authentication\registration');
    }
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        Auth::login($user);
        
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
    
       
        return redirect('/');    }


}
