<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use App\Models\User; 


class AuthController extends Controller
{
    //

    public function Login(){
          if(request()->isMethod('POST')){
              return User::login();
          }
           
          return view('auth.login');
    }

    public function Signup(SignupRequest $request){
          if(request()->isMethod('POST')){
              return User::Signup();
          }

          return view('auth.signup');
    }

    public  function Logout(){
        return User::logout();
    }
}
