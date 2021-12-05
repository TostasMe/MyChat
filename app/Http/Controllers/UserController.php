<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends BaseController
{
    public function loadViewSignup()
    {
        return view('signup');
    }

    public function loadViewLogin()
    {
        return view('login');
    }

    public function signup(Request $request)
    {
        if(!$request['email'])
        {
            return back()->withErrors(['FormError' => 'Email is empty']);
        }

        if(DB::table('users')->where('email', $request['email'])->exists())
        {
            return back()->withErrors(['FormError' => 'User is already exist']);
        }

        if(!$request['password'])
        {
            return back()->withErrors(['FormError' => 'Password is empty']);
        }

        if($request['password'] !== $request['repeat_password'])
        {
            return back()->withErrors(['FormError' => 'Passwords didn\'t match']);
        }

        $pass = Crypt::encryptString($request['password']);

        $user = [
            'email' => $request['email'],
            'password' => $pass,
            'name' => "User",
            'image' => "https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png"
        ];
        
        $user = User::create($user);
        
        if($user)
        {
            return redirect('/login');
        }
    }

    public function login(Request $request)
    {
        if(!$request['email'])
        {
            return back()->withErrors(['FormError' => 'Email is empty']);
        }

        if(!$request['password'])
        {
            return back()->withErrors(['FormError' => 'Password is empty']);
        }

        $userobj = DB::select('select * from users where email = :email LIMIT 1', 
            [
                'email' => $request['email'],
            ]);

        if($userobj)
        {
            $decrypted = Crypt::decryptString($userobj[0]->password);

            if($decrypted === $request['password'])
            {
                $user = User::find($userobj[0]->id);

                Auth::login($user);
                return redirect("/");
            }
            else
                return back()->withErrors(['FormError' => 'Incorrect password']);
        }
        
        else
        {
            return back()->withErrors(['FormError' => 'User not exist']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
