<?php

namespace App\Http\Controllers\Nobles;
use App\Http\Controllers\Controller;
use App\Book;
use Illuminate\Http\Request;

class ShopController extends Controller
{

     public function shop()
    {
        $books=Book::select('id','bookname', 'description','image','author','price')->get();
       $bookrandom= Book::inRandomOrder()->limit(4)->get();

        return view('noblesite.shop',compact('books','bookrandom'));
    }
    public function search(Request $request)
    {  
    $books=Book::select('id','bookname', 'description','image','author','price')->where('bookname','LIKE','%'.$request->bookName.'%')->get();
    $bookrandom= Book::inRandomOrder()->limit(4)->get();
    // return response()->json([
    //     'status' => true,
    //     'books' =>  $books,
    //     'bookrandom'=> $bookrandom,
    // ]);
    return view('noblesite.appendshop',compact('books','bookrandom'))->render();

    }
}
// return response()->json(['url'=>url('/')]);
    //  $returnHTML = view('noblesite.shop',compact('books','bookrandom'))->render();
    //  return response()->json(array('status' => true, 'html'=>$returnHTML));
    // return response()->json(['status' => true,
    //     'view' => view('noblesite.shop', compact('books', 'bookrandom'))->render(),
    // ]);