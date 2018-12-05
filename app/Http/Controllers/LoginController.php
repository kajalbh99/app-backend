<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function user_login(Request $request){
       if(! $request->isMethod('post')){
          return view('login');
       }else{

            if (Auth::attempt(array('email' => $request->email, 'password' => $request->password))){
                $notification = array(
                    'message'=>'Successfully logged in!!!',
                    'alert-type'=>'success'
                );
            }else{
                $notification = array(
                    'message' => 'Wrong Credentials!!!',
                    'alert-type' => 'error'
                );
            }
            return back()->with($notification);

       }      
    }
}
