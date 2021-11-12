@extends('layouts.site')

@section('content')
<!doctype html>
<html class="no-js" lang="zxx">

    <body>
		<div class="breadcrumb-area pt-205 pb-210" style="background-image: url({{asset('/img/bg/breadcrumb.jpg')}})">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2> shop grid</h2>
                    <ul>
                        <li><a href="#">home</a></li>
                        <li>shop grid</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-page-wrapper ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="shop-sidebar">
                            <div class="sidebar-widget mb-50">
                                <h3 class="sidebar-title">Search Products</h3>
                                <div class="sidebar-search">
                                    <form type="POST" id="searchBook" action="">
                                    @csrf
                                        <input placeholder="Search Products by names" name="bookName" id="bookName" type="text">
                                        <button  class="search_btn"><i class="ti-search"></i></button>

                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-40">
                                <h3 class="sidebar-title">Filter by Price</h3>
                                <div class="price_filter">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <label>price : </label>
                                            <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                        </div>
                                        <button type="button">Filter</button> 
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-50">
                                <h3 class="sidebar-title">Top rated products</h3>
                                <div class="sidebar-top-rated-all">
                                    @foreach($bookrandom as $bookrandoms)
                                    <div class="sidebar-top-rated mb-30">
                                        <div class="single-top-rated">
                                            <div class="top-rated-img">
                                                <a href="#"><img src="{{asset('/storage/'.$bookrandoms->image)}}" style="width:91px; height:88px;" alt=""></a>
                                            </div>
                                            <div class="top-rated-text">
                                                <h4><a href="#">{{$bookrandoms->bookname}}</a></h4>
                                                <div class="top-rated-rating">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <span>{{$bookrandoms->price}}.00 $</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="shop-product-wrapper">
                            <div class="shop-bar-area">
                                <div class="shop-bar pb-60">
                                    <div class="shop-found-selector">
                                        <div class="shop-found">
                                            <p><span>23</span> Product Found of <span>50</span></p>
                                        </div>
                                        <div class="shop-selector">
                                            <label>Sort By : </label>
                                            <select name="select">
                                                <option value="">Default</option>
                                                <option value="">A to Z</option>
                                                <option value=""> Z to A</option>
                                                <option value="">In stock</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="shop-filter-tab">
                                        <div class="shop-tab nav" role=tablist>
                                            <a class="active" href="#grid-sidebar7" data-toggle="tab" role="tab" aria-selected="false">
                                                <i class="ti-layout-grid4-alt"></i>
                                            </a>
                                            <a href="#grid-sidebar8" data-toggle="tab" role="tab" aria-selected="true">
                                                <i class="ti-menu"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-product-content tab-content">
                                <div class="alert alert-danger" id="danger_msg" style="display: none">this item is already in your favourite</div>

                                <div class="alert alert-success" id="success_msg" style="display: none">this item is added in your favourite</div>

                                    <div id="grid-sidebar7" class="tab-pane fade active show">
                                        <div class="row" id='appendHere'>

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
                                     
                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-style mt-10 text-center">
                            <ul>
                                <li><a href="#"><i class="ti-angle-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">19</a></li>
                                <li class="active"><a href="#"><i class="ti-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<footer class="footer-area">
            <div class="footer-top-area bg-img pt-105 pb-65" style="background-image: url({{asset('/img/bg/1.jpg')}})" data-overlay="9">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-3">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title">Custom Service</h3>
                                <div class="footer-widget-content">
                                    <ul>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="register.html">My Account</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Track</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-3">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title">Categories</h3>
                                <div class="footer-widget-content">
                                    <ul>
                                        <li><a href="shop.html">Dress</a></li>
                                        <li><a href="shop.html">Shoes</a></li>
                                        <li><a href="shop.html">Shirt</a></li>
                                        <li><a href="shop.html">Baby Product</a></li>
                                        <li><a href="shop.html">Mans Product</a></li>
                                        <li><a href="shop.html">Leather</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title">Contact</h3>
                                <div class="footer-newsletter">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is dummy.</p>
                                    <div id="mc_embed_signup" class="subscribe-form pr-40">
                                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input type="email" value="" name="EMAIL" class="email" placeholder="Enter Your E-mail" required>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div class="mc-news" aria-hidden="true">
                                                    <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                                                </div>
                                                <div class="clear">
                                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="footer-contact">
                                        <p><span><i class="ti-location-pin"></i></span> 77 Seventh avenue USA 12555. </p>
                                        <p><span><i class=" ti-headphone-alt "></i></span> +88 (015) 609735 or +88 (012) 112266</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom black-bg ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="copyright">
                                <p>
                                    Copyright ©
                                    <a href="https://hastech.company/">HasTech</a> 2018 . All Right Reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
  
        <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="pe-7s-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog modal-compare-width" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="#">
                            <div class="table-content compare-style table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                <a href="#">Remove <span>x</span></a>
                                                <img src="{{asset('/img/cart/4.jpg')}}" alt="">
                                                <p>Blush Sequin Top </p>
                                                <span>$75.99</span>
                                                <a class="compare-btn" href="#">Add to cart</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="compare-title"><h4>Description </h4></td>
                                            <td class="compare-dec compare-common">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Sku </h4></td>
                                            <td class="product-none compare-common">
                                                <p>-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Availability  </h4></td>
                                            <td class="compare-stock compare-common">
                                                <p>In stock</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Weight   </h4></td>
                                            <td class="compare-none compare-common">
                                                <p>-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Dimensions   </h4></td>
                                            <td class="compare-stock compare-common">
                                                <p>N/A</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>brand   </h4></td>
                                            <td class="compare-brand compare-common">
                                                <p>HasTech</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>color   </h4></td>
                                            <td class="compare-color compare-common">
                                                <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>size    </h4></td>
                                            <td class="compare-size compare-common">
                                                <p>XS, S, M, L, XL, XXL </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"></td>
                                            <td class="compare-price compare-common">
                                                <p>$75.99 </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 
    </body>
