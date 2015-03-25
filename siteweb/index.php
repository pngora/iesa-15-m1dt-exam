<!DOCTYPE html>
 <html lang ="fr">
	 
	 <head>
	      <title>Le système solaire</title>
	      <meta charset ="UTF-8">
	      <link rel="stylesheet" type="text/css" href="mobile.css" media="only screen and (min-width:0px) and (max-width:480px)">
	      <link rel="stylesheet" type="text/css" href="desktop.css">
	      <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
	      <script>
				function localization() {
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
				google.maps.event.addDomListener(window, 'load', localization);
				marker.setMap(map);
		</script>
	     
	 </head>
	<body>
		<div id="content">
			
			
			<header>
				<div id="title"> Le système solaire</div>
				<div id="logo"><a href="index.php"><img src="logo.jpg" alt="systheme"  style="width:90px;"/></a></div>
				
			</header>

			<nav>
				<a href="detail.ph^p">Mercure</a>
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
	       
				<table><h1>Lieu de consultation</br><div id="googleMap" style="width:300px;height:300px;"></div><h1>
					<tr>
						<td>
							<div class="planete">
							<img src="mercure.jpg" alt="Mercure" style="width:150px; ">
							<h2><a href="detail.php">Mercure</a></h2>
							<p> </p>
							<p id="distance"> </p>
							<p id="description"> </p>

							</div>
						</td>

						<td>
						<div class="planete">
						<img src="venus.jpg" alt="venus" style="width:150px; ">
						<h2><a href="#">Vénus</a></h2>
						<p id="taille"> </p>
						<p id="distance"> </p>
						<p id="description"> </p>

						</div>
					</td>
					<td>

						<div class="planete">
						<img src="terre.jpg" alt="Terre" style="width:150px">
						<h2><a href="#"> Terre</a></h2>
						<p id="taille"> </p>
						<p id="distance"> </p>
						<p id="description"> </p>

					    </div>
					</td>
					<td>
						<div class="planete">
							<img src="mars.jpg" alt="Mars" style="width:150px">
							<h2><a href="#"> Mars</a></h2>
							<p id="taille"> </p>
							<p id="distance"> </p>
							<p id="description"> </p>

						</div>
					</td>
					</tr>
				</table>
				<table>
					<tr>
						<td>
							<div class="planete">
								<img src="jupiter.jpg" alt="Jupiter" style="width:150px">
								<h2><a href="#"> Jupiter</a></h2>
								<p id="taille"> </p>
								<p id="distance"> </p>
								<p id="description"> </p>

							</div>
						</td>
						<td>
						<div class="planete">
							<img src="saturne.jpg" alt="Saturne" style="width:150px">
							<h2><a href="#"> Saturne</a></h2>
							<p id="taille"> </p>
							<p id="distance"> </p>
							<p id="description"> </p>

						</div>
					    </td>
					    <td>
							<div class="planete">
								<img src="uranus.jpg" alt="Uranus" style="width:150px">
								<h2><a href="#"> Uranus</a></h2>
								<p id="taille"> </p>
								<p id="distance"> </p>
								<p id="description"> </p>

						</div>
				    </td>
 					<td>
					<div class="planete">
						<img src="neptune.jpg" alt="Neptune" style="width:150px">
						<h2><a href="#"> Neptune</a></h2>
						<p id="taille"> </p>
						<p id="distance"> </p>
						<p id="description"> </p>

					</div>
					</td>
				</tr>
				</table>

			
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


