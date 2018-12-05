<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function user_register(Request $request){
       if(! $request->isMethod('post')){
          return view('register');
       }else{
        echo '<pre>';
        print_r($request->all()) ;
        $userFormData = $request->all();
        $hashed = Hash::make($request->password);
        $user = new User();
        $user->create($userFormData);
       }      
    }
}
