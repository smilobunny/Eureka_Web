<html>
<head>
<title> GeekQuiz Form</title>
<link type="text/css" rel="stylesheet" href="css/exform3.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body  style="padding:0px; margin:0px; background-color:#ffffcc;">

<?php
// define variables and set to empty values
$teamerr = $collegeerr = $adderr = $cityerr =$stateerr=$countryerr=$pcodeerr=$mfnameerr=$gendererr=$emailerr=$msnameerr=$ggendererr=$eemailerr =$usererr="";
$teamname = $college = $address = $city =$state=$country=$pincode=$mem1name=$mem1gen=$mem2name=$mem2gen=$username=$password= "";
$mem1email=$mem2email="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (empty($_POST["teamname"])) {
     $teamerr = "Team name is required";
   } else {
     $teamname = test_input($_POST["teamname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$teamname)) {
       $teamerr = "Only letters and white space allowed"; 
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

if (empty($_POST["pincode"]) && (strlen($_POST["pincode"])!=6) {
     $pcodeerr="Pincode must contain 6 digits";
   }
   else {
   $pincode=test_input($_POST["pincode"]);
     if (!preg_match("/^[0-9 ]*$/",$pincode)) {
       $pcodeerr = "Only numerics are allowed"; 
     }
   }


if (empty($_POST["mem1name"])) {
     $mfnameerr = "Name is required";
   } else {
     $mem1name = test_input($_POST["mem1name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$mem1name)) {
       $mfnameerr = "Only letters and white space allowed"; 
     }
   }
    

if (empty($_POST["mem1gen"])) {
     $genderErr = "Gender is required";
   } else {
     $mem1gen = test_input($_POST["mem1gen"]);
   }

 if (empty($_POST["mem1email"])) {
     $emailErr = "Email is required";
   } else {
     $mem1email = test_input($_POST["mem1email"]);
     // check if e-mail address is well-formed
     if (!filter_var($mem1email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }

 if (empty($_POST["mem2name"])) {
     $msnameerr = "Name is required";
   } else {
     $mem2name = test_input($_POST["mem2name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$mem2name)) {
       $msnameerr = "Only letters and white space allowed"; 
     }
   }
    

if (empty($_POST["mem2gen"])) {
     $ggenderErr = "Gender is required";
   } else {
     $mem2gen = test_input($_POST["mem2gen"]);
   }


  if (empty($_POST["mem2email"])) {
     
     $mem2email = test_input($_POST["mem2email"]);
     // check if e-mail address is well-formed
     if (!filter_var($mem2email, FILTER_VALIDATE_EMAIL)) {
       $eemailErr = "Invalid email format"; 
     
   }
}

if (empty($_POST["username"])) {
     $usererr = "Username is required";
   } else {
     $username = test_input($_POST["username"]);
   }
    if($teamerr =="" && $collegeerr ==""&& $adderr =="" && $cityerr=="" &&$stateerr=="")
	{
	$con=mysqli_connect('localhost','root','');
if(!$con)
{
	die('could not connect'.mysqli_connect_error());
}
else
{
	mysqli_select_db($con,"eureka");
	 
	$sql="insert into geekquiz (teamname,college,address,city,state,country,pincode,mem1name,mem1gen,mem1email,mem1mobile) values('$teamname','$college','$address','$city','$state','$country','$pincode')";
	mysqli_query($con,$sql);
	
}
$teamname = $college = $address = $city =$state=$country=$pincode=$mem1name=$mem1gen=$mem2name=$mem2gen=$username=$password= "";
$mem1email=$mem2email="";
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
					<div style="background-color:#6666cc; margin-top:100px;height:50px;"> </div>
					<img src="images/geek.png" style=" border-top:30px solid #ccccff; border-bottom:50px solid #6699cc; width:1350px;">
				
					<div class="heading1">
					About The Event </div>
					<div class="para1">
					Growing up with bourn vita’s quiz to  Kaun Banega Crorepati,We at EUREKA  2015 brings to you the quizzing event which will leave you enthralled.

					<br> <div style="color:#6699cc ;font-style:bold;font-size:34;">Sports, sciences, history and a complete aptitude of anything and everything, this event promises to find the finest of readers across. Register Now!
</div>
					</div>
					<div style="background-color:white;">
					<div class="cord">
					Event Coordinators 
					</div>
					<div class="para2">
					Rajat Soni   ( 8823445678 ) <br>
					Shivang Jain ( 9815650876 )
					
					</div>
					<div class="container1" style="background-image:url(images//stone6.png);">
					<div class="container2" >
						
						<div class="register">
						Register Here </div>
						<div class="queform">
						<p><span class="error">* required field.</span></p>
								<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

						     Team name      <input type="text" name="teamname" maxlength="30" value="<?php echo $teamname;?>" style="width:300px; height:35px;margin-left:40px;">
								<span class="error">* <?php echo $teamerr;?></span> <br>
								<br>

								College     <input type="text" name="college" maxlength="50" value="<?php echo $college;?>" style="width:300px; height:35px; margin-left:80px" >
								<span class="error">* <?php echo $collegeerr;?></span> <br>
								<br>

								Address     <input type="text" name="address" maxlength="120" value="<?php echo $address;?>"  style="width:400px; height:35px; margin-left:75px">
								<span class="error">* <?php echo $adderr;?></span> <br>
								<br>

								   City     <input type="text" name="city" maxlength="20" value="<?php echo $city;?>" style="width:200px; height:35px;margin-left:115px">
								<span class="error">* <?php echo $cityerr;?></span>
								<br> <br>

								State       <input type="text" name="state" maxlength="20" value="<?php echo $state;?>" style="width:200px; height:35px; margin-left:110px">
								<span class="error">* <?php echo $stateerr;?></span>
								<br> <br>

								Country   <input type="text" name="country" maxlength="20" value="<?php echo $country;?>"  style="width:200px; height:35px; margin-left:80px">
								<span class="error">* <?php echo $countryerr;?></span>
								<br> <br>

								Pincode   <input type="text" name="pincode" maxlength="6" value="<?php echo $pincode;?>"  style="width:200px; height:35px;margin-left:80px">
								<span class="error">* <?php echo $pcodeerr;?></span>
								<br><br>

								<h3 style>Team Members</h3>
								
									<div style="background-color:#ccffff; padding-left:20px;padding-top:10px;margin-bottom:30px;margin-right:40px;">
								<h3 style="font-size:28;"> Member 1</h3>
								<div style="margin-left:20px;">
								Name  <input type="text" name="mem1name" maxlength="20" value="<?php echo $mem1name;?>" style="width:300px; height:35px;  margin-left:150px;">
								<span class="error">* <?php echo $mfnameerr;?></span>
								<br>

												Gender  <br> <div style="padding-left:210px;">
												<INPUT TYPE= "RADIO"  Name="mem1gen" <?php if (isset($mem1gen) && $mem1gen=="male") echo "checked";?>  value="male" >Male <br>
												<INPUT TYPE= "RADIO"  Name="mem1gen" <?php if (isset($mem1gen) && $mem1gen=="female") echo "checked";?>  value="female" >Female
												<span class="error">* <?php echo $gendererr;?></span></div>
								<br>

								Email-id    <input type="text" name="mem1email"  value="<?php echo $mem1email; ?>" style="width:300px; height:35px; margin-left:130px;"> 
								<span class="error">* <?php echo $emailerr;?></span>
								<br> <br>
								Mobile No.(optional)   <input type="number" name="mem1phone" style="width:300px; height:35px;" >
								<br><br>
								<h3 style="font-size:28;">Member 2</h3>
								Name  <input type="text" name="mem2name" maxlength="20" value="<?php echo $mem2name;?>" style="width:300px; height:35px; margin-left:155px;">
								<span class="error">* <?php echo $msnameerr;?></span>
								<br>   

								 Gender <br>  
								 <div style="padding-left:210px;"> 
																				<INPUT TYPE= "RADIO"  name="mem2gen" <?php if (isset($mem2gen) && $mem2gen=="male") echo "checked";?>  value="male" >Male <br>
																				<input type= "radio"  name="mem2gen" <?php if (isset($mem2gen) && $mem2gen=="female") echo "checked";?>  value="female" >Female
								<span class="error">* <?php echo $ggendererr;?></span> </div>
								<br>  

								Email-id<input type="text" name="mem2email"  value="<?php echo $mem2email; ?>" style="width:300px; height:35px;  margin-left:135px;"> 
								<span class="error">* <?php echo $eemailerr;?></span>
								<br><br>
							Mobile No.(optional)<input type="number" name="mem2phone" style="width:300px; height:35px; margin-left:5px;" >
								<br><br>
								</div>
								</div>
								<div style="margin-top:30px;">
								Username <input TYPE="TEXT" name="username"  MAXLENGTH="20" value="<?php echo $username;?>"  style="width:300px; height:35px;  margin-left:125px;"> 
								<span class="error">* <?php echo $usererr;?></span> <br>  <br>
								Password <input type="password" name="password"   value=""    style="width:300px; height:35px;  margin-left:130px;" > <br>  <br>

								Re-enter Password <INPUT TYPE="PASSWORD" NAME="rpassword"   value=""   style="width:300px; height:35px;  margin-left:40px;"> <br> <br>
</div>
								<input type="submit" name="s1" value="Submit" class="button1">
								
								<input type="reset" name="r1" value="Reset" class="button1">
							
						</div>
					</div>
					</div>
					
</body>
</html>


