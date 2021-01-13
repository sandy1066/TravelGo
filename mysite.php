<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TRAVELGO</title>
    <link rel="stylesheet" type="text/css" media="all" href="style.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="logo.jpg">
			</div>
		<ul>
			<li class="active"><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="travel_upload.php">TRAVEL</a></li>
			<li><a href="#">EAT</a></li>
			<li><a href="#">RELAX</a></li>
			<li><a href="login.php">BLOG</a></li>
			<li><a href="register.php">REGISTER/SIGN IN</a></li>
			<div class="cse">
				<div class="gcse-search">
				<script async src="https://cse.google.com/cse.js?cx=006700496944256514314:f9nidcuegz3"></script>
			</div>
		</ul>
		</div>
		
		<div class="title">
			<h3>Travel Blog</h3>
			<h1>Going Places</h1>
			<h3>I haven't been everywhere, but it's on my list.</h3>
		</div>
	</header>
	
	<a href="travel_upload.php"><div class="gallery" style="background-image:url(travel.jpg)" data-text="Travel"></div></a>
	<a href="#"><div class="gallery" style="background-image:url(eat.jpg)" data-text="Eat"></div></a>
	<a href="#"><div class="gallery" style="background-image:url(relax.jpg)" data-text="Relax"></div></a>
	
		<div id="map"></div>
		<script>
			function initMap()
			{
				var location = {lat: 26.760759, lng: 83.373703};
				var map = new google.maps.Map(document.getElementById("map"), {
					zoom: 4,
					center: location
				});
			}
		</script>
		<script async defer src ="http://maps.googleapis.com/maps/api/js?key=AIzaSyDRPXX_P2Tfr9RE0pfntF3ZjuB4NeKH2E8&callback=initMap"></script>
		
<footer>
<div class="footer-main-div">
   <div class="footer-social-icons">
      <ul>
          <li><a href="https://www.facebook.com/profile.php?id=100003835747150" target="blank"><i class ="fa fa-facebook"></i></a></li>
          <li><a href="" target="blank"><i class ="fa fa-instagram"></i></a></li>
          <li><a href="linkedin.com/in/sandeep-kumar-08a493169" target="blank"><i class ="fa fa-linkedin"></i></a></li>
      </ul>     
   </div>
    <div class ="footer-menu-one">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Products</a></li>
            <li><a href="mailto:techbrain.sk.1996@gmail.com">Contact us</a></li>
        </ul>
    </div>
</div>
    </footer>
</body>
</html>