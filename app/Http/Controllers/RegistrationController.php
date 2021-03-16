<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('authentication.ragistration');

    }
    public function register(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|min:4',
            'confm_password'=>
            'required_with:password|same:password|min:4'
        ],
        [
            'email.unique'=>'This Email Has Already Been Taken !!!!',
        ]);
        $user = Sentinel::registerAndActivate($request->all());
        $role =  Sentinel::findRoleBySlug('member');
        $role->users()->attach($user);

        return back()->with('success','Registration Successfull');
    }
}
