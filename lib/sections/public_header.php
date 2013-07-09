<?php
	if (isset($page_title)) {
		$page_title = $page_title;
	}else {
		$page_title = 'OfficeListing.CA - List and find office spaces';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$page_title?></title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index, follow" />
    
    
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px;
        padding-bottom: 30px;
      }
	  
	  .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
	  
	  legend {
		  /*border-bottom: none !important;*/
	  }
	  

    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
    
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="./plugins/geocomplete/jquery.geocomplete.js"></script>
    <script src="./plugins/geocomplete/examples/logger.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
	
			$('#contactForm').submit(function(e) {
				contactus();
				e.preventDefault();	
			});
			
			$('#loginForm').submit(function(e) {
				login();
				e.preventDefault();	
			});
			
			$('#passreset').submit(function(e) {
				passreset();
				e.preventDefault();	
			});	
			
			$('#regForm').submit(function(e) {
				register();
				e.preventDefault();	
			});
				
		});

	</script>
    
    <script type="text/javascript" src="./lib/maps/util.js"></script>
<script type="text/javascript">
  var infowindow;
  var map;

  function initialize() {
    var myLatlng = new google.maps.LatLng(43.648281, -79.402433);
    var myOptions = {
      zoom: 10,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    downloadUrl("./lib/maps/phpsqlsearch_genxml.php", function(data) {
      var markers = data.documentElement.getElementsByTagName("marker");
      for (var i = 0; i < markers.length; i++) {
        var latlng = new google.maps.LatLng(parseFloat(markers[i].getAttribute("lat")),
                                    parseFloat(markers[i].getAttribute("lng")));
        var marker = createMarker(markers[i].getAttribute("name"), latlng);
       }
     });
  }

  function createMarker(name, latlng) {
    var marker = new google.maps.Marker({position: latlng, map: map});
    google.maps.event.addListener(marker, "click", function() {
      if (infowindow) infowindow.close();
      infowindow = new google.maps.InfoWindow({content: name});
      infowindow.open(map, marker);
    });
    return marker;
  }

</script>
    
    
</head>
<body onLoad="initialize()">


<!-- Fixed navbar -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">Office Listing</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="find_space.php">Find Space</a></li>
              <li><a href="list_space.php">List Space</a></li>
              <!--<li><a href="contact_us.php">Contact Us</a></li>-->
            </ul>
            
            <ul class="nav pull-right">
              <li><a href="register.php" >Sign Up</a></li>
              <li><a href="login.php" >Sign In</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div><!-- End Fixed Nav -->
    
    