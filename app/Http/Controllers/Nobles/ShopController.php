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
    // $bookName=Book::select('bookname')->where('bookname','LIKE','%'.$request->bookName.'%')->get();
    $books=Book::select('id','bookname', 'description','image','author','price')->where('bookname','LIKE','%'.$request->bookName.'%')->get();
    // return $books;
    return view('noblesite.shop',compact('books'));

    }
}
