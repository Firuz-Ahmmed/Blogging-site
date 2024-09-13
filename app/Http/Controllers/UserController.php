<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function register(Request $request)
    {
        return view('register');
    }public function registerDataSave(Request $request)
    {
        $user = new User();
        if ($request->input('checkbox')) {
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            if(($request->input('confirm-password'))==($request->input('password'))){
                $user->save();
                return redirect()->route('login');
            }
            else {
                return redirect()->back()->with('error', 'Passwords do not match');
            }
           
        }




    }
}
