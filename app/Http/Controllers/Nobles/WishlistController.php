<?php

namespace App\Http\Controllers\Nobles;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Book;
use App\User;

use Auth;
class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function wishlist(Request $request)
    {
        try {
            Auth::user()->books()->attach([$request->book_id]);
            return response()->json([
                'status' => true,
                'msg' => 'this item is added sucussfully in your favourite ',
            ]);
        } catch (\Illuminate\Database\QueryException $ex) {
            report($ex);
    
            return response()->json([
                'status' => false,
                'msg' => 'this item is already in your favourite ',
            ]);
        }
    //     if ($offer)
    //         return response()->json([
    //             'status' => true,
    //             'msg' => 'Success stored',
    //         ]);

    //     else
    //         return response()->json([
    //             'status' => false,
    //             'msg' => 'فشل الحفظ برجاء المحاوله مجددا',
    //         ]);

    }
    public function userwishlist(){
        $id = Auth::user()->id;
        $books=Auth::user()->with('books')->where('id',$id)->get()->first();
        $d=$books->books;
       return view('noblesite.wishlist',compact('d'));

    }
    
    public function  deletefav(request $request){
        // return $request;
        // Auth::user()->books()->detach([$request->book_id]);
        $user = User::find(Auth::id());
        $user->books()->detach($request->id);
        return response()->json([
            'status' => true,
            'id'=>$request->id
        ]);
    
  }

    
}
