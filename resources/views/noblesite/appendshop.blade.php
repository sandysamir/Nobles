@foreach($books as $book)
                                            <div class="col-lg-4 col-md-6">
                                                <div class="product-wrapper product-box-style mb-30">
                                                    <div class="product-img">
                                                        <a href="{{route('product-details',$book->id)}}">
                                                        <!-- <img src="{{asset('/storage/'.$book->image)}}" class="w-20" style="width:100px;" > -->
                                                            <img src="{{asset('/storage/'.$book->image)}}" class="w-20"  style="width:300px; height:300px;" alt="">
                                                        </a>
                                                        <span>hot</span>
                                                        <div class="product-action">
                                                        <button type="button" book_id="{{$book->id}}" class="wishlist_btn animate-left  "> <i class="pe-7s-like"> </i> </button>
                                                        <button type="button" title="Add To Cart" cart_book="{{$book->id}}" class="cart_btn animate-top "> <i class="pe-7s-cart"> </i></button>
                                                        <button type="button" onclick="location.href='{{route('product-details',$book->id)}}';" title="Quick View" class="animate-right ">  <i class="pe-7s-look"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="{{route('product-details',$book->id)}}">{{$book->bookname}} </a></h4>
                                                        <span>${{$book->price}}.00</span>
                                                    </div>
                                                </div>
                                           </div>
                                           @endforeach