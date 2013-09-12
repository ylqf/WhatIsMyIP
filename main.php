

      <!-- Main hero unit for a primary marketing message or call to action -->

        <h1 style="text-align: center">IP Or Domain: <?php echo $ip ?></h1>
        
     <div style="text-align: center"><?php

 	echo $wide_ad;
	
	?></div>   

        <div class="row">
        	<div class="span4">
        		
        		 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(<?php echo $ipinfo->latitude ?>,<?php echo $ipinfo->longitude ?>),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
      <div id="map-canvas"></div>
<?php

echo $tower_ad;

?>
        	</div>
        	<div class="span8">
        		<strong>
        		IP: <?php echo $ipinfo->ip ?>
        		<br>
        		HOSTNAME: <?php echo gethostbyaddr($ipinfo->ip) ?>
        		<br>
        		Country: <?php echo $ipinfo->country_name ?> <img src="/src/flags/<?php echo strtolower($ipinfo->country_code) ?>.png" />
        		<br>
        		Region Name: <?php echo $ipinfo->region_name ?>
        		<br>
        		City: <?php echo $ipinfo->city ?>
        		<br>
        		Latitude: <?php echo $ipinfo->latitude ?>
        		<br>
        		Longitude: <?php echo $ipinfo->longitude ?>
        		<br>
        		
        		Whois Data
				<pre><?php
        		system('whois '.$ipinfo->ip)
				?>
        		</pre>
        		
        		
        		</strong>
        	</div>
        </div>
  



      <hr>