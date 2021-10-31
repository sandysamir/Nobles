<?php

namespace App\Http\Controllers\Client;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client;
use App\Book;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    protected $redirectTo = RouteServiceProvider::INDEX;
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   
    public function register(){
        return view('noblesite.register');
    }
    public function registered(request $request){
        Client::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'password' => $request->password,
        ]);
        $books=Book::select('id','bookname', 'description','image','author','price')->get();
        return view('noblesite.index',compact('books'));
    }
}
