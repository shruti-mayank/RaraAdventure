<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
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

    <link rel="icon" href="{!! asset('user/sundar-karnali.jpg') !!}" />
    <title>Sundar Karnali</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/news.css') }}">

    <style type="text/css">
      footer li{
        line-height: 25px;
      }
    </style>

</head>
<body>

<div class="jumbotron-fluid">
    <!-- toplogo -->
    <div class="container">
    	<div class="row" id="logo">
    		<div class="col-md-4"></div>
			<div class="col-md-4">
				<a href="" class="logo"><div class="logo-img d-flex flex-column justify-content-center"></div></a>
			</div>
			<div class="col-md-4"></div>
    	</div>
        <div class="row">
            <div class="col-md-12 d-flex flex-row justify-content-end py-2">
                <?php echo date('d M, Y l'); ?>
            </div>
        </div>
    </div>
    <!-- /toplogo -->

    <!-- main header -->
    <nav class="navbar navbar-expand-md navbar-dark sticky-top" id="navbar">
    	<div class="container">
	        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
	            <span class="navbar-toggler-icon"></span>
	        </button>

	        <div class="collapse navbar-collapse" id="navbarCollapse">
	            <ul class="navbar-nav">
	                <li class="active"><a href="/"><i class="fas fa-home"></i></a></li>
        					<li><a href="">विशेष</a></li>
        					<li><a href="">विचार</a></li>
        					<li><a href="">राजनीति</a></li>
        					<li><a href="">समाज</a></li>
        					<li><a href="">खेल</a></li>
        					<li><a href="">मनोरञ्जन</a></li>
        					<li><a href="">अर्थ</a></li>
        					<li><a href="">देश परदेश</a></li>
        					<li><a href="">रेडियो कार्यक्रम</a></li>
        					<li><a href="">कला</a></li>
        					<li><a href="">सडक र सवारी</a></li>
        					<li><a href="">विश्व</a></li>	
	            </ul>
	            <div class="navbar-nav ml-md-auto d-inline-block">
	                <div class="search-container d-inline-block">
					    <form action="/action_page.php">
					      <input type="text" placeholder="समाचार खोज्नुहोस्" name="search">
					      <span><button type="submit"><i class="fa fa-search"></i></button></span>
					    </form>
					</div>
	            </div>
	        </div>
	    </div>
    </nav>
    <!-- /main header -->

    

  <!-- Ad placement -->
  <div class="container my-4">
    <div id="ad" class="text-center">
      Place Ad here
    </div>
  </div>
  <!-- /Ad placement -->

@yield('content')

<!-- footer -->
<footer class="mt-3">
   <!-- Top footer -->
    <div class="top-footer">
        <div class="container pt-4">
            <div class="row text-white">
                <div class="col-md-4">
                  <a href="#" class="logo"><div class="footer-logo mt-3"></div></a>
                  <ul class="py-3" style="list-style-type: none; color: #fff;">
                    <li><i class="fas fa-map-marker-alt"></i>&nbsp; विरेन्द्रनगर ६ सुर्खेत, कर्णाली प्रदेश नेपाल</li>
                    <li><i class="fas fa-phone"></i>&nbsp; ०८३-५९००३७, ९७५८९००४७२</li><br>
                    <li>सम्पर्क कार्यालय : ठमेल, काठ्माण्डाैं </li>
                    <li><i class="fas fa-phone"></i>&nbsp;  ०१ ५९०३८९८, 9९८५११७५२५८ </li><br>
                    <li><i class="fas fa-envelope"></i></li><br>
                  </ul>
                </div>
                <div class="col-md-3">
                  <ul class="py-3" style="list-style-type: none; color: #fff;">                    
                    <li><b>संस्थापक :</b> सत्यादेबी बुढा</li>
                    <li><b>अध्यक्ष :</b> सुर बहादुर बुढा</li>
                    <li><b>प्रधान सम्पादक :</b> दुर्गादेबी बिष्ट</li>
                    <li><b>सम्पादक :</b> धिरेन्द्र महतारा</li>
                    <li><b>प्रमुख प्रशासकिय :</b> वसन्त बाकचन</li>
                    <li><b>डिजाईन :</b> गणेश खड्का</li>
                  </ul>
                </div>
                <div class="col-md-1 ml-md-3">
                  <h6 class="mt-3" style="font-weight: bold;">समाचार</h6>
                  <ul class="py-3" style="list-style-type: none; color: #fff;">
                    <li>समाज</li>
                    <li>खेलकुद़़</li>
                    <li>जीवनशैली / स्वास्थ्य</li>
                    <li>प्रवास</li>
                    <li>अन्तराष्ट्रिय</li>
                  </ul>
                </div>
                <div class="col-md-1 ml-md-3">
                  <h6 class="mt-3" style="font-weight: bold;">विजनेश</h6>
                  <ul class="py-3" style="list-style-type: none; color: #fff;">
                    <li>बजार</li>
                    <li>पर्यटन</li>
                    <li>रोजगार</li>
                    <li>बैँक / वित्त</li>
                    <li>अटो</li>
                    <li>सूचना-प्रविधि</li>
                  </ul>
                </div>
                <div class="col-md-1 ml-md-3">
                  <h6 class="mt-3" style="font-weight: bold;">मनोरञ्जन</h6>
                  <ul class="py-3" style="list-style-type: none; color: #fff;">
                    <li>ब्लोअप</li>
                    <li>गसिप</li>
                    <li>बलिउड / हलिउड</li>
                    <li>भिडियो</li>
                    <li>ताजा समाचार</li>
                  </ul>
                </div>
                <div class="col-md-1 ml-md-3">
                  <h6 class="mt-3" style="font-weight: bold;">विविध</h6>
                  <ul class="py-3" style="list-style-type: none; color: #fff;">
                    <li>विचार/ब्लग</li>
                    <li>साहित्य</li>
                    <li>अन्तर्वार्ता</li>
                    <li>रोचक विश्व</li>
                    <li>राम्रो नेपाल</li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
   <!-- /Top footer -->

   <!-- Bottom footer -->
   <div class="bottom-footer">
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <ul style="list-style-type: none; color: white; display: block;">
                       <li><a href="">हाम्रोबारे</a></li>
                       <li><a href="">प्रयोगका सर्त</a></li>
                       <li><a href="">विज्ञापन</a></li>
                       <li><a href="">Privacy Policy</a></li>
                       <li><a href="">सम्पर्क</a></li>
                   </ul>
               </div>
               <div class="col-md-6 d-flex flex-row justify-content-end">© <?php echo date('Y') ?>.Developed by Jooneli Inc. All Right Reserved.</div>
           </div>
       </div>
   </div>
   <!-- /Bottom footer -->
</footer>
<!-- /footer -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>
</html>
