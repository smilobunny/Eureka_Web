<html>
<head>
<title> INVICTUS </title>
<link type="text/css" rel="stylesheet" href="css/exform4.css">
<style>
.error {color: #FF0000;}


</style>
</head>
<body  style="padding:100px; margin:50px; background-color:#ffffcc;">
<head style="padding:100px; margin:50px; background-color:#ffffcc;">
<?php
// define variables and set to empty values
$nameerr = $collegeerr = $adderr = $cityerr=$stateerr=$countryerr=$pcodeerr=$emailerr=$usererr=$passerr=$repasserr="";
$teamname = $college =$address =$submit= $city =$state=$country=$pincode=$email=$mobileno=$username=$password=$repassword ="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (empty($_POST["teamname"])) {
     $nameerr = "Teamname is required";
   } else {
     $teamname = test_input($_POST["teamname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$teamname)) {
       $nameerr = "Only letters and white space allowed"; 
     }
   }
   
   
if (empty($_POST["college"])) {
     $collegeerr = "College name is required";
   } else {
     $college = test_input($_POST["college"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$college)) {
       $collegeerr = "Only letters and white space allowed"; 
     }
   }

if (empty($_POST["address"])) {
     $adderr = "Address is required";
   } else {
     $address = test_input($_POST["address"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z0-9 ]*$/",$address)) {
       $adderr = "Only letters and white space allowed"; 
     }
   }
if (empty($_POST["city"])) {
     $cityerr = " City is required";
   } else {
     $city = test_input($_POST["city"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
       $cityerr = "Only letters and white space allowed"; 
     }
   }

if (empty($_POST["state"])) {
     $stateerr = " State is required";
   } else {
     $state = test_input($_POST["state"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$state)) {
       $stateerr = "Only letters and white space allowed"; 
     }
   }

if (empty($_POST["country"])) {
     $countryerr = " Country is required";
   } else {
     $country = test_input($_POST["country"]);
     // check if name only contains letters and whitespace
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
     $emailerr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailerr = "Invalid email format"; 
     }
   }



 
if (empty($_POST["username"])) {
     $usererr = "Username is required";
   } else {
     $username = test_input($_POST["username"]);
	
   }

if (empty($_POST["password"])) {
     $passerr = "Password is required";
   } else {
     $password = test_input($_POST["password"]);
	 $mobileno=test_input($_POST['mobileno']);
	 if (!preg_match("/^[a-zA-Z0-9 ]*$/",$password)) {
       $passerr = "Only letters and white space allowed"; 
     
   }}

if (empty($_POST["repassword"])) {
     $repasserr = "Re entered password is required";
   } else {
   $password = test_input($_POST["password"]);
     $repassword = test_input($_POST["repassword"]);
	if((strcmp($password,$repassword))!=0)
	{$repasserr="Password doesn't match";
	}
   }

   if($nameerr =="" && $collegeerr ==""&& $adderr =="" && $cityerr=="" && $stateerr=="" && $countryerr=="" && $pcodeerr=="" && $emailerr=="" && $usererr=="" && $passerr=="" && $repasserr=="")
	{
	$con=mysqli_connect('localhost','root','');
if(!$con)
{
	die('could not connect'.mysqli_connect_error());
}
else
{	$mobileno=test_input($_POST['mobileno']);
	$compid=8;
	$submit="yes";
	
	mysqli_select_db($con,"eureka");
	 
	$sql="insert into invictus  (teamname,email,mobileno,college,address,city,state,country,pincode,username,password) values('$teamname','$email','$mobileno','$college','$address','$city','$state','$country','$pincode','$username','$password')";
	mysqli_query($con,$sql);
	$sql1="insert into checklogin(username,password,compid) values('$username','$password','$compid')";
	mysqli_query($con,$sql1);
	
}
$teamname = $college =$email =$mobileno= $address = $city =$state=$country=$pincode=$username=$password=$repassword= "";

}
if($submit=="yes")



<?php include("eurmenu.php"); ?> 

					<img src="images/invictus.png" style="margin-top:50px; border-top:50px solid #993333; border-bottom:50px solid #993333; width:1350px;">
				
					<div class="heading1">
					About The Event </div> <font-style:bold;font-size:17;">
					<div class="para1">
					It gives soul to the universe, wings to the mind, flight to the imagination, and charm and gaiety to life and to everything. Are you a part of your college band? Do you think you can make the crowd sway to YOUR music? Bands Wars is a competition in which two or more bands compete for the title of "best band"
					<br> <div style="color:9999FF ;font-style:bold;font-size:35;"> 
					The winner is the one from whom the audience couldn’t stop demanding an ‘encore’. So, what are you waiting for? 
                                                                 <br>Register before our slots are taken!</div> </div>
</br>
					<div style="background-color:FFFFCC;">

					<div class="cord">
					Event Coordinators 
					</div>
					<div class="para2">
					Shruti Mishra   ( 9877766551 )<br>
					Isha Garg     ( 9823456678 )
					
					</div>
					<div class="container1" style="background-image:url(images//redstone2.jpg);">

		
					
			
                                                                                                                              	<div class="container2" >
													<div class="register">
						Register Here </div>
					<div class="queform">
						<p><span class="error">* required field.</span></p>


		

		<link rel="stylesheet" href="css/page-style.css"> 

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> 

						                            Name      <input type="text" name="teamname" maxlength="30" value="Enter Your Teamname" style="width:300px; height:35px;margin-left:205px;">
								<span class="error">* <?php echo $nameerr;?></span> <br>
								<br>

								College     <input type="text" name="college" maxlength="50" value="Enter your  college Name" style="width:300px; height:35px; margin-left:200px" >
								<span class="error">* <?php echo $collegeerr;?></span> <br>
								<br>

                                           
								Email-id    <input type="text" name="email"  value="Enter Your Email-Id" style="width:300px; height:35px; margin-left:175px;"> 
								<span class="error">* <?php echo $emailerr;?></span>
								<br> <br>
								Mobile No.(optional) <input type="number" name="mobileno"  maxlength="10" value ="Enter your 10 Digit Mobile No."style="width:300px; height:35px; margin-left:100px;" >
								<br><br>
								
                                                                                                                Address     <input type="text" name="address" maxlength="120" value="Enter Your Address"  style="width:400px; height:35px; margin-left:180px">
								<span class="error">* <?php echo $adderr;?></span> <br>
								<br>

								  City     <input type="text" name="city" maxlength="20" value="Enter Your City Name" style="width:200px; height:35px;margin-left:220px">
								<span class="error">* <?php echo $cityerr;?></span>
								<br> <br>

								State       <input type="text" name="state" maxlength="20" value="Enter Your State" style="width:200px; height:35px; margin-left:210px">
								<span class="error">* <?php echo $stateerr;?></span>
								<br> <br>

								Country   <input type="text" name="country" maxlength="20" value="Country Name"  style="width:200px; height:35px; margin-left:180px">
								<span class="error">* <?php echo $countryerr;?></span>
								<br> <br>

								Pincode   <input type="text" name="pincode" maxlength="6" value="Enter Your Pincode"  style="width:200px; height:35px;margin-left:180px">
								<span class="error">* <?php echo $pcodeerr;?></span>
								<br><br>

								
								<br>

								Username <input TYPE="TEXT" name="username"  MAXLENGTH="20" value="Enter Your UserName"  style="width:300px; height:35px;  margin-left:160px;"> 
								<span class="error">* <?php echo $usererr;?></span> <br>  <br>
								Password <input type="password" name="password" value="<?php echo $password;?>"    style="width:300px; height:35px;  margin-left:165px;" > 
                                <span class="error">* <?php echo $passerr;?></span> <br>  <br>  
								Re-enter Password <INPUT TYPE="PASSWORD" NAME="repassword"   value="Enter Your Password"   style="width:300px; height:35px;  margin-left:70px;"> 
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


