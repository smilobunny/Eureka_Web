<html>

<head>
<title>
	  Rampwalk Form Details
</title>
<link type="text/css" rel="stylesheet" href="css/exform2.css">
<link type="text/css" rel="stylesheet" href="css/editingform.css">
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
$nameerr = $collegeerr = $adderr = $cityerr =$gendererr=$stateerr=$countryerr=$pcodeerr=$emailerr=$usererr=$passerr=$repasserr="";
$name = $college = $gender=$address = $city =$state=$country=$pincode=$submit=$email=$mobileno=$username=$password=$repassword ="";

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
	$sql="Select * from cloudcomputing where username='$loginname'";
	
	$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);

	if($count==1)
	{
	$name=$row["name"];
	$college=$row["college"];
	$gender=$row['gender'];
					$male="";
					$female="";
					if($gender=="male")
					{
						$male="checked";
					}
					elseif($gender=="female")
					{
						$female="checked";
					}
	$email=$row["email"];
	$city=$row["city"];
	$country=$row["country"];
	$state=$row["state"];
	$pincode=$row["pincode"];
	$username=$row["username"];
	$mobileno=$row["mobileno"];
	$password=$row["password"];
	$address=$row["address"];
	}
	}
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
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$college)) {
       $collegeerr = "Only letters and white space allowed"; 
     }
   }

if (empty($_POST["address"])) {
     $adderr = "Address required";
   } else {
     $address = test_input($_POST["address"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z0-9 ]*$/",$address)) {
       $adderr = "Only letters and white space allowed"; 
     }
   }
if (empty($_POST["city"])) {
     $cityerr = " City required";
   } else {
     $city = test_input($_POST["city"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
       $cityerr = "Only letters and white space allowed"; 
     }
   }

if (empty($_POST["state"])) {
     $stateerr = " State required";
   } else {
     $state = test_input($_POST["state"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$state)) {
       $stateerr = "Only letters and white space allowed"; 
     }
   }

if (empty($_POST["country"])) {
     $countryerr = " Country  required";
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
     $emailerr = "Email required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailerr = "Invalid email format"; 
     }
   }


if (empty($_POST["password"])) {
     $passerr = "Password required";
   } else {
     $password = test_input($_POST["password"]);
	 
	 if (!preg_match("/^[a-zA-Z0-9 ]*$/",$password)) {
       $passerr = "Only letters and white space allowed"; 
     
   }}
   
   if($nameerr =="" && $collegeerr ==""&& $adderr =="" && $cityerr=="" && $stateerr=="" && $countryerr=="" && $pcodeerr==""  && $gendererr=="" && $emailerr==""  && $passerr=="" && $repasserr=="")
	{
	$con=mysqli_connect('localhost','root','');
if(!$con)
{
	die('could not connect'.mysqli_connect_error());
}
else
{	
	
	mysqli_select_db($con,"eureka");
	 $password = test_input($_POST["password"]);
	 $mobileno=test_input($_POST["mobileno"]);
	$sql="update cloudcomputing set name='$name' ,college='$college',city='$city',state='$state',country='$country',pincode='$pincode',address='$address',email='$email' ,gender='$gender' ,mobileno='$mobileno',password='$password' where username='$loginname'";
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
															Mobile No.(optional)<input type="number" name="mobileno"  value="<?php echo $mobileno;?>"  style="width:300px; height:35px; margin-left:50px;" >
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

								Username <input TYPE="TEXT" name="username"  MAXLENGTH="20" value="<?php echo $username;?>" style="width:300px; height:35px;  margin-left:160px;" disabled> 
								<span class="error">* <?php echo $usererr;?></span> <br>  <br>
								Password <input type="password" name="password" value="<?php echo $password;?>"    style="width:300px; height:35px;  margin-left:165px;" > 
                                <span class="error">* <?php echo $passerr;?></span> <br>  <br>  
								<input type="submit" name="s1" value="Update Details" class="button1">	
								<input type="button" value="Save Details" onclick="myFunction1()" class="button1"> 
								</div>
							</form>
						</div>
					</div>
				
								
						</body>
						</html>