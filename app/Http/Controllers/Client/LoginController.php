<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
class LoginController extends Controller

{
    protected $redirectTo = RouteServiceProvider::INDEX;
      
    use AuthenticatesUsers;
    
    
  public function login(){
        return view('noblesite.login');
    }
    public function logined(request $request)
    {  
        // $this->validate($request, [
        //     'email'           => 'required|max:255|email',
        //     'password'           => 'required|confirmed',
        // ]);
        if (Client::where('password', $request->password)) {
            // Success
            return "saved";
        } else {
            // Go back on error (or do what you want)
            return "nooo";
        }
    
    }

}
