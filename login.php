<?php
	// Check if session is not registered, redirect back to main page. 
	if(!isset($_SESSION))
	session_start();
	if(!isset($_SESSION['username'])) {
		header("location:frontPage.php");
	}
?>






<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/loginmenu.css">
<title> Login Menu</title>

</head>
<body>
	</br> </br>
	<?php
		//print_r($_SESSION);
	?>
<div class="maintext">
<div class="lefttext1">
<img src="images/logo11.png" style="background-color:#ffffcc ;border-bottom:20px solid #cc9966 ;">
</div>
<div class="righttext1">
	<br><br>
	<div id="login">
	<ul id="navig">						<li style="padding:20px 30px 20px 40px;margin-top:-30px;font-size:20; background-color:#cc3366;"> Welcome <?php echo $_SESSION['username']; ?> </li>
										<li><a href="frontPage.php"> Home</a></li>
										<li><a href="idinfo.php">View Registration Details</a></li>
										<li><a href="logout.php" > Logout </a></li>
										</ul>
	</br> 
	
	</div>
	</div>
	
	<div class=icons" style="padding-left:1050px;float-right;padding-top:-25px;">
<div class="image1">
<a href="www.facebook.com"> <img src="images/facebook.png" style="padding-top:15px;cursor:pointer;" ></img> </a>
<a href="www.twitter.com"> <img src="images/twitter.png" style="padding-left:15px;padding-top:15px;cursor:pointer;">  </img> </a>
<a href="www.google.com"> <img src="images/google.jpg" style="padding-left:15px;cursor:pointer;padding-top:15px;paddding-bottom:-20px;"> </img> </a>
<a href="www.instagram.com/eureka2k16"> <img src="images/instagram.jpg" style="padding-left:15px;cursor:pointer;padding-top:15px;"> </img> </a> </div>
</div>

</div>


<div id="navigation">
									<ul id="nav">
										<li><a href="frontPage.php">HOME</a></li>
										<li><a href="abutsite.php">ABOUT THE FEST</a></li>
										<li><a href="gallery.php" > GALLERY  </a></li>
										<li><a href="idinfo.php">REGISTRATION DETAILS</a></li>
										<li><a href="contactus.php">CONTACT US</a></li>
									</ul>
									</div>

	
</body>
</html>