<?php
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE1html>
<html>
<head>
<style>
body{
    text-align: center;
	font-family:Arial,Helvetica,sans-serif;
	background-color:antiquewhite;
}

.main ul{
	list-style-type: none;
}

/* The dropdown container */
.dropdown {
  float: right;
  overflow: hidden;
}

/* The dropdown button */
.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: #000;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  transition: 0.6s ease;
}

.dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: darkseagreen;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display:none;
  position:absolute;
  background-color:darkseagreen;
  min-width: 150px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index:1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 14px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}

</style>
</head>

<body>
	<header>
		<div class="main">
		<ul>
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
	</header>
	<h1><center>Start blogging with us <?php echo htmlspecialchars($_SESSION["username"]); ?></center></h1>
	
	<form action="blog.php">
	<div class="container">
		<h3><left>Write your thoughts, let them take shape, Create you first blog entry here!</left></h3>
		<hr>
		<label for="title"><b>Name your Blog</b></label><br><br>
		<input type="text"placeholder="Title"name="blog title"align="middle"required><br><br>
		<label for="date"align="middle"><b>Date</b></label><br><br>
		<input type="date"placeholder="Enter Date"name="date"align="middle"required><br>
		<br>
		<p><bold>Share your thoughts, Let the world know!</bold></p>
		<textarea rows="10"cols="70"name="blog content"></textarea>
		<br><br>
		<input type="submit"value="Share">
	</div>
    </form>
	
	<script>
		
		function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
		}

		window.onclick = function(e) {
		if (!e.target.matches('.dropbtn')) {
		var myDropdown = document.getElementById("myDropdown");
			if (myDropdown.classList.contains('show')) {
			myDropdown.classList.remove('show');
			}
		}
		}
	</script>

</body>
</html>
