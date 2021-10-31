<?php
namespace App\Http\Controllers\Nobles;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Checkout;
class CheckoutController extends Controller
{
    //
    public function checkout()
    {
        return view('noblesite.checkout');
    }
    public function checkoutnobles(request $request)
    {
        Checkout::create([
        
            // 'country'=>$request->country,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'address'=>$request->address,             
            'post_code'=>$request->post_code,
            'note'=>$request->note,

        ]);
        return redirect()->intended(route('shop'));

    }
}
