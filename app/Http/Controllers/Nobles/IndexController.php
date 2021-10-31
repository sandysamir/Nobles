<?php

namespace App\Http\Controllers\Nobles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;

class IndexController extends Controller
{
    //
    public function index()
    {
       
        $books=Book::select('id','bookname', 'description','image','author','price')->get();
       return view('noblesite.index',compact('books'));
       
    }
}
