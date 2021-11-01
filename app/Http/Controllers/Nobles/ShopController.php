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
        return view('noblesite.shop',compact('books'));
    }
    public function search(Request $request)
    {
return$request;    }
}
