<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index(){
        $data = User::all();
        return view('backend.user.view',compact('data'));
    }
}
