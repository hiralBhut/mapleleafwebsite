<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CONTACT us</title>
	<!--link to stylesheet-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mystyle.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins|Roboto" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<link rel="stylesheet" href="aos-master/dist/aos.css"/>
</head>
<body>
<section>
<div class="contact-info">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-headline">
			  				<h4>CONTACT US</h4>
			  				<div class="nav-quick">
				  				<ul>
				  					<li class="hovlnk"><a href="index.php">Home</a></li>
				  					<li><span>&#47</span></li>
				  					<li class="item-lin hovlnk"><a href="#">Contact</a></li>
				  				</ul>
			  			    </div>
		  			    </div>
					</div>
				</div>
			</div>
		</div>
		<div class="detail-info">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="detail-contact">
							<h3>Contact Details</h3>
							
						    <div class="middle">
								<ul>
									<li>
										<span class="icons-cntc">
										<i class="fas fa-location-arrow fa-lg"></i>
										</span>
										<span>
										2021 Av Atwater,
										Montreal, Quebec, Canada.</span>
									</li>

									
									<li>
									    <span class="icons-cntc">
										<i class="fas fa-envelope fa-lg"></i>
										</span>
										
										mapleleaf.info@gmail.com
									</li>
									<li>
										<span class="icons-cntc">
										<i class="fas fa-phone fa-lg"  data-fa-transform="rotate-90"></i>
										</span>
										
										+666-777-9808
									</li>
								</ul>
						    </div>
						    <p>You can contact us or visit us in our office from<br/>
						    	Monday to Friday from 8:00 to 17:00</p>
						</div>
					</div>


					<div class="col-md-6 col-sm-6">
						<div class="contact-form">
							<h1>Write us</h1>
							<div id="errormessage"></div>
							<form method="post" id="formContact">
								
								<input type="text"  id="name" name="name" placeholder="Username" class="input" value="">
							    
								<div class="ma-50"></div>
								
								<input type="text" id="email"  name="email" placeholder="Email" class="input" value="">
								
								<div class="ma-50"></div>
								
								<textarea placeholder="Message"  id="message" name="message" class="textarea"></textarea>
								
								<div class="ma-50"></div>

								<input type="submit" id="submit" name="submit" value="send message" class="submit ls-3">

								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<section>
<div class="map-box">
	<div id="googleMap" style="width:100%;height:400px;"></div>
</div>
</section>
	
	<?php include_once 'footer.php' ; ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5t1Oev6A0kQ7zncfiduaWFZjHDWiPjGU&callback=myMap"
  type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script src="aos-master/dist/aos.js"></script>
<script src="js/contactform.js"></script>
<script>

 
function myMap() {
  var myCenter = new google.maps.LatLng(45.491023, -73.586084);
  var mapCanvas = document.getElementById("googleMap");
  var mapOptions = {center: myCenter, zoom: 5};
  var googleMap = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({
  	position:myCenter,
  	animation:google.maps.Animation.BOUNCE
  });
  marker.setMap(googleMap);
}
AOS.init();


</script>


</body>
</html>