<html>
<head>
<title> RampWalk Form</title>
<link type="text/css" rel="stylesheet" href="css/exform2.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body  style="padding:0px; margin:0px; background-color:#ffffcc;">


<?php
// define variables and set to empty values
$nameerr = $collegeerr = $adderr = $cityerr =$gendererr=$stateerr=$countryerr=$pcodeerr=$emailerr=$usererr=$passerr=$repasserr="";
$name = $college = $gender=$address = $city =$state=$country=$pincode=$submit=$email=$mobileno=$username=$password=$repassword ="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (empty($_POST["name"])) {
     $nameerr = "Name required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameerr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["gender"])) {
     $gendererr = "Gender required";
   } else {
     $gender = test_input($_POST["gender"]);
   }

   
if (empty($_POST["college"])) {
     $collegeerr = "College name required";
   } else {
     $college = test_input($_POST["college"]);
     
     if (!preg_match("/^[a-zA-Z ]*$/",$college)) {
       $collegeerr = "Only lettersand whitespace allowed"; 
     }
   }

if (empty($_POST["address"])) {
     $adderr = "Address required";
   } else {
     $address = test_input($_POST["address"]);
     //address checking for the form
     if (!preg_match("/^[a-zA-Z0-9 ]*$/",$address)) {
       $adderr = "Only letters and white space allowed"; 
     }
   }
if (empty($_POST["city"])) {
     $cityerr = " City required";
   } else {
     $city = test_input($_POST["city"]);
     // check that letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
       $cityerr = "Only letters and white space allowed"; 
     }
   }

if (empty($_POST["state"])) {
     $stateerr = " State required";
   } else {
     $state = test_input($_POST["state"]);
     // check state contains only letters and white spaces
     if (!preg_match("/^[a-zA-Z ]*$/",$state)) {
       $stateerr = "Only letters and white space allowed"; 
     }
   }

if (empty($_POST["country"])) {
     $countryerr = " Country  required";
   } else {
     $country = test_input($_POST["country"]);
     // check state contains only letters and white spaces
     if (!preg_match("/^[a-zA-Z ]*$/",$country)) {
       $countryerr = "Only letters and white space allowed"; 
     }
   }

if (empty($_POST["pincode"])) {
     $pcodeerr="Pincode required";
   }
   else {
   $pincode=test_input($_POST["pincode"]);
   if(strlen($pincode)!=6)
   $pcodeerr="Pincode must contain 6 digits";
     if (!preg_match("/^[0-9 ]*$/",$pincode)) {
       $pcodeerr = "Only numerics are allowed"; 
     }
   }



 if (empty($_POST["email"])) {
     $emailerr = "Email required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailerr = "Invalid email format"; 
     }
   }



 
if (empty($_POST["username"])) {
     $usererr = "Username required";
   } else {
     $username = test_input($_POST["username"]);
	
   }

if (empty($_POST["password"])) {
     $passerr = "Password required";
   } else {
     $password = test_input($_POST["password"]);
	 $mobileno=test_input($_POST['mobileno']);
	 if (!preg_match("/^[a-zA-Z0-9 ]*$/",$password)) {
       $passerr = "Only letters and white space allowed"; 
     
   }}

if (empty($_POST["repassword"])) {
     $repasserr = "Re-enter password";
   } else {
   $password = test_input($_POST["password"]);
     $repassword = test_input($_POST["repassword"]);
	if((strcmp($password,$repassword))!=0)
	{$repasserr="Password doesn't match";
	}
   }

   if($nameerr =="" && $collegeerr ==""&& $adderr =="" && $cityerr=="" && $stateerr=="" && $countryerr=="" && $pcodeerr==""  && $gendererr=="" && $emailerr=="" && $usererr=="" && $passerr=="" && $repasserr=="")
	{
	$con=mysqli_connect('localhost','root','');
if(!$con)
{
	die('could not connect'.mysqli_connect_error());
}
else
{	
	$compid=5;
	$submit="yes";
	mysqli_select_db($con,"eureka");
	 $password = test_input($_POST["password"]);
	$username = test_input($_POST["username"]);
	$sql="insert into rampwalk (name,gender,email,mobileno,college,address,city,state,country,pincode,username,password) values('$name','$gender','$email','$mobileno','$college','$address','$city','$state','$country','$pincode','$username','$password')";
	mysqli_query($con,$sql);
	$sql1="insert into checklogin(username,password,compid) values('$username','$password','$compid')";
	mysqli_query($con,$sql1);

}
$name = $college =$email =$mobileno=$gender= $address = $city =$state=$country=$pincode=$username=$password=$repassword= "";

}   
if($submit=="yes")
{ echo '<script type="text/javascript">alert("Your Form has been submitted")</script>';

} 
else
{  
echo '<script type="text/javascript"> alert("Please check that every field is correct")</script>';
}
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


