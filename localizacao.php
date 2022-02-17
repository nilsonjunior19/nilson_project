<!DOCTYPE html>
<html lang="en">
<head>
<title>Localização</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/script.js"></script>
<script src="js/forms.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.responsivemenu.js"></script>
<script src="js/FF-cash.js"></script>
<script>
$(function(){
	$('#contact-form').forms({ownerEmail:'#'});
});
</script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body>
<!-- header -->
<header class="padheader">
	<div class="container_24">
		<div class="grid_24">
			
			<?php include("menu.php"); ?>
            
            
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</header>
<!-- content -->






<section>
	<div class="bg">
		<div class="container_24">
			<div class="wrapper padbot6">
				<div class="grid_20 padtop33">
					<h4>Nossa Localização</h4>
			      <h4 class="padbot2">Contato</h4>
                    <p class="text2">TotalCarros Ltda.<br>
                      8901 Av. Brasil, Centro, São Paulo,<br>
                      78009-784.</p>
                    <p class="text1">Telefone: 0800 559 6580<br>
                      FAX: 11 9889 9898<br>
                      E-mail: <a href="#">comercial@totalcarros.com.br</a></p>
                  <p>&nbsp;</p></div>
			</div>
		</div>
	</div>
</section>

                    <style>
					/* Google Maps */
div.google-map {
	background: #E5E3DF;
	height: 400px;
	margin: -35px 0 30px 0;
	width: 100%;
}

.parallax + div.google-map {
	margin-top: -70px;
}

div.google-map img {
	max-width: 9999px;
}

/* Search Results */
div.search-results {
	min-height: 300px;
}

					</style>
                    
                    <!-- Google Maps -->
				<div id="googlemaps" class="google-map hidden-xs"></div>
<!-- footer -->
<footer class="">

	<div class="container_24">
    
		<div class="wrapper">
        
			<div class="grid_24"><a href="index.php" class="link"><img src="images/logo.png" alt="" width="53" height="15"></a>&copy; 2014 | <a href="#">Privacy Policy</a></div>
		</div>
	</div>
</footer> 


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>
        
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script src="js/jquery.gmap.js"></script>

		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "217 Summit Boulevard, Birmingham, AL 35243",
				html: "<strong>Alabama Office</strong><br>217 Summit Boulevard, Birmingham, AL 35243<br><br><a href='#' onclick='mapCenterAt({latitude: 33.44792, longitude: -86.72963, zoom: 16}, event)'>[+] zoom here</a>",
				icon: {
					image: "images/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				}
			},{
				address: "645 E. Shaw Avenue, Fresno, CA 93710",
				html: "<strong>California Office</strong><br>645 E. Shaw Avenue, Fresno, CA 93710<br><br><a href='#' onclick='mapCenterAt({latitude: 36.80948, longitude: -119.77598, zoom: 16}, event)'>[+] zoom here</a>",
				icon: {
					image: "images/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				}
			},{
				address: "New York, NY 10017",
				html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
				icon: {
					image: "images/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				}
			}];

			// Map Initial Location
			var initLatitude = 37.09024;
			var initLongitude = -95.71289;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 4
			};

			var map = $("#googlemaps").gMap(mapSettings);

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#googlemaps").gMap("centerAt", options);
			}

		</script>

		<!-- Page Scripts -->
		<script src="js/view.contact.js"></script>
</body>
</html>