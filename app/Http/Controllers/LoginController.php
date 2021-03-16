<?php

namespace App\Http\Controllers;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    
    public function loginform()
    {
        return view('authentication.login');
    }
    public function login(Request $request)
    {
        try{
    	 
            $user = Sentinel::authenticate($request->all());
          if($user=Sentinel::check()){

             $user_type=Sentinel::getUser()->roles()->first()->slug;
             if($user_type=="admin")
         return redirect('/admin');
    
    elseif($user_type=="member")
        return redirect('/');
     }else{
        return redirect()->back()->with('warning','Oops!! Email or Password Not Matching');
     }
    }catch(ThrottlingException $e){
        $delay = $e->getDelay();
        $min=floor($delay/60);

        return redirect()->back()->with(['warning'=>"Your are suspended for $min minute"]); 
        }
        

      }
      public function logout(){
          Sentinel::logout();
          return redirect('/login');
      }



    
}
