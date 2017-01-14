<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Aztuks</title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

   
  </head>
  <body>

<!--
********************************************************
 HEADER
*******************************************************************
-->

  <!-- section TOP -->

    <section class="top">
      <div class="header" id="home">
        <div class="navbar navbar-inverse opaque-navbar" style="border-radius: 0; background-color: #000;">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navmain" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <div class="logoContainer">
              <a href="#">
                <img class="logoImg" src="img/logo.png">
              </a>
            </div><!-- logoContainer -->
            </div><!-- navbar-header -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navmain">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html">Home</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </div><!-- navbar -->
        </div><!-- header -->


<div class="jumbotron text-center" style="height: 80%;">
  <h1>Thank you!</h1>
  <p>Your submission is receved and we will contact you soon.</p>
</div>	

	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
	</script>
	<script type="text/javascript">
	_uacct = "UA-68528-29";
	urchinTracker();
	</script>

</div>  <!--footer-->
<div class="copy-right">
    <h3>2016 ©  Powerd By Aztuks</h3>
</div> <!--copy-right-->
   


   
</body>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key="></script>

<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 15,
            scrollwheel:  false,
            controls: false,
            disableDefaultUI: true,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(38.613323,-121.4727629), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map-canvas');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(38.613323,-121.4727629),
            map: map,
            title: 'Snazzy!',
            icon: 'HERE.png'
        });

        window.addEventListener('resize',init);
    }

    // hack Google Maps to bypass API v3 key (needed since 22 June 2016 http://googlegeodevelopers.blogspot.com.es/2016/06/building-for-scale-updates-to-google.html)
    var target = document.head;
    var observer = new MutationObserver(function(mutations) {
        for (var i = 0; mutations[i]; ++i) { // notify when script to hack is added in HTML head
            if (mutations[i].addedNodes[0].nodeName == "SCRIPT" && mutations[i].addedNodes[0].src.match(/\/AuthenticationService.Authenticate?/g)) {
                var str = mutations[i].addedNodes[0].src.match(/[?&]callback=.*[&$]/g);
                if (str) {
                    if (str[0][str[0].length - 1] == '&') {
                        str = str[0].substring(10, str[0].length - 1);
                    } else {
                        str = str[0].substring(10);
                    }
                    var split = str.split(".");
                    var object = split[0];
                    var method = split[1];
                    window[object][method] = null; // remove censorship message function _xdc_._jmzdv6 (AJAX callback name "_jmzdv6" differs depending on URL)
                    //window[object] = {}; // when we removed the complete object _xdc_, Google Maps tiles did not load when we moved the map with the mouse (no problem with OpenStreetMap)
                }
                observer.disconnect();
            }
        }
    });
    var config = { attributes: true, childList: true, characterData: true }
    observer.observe(target, config);

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript" charset="utf-8" src="js/mixitup.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="js/jquery.youtubebackground.js"></script>
	<script type="text/javascript" charset="utf-8" src="js/waypoints.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="js/animate-css.js"></script>
	<script type="text/javascript" charset="utf-8" src="js/jquery.magnific-popup.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>