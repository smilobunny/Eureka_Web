<html>
<head>
<title> FrontPage</title>
<link type="text/css" rel="stylesheet" href="css/contact1.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body  style="padding:0px; margin:0px; background-color:#ffffcc;">


<?php
		//print_r($_SESSION);
	?>
 <?php
session_start();
	// Check if session is not registered, redirect back to main page. 
	if(isset($_SESSION['username'])) {
 include("login.php"); }
 else
 include("eurmenu.php");
 ?> 
<?php
$nameErr = $emailErr = $subjectErr = "";
$name=$email=$subject="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
   }
     

   if (empty($_POST["subject"])) {
     $subjectErr = "Subject required";
   } else {
     $subject = test_input($_POST["subject"]);
	$message=$_POST["message"];
   }
   
   if(($nameErr=="") && ($subjectErr=="") && ($emailErr==""))
  { 
 
  $con=mysqli_connect('localhost','root','');
if(!$con)
{
	die('could not connect'.mysqli_connect_error());
}
else
{
	mysqli_select_db($con,"eureka");
	 
	$sql="insert into query (name,email,subject,message) values('$name','$email','$subject','$message')";
	mysqli_query($con,$sql);
	
}
$name="";
$email="";
$subject="";
$message="";
}
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>




					<div class="image1" style="background-image:url(images/contact.png); margin-top:100px;  ">
					<div class="heading1" vspace='20%'> CONTACT US </div>
					</div>
					
					<div id="site-container">
						<div id="main-container">
						
						<div style="height:90px;width:990px ;background-color:#ff9999; border-bottom:20px solid #cc6666;">
						<h1 class="heading2"> Send us your Query </h1></div>
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
   						<div class="querform" style="width:875px; height:500px; margin-left:80px; margin-top:50px;">
						Your Name(required)<br>
						<input type="text" name="name" style="width:300px; height:35px;"  value="<?php echo $name;?>">
						<span class="error">* <?php echo $nameErr;?></span>
						<br><br>
						Your E-mail(required)<br> <input type="text" name="email" style="width:300px; height:35px;" value="<?php echo $email;?>">
						<span class="error">* <?php echo $emailErr;?></span>
						<br><br>
						Subject <br>
						<input type="text" name="subject"  style="width:300px; height:35px;" value="<?php echo $subject;?>" >
						<span class="error">* <?php echo $subjectErr;?></span>
						<br><br>
						Your Message<br>
						<textarea name="message" cols="100" rows="8">
						</textarea>
						<br><br>
						<input type="submit" value="Submit"  style="padding:5px 8px 5px 8px;font-size:20px; background-color:#cc6666 ;color:white;">
						</div>
						</form>
						<div style="background-image:url(images/contactdet.png); height:400px; border:10px solid #9999ff; margin-top:120px;border-bottom:80px solid #9999ff;">
						</div>	
						</div>	
												
					
		</div>
				
	
</body>
</html>