</html>
@stop
@section('script') 
<script>
$(document).on('click', '.wishlist_btn', function (e) {
            e.preventDefault();
      
                var book_id =  $(this).attr('book_id');  
                $.ajax({
                type: 'POST',
                url: "{{route('addwishlist')}}",
                data: {
                    '_token': "{{csrf_token()}}",
                    'book_id':book_id },
                    statusCode: {
                                401:function() {
                                      top.location.href = 'login'; 
                                      },},
               
                success: function (data) {

                 if (data.status == true) {
                    $('#success_msg').show();
                    
                     console.log('addedToWishlist');
                      
                                      }
                    if (data.status == false) {
                        $('#danger_msg').show();
                     console.log('cantaddedToWishlist');

                                      }
}, error: function (reject) {
   
    console.log('cantaddedfdfshlist');
   
}
});
  });
$(document).on('click', '.cart_btn', function (e) {
            e.preventDefault();
           
                var book_id =  $(this).attr('cart_book');  
              
                $.ajax({
                type: 'GET',
                url: "{{route('addcart')}}",
                data: {
                    '_token': "{{csrf_token()}}",
                    'book_id':book_id },
                success: function (data) {

                 if (data.status == true) {
                     console.log('addedToCart');
                      
                                      }
                    if (data.status == false) {
                     console.log('cantaddedToCart');

                                      }
}, error: function (reject) {}
});
  });
$(document).on('click', '.search_btn', function (e) {
            e.preventDefault();
            var formData =new FormData($('#searchBook')[0]);
                 var book_id =    $('#bookName').val() 
                // alert(book_id);
              
                $.ajax({
                type: 'GET',
                url: "{{route('search')}}",
                data: {
                    '_token': "{{csrf_token()}}",
                    'bookName':book_id },
                    
                success: function (data) {              
                    $('#appendHere').html(data);
console.log('succ');
}, error: function (reject) {
    $('#appendHere').html(data);
}
});
  });
   </script>
  @stop