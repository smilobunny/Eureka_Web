<html>
<head>
<title> Dance Transmit</title>
<link type="text/css" rel="stylesheet" href="css/exform2.css">
<link type="text/css" rel="stylesheet" href="css/editingform1.css">
<style>
.error {color: #FF0000;}
</style>
<script>
function myFunction1()
{
document.location.href="frontPage.php";
}
</script>
</head>
<body  style="padding:0px; margin:0px; background-color:#ffffcc;">
<?php
session_start();
$teamerr = $collegeerr = $adderr = $cityerr =$stateerr=$countryerr=$pcodeerr=$mfnameerr=$gendererr=$emailerr=$msnameerr=$ggendererr=$eemailerr =$usererr=$repasserr=$passerr="";
$teamname = $college = $address = $city =$state=$country=$pincode=$submit=$mem1name=$mem1gen=$mem2name=$mem2gen=$username=$password=$repassword=$mem1phone=$mem2phone= "";
$mem1email=$mem2email="";
if(isset($_SESSION)){
$loginname=$_SESSION['username'];}

$con=mysqli_connect('localhost','root','');
if(!$con)
{
	die('could not connect'.mysqli_connect_error());
}
else
{	
	mysqli_select_db($con,"eureka");
	$sql="Select * from geekquiz where username='$loginname'";
	
	$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);

	if($count==1)
	{
	$teamname=$row["teamname"];
	$college=$row["college"];
	$city=$row["city"];
	$country=$row["country"];
	$state=$row["state"];
	$pincode=$row["pincode"];
	$username=$row["username"];
	
	$password=$row["password"];
	$address=$row["address"];
	$mem1name=$row["mem1name"];
	$mem1email=$row["mem1email"];
	$mem1phone=$row["mem1phone"];
	$mem1gen=$row["mem1gen"];
	$mem2name=$row["mem2name"];
	$mem2email=$row["mem2email"];
	$mem2phone=$row["mem2phone"];
	$mem2gen=$row["mem2gen"];
	}
	}
	
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
     $gendererr = "Gender is required";
   } else {
     $mem1gen = test_input($_POST["mem1gen"]);
   }

 if (empty($_POST["mem1email"])) {
     $emailerr = "Email is required";
   } else {
     $mem1email = test_input($_POST["mem1email"]);
     // check if e-mail address is well-formed
     if (!filter_var($mem1email, FILTER_VALIDATE_EMAIL)) {
       $emailerr = "Invalid email format"; 
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
     $ggendererr = "Gender is required";
   } else {
     $mem2gen = test_input($_POST["mem2gen"]);
   }


  if (empty($_POST["mem2email"])) {
			 $eemailerr="Email is required";}
	 else
	 {
			 $mem2email = test_input($_POST["mem2email"]);
			 
			 if (!filter_var($mem2email, FILTER_VALIDATE_EMAIL))   //if condition to check for valid email format 
			 {
			   $eemailerr = "Invalid email format"; 
			 
		   }
   }
   
   

   
   if (empty($_POST["password"])) {
     $passerr = "Password required";
   } else {
     $password = test_input($_POST["password"]);
	 $mem1phone=test_input($_POST['mem1phone']);
	 $mem2phone=test_input($_POST['mem2phone']);
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

 if($teamerr =="" && $collegeerr ==""&& $adderr =="" && $cityerr=="" && $stateerr=="" && $countryerr=="" && $pcodeerr=="" && $mfnameerr=="" && $gendererr=="" && $emailerr=="" && $msnameerr=="" && $ggendererr=="" && $eemailerr=="" && $usererr=="" && $repasserr=="" && $passerr=="")
	{
	$con=mysqli_connect('localhost','root','');
if(!$con)
{
	die('could not connect'.mysqli_connect_error());
}
else
{	mysqli_select_db($con,"eureka");
$sql="update dramainvictus set teamname='$teamname' ,college='$college',city='$city',state='$state',country='$country',pincode='$pincode',address='$address',mem1name='$mem1name',mem1gen='$mem1gen,mem1email='$mem1email' ,mem1phone='$mem1phone',mem2name='$mem2name',mem2gen='$mem2gen,mem2email='$mem2email' ,mem2phone='$mem2phone',password='$password' where username='$loginname'";
	mysqli_query($con,$sql);
	
	 
}

}   

}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
include("login.php");
?>
<div class="container3" style="background-image:url(images//red.jpg);">
					<div class="container4" > 
<div class="viewdetails">
						View your Registration Details </div>
						
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
								
									<div style="background-color:#ff9999; padding-left:20px;padding-top:10px;margin-bottom:30px;margin-right:40px;color:#ffcccc;">
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
								Mobile No.(optional)   <input type="number" name="mem1phone" style="width:300px; height:35px;" value="<?php echo $mem1phone;?>" >
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
							Mobile No.(optional)<input type="number" name="mem2phone" style="width:300px; height:35px; margin-left:5px;" value="<?php echo $mem2phone;?>" >
								<br><br>
								</div>
								</div>
								<div style="margin-top:30px;">
								Username <input TYPE="TEXT" name="username"  MAXLENGTH="20" value="<?php echo $username;?>" disabled  style="width:300px; height:35px;  margin-left:125px;"> 
								<span class="error">* <?php echo $usererr;?></span> <br>  <br>
								Password <input type="password" name="password"   value="<?php echo $password;?>"    style="width:300px; height:35px;  margin-left:130px;" > 
								<span class="error">* <?php echo $passerr;?> </span> <br>  <br>
								<input type="submit" name="s1" value="Update Details" class="button1">	
								<input type="button" name="r1" value="Save Details" class="button1" onclick="myFunction1()">
								</form>
</div>
								
							
						</div>
					</div>
					</div>
					
</body>
</html>

