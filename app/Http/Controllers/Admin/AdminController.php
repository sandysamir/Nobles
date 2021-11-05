<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class AdminController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::ADMIN; 
    //hena byrouh lma ydkhol 3la login b3dha bydkhol 3la ADMIN ( admin/allbooks)

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { //3amlna copy mn login bt3t l user w ghyrna l guard bs w redirect to .
        $this->middleware('guest')->except('logout');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }
    //function l guard de gat mnen b2a  AuthenticatesUsers akher function feha by3ml l guard by default hena ehna ghyrnah 
 public function logout(){
    auth()->guard('admin')->logout();
        return redirect('admin/login');

 }
}
