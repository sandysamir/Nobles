@extends('layouts.app')
@section('content')

<div class="container"> 
<div class="position-relative p-3 m-2">
  <div class="position-absolute top-0 start-50 translate-middle">
    <div class="d-flex">
    <h4 class="m-1" > All Books</h4> <br>
    <a href="{{route('addbook')}}" class="btn btn-primary p-1 "> Add Book</a>
    </div></div>
    </div>
    
        <div class="alert alert-success" id="success_msg" style="display: none"> deleted successfully</div>
    <table class="table align-middle" id="datatable">
        <thead>
        <tr >
            <th scope="col">book name</th>
            <th scope="col">description</th>
            <th scope="col"> author</th>
            <th scope="col">images</th>
            <th scope="col">price</th>
            <th scope="col">opr</th>


        </tr>
       
        
        </tr>
        </thead>
  
        <tbody>
        @foreach($books as $book)
        <tr class="BookingRow{{$book->id}}">
            <td>{{$book->bookname}}</td>
            <td>{{$book->description}}</td>
            <td>{{$book->author}}</td>
            <td><img src="{{asset('/storage/'.$book->image)}}" class="w-20" style="width:100px;" ></td>
            <td>{{$book->price}}</td>

            <td>
            <a href="{{route('editbook',$book->id)}}"  edit_book="{{$book->id}}"class="edit_btn btn btn-primary"> Edit</a>
            <button  delete_book="{{$book->id}}" class="delete_btn btn btn-danger"> delete </button>
               </td></div>
        </tr>
        @endforeach
        </tbody>

    </table>
    </div>
    @stop
@section('script') 
<script>
    // global app configuration object
    var config = {
        routes: {
            zone: "{{route('deletebook')}}"
        }
        ,data:{
          csrf:  "{{csrf_token()}}"
        },
    };
    </script>
<script src="{{mix('js/allbooks.js')}}">

</script>
  @stop