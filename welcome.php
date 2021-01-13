<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TRAVELGO</title>
    <link rel="stylesheet" type="text/css" media="all" href="style.css">
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
			<li><a href="eat.php">EAT</a></li>
			<li><a href="relax.php">RELAX</a></li>
			<li><a href="blog.php">BLOG</a></li>
      
	  
			<li2><div class="dropdown">
				<button class="dropbtn" onclick="myFunction()">Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?>
				<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content" id="myDropdown">
				<a href="logout.php" class="btn btn-danger">Log Out</a>
				<a href="reset.php" class="btn btn-warning">Reset Your Password</a>
				</div>
				</div>
			</li2> 
		</ul>
		</div>
		
		<div class="title">
			<h3>Travel Blog</h3>
			<h1>Going Places</h1>
			<h3>I haven't been everywhere, but it's on my list.</h3>
		</div>
	</header>
	
	<div class="gallery" style="background-image:url(travel.jpg)" data-text="Travel"></div>
	<div class="gallery" style="background-image:url(eat.jpg)" data-text="Eat"></div>
	<div class="gallery" style="background-image:url(relax.jpg)" data-text="Relax"></div>
	
	<script>
		/* When the user clicks on the button, 
		toggle between hiding and showing the dropdown content */
		
		function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
		}

		// Close the dropdown if the user clicks outside of it
		window.onclick = function(e) {
		if (!e.target.matches('.dropbtn')) {
		var myDropdown = document.getElementById("myDropdown");
			if (myDropdown.classList.contains('show')) {
			myDropdown.classList.remove('show');
			}
		}
		}
	</script>

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
          <li><a href="linkedin.com/in/sandeep-kumar-08a493169"" target="blank"><i class ="fa fa-linkedin"></i></a></li>
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