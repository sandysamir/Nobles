@extends('layouts.site')
@section('content')
<!doctype html>

<html class="no-js" lang="en">

<body>

    <div class="slider-area">
        <div class="slider-active owl-carousel">
            <div class="single-slider single-slider-book1 bg-img" style="background-image: url({{asset('/img/slider/3.jpg')}})">
                <div class="container">
                    <div class="slider-animation slider-content-book fadeinup-animated">
                        <h1 class="animated"><span>Knowledge</span> is</h1>
                        <h2 class="animated">Power.</h2>
                        <p class="animated">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="{{route('shop')}}">More Books</a>
                    </div>
                </div>
            </div>
            <div class="single-slider single-slider-book1 bg-img" style="background-image: url({{asset('/img/slider/3.jpg')}})">
                <div class="container">
                    <div class="slider-animation slider-content-book fadeinup-animated">
                        <h1 class="animated"><span>Knowledge</span> is</h1>
                        <h2 class="animated">Power.</h2>
                        <p class="animated">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="{{route('shop')}}">More Books</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing banner area start -->
    <div class="banner-area pt-120 pb-110" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="book-banner-wrapper mr-20">
                   
                        <img src=" {{ asset('img/banner/13.jpg') }}" alt="">
                        <div class="banner-book-style1">
                            <h3>Big Sell For <br>December</h3>
                            <h2>50% OFF</h2>
                            <a class="banner-book-style-btn" href="product-details.html">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="book-banner-wrapper ml-20">
                
                        <img src="    {{ asset('img//banner/14.jpg')}}" alt="">
                        <div class="banner-book-style2 text-center">
                            <h2>Learn More </h2>
                           
                            <img src=" {{ asset('img/icon-img/2.png') }}" alt="">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a class="banner-book-style-btn" href="product-details.html">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--pricing banner area end -->

    <!-- about area start -->
    <div class="about-story pt-95 pb-100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="story-img">
                        <img src="    {{ asset('img//banner/11.png') }}" alt="">
                        <div class="about-logo">                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="story-details pl-50">
                        <div class="story-details-top">
                            <h2>WELCOME TO <span>ezone</span></h2>
                            <p>ezone provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you a complete account of the system, and expound the actual teachings of the eat explorer. </p>
                        </div>
                        <div class="story-details-bottom">
                            <h4>WE START AT 2015</h4>
                            <p>ezone provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you a complete account of the system, and expound the actual teachings of the eat explorer.</p>
                        </div>
                        <div class="story-details-bottom">
                            <h4>WIN BEST ONLINE SHOP AT 2017</h4>
                            <p>ezone provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you a complete account of the system, and expound the actual teachings of the eat explorer. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- Author area start -->
        <div class="testimonials-area pt-100 pb-95 bg-img" style="background-image: url({{ asset('img/bg/7.jpg') }}">
            <div class="container">
                <div class="testimonials-active owl-carousel">
                    <div class="single-testimonial-2 text-center">
                        <img src="{{asset('/img/team/1.png')}}" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        <img src="{{asset('/img/team/2.png')}}" alt="">
                        <h4>tayeb rayed</h4>
                        <span>uiux Designer</span>
                    </div>
                </div>
            </div>
        </div>
    <!-- Author area end -->
    
    <!-- best product area start -->
    <div class="best-product-area pb-15">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title-3 text-center mb-40">
                    <h2>Best Products</h2>
                </div>
                <div class="best-product-style">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="home6" role="tabpanel">
                            <div class="custom-row">
                            @foreach($books as $book)
                                <div class="custom-col-5 custom-col-style mb-95">
                                    <div class="product-wrapper">
                                        <div class="product-img-2">
                                            <a href="{{route('shop')}}">
                                                <img src="{{asset('/storage/'.$book->image)}}" style="width:265px; height: 265px;" alt="">
                                            </a>
                                            <div class="product-action-2">
                                                <a class="animate-left add-style-2" title="Add To Cart" href="{{route('cart')}}">Add to Cart <i class="ti-shopping-cart"></i></a>
                                                <a class="animate-right wishlist-style-2" title="wishlist" href="{{route('wishlist')}}">
                                                    <i class="ti-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-2 text-center">
                                            <h4><a href="{{route('product-details',$book->id)}}">{{$book->bookname}}</a></h4>
                                            <span>By: {{$book->author}}</span>
                                            <div class="product-rating">
                                                <i class="ti-star black"></i>
                                                <i class="ti-star black"></i>
                                                <i class="ti-star black"></i>
                                                <i class="ti-star"></i>
                                                <i class="ti-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              @endforeach 
                                       
                    </div>
                </div>
            </div>
        </div>
    </div>
   


  
  <div class="contact-area ptb-100" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-map-wrapper">
                    <div class="contact-map mb-40">
                        <div id="hastech2"></div>
                    </div>
                    <div class="contact-message">
                        <div class="contact-title">
                            <h4>Contact Information</h4>
                        </div>
                        <form id="contact-form" class="contact-form" action="{{asset('/mail.php')}}" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-input-style mb-30">
                                        <label>Name*</label>
                                        <input name="name" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-input-style mb-30">
                                        <label>Email*</label>
                                        <input name="email" required="" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-input-style mb-30">
                                        <label>Telephone</label>
                                        <input name="telephone" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-input-style mb-30">
                                        <label>subject</label>
                                        <input name="subject" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-textarea-style mb-30">
                                        <label>Comment*</label>
                                        <textarea class="form-control2" name="message" required=""></textarea>
                                    </div>
                                    <button class="submit contact-btn btn-hover" type="submit">
                                        Send Message 
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info-wrapper">
                    <div class="contact-title">
                        <h4>Location & Details</h4>
                    </div>
                    <div class="contact-info">
                        <div class="single-contact-info">
                            <div class="contact-info-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>Address:</span>  1234 - Bandit Tringi lAliquam <br> Vitae. New York</p>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-info-icon">
                                <i class="pe-7s-mail"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>Email: </span> Support@plazathemes.com</p>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-info-icon">
                                <i class="pe-7s-call"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>Phone: </span>  (800) 0123 456 789</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>


   
    <div class="brand-logo-area pl-100 pr-100">
        <div class="ptb-135 gray-bg">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand">
                    <img src="{{asset('/img/brand-logo/6.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('/img/brand-logo/2.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('/img/brand-logo/1.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('/img/brand-logo/3.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('/img/brand-logo/4.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('/img/brand-logo/5.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('/img/brand-logo/6.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    

    
    <div class="subscribe bg-img ptb-80" style="background-image: url({{asset('/img/bg/2.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="subscribe-content">
                        <h3>Subscribe to outr newsletter</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's dummy </p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div id="mc_embed_signup" class="subscribe-form-2 pr-40">
                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input type="email" value="" name="EMAIL" class="email" placeholder="Enter Your E-mail" required>
                                
                                <div class="mc-news" aria-hidden="true">
                                    <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                                </div>
                                <div class="clear">
                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-area">
        <div class="footer-top-area gray-bg-5 pt-105 pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-2">Ezone Boos</h3>
                            <div class="footer-info-wrapper">
                                <div class="footer-address">
                                    <div class="footer-info-icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <div class="footer-info-content">
                                        <p>77 Seventh Streeth, Banasree.
                                            <br>USA -215568</p>
                                    </div>
                                </div>
                                <div class="footer-address">
                                    <div class="footer-info-icon">
                                        <i class="ti-headphon')}}e-alt"></i>
                                    </div>
                                    <div class="footer-info-content">
                                        <p>+880 1124 22365 2223
                                            <br>+880 1124 22365 5455</p>
                                    </div>
                                </div>
                                <div class="footer-address">
                                    <div class="footer-info-icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="footer-info-content">
                                        <p><a href="#">domain@company.com</a>
                                            <br><a href="#">company@domain.info</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget mb-40 pl-70">
                            <h3 class="footer-widget-title-2">USeful Links</h3>
                            <div class="footer-widget-content-2">
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="#">Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-2">Shopping</h3>
                            <div class="footer-widget-content-2">
                                <ul>
                                    <li><a href="#">How to buy</a></li>
                                    <li><a href="#">Payments</a></li>
                                    <li><a href="#">Shipment</a></li>
                                    <li><a href="#">Tracking</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Terms & Condition</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget mb-40 pl-30">
                            <h3 class="footer-widget-title-2">Find US</h3>
                            <div id="footer-map" class="footer-map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom  gray-bg-6 ptb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright-2">
                            <p>
                                Copyright ©
                                <a href="https://hastech.company/">HasTech</a> 2018 . All Right Reserved.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="payment-img">
                            <img src="{{asset('/img/icon-img/3.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- footer area end -->










    <!-- all js here -->
    <script src="{{asset('/js/vendor/jquery-1.12.0.min.js')}}"></script>
    <script src="{{asset('/js/popper.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('/js/waypoints.min.js')}}"></script>
    <script src="{{asset('/js/ajax-mail.js')}}"></script>
    <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/js/plugins.js')}}"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMlLa3XrAmtemtf97Z2YpXwPLlimRK7Pk"></script> -->
    <script>
        function init() {
            var mapOptions = {
                zoom: 11,
                scrollwheel: false,
                center: new google.maps.LatLng(40.709896, -73.995481),
                styles: [
                    {
                        "featureType": "administrative.locality",
                        "elementType": "all",
                        "stylers": [
                            {
                                "hue": "#2c2e33"
                                },
                            {
                                "saturation": 7
                                },
                            {
                                "lightness": 19
                                },
                            {
                                "visibility": "on"
                                }
                            ]
                        },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "hue": "#ffffff"
                                },
                            {
                                "saturation": -100
                                },
                            {
                                "lightness": 100
                                },
                            {
                                "visibility": "simplified"
                                }
                            ]
                        },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "hue": "#ffffff"
                                },
                            {
                                "saturation": -100
                                },
                            {
                                "lightness": 100
                                },
                            {
                                "visibility": "off"
                                }
                            ]
                        },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "hue": "#bbc0c4"
                                },
                            {
                                "saturation": -93
                                },
                            {
                                "lightness": 31
                                },
                            {
                                "visibility": "simplified"
                                }
                            ]
                        },
                    {
                        "featureType": "road",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "hue": "#bbc0c4"
                                },
                            {
                                "saturation": -93
                                },
                            {
                                "lightness": 31
                                },
                            {
                                "visibility": "on"
                                }
                            ]
                        },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "hue": "#bbc0c4"
                                },
                            {
                                "saturation": -93
                                },
                            {
                                "lightness": -2
                                },
                            {
                                "visibility": "simplified"
                                }
                            ]
                        },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "hue": "#e9ebed"
                                },
                            {
                                "saturation": -90
                                },
                            {
                                "lightness": -8
                                },
                            {
                                "visibility": "simplified"
                                }
                            ]
                        },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "hue": "#e9ebed"
                                },
                            {
                                "saturation": 10
                                },
                            {
                                "lightness": 69
                                },
                            {
                                "visibility": "on"
                                }
                            ]
                        },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "hue": "#e9ebed"
                                },
                            {
                                "saturation": -78
                                },
                            {
                                "lightness": 67
                                },
                            {
                                "visibility": "simplified"
                                }
                            ]
                        }
                    ]
            };
            var mapElement = document.getElementById('footer-map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.709896, -73.995481),
                map: map,
                icon: '{{asset('/img/icon-img/46.png')}}',
                animation: google.maps.Animation.BOUNCE,
                title: 'Snazzy!'
            });
        }
        google.maps.event.addDomListener(window, 'load', init);
    </script>

      <!-- google map api -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlZPf84AAVt8_FFN7rwQY5nPgB02SlTKs "></script>
      <script>
          var myCenter=new google.maps.LatLng(30.249796, -97.754667);
          function initialize()
          {
              var mapProp = {
                center:myCenter,
                scrollwheel: false,
                zoom:15,
                mapTypeId:google.maps.MapTypeId.ROADMAP
                };
              var map=new google.maps.Map(document.getElementById("hastech2"),mapProp);
              var marker=new google.maps.Marker({
                position:myCenter,
                  animation:google.maps.Animation.BOUNCE,
                icon:'',
                  map: map,
                });
              var styles = [
                {
                  stylers: [
                    { hue: "#c5c5c5" },
                    { saturation: -100 }
                  ]
                },
              ];
              map.setOptions({styles: styles});
              marker.setMap(map);
          }
          google.maps.event.addDomListener(window, 'load', initialize);
      </script>
    <script src="{{asset('/js/main.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
@stop