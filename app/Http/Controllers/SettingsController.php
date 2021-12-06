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

class SettingsController extends BaseController
{
    public function loadViewSettings()
    {
        return view('settings');
    }

    public function saveChanges(Request $request)
    {
        if(!$request['name'] && !$request['image'] && !$request['password'] && !$request['repeat_password'] && !$request['remove_password'])
        {
            return back()->withErrors(['FormError' => 'Nothing to change']);
        }

        if($request['password'] && !$request['repeat_password'] || !$request['password'] && $request['repeat_password'] )
        {
            return back()->withErrors(['FormError' => 'Please fill all password fields to change']);
        }

        if($request['password'] !== $request['repeat_password'] )
        {
            return back()->withErrors(['FormError' => 'Passwords didn\'t match']);
        }

        !$request['name'] ?: DB::table('users')->where('id', Auth::user()->id)->update(array('name' => $request['name']));
        !$request['image'] ?: DB::table('users')->where('id', Auth::user()->id)->update(array('image' => $request['image']));

        if($request['password'])
        {
            $pass = Crypt::encryptString($request['password']); 

            DB::table('users')->where('id', Auth::user()->id)->update(array('password' => $pass));
        }

        if($request['remove_password'])
        {
            DB::delete('DELETE FROM users where id = ?', [Auth::user()->id]);
            return redirect('/login');
        }

        return redirect('/');
    }
}
