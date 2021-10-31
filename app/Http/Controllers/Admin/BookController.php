<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Book;
use App\Admin;
use Auth;

class BookController extends Controller
{
    

    public function pdf()
    {
        $books=Book::select('id','bookname', 'description','image','author','pdf')->first();
   
        return view('admindashboard.pdf',compact('books'));
    
    }
    public function addbook()
    {

        // return auth()->guard('admin')->user();
         return view('admindashboard.addbook');
    
    }
    protected function getmsg(){  
        return $messages=[
        'bookname.required'=>'you must enter a name of the book ',
        'description.required'=>'you must enter a description ',
        'author.required'=>'you must enter authorsbook ',
        'price.required'=>'you must enter price',
        'image.required'=>'ou must enter an image ',
    
    ];
    
    }
    public function savebook(request $request){
     
        $imagepath=request('image')->store('images','public');
        $filepath=request('pdf')->store('pdf','public');
        $rules=[
            'bookname'=>'required',
            'description'=>'required',
            'author'=>'required',
            'price'=>'required|numeric',
            'image'=>'required|image',
        ];
         $messages= $this->getmsg();
        $validator=Validator::make($request->all(),$rules,$messages);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
            // $file_name=$this->savePhoto($request->photo ,'images');

            Book::create([
            'bookname'=>$request->bookname,
            'description'=>$request->description,
            'author'=>$request->author,
            'image'=>$imagepath,
            'price'=>$request->price,
            'pdf'=>$filepath,             
    
        ]);  
        return redirect()->action([BookController::class, 'allbooks']);

    
    }
  public function allbooks(){
    
    $books=Book::select('id','bookname', 'description','image','author','price')->get();
   
    return view('admindashboard.allbooks',compact('books'));
  } 
  public function  deletebook( request $request){
      dd($request);
    $book = Book::find($request->id); 

    if (!$book)
        return redirect()->back()->with(['error' => __('messages.book not exist')]);

    $book->delete();
    return response()->json([
        'status' => true,
        'id'=>$request->id
    ]);

}
public function editbook($book_id){
    $book=Book::select('id','bookname', 'description','author','price')->find($book_id);

    return view('admindashboard.edit', compact('book'));

}

public function updatebook(request $request,$book_id){
    $book=Book::find($book_id);
    $imagepath=request('image')->store('images','public');

    $book->update([
        'bookname'=>$request->bookname,
        'description'=>$request->description,
        'author'=>$request->author,
        'image'=>$imagepath,
        'price'=>$request->price,            

    ]);  
    return redirect()->action([BookController::class, 'allbooks']);}
}
