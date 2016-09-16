


<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/menu.css">
<title> FrontPage</title>

</head>

<body  style="padding:0px; margin:0px; background-color:#ffffcc;">

<?php

$username=$password=$compid="";
$usernameerr=$passnameerr="";
			if ($_SERVER["REQUEST_METHOD"] == "POST")
{			
			if (empty($_POST["username"])) {
				echo '<script type="text/javascript"> alert("Username required") </script>';
						$usernameerr = "Username is required";
				   } else {
					 $username = test_input1($_POST["username"]);
					
				   }

					if (empty($_POST["password"])) {
						 echo '<script type="text/javascript"> window.alert("Password required") </script>';
						 $passnameerr = "Password is required";
					   } else {
						 $password = test_input1($_POST["password"]);
						 
					   }
							
								if(!(empty($_POST["password"])))
								{		

									$con2=mysqli_connect('localhost','root','');
									if(!$con2)
									{
										die('could not connect'.mysqli_connect_error());
									}
									else
									{
									if(!isset($_SESSION))
	session_start();
									mysqli_select_db($con2,"eureka");
									
									$sql="SELECT * FROM checklogin WHERE username='$username' and password='$password'";
									$result=mysqli_query($con2,$sql);
									$count=mysqli_num_rows($result);
										if($count==1)
										{$_SESSION["username"]= $username; 
										$_SESSION["password"]= $password; 
										header("location:frontPage.php");
										}
									
									
					   }
					   $usernameerr=$passnameerr="";
					   }
					   }
					   function test_input1($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;}


?>
<div class="maintext" style="background-color:#cc9999">
<div class="lefttext1">
<img src="images/logo11.png" style="background-color:#ffffcc ;border-bottom:20px solid #cc9966 ;">
</div>
<div class="righttext1">
<form  name="myform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="form1">
 Username
<input type="text" name="username" value="<?php echo $username; ?>" >
</input> Password
<input type="password" name="password"  value="<?php echo $password; ?>" >
</input>
<input type="submit" value="Login"  style="padding:5px 8px 5px 8px;font-size:18px; background-color:#993366 ;color:white;cursor:pointer;">
</div>
</form>
</div>

<div class=icons" style="padding-left:1050px;float-right;padding-top:-25px;">
<div class="image1">
<a href="https://www.facebook.com/"> <img src="images/facebook.png" style="padding-top:15px;cursor:pointer;" ></img> </a>
<a href="https://www.twitter.com"> <img src="images/twitter.png" style="padding-left:15px;padding-top:15px;cursor:pointer;">  </img> </a>
<a href="https://www.google.com"> <img src="images/google.jpg" style="padding-left:15px;cursor:pointer;padding-top:15px;paddding-bottom:-20px;"> </img> </a>
<a href="https://www.instagram.com/eureka2k16"> <img src="images/instagram.jpg" style="padding-left:15px;cursor:pointer;padding-top:15px;"> </img> </a> </div>
</div>

</div>
<div id="navigation">
									<ul id="nav">
										<li><a href="frontPage.php">HOME</a></li>
										<li><a href="abutsite.php">ABOUT THE FEST</a></li>
										<li><a href="gallery.php">GALLERY</a></li>
										<li><a href="register1.php">REGISTRATION</a></li>
										<li><a href="contactus.php">CONTACT US</a></li>
									</ul>
									</div>
									
								
									</body>
									</html>