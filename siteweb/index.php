<!DOCTYPE html>
 <html lang ="fr">
 
 <head>
      <title>Le système solaire</title>
      <meta charset ="UTF-8">
      <link rel="stylesheet" type="text/css" href="mobile.css">
      <link rel="stylesheet" type="text/css" href="desktop.css">
      <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
      <script>
			function initialize() {
			  var mapProp = {
			    center:new google.maps.LatLng(48.85207,2.37112),
			    zoom:15,
			    mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
			  var marker = new google.maps.Marker({
		            position:mapProp,
		            icon:'fleche.png'         
          });
			}
			google.maps.event.addDomListener(window, 'load', initialize);
			marker.setMap(map);
	</script>
      </script>
     
 </head>
<body>
	<div id="content">
		
		<header>
			<div id="title"> Le système solaire</div>
			<div id="logo"><img src="logo.jpg" alt="systheme"  style="width:90px;"/></div>
			
		</header>

		<nav>
			<a href="#">Mercure</a>
			<a href="#">Vénus</a>
			<a href="#">Terre</a>
			<a href="#">Mars</a>
			<a href="#">Jupiter</a>
			<a href="#">Saturne</a>
			<a href="#">Uranus</a>
			<a href="#">Neptune</a>
			<a href="#">Pluton</a>

		</nav>
        <section>
        <div id="googleMap" style="width:200px;height:200px;"></div>  
			
			<div class="planete">
				<img src="" alt="Mercure" style="width:200px">
				<h1><a></a></h1>
				<p> </p>
				<p id="distance"> </p>
				<p id="description"> </p>

			</div>

			<div class="planete">
				<img src="" alt="vénus" style="width:200px">
				<h1><a href="#"> Vénus</a></h1>
				<p id="taille"> </p>
				<p id="distance"> </p>
				<p id="description"> </p>

			</div>

			<div class="planete">
				<img src="terre.jpg" alt="Terre" style="width:200px">
				<h1><a href="#"> Terre</a></h1>
				<p id="taille"> </p>
				<p id="distance"> </p>
				<p id="description"> </p>

			</div>

			<div class="planete">
				<img src="mars.jpg" alt="Mars" style="width:200px">
				<h1><a href="#"> Mars</a></h1>
				<p id="taille"> </p>
				<p id="distance"> </p>
				<p id="description"> </p>

			</div>

			<div class="planete">
				<img src="jupiter.jpg" alt="Jupiter" style="width:200px">
				<h1><a href="#"> Jupiter</a></h1>
				<p id="taille"> </p>
				<p id="distance"> </p>
				<p id="description"> </p>

			</div>

			<div class="planete">
				<img src="saturne.jpg" alt="Saturne" style="width:200px">
				<h1><a href="#"> Jupiter</a></h1>
				<p id="taille"> </p>
				<p id="distance"> </p>
				<p id="description"> </p>

			</div>

			<div class="planete">
				<img src="uranus.jpg" alt="Uranus" style="width:200px">
				<h1><a href="#"> Jupiter</a></h1>
				<p id="taille"> </p>
				<p id="distance"> </p>
				<p id="description"> </p>

			</div>

			<div class="planete">
				<img src="neptune.jpg" alt="Neptune" style="width:200px">
				<h1><a href="#"> neptune</a></h1>
				<p id="taille"> </p>
				<p id="distance"> </p>
				<p id="description"> </p>

			</div>

		</section>
			
		<footer>
			<div id="form">
				<form method="POST" action="detail.php">
					Nom de la planete : <input type="text" name="planete" placeholder="Planete">
					<imput type="submit" value="Envoyer">
				</form>

			</div>
			<div id="copyright">Copyright 2015 Prescillia n'gora</div>
		</footer>
	
	</div>
<body>
<html>

	<!--<?php

			$xml=simplexml_load_file("planete.xml");
			print_r($xml);
            echo $xml->titre . "<br>";
			echo $xml->image . "<br>";
			echo $xml->taille . "<br>";
			echo $xml->distance;
				?>-->
