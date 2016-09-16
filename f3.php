
<html>

<body  style="padding:0px; margin:0px; background-color:#ffffcc;">


<?php
// define variables and set to empty values
$nameerr = $collegeerr = $adderr = $cityerr =$stateerr=$countryerr=$pcodeerr=$emailerr=$usererr=$passerr=$repasserr="";
$name = $college = $gender=$address = $city =$state=$country=$pincode=$email=$mobileno=$username=$password=$repassword ="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (empty($_POST["name"])) {
     $nameerr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameerr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["gender"])) {
     $gendererr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
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
	 if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
       $usererr = "Only letters and white space allowed"; 
     
   }

if (empty($_POST["password"])) {
     $passerr = "Password is required";
   } else {
     $password = test_input($_POST["password"]);
	 $mobileno=test_input($_POST['mobileno']);
	 if (!preg_match("/^[a-zA-Z0-9 ]*$/",$password)) {
       $passerr = "Only letters and white space allowed"; 
     
   }

if (empty($_POST["repassword"])) {
     $repassword = "Re entered password is required";
   } else {
     $repassword = test_input($_POST["repassword"]);
if(!strcmp($password,$repassword))	
 { $repasserr = "Invalid password"; }
   }

   if($nameerr =="" && $collegeerr ==""&& $adderr =="" && $cityerr=="" && $stateerr=="" && $countryerr=="" && $pcodeerr==""  && $gendererr=="" && $emailerr=="" && $usererr=="" && $passerr=="" && $repasserr=="")
	{
	$con=mysqli_connect('localhost','root','');
if(!$con)
{
	die('could not connect'.mysqli_connect_error());
}
else
{	$mobileno=test_input($_POST['mobileno']);
	
	mysqli_select_db($con,"eureka");
	 
	$sql="insert into rampwalk (name,gender,emailid,mobileno,address,city,state,country,pincode,username,password) values('$name','$gender','$email','$mobileno','$address','$city','$state','$country','$pincode','$username','$password')";
	mysqli_query($con,$sql);
	
}
$name = $college =$email =$mobileno=$gender= $address = $city =$state=$country=$pincode=$username=$password=$repassword= "";

}   

}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>



<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

						     Name      <input type="text" name="name" maxlength="30" value="<?php echo $name;?>" style="width:300px; height:35px;margin-left:85px;">
								<span class="error">* <?php echo $nameerr;?></span> <br>
								<br>

								College     <input type="text" name="college" maxlength="50" value="<?php echo $college;?>" style="width:300px; height:35px; margin-left:95px" >
								<span class="error">* <?php echo $collegeerr;?></span> <br>
								<br>

                                 Gender  <br> <div style="padding-left:210px;">
												<INPUT TYPE= "RADIO"  Name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male" >Male <br>
												<INPUT TYPE= "RADIO"  Name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female" >Female
												<span class="error">* <?php echo $gendererr;?></span></div>                    
								Email-id    <input type="text" name="email"  value="<?php echo $email; ?>" style="width:300px; height:35px; margin-left:85px;"> 
								<span class="error">* <?php echo $emailerr;?></span>
								<br> <br>
															Mobile No.(optional)<input type="number" name="mobileno" style="width:300px; height:35px; margin-left:10px;" >
								<br><br>
								
                                                      Address     <input type="text" name="address" maxlength="120" value="<?php echo $address;?>"  style="width:400px; height:35px; margin-left:90px">
								<span class="error">* <?php echo $adderr;?></span> <br>
								<br>

								   City     <input type="text" name="city" maxlength="20" value="<?php echo $city;?>" style="width:200px; height:35px;margin-left:115px">
								<span class="error">* <?php echo $cityerr;?></span>
								<br> <br>

								State       <input type="text" name="state" maxlength="20" value="<?php echo $state;?>" style="width:200px; height:35px; margin-left:110px">
								<span class="error">* <?php echo $stateerr;?></span>
								<br> <br>

								Country   <input type="text" name="country" maxlength="20" value="<?php echo $country;?>"  style="width:200px; height:35px; margin-left:90px">
								<span class="error">* <?php echo $countryerr;?></span>
								<br> <br>

								Pincode   <input type="text" name="pincode" maxlength="6" value="<?php echo $pincode;?>"  style="width:200px; height:35px;margin-left:90px">
								<span class="error">* <?php echo $pcodeerr;?></span>
								<br><br>

								
								<br>

								Username <input TYPE="TEXT" name="username"  MAXLENGTH="20" value="<?php echo $username;?>"  style="width:300px; height:35px;  margin-left:75px;"> 
								<span class="error">* <?php echo $usererr;?></span> <br>  <br>
								Password <input type="password" name="password"   value="<?php echo $password;?>"    style="width:300px; height:35px;  margin-left:80px;" > 
                                <span class="error">* <?php echo $passerr;?></span> <br>  <br>  
								Re-enter Password <INPUT TYPE="PASSWORD" NAME="repassword"   value="<?php echo $repassword;?>"   style="width:300px; height:35px;  margin-left:20px;"> 
                                <span class="error">* <?php echo $repasserr;?></span> <br>  <br>
						
								<input type="submit" name="s1" value="Submit" class="button1">	
								<input type="reset" name="r1" value="Reset" class="button1">
						