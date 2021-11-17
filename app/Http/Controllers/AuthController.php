<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserReqest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function RegisterForm()
    {
        return view('register');
    }
    public  function register(UserReqest $Urequest)
    {
        $user = User::create([
            'name' => $Urequest->name,
            'email' => $Urequest->email,
            'password' => bcrypt($Urequest->password)
        ]);
        // $name=Auth::user()->name;
        // $Urequest->session()->flash('loggedMessage',"welcome User :$name");
        // Auth::login($user);
       return redirect(url('/login'));

        // return "done";
    }
    public function login(Request $request)
    {
        $islogged = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if (!$islogged) {
            return redirect(url('/login'));
        }
        $name=Auth::user()->name;
        $request->session()->flash('loggedMessage',"welcome User :$name");
        // put (btft7 session w tfdl mo7tfa beha l7d m ana a3mlha destroy )
        // flash(btfdl 7afza elmsg l one request bs ya3i btzhhar mara wa7da )
        // get : bdeha elkey w tgbli elmsg elli gwah
       //has  : btrg3 true aw false hal hya mawgoda wala l2
       //forget : session destroy
       return redirect(url('/cats'));

    }
    public function logout(User $user){

        Auth::logout($user);
       return redirect(url('/cats'));
    }
}
