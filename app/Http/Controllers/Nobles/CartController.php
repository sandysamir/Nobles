<?php
namespace App\Http\Controllers\Nobles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Book;



class CartController extends Controller
{
    //
    public function cart()
    { 
        
            $id = Auth::user()->id;
         $book=  User::with('addToCart')->find(auth()->id($id));
         $books= $book->addToCart;
         $bookk=Book::select('id','bookname', 'description','image','author','price')->get();
            
         return view('noblesite.cart',compact('books','bookk'));
    }
    
    public function addcart(Request $request)
    {  
        //  $id = Auth::user()->id;
        //     Cart::create([
        //         'user_id'=>$id,
        //         'book_id'=>$request->book_id,
        //     ]);
        //     return redirect()->intended(route('shop'));

            try {
                Auth::user()->addToCart()->attach([$request->book_id]);
                return response()->json([
                    'status' => true,
                    'msg' => 'this item is added sucussfully in your cart ',
                ]);
            } catch (\Illuminate\Database\QueryException $ex) {
               
        
                return response()->json([
                    'status' => false,
                    'msg' => $ex,
                ]);

    }
    }


    public function  deletecart(request $request){
        // return $request;
        // Auth::user()->books()->detach([$request->book_id]);
        $user = User::find(Auth::id());
        $user->addToCart()->detach($request->id);
        return response()->json([
            'status' => true,
            'id'=>$request->id
        ]);
    
  }}
