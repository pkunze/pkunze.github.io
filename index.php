<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Route</title>
	</head>
	<body>
		<div id="map_canvas" style="width: 100%; height: 100%"></div>
	</body>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script>
		var directionsDisplay;
		var directionsService = new google.maps.DirectionsService();
		var map;
		
		function initialize() {
		  directionsDisplay = new google.maps.DirectionsRenderer();
		  var dresden = new google.maps.LatLng(51.049259, 13.73836);
		  var mapOptions = {
		    zoom:7,
		    mapTypeId: google.maps.MapTypeId.ROADMAP,
		    center: dresden,
		    disableDefaultUI: true
		  }
		  
		  map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
		  directionsDisplay.setMap(map);
		}
		
		function calcRoute() {
		  var start = <?php echo $_GET['origin']; ?>;
		  var end =  <?php echo $_GET['destination']; ?>;
		  var request = {
		    origin:start,
		    destination:end,
		    travelMode: google.maps.TravelMode.DRIVING
		  };
		  directionsService.route(request, function(result, status) {
		    if (status == google.maps.DirectionsStatus.OK) {
		      directionsDisplay.setDirections(result);
		    }
		  });
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</html>