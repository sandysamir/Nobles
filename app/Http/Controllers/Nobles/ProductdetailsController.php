<?php
namespace App\Http\Controllers\Nobles;

use App\Http\Controllers\Controller;
use App\Book;

use Illuminate\Http\Request;

class ProductdetailsController extends Controller
{
     public function productdetails($book_id)
    {
        
        $books=Book::select('id','bookname', 'description','image','author','price')->where('id',$book_id)->first();
        $book1=Book::select('id','bookname', 'description','image','author','price')->first();
        $book2=Book::select('id','bookname', 'description','image','author','price')->skip(1)->first();
        $book3=Book::select('id','bookname', 'description','image','author','price')->skip(2)->first();

        return view('noblesite.product-details',compact('books','book1','book2','book3'));
    }
}
