@extends('layouts.app')
@section('content')
<div align="center">
<h2> Add a Book</h2>

<form method='POST'  enctype="multipart/form-data" action="{{route('updatebook',$book->id)}}" >
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Book name</label>
    <input type="text" class="form-control text-line" id="exampleInputEmail1" value="{{$book->bookname}}" name="bookname" aria-describedby="emailHelp" style="width:500px; background: transparent;
    border: none;
    border-bottom: 1px solid #000000;">
    @error('bookname')
                                    
     <strong style="color:red;">you must enter a name of the book</strong>
                                    
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Book Decription</label>
    <input type="text" class="form-control text-line" id="exampleInputPassword1"  value="{{$book->description}}" name="description" style="width:500px; background: transparent;
    border: none;
    border-bottom: 1px solid #000000; " >
      @error('description')
                                    
       <strong style="color:red;">you must enter a description</strong>
                                                                   
      @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">author</label>
    <input type="string" class="form-control text-line" id="exampleInputPassword1" value="{{$book->author}}"  name="author" style="width:500px; background: transparent;
    border: none;
    border-bottom: 1px solid #000000;">
        @error('author')
                                    
                                    <strong  style="color:red;">you must enter a author</strong>
                                                                   
                                   @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">image</label>
    <input type="file" class="form-control text-line" id="exampleInputPassword1"   value="{{$book->image}}" name="image" style="width:500px; background: transparent;
    border: none;
    border-bottom: 1px solid #000000;">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">price</label>
    <input type="number" class="form-control text-line" id="exampleInputPassword1"   value="{{$book->price}}" name="price" style="width:500px; background: transparent;
    border: none;
    border-bottom: 1px solid #000000;">
        @error('price')
                                    
         <strong style="color:red;"> you must enter a price</strong>
                                                                   
      @enderror
  </div>
  <button id="save_booking" class="btn btn-primary">Add Book</button>
</form>
</div>
@endsection
