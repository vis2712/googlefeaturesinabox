<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <style type="text/css">
        .button {
  background-color: #0000FF; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #0000FF;
}

.button1:hover {
  background-color: #0000FF;
  color: white;
}

	#map {
	  height: 80%;
	  width: 100%;
	  text-align: center;
	}

	/* Optional: Makes the sample page fill the window. */
	html,body {
	  height: 100%;
	  margin: 0;
	  padding: 0;
	}


    </style>
    
    <!--====== Title ======-->
    <title>Google features in a BOX </title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                       
                        <a class="navbar-brand" href="#">
                            
                        </a>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul  class="navbar-nav m-auto">
                                <li style="right: 570px;" class="nav-item active"><a href="index.html"><-Back to Home</a></li>
                                
                            </ul>
                        </div>
                        
                        <div class="navbar-btn d-none d-sm-inline-block">
                            
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->
    
    <!--====== SLIDER PART START ======-->

   

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Google Maps</h1>
                                    <p class="text">These features is been added to this project by using "Google Map Javascript API" which is Google Cloud Console</p>
                                   
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    

                
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="main2.png" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->
            </div>

           
        </div>
    

    <!--====== SLIDER PART ENDS ======-->
    
    <!--====== FEATRES TWO PART START ======-->

    <section id="services" class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Try it Out..</h3><br><br><br>
                        <p style="font-size: 30px;">Enter Latitude: <input type="text" name="lat" id="lat" value="22.5645"></p><br>
						<p style="font-size: 30px;">Enter Longitude: <input type="number" name="long" id="long" value="72.9289"></p><br>
                        <input class="button button1" type="submit" style="font-size: 30px;" id="Submit" name="Submit" value="Submit">
                       

<script>
    
    let map;

function initMap() {
    
  var map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 22.5645, lng: 72.9289 },
    zoom: 10,
  });

  map.setCenter({lat: lati, lng: long});

}
</script>

                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->    

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>
    
    <!--====== Isotope js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

     <div id='map'><script
      src='https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyC10lBnvvWV-DEdYlbghQ6j3Rq1XlTauHA&callback=initMap' async defer>
      </script></div>
    
</body>

</html>