?>


<?php include("eurmenu.php"); ?> 

					<img src="images/rampwalk.png" style="margin-top:50px; border-top:50px solid #663366; border-bottom:50px solid #663366; width:1350px;">
				
					<div class="heading1">
					About The Event </div>
					<div class="para1">
					Personality begins where comparison ends but with cut throat competition in EUREKA 2015 for Mister and Miss EUREKA, we believe that comparison is never going to end. The walk, the style, the language, the attire and the X FACTOR is what gets you on stage and brings the title. 

					<br> <div style="color:#663366 ;font-style:bold;font-size:34;">Register and be part of one of the most awaited events of EUREKA 2015.
</div>
					</div>
					<div style="background-color:white;">
					<div class="cord">
					Event Coordinators 
					</div>
					<div class="para2">
					Shruti Mishra ( 9872500199 )<br>
					Vasu Gupta    ( 8526670896 )
					
					</div>
					<div class="container1" style="background-image:url(images//stone5.jpg);">
					<div class="container2" > 
					<div class="register">
						Register Here </div>
						<div class="queform">
						<p><span class="error">* required field.</span></p>
								<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

						     Name      <input type="text" name="name" maxlength="30" value="<?php echo $name;?>" style="width:300px; height:35px;margin-left:200px;">
								<span class="error">* <?php echo $nameerr;?></span> <br>
								<br>

								College     <input type="text" name="college" maxlength="50" value="<?php echo $college;?>" style="width:300px; height:35px; margin-left:180px" >
								<span class="error">* <?php echo $collegeerr;?></span> <br>
								<br>

                                 Gender  <br> <div style="padding-left:250px;">
												<INPUT TYPE= "RADIO"  Name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male" >Male <br>
												<INPUT TYPE= "RADIO"  Name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female" >Female
												<span class="error">* <?php echo $gendererr;?></span></div>    <br>                
								Email-id    <input type="text" name="email"  value="<?php echo $email; ?>" style="width:300px; height:35px; margin-left:175px;"> 
								<span class="error">* <?php echo $emailerr;?></span>
								<br> <br>
															Mobile No.(optional)<input type="text" name="mobileno" style="width:300px; height:35px; margin-left:50px;" >
								<br><br>
								
                                                      Address     <input type="text" name="address" maxlength="120" value="<?php echo $address;?>"  style="width:400px; height:35px; margin-left:180px">
								<span class="error">* <?php echo $adderr;?></span> <br>
								<br>

								   City     <input type="text" name="city" maxlength="20" value="<?php echo $city;?>" style="width:200px; height:35px;margin-left:220px">
								<span class="error">* <?php echo $cityerr;?></span>
								<br> <br>

								State       <input type="text" name="state" maxlength="20" value="<?php echo $state;?>" style="width:200px; height:35px; margin-left:210px">
								<span class="error">* <?php echo $stateerr;?></span>
								<br> <br>

								Country   <input type="text" name="country" maxlength="20" value="<?php echo $country;?>"  style="width:200px; height:35px; margin-left:180px">
								<span class="error">* <?php echo $countryerr;?></span>
								<br> <br>

								Pincode   <input type="text" name="pincode" maxlength="6" value="<?php echo $pincode;?>"  style="width:200px; height:35px;margin-left:180px">
								<span class="error">* <?php echo $pcodeerr;?></span>
								<br><br>

								
								<br>

								Username <input TYPE="TEXT" name="username"  MAXLENGTH="20" value="<?php echo $username;?>"  style="width:300px; height:35px;  margin-left:160px;"> 
								<span class="error">* <?php echo $usererr;?></span> <br>  <br>
								Password <input type="password" name="password" value="<?php echo $password;?>"    style="width:300px; height:35px;  margin-left:165px;" > 
                                <span class="error">* <?php echo $passerr;?></span> <br>  <br>  
								Re-enter Password <INPUT TYPE="PASSWORD" NAME="repassword"   value="<?php echo $repassword;?>"   style="width:300px; height:35px;  margin-left:70px;"> 
                                <span class="error">* <?php echo $repasserr;?></span> <br>  <br>
							
								<input type="submit" name="s1" value="Submit" class="button1">	
								<input type="reset" name="r1" value="Reset" class="button1">
								</div>
							</form>
						</div>
					
					
					</div>
					</div>
					</body>
</html>
