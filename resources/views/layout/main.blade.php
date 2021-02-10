<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
        name="description"
        content="Web site created using create-react-app"
    />
    <!-- Icon  -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
    <!--
      Notice the use of %PUBLIC_URL% in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
    <!--  fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Alegreya+Sans+SC|Cinzel|Lato|Libre+Baskerville|Merriweather|Oleo+Script|Playfair+Display|Roboto+Slab|Titillium+Web&display=swap" rel="stylesheet">

    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- react-slick -->
    <link rel="stylesheet" type="text/css" charset="UTF-8" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" />

    <!-- font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('user/style/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/style/card.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/style/dest.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/style/place.css')}}">

    <link rel="icon" href="{!! asset('user/logo/raraadventure.jpg') !!}" />
    <title>@yield('title', 'Rara Adventure | Holiday Packages, Cheap Flights, Car Rentals & Vacations in Nepal')</title>
    <!-- <style type="text/css">
        .sticky {
          position: fixed;
          top: 0;
          width: 100%;
        }
    </style> -->

    <style type="text/css">
        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            #advertisement{
                display: none;
            }
        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
            .nav-title-drop{
                width: 470px;
            }
        }

        /* Extra large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {
            .nav-title-drop{
                width: 470px;
            }
        }
    </style>
</head>
<body>

<div class="jumbotron-fluid">
    <nav class="text-white headtop">
        <div class="container" style="font-size: 12px;">
                <div class="d-flex flex-row justify-content-end">
                    <div class="pr-3" style="border-right: 1px solid #fff;"><i class="fas fa-phone"></i>&nbsp; +977 9851168993</div>
                    <a href="https://www.facebook.com/raraadventuretours/" class="pl-3">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-youtube pl-1"></i>
                    </a>
                    <a href="https://www.facebook.com/raraadventuretours/">
                        <i class="fab fa-linkedin pl-1"></i>
                    </a>
                    <a href="https://www.facebook.com/raraadventuretours/">
                        <i class="fab fa-twitter pl-1"></i>
                    </a>
                    <a href="https://www.facebook.com/raraadventuretours/">
                        <i class="fab fa-instagram pl-1"></i>
                    </a>
                </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-sm navbar-light d-block" id="navbar" style="background-color: #fff;">
        <div class="container">
            <a href="/" class="nav-link"><img src="{{asset('user/logo/raranewlogo.png')}}" class="img-fluid" width="180" height="130" style=""/></a>

            <div style="padding-left: 105px;  padding-top: 20px!important; line-height: 15px!important;" id="advertisement">
                <p class="heading-h2" style="font-size: 16px;">Official Sales Agent of Sita Air <br>
                <span style="font-size: 12px;">Nepalgunj-Talcha Airport(Mugu)</span></p>
            </div>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#thetarget">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="thetarget">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{route('home')}}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item dropdown nav-title" style="background-color: #fff; ">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Destination</a>
                        <div class="dropdown-menu nav-title-drop">
                            <div class="row p-2">
                                <div class="col-md-6">
                                    <span class="heading-h2" style="font-size: 15px;">Treks</span><div class="dropdown-divider"></div>
                                    @foreach($dest as $destination)
                                        @if($destination->nav==1)
                                            <ul style="list-style-type: none;" class="pt-2">
                                              <li>  <a href="{{route('front.destination', $destination->id)}}" style="padding-left: 0 !important">{{ $destination->title }}</a></li>
                                            </ul>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-md-6 pt-md-0 pt-4">
                                    <span class="heading-h2" style="font-size: 15px;">Tours</span><div class="dropdown-divider"></div>
                                    @foreach($dest as $destination)
                                        @if($destination->nav==0)
                                            <ul style="list-style-type: none;" class="pt-2">
                                              <li>  <a href="{{route('front.destination', $destination->id)}}" style="padding-left: 0 !important">{{ $destination->title }}</a></li>
                                            </ul>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('extras') }}" class="nav-link">Extras</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('book')}}" class="nav-link">Plan your trip</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

@yield('content')

<!-- footer -->
<div class="footer pt-2 px-5">
    <div class="container px-5">
        <div class="row pt-2">
            <div class="col-md-3 pt-2 order-3 order-md-1 widget">
                <h6 class="heading-h2">Follow Us</h6>
                <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item"><p><iframe allow="encrypted-media" allowtransparency="true" frameborder="0" height="350" scrolling="no" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fraraadventuretours%2F%20%20%20&amp;tabs=timeline&amp;width=300&amp;height=350&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" style="border:none;overflow:hidden;height: 300px;" width="300"></iframe></p>
                </div>
                <p class="pt-3">© 2019.Developed by Jooneli Inc. All Right Reserved.</p>
            </div>
            <div class="col-md-6 order-1 order-md-2 ml-md-5">
                <!-- sponsor -->
                <div class="text-center sponsor">
                    <h6 class="text-center heading-h2 pb-2">Affiliations</h6>
                    <div>
                        <a href="https://www.taan.org.np/"><img class="showlogo-members" src="{{asset('/user/logo/taan.jpg')}}"></a>
                        <a href="https://www.facebook.com/nattapage/"><img class="showlogo-members ml-md-2" src="{{asset('/user/logo/natta.jpg')}}"></a>
                        <a href="https://www.vitofnepal.org/"><img class="showlogo-members ml-md-2" src="{{asset('/user/logo/vitof.png')}}"></a>
                        <a href="https://raratourism.com/"><img class="showlogo-members ml-md-2" src="{{asset('/user/logo/rarabikas.jpg')}}"></a>
                        <a href="https://www.nepal.gov.np/"><img class="showlogo-members ml-md-2" src="{{asset('/user/logo/npgov.jpg')}}"></a>
                        <a href="https://www.welcomenepal.com/"><img class="showlogo-members ml-md-2" src="{{asset('/user/logo/ntb.jpg')}}"></a>
                        <a href="https://www.sitaair.com.np/"><img class="showlogo-members ml-md-2" src="{{asset('/user/logo/sitaair.jpg')}}"></a>
                    </div>
                </div>
                <!-- sponsor ends-->
                <!-- payment -->
                <div class="text-center sponsor">
                    <h6 class="text-center heading-h2 pb-2">We Accept</h6>
                    <div>
                        <img class="payment pb-1" src="{{ asset('/user/payment/visa.jpg') }}">
                        <img class="payment pb-1" src="{{ asset('/user/payment/master.jpg') }}">
                        <img class="payment pb-1" src="{{ asset('/user/payment/paypal.jpg') }}">
                    </div>
                </div>
                <!-- /payment -->
            </div>
            <div class="col-md-2 pt-5 pb-3 footer-link-text order-2 order-md-3 d-flex flex-column justify-content-center">
                <ul style="list-style-type: none;">
                    <li class="pb-1"><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li class="pb-1"><a href="{{ route('about') }}">About Us</a></li>
                    <li class="pb-1"><a href="{{ route('alldest') }}">Destinations</a></li>
                    <li class="pb-1"><a href="{{ route('allpackage') }}">Packages</a></li>
                    <li class="pb-1"><a href="{{ route('extras') }}">Extras</a></li>
                    <li class="pb-1"><a href="{{ route('book') }}">Plan your Trip</a></li>
                    <li class="pb-1"><a href="{{ route('review') }}">Reviews</a></li>
                    <li class="pb-1"><a href="">Our Team</a></li>
                </ul>
                <h6 class="heading-h2 px-3">Related Links</h6>
                <ul style="list-style-type: none;">
                    <li><a href=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- <div class="footer pt-2 px-5">
    <div class="container">
        
        <div class="row pt-2">
            <div class="col-md-6 order-2 order-md-1">
                <a href="https://www.facebook.com/raraadventuretours/">
                    <i class="fab fa-facebook-square py-2"></i>
                </a>
                <p>© 2019.Developed by Jooneli Inc. All Right Reserved.</p>
            </div>
            <div class="col-md-6 pt-2 pb-3 footer-link-text order-1 order-md-2">
                <a href="{{ route('contact') }}" class=" float-right pl-3">Contact Us</a>
                <a href="{{ route('about') }}" class="float-right">About Us</a>
            </div>
        </div>
    </div> -->
</div>
<!-- footer ends -->
<!-- <div id="scroll-top">
    <i class="fas fa-chevron-circle-up" style="font-size: 30px; color: darkgreen; "></i>
</div> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">
    function openPage(pageName,elmnt,color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>

<script>
  $(document).ready(function(){
    $('.slider').bxSlider();
  });
</script>
<!-- 
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script> -->

<!-- <script src="{{asset('user/jquery.sticky.js')}}"></script>

<script>
  $(document).ready(function(){
    $("#sticker").sticky({topSpacing:0});
  });
</script> -->

<link rel="stylesheet" type="text/javascript" href="{{asset('user/scripts/card.js')}}">
</body>
</html>
 