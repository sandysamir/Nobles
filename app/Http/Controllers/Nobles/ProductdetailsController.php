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
        $bookrandom= Book::inRandomOrder()->limit(3)->get();


        return view('noblesite.product-details',compact('books','bookrandom'));
    }
}